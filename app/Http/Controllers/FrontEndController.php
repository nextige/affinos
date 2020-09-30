<?php

namespace App\Http\Controllers;
use App\Recurrance;
use App\Package;
use App\State;
use App\Region;
use App\User;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Order;
use App\OrderAccountDetail;
use App\OrderAddon;
use App\OrderBillingAddress;
use App\OrderShippingAddress;
use App\PackageAddonPrice;
use Exception;
use Mail;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home');
    }

    public function features() {
        return view('frontend.features');
    }

    public function pricing() {
        $recurrances = Recurrance::all();
        return view('frontend.pricing', compact('recurrances'));
    }

    public function customers() {
        return view('frontend.customers');
    }

    public function why() {
        return view('frontend.why');
    }

    public function checkout($id) {
        $selectedPackage = Package::find($id);
        $recurrances = Recurrance::all();
        $regions = Region::all();
        $states = State::all();
        return view('frontend.checkout', compact('selectedPackage', 'regions', 'states', 'recurrances'));
    }

    public function verifyEmail(Request $request) {
        $user = User::where("email", "=", $request->email)->first();
        if ($user) {
            $response = array(
                "status" => "success",
                "userId" => $user->id
            );
        } else {
            $response = array(
                "status" => "failed",
            );
        }
        return json_encode($response);
    }

    public function continueCheckOut(Request $request) {
        $package = Package::find($request->packageId);
        $recurrance = Recurrance::find($package->recurrance_id);
        $additionalUser = floatval($request->additionalUser);
        $additionalUserPrice = floatval($package->additional_user) * floatval($additionalUser);
        $addons = $request->addons ? explode(",", $request->addons) : [];
        $totalItems = 1 + ($additionalUser ? 1 : 0) + count($addons);
        $totalPrice = (floatval($package->price) * floatval($recurrance->frequency)) + ($additionalUserPrice * floatval($recurrance->frequency));
        $addonPrices = array();
        foreach($package->addons as $addon) {
            if(in_array($addon->addon_id, $addons)) {
                $innerAddonPrice = array(
                    "name" => $addon->addon["name"],
                    "price" => floatval($addon->price),
                    "total_price" => floatval($addon->price) * floatval($recurrance->frequency)
                );
                $totalPrice += floatval($addon->price) * floatval($recurrance->frequency);
                array_push($addonPrices, $innerAddonPrice);
            }
        }
        $checkout = array(
            "package" => array(
                "name" => $package->name,
                "total_price" => floatval($package->price) * floatval($recurrance->frequency),
                "price" => floatval($package->price)
            ),
            "additional_user" => array(
                "qty" => $additionalUser,
                "price" => floatval($package->additional_user),
                "frequency" => floatval($recurrance->frequency),
                "total_price" => floatval($additionalUser) * floatval($package->additional_user) * floatval($recurrance->frequency)
            ),
            "adddons" => $addonPrices,
            'total_items' => $totalItems,
            'total_price' => $totalPrice
        );
        return json_encode($checkout);
    }

    public function payment(Request $request) {
        $package = Package::find($request->packageId);
        $package = Package::find($request->packageId);
        $recurrance = Recurrance::find($package->recurrance_id);
        $additionalUser = floatval($request->additionalUser);
        $additionalUserPrice = floatval($package->additional_user) * floatval($additionalUser);
        $addons = $request->addons ? explode(",", $request->addons) : [];
        $totalItems = 1 + ($additionalUser ? 1 : 0) + count($addons);
        $totalPrice = (floatval($package->price) * floatval($recurrance->frequency)) + ($additionalUserPrice * floatval($recurrance->frequency));
        $addonPrices = array();
        foreach($package->addons as $addon) {
            if(in_array($addon->addon_id, $addons)) {
                $innerAddonPrice = array(
                    "name" => $addon->addon["name"],
                    "id" => $addon->addon["id"],
                    "addon_price_id" => $addon->id,
                    "price" => floatval($addon->price),
                    "total_price" => floatval($addon->price) * floatval($recurrance->frequency)
                );
                $totalPrice += floatval($addon->price) * floatval($recurrance->frequency);
                array_push($addonPrices, $innerAddonPrice);
            }
        }
        $checkout = array(
            "package" => array(
                "name" => $package->name,
                "id" => $package->id,
                "total_price" => floatval($package->price) * floatval($recurrance->frequency),
                "price" => floatval($package->price)
            ),
            "additional_user" => array(
                "qty" => $additionalUser,
                "price" => floatval($package->additional_user),
                "frequency" => floatval($recurrance->frequency),
                "total_price" => floatval($additionalUser) * floatval($package->additional_user) * floatval($recurrance->frequency)
            ),
            "adddons" => $addonPrices,
            'total_items' => $totalItems,
            'total_price' => $totalPrice,
            'shipping_address' => array(),
            "billing_address" => array(),
            "user" => array(
                "email" => $request->email
            )
        );
        $states = State::all();
        $stripe = [
            "secret_key"      => "sk_test_4eC39HqLyjWDarjtT1zdp7dc",
            "publishable_key" => "pk_test_TYooMQauvdEDq54NiTphI7jx",
        ];
        Stripe::setApiKey($stripe['secret_key']);
        return view("frontend.payment", compact('checkout', 'states', 'stripe'));
    }

    public function processPayment(Request $request) {
        $stripe = [
            "secret_key"      => "sk_test_4eC39HqLyjWDarjtT1zdp7dc",
            "publishable_key" => "pk_test_TYooMQauvdEDq54NiTphI7jx",
        ];
        $checkout = json_decode($request->checkout_details);
        $itemName = $checkout->package->name; 
        $itemNumber = $checkout->package->id; 
        $itemPrice = $checkout->total_price * 100; 
        $currency = "USD";
        Stripe::setApiKey($stripe['secret_key']);
        parse_str($request->account_details, $accountDetails);
        parse_str($request->address_from, $addressDetails);
        parse_str($request->payment_stripe, $stripeDetails);
        $response = array(
            "status" => "failed",
            "message" => "Error processing your order"
        );
        // Add customer to stripe 
        try {  
            $customer = Customer::create(array( 
                'email' => $accountDetails["email"], 
                'source'  => $stripeDetails["stripeToken"] 
            )); 
        }catch(Exception $e) {  
            $api_error = $e->getMessage();  
        }
        if(empty($api_error)){ 
            // echo "customer created";
            // Charge a credit or a debit card 
            try {  
                $charge = Charge::create(array( 
                    'customer' => $customer->id, 
                    'amount'   => $itemPrice, 
                    'currency' => $currency, 
                    'description' => $itemName 
                )); 
            }catch(Exception $e) {  
                $api_error = $e->getMessage();  
            } 
            
            if(empty($api_error) && $charge){ 
         
                // Retrieve charge details 
                $chargeJson = $charge->jsonSerialize(); 
             
                // Check whether the charge is successful 
                if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 
                    // Transaction details  
                    $transactionID = $chargeJson['balance_transaction']; 
                    $paidAmount = $chargeJson['amount']; 
                    $paidAmount = ($paidAmount); 
                    $paidCurrency = $chargeJson['currency']; 
                    $payment_status = $chargeJson['status'];  
                    // If the order is successful 
                    if($payment_status == 'succeeded'){ 
                        // $ordStatus = 'success'; 
                        // $statusMsg = 'Your Payment has been Successful!';
                        // echo $statusMsg . " transId: " . $transactionID . " Amount:" . $paidAmount;
                        $user = User::where("email", "=", $accountDetails["email"])->first();
                        if ($user && $user->id) {
                            $orderId = $this->saveOrderDetails($checkout, $accountDetails, $addressDetails, $transactionID, $paidCurrency, $payment_status, $user->id);
                            $response = array(
                                "status" => "success",
                                "message" => "Your order has been placed",
                                "order_id" => $orderId
                            );
                        } else {
                            $user = User::create([
                                'name' => $accountDetails['name'],
                                'email' => $accountDetails['email'],
                                'password' => Hash::make('12345678'),
                                'last_name' => $accountDetails['last_name'],
                                'phone' => $accountDetails['phone'],
                                'sams' => 'yes',
                                'city' => $addressDetails['city'],
                                'zip' => $addressDetails['zip'],
                                'state' => $addressDetails['states'],
                                'country' => $addressDetails['country'],
                                'address' => $addressDetails['address_1']
                            ]);
                            // $dataMail = array('name'=> $data['name']);
                            // Mail::send('mail', $user, function($message) {
                            //     $message->to($data['email'], 'Affinos')->subject
                            //         ('User Registration');
                            //     $message->from('pshambhu91@gmail.com','Affinos');
                            // });
                            $orderId = $this->saveOrderDetails($checkout, $accountDetails, $addressDetails, $transactionID, $paidCurrency, $payment_status, $user->id);
                            $response = array(
                                "status" => "success",
                                "message" => "Your order has been placed",
                                "order_id" => $orderId
                            );
                        }
                    }else{ 
                        $response = array(
                            "status" => "failed",
                            "message" => "Payment faild, please try later"
                        );
                    } 
                }else{ 
                    $response = array(
                        "status" => "failed",
                        "message" => "Transaction faild, please try later"
                    );
                } 
            }else{ 
                $response = array(
                    "status" => "failed",
                    "message" => "Error processing your order"
                );
            }
        } else {
            $response = array(
                "status" => "failed",
                "message" => "Error processing your order"
            );
        }
        return json_encode($response);
    }

    public function saveOrderDetails($checkout, $accountDetails, $addressDetails, $transactionID, $paidCurrency, $paymentStatus, $userId) {
        $package = Package::find($checkout->package->id);
        $order = Order::create([
            "package_id" => $checkout->package->id,
            "additional_qty" => $checkout->additional_user->qty,
            "recurrance_id" => $package->recurrance_id,
            "frequency" => $checkout->additional_user->frequency,
            "user_id" => $userId,
            "currency_code" => $paidCurrency,
            "package_name" => $package->name,
            "transaction_id" => $transactionID,
            "sub_total" => $checkout->package->price,
            "total" => $checkout->package->total_price,
            "status" => $paymentStatus,
            "order_total" => $checkout->total_price
        ]);
        OrderAccountDetail::create([
            "order_id" => $order->id,
            "name" => $accountDetails["name"],
            "last_name" => $accountDetails["last_name"],
            "email" => $accountDetails["email"],
            "company" => $accountDetails["company"],
            "phone" => $accountDetails["phone"],
            "company_type" => $accountDetails["industry"],
            "company_size" => $accountDetails["company_size"],
            "revenue" => $accountDetails["revenue"],
            "reason" => $accountDetails["registration_reason"],
            "user_id" => $userId,
        ]);
        foreach($checkout->adddons as $addon) {
           $addon = OrderAddon::create([
               "order_id" => $order->id,
               "addon_id" => $addon->id,
               "addon_price_id" => $addon->addon_price_id,
               "frequency" => $checkout->additional_user->frequency,
               "sub_total" => $addon->price,
               "total" => $addon->total_price
           ]); 
        }
        OrderBillingAddress::create([
            "name" => $addressDetails["name"],
            "last_name" => $addressDetails["last_name"],
            "address" => $addressDetails["address_1"],
            "address1" => $addressDetails["address_2"],
            "city" => $addressDetails["city"],
            "zip" => $addressDetails["zip"],
            "state" => $addressDetails["states"],
            "country" => $addressDetails["country"],
            "order_id" => $order->id,
            "is_same_billing_address" => 1,
        ]);
        OrderShippingAddress::create([
            "name" => $addressDetails["name"],
            "last_name" => $addressDetails["last_name"],
            "address" => $addressDetails["address_1"],
            "address1" => $addressDetails["address_2"],
            "city" => $addressDetails["city"],
            "zip" => $addressDetails["zip"],
            "state" => $addressDetails["states"],
            "country" => $addressDetails["country"],
            "order_id" => $order->id,
        ]);
        return $order->id;
    }

    public function orderPlaced($id) {
        $order = Order::find($id);
        return view("frontend.order-placed", compact('order'));
    }
}
