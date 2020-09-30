@extends('layouts.frontendlayout')
@section('content')
<div class="text-center container pt-140 mb-70 pt-sm-90 mb-sm-50">
   <h1 class="orange">Subscribe Today!</h1>
</div>
<div class="container relative">
   <div class="step">1</div>
   <div class=" mt-30 mb-30 checkout-lengths">
      <h2 class = "mb-30">Select Your Plan</h2>
      <div class=" mb-50 service-lengths">
         @foreach($recurrances as $recurrance)
         @php 
         $recur = str_replace(' ', '_', $recurrance->name);
         @endphp
         <div class="inline-block ml-0 mr-20 ml-sm-5 mr-sm-10 smol serivce-length @if($recurrance->id == $selectedPackage->recurrance_id) active @endif" onclick="selectRecurrance('prc{{$recur}}')">
            <span></span> {{$recurrance->name}}
         </div>
         @endforeach
      </div>
   </div>
   @foreach($recurrances as $recurrance)
   @php 
   $recur = str_replace(' ', '_', $recurrance->name);
   @endphp
   @foreach($recurrance->packages as $package)
   <div class="row mb-30 row-packages prc{{$recur}} {{$recurrance->id == $selectedPackage->recurrance_id ? 'visible-package' : 'hidden' }}">
      <div class="ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background @if($selectedPackage->id == $package->id) selected @endif current checkout-bar pt-25 pb-25 package-wrapper" data-id="{{$package->id}}" data-name="{{$package->name}}" onclick="selectPlan(event, {{$package->id}})">
         <div class="flex align-center">
            <div class="checkmark  ml-25 mr-25">
               <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
            </div>
            <div class = " ">
               <h3>{{ $package->name }}</h3>
            </div>
            <div class = " text-center  ml-auto w-200">
               <span class="h3 pricing-info">{{$package->price}}<sup>.00</sup><sub>/Month</sub></span>
               <br>
               <span class="smol">Billed {{$recurrance->name}}</span>
            </div>
         </div>
      </div>
      <div class="col-lg-4 align-center flex pl-30 pl-md-0 pr-md-0 ml-md-20 mr-md-20">
         <div class=" show-drop  hidden drop-holder-123 mt-20 mb-20 mb-sm-0">
            @if(strpos($package->name, 'State') !== false)
            <select placeholder = "State" id = "state-pro">
               <option value="" disabled="" selected="">State</option>
               @foreach($states as $state)
               <option value="{{$state->state_code}}">{{$state->name}}</option>
               @endforeach
            </select>
            @elseif(strpos($package->name, 'Regional'))
            <select placeholder = "Region" id = "regional-pro">
               <option value="" disabled="" selected="">Region</option>
               @foreach($regions as $region)
               <option value="{{$region->region_code}}">{{$region->name}}</option>
               @endforeach
            </select>
            @endif
         </div>
      </div>
   </div>
   @endforeach
   @endforeach
</div>
<div class="medium-container mt-90 mb-90 mb-sm-50 mt-sm-50">
   <hr>
</div>
<div class="container mt-50 mb-50 relative">
   <div class="step">2</div>
   <h2 class = "mb-40">Enhance your plan</h2>
   @foreach($recurrances as $recurrance)
   @foreach($recurrance->packages as $package)
   <div id="packageaddon{{$package->id}}"class="addon-123 addon-holder hidden-addon @if($selectedPackage->id == $package->id) show-addon @endif">
      <div class="flex align-center mb-20 wrap-sm ">
         <div class=" mr-20 mb-sm-10">
            <div class = "flex align-center">
               <div class = "down-counter h3 increment" style = "" onclick="manageCounter(event, -1)">
                  -
               </div>
               <span class="counter h3 inline-block v-light-grey-background">0</span>
               <div class = "up-counter h3 increment" onclick="manageCounter(event, 1)">
                  +
               </div>
            </div>
         </div>
         <div class="">
            <div class = "flex align-center">
               <h3 class = "mr-10">Additional Users</h3>
               <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$ {{$package->additional_user}}</span>/each)</h5>
            </div>
         </div>
      </div>
      <br>
      <div class="row addon-wrapper">
         @foreach($package->addons as $addon)
         <div class="col-lg-6 mb-30">
            <div class="check-btn flex align-center addon-item" data-id="{{ $addon->addon_id }}" onclick="selectAddOn(event)">
               <div class="checkmark check-outline mr-30">
                  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
               </div>
               <div class = "flex align-center">
                  <h3 class="mr-10">
                     {{ $addon->addon['name'] }}
                  </h3>
                  <h5 class = "light-grey new-pricing" > (+<span class="addon-1 show-addon-price ">${{ $addon->price }}</span>)</h5>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   @endforeach
   @endforeach
   <div class="text-center">
      <p class="smol">NOTE: All fees above are per monthly fees</p>
   </div>
</div>
<div class="medium-container  mt-90 mb-90 mb-sm-50 mt-sm-50">
   <hr>
</div>
<div class="container mt-50 mb-100 relative">
   <div class="row">
      <div class="col-sm-6 ">
         <form action="{{url('/verify')}}" id = "pro-form" onsubmit="verifyEmail(event)" method="post" role="form" autocomplete="off">
            <div class="flex align-center">
               <input type="email" requried placeholder = "Enter Email" name = "user_name" id = "email" class = "email-check">
               <input type="submit" value = "Verify" class = "check-arrow" style = "width: 100px">
            </div>
         </form>
      </div>
      <div class="col-xl-4 col-md-6 text-center ">
         <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="state-monthly" onclick="continueCheckout()" class = "large-btn  123-btn orange-btn checkout-btn state-monthly-btn  selected  " id = "123-m"> Continue </a>
         <br>
      </div>
   </div>
</div>
<!-- Modals  -->
<div class="modal fade payment-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <!-- Modal Content: begins -->
      <!-- Modal Content: ends -->
   </div>
</div>
<div class="loading-container">
   <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
   </div>
</div>
@endsection
@section('additionalscript')
<script>
   var selectedPlan = 0;
   var confirmedEmail = "";
   function selectRecurrance(rowId) {
     $(".row-packages").removeClass("hidden");
     $(".row-packages").addClass("hidden");
     $("." + rowId).removeClass("hidden");
   }
   function selectPlan(event, planId) {
     selectedPlan = planId;
     $(".package-wrapper").removeClass("selected");
     $(event.currentTarget).addClass("selected");
     $(".addon-holder").removeClass("show-addon");
     $("#packageaddon" + planId).addClass("show-addon");
   }
   function selectAddOn() {
     if ($(event.currentTarget).hasClass("selected")) {
       $(event.currentTarget).removeClass("selected");
     } else {
       $(event.currentTarget).addClass("selected");
     } 
   }
   function manageCounter(event, counter) {
     var num = parseInt($(event.currentTarget).parent().find(".counter").text()) + counter;
     $(event.currentTarget).parent().find(".counter").text(num > -1 ? num : 0);
   }
   $("#pro-form").validate();
   function verifyEmail(event) {
     event.preventDefault();
     var name = $('#email').val();
     if (name) {
         $.ajax({
             type: 'post',
             url: '{{url("/verify-email")}}',
             data: {
                 _token: '{{csrf_token()}}',
                 email: name,
             },
             success: function(response) {
                 var resp = JSON.parse(response);
                 confirmedEmail = name;
                 if (resp.status == "success") {
                   $(".checkout-btn").addClass("usable");
                 } else {
                   $(".checkout-btn").addClass("usable");
                 }
             }
         });
     }
   }
   function continueCheckout() {
     var packageId = $(".visible-package .selected.package-wrapper").data("id");
     var packageName = $(".visible-package .selected.package-wrapper").data("name");
     var additionalUser = $(".show-addon .counter").text();
     var addonElements = $(".show-addon .addon-item.selected");
     var addons = [];
     $.each(addonElements, function(i, li){
       addons.push($(li).data("id"));
     });
     $.ajax({
         type: 'post',
         url: '{{url("/continue-checkout")}}',
         data: {
             _token: '{{csrf_token()}}',
             packageId: packageId ? packageId : selectedPlan,
             packageName: packageName,
             additionalUser: additionalUser,
             addons: addons.join(",")
         },
         success: function(response) {
             var resp = JSON.parse(response);
             $('.payment-modal').modal({backdrop: 'static'});
             $('.payment-modal').modal('show');
             var url = '{{url("/payment?packageId=")}}' + (packageId ? packageId : selectedPlan) + '&additionalUser=' +  additionalUser + '&addons=' + addons.join(",") + '&email=' + confirmedEmail;
             var iframeText= '<iframe src="' + url + '" height="100%" width="100%" title="Check Out"></iframe>';
             $('.payment-modal .modal-dialog').html(iframeText);
         }
     });
   }
   var orderSuccessUrl = "{{url('/order-placed')}}";
   function orderSuccess(orderId) {
    window.location.href = orderSuccessUrl + "/" + orderId
   }

   function orderFailed() {
    alert("Your plan payment has been deciled please try again later");
   }
</script>
<script>
    $("#account-details").validate();
</script>
@endsection