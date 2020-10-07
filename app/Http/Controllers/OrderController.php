<?php

namespace App\Http\Controllers;
use App\Order;
use Auth;
use App\OrderAccountDetail;
use App\OrderBillingAddress;
use App\OrderShippingAddress;
use App\OrderAddon;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $user = Auth::user();
        if($user->id == 1) {
            $orders = Order::all();
        } else {
            $orders = Order::where("user_id", "=", $user->id)->get();
        }
        return view("admin.orders.index", compact("orders"));
    }

    public function view($id) {
        $order = Order::find($id);
        $accountDetails = OrderAccountDetail::where("order_id", "=", $order->id)->first();
        $billingAddress = OrderBillingAddress::where("order_id", "=", $order->id)->first();
        $shippingAddress = OrderShippingAddress::where("order_id", "=", $order->id)->first();
        $addons = OrderAddon::where("order_id", "=", $order->id)->get();
        return view("admin.orders.show", compact('order', 'accountDetails', 'billingAddress', 'shippingAddress', 'addons'));
    }
}
