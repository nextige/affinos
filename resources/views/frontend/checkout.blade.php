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
    <div class="inline-block ml-0 mr-20 ml-sm-5 mr-sm-10 smol serivce-length active " data-target=".month1" data-addonlength = ".addon-1">
      <span></span> Monthly
    </div>
    <div class="inline-block ml-20 mr-20 ml-sm-5 mr-sm-10 smol serivce-length " data-target=".month6" data-addonlength = ".addon-6">
      <span></span> 6 Month
    </div>
    <div class="inline-block ml-20 mr-20 ml-sm-5 mr-sm-5 smol serivce-length " data-target=".month12" data-addonlength = ".addon-12">
      <span></span> Annual
    </div>
  </div>

</div>

<div class=" row mb-30">
		<div class="ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar  selected   current    checkout-bar pt-25 pb-25 month1 plan-123" data-targetplan = ".plan-123" data-targetbtn = "#123-m" data-targetAddon = ".addon-123">
			<div class="flex align-center">
        <div class="checkmark  ml-25 mr-25">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
        </div>
					<div class = " ">
					<h3>Affinos - State Pro</h3>
				</div>
				<div class = " text-center  ml-auto w-200">

					<span class="h3 pricing-info">$99<sup>.00</sup><sub>/Month</sub></span>
          <br>
           <span class="smol">Billed Monthly</span>
				</div>
			</div>
		</div>
		<div class=" ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar selected    pt-25 pb-25 month6 plan-123"  data-targetplan = ".plan-123" data-targetbtn = "#123-s" data-targetAddon = ".addon-123">
			<div class="flex align-center">
        <div class="checkmark ml-25 mr-25 ">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="checkmark">
        </div>
					<div class = "">
					<h3>Affinos - State Pro</h3>
				</div>
				<div class = " text-center  ml-auto  w-200">
                    <span class="h3 pricing-info">$89<sup>.00</sup><sub>/Month</sub></span>
          <br>
          <span class="smol">Billed Semi-Annually</span>
				</div>
			</div>
		</div>
		<div class=" ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar selected     pt-25 pb-25 month12 plan-123"  data-targetplan = ".plan-123" data-targetbtn = "#123-y" data-targetAddon = ".addon-123">
			<div class="flex align-center">
        <div class="checkmark  ml-25 mr-25">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="">
        </div>
					<div class = " ">
					<h3>Affinos - State Pro</h3>
				</div>
				<div class = "text-center ml-auto  w-200">
                    <span class="h3 pricing-info">$59<sup>.00</sup><sub>/Month</sub></span>
          <br>
          <span class="smol">Billed Yearly</span>
				</div>
			</div>
		</div>

<div class="col-lg-4 align-center flex pl-30 pl-md-0 pr-md-0 ml-md-20 mr-md-20">
<div class=" show-drop  hidden drop-holder-123 mt-20 mb-20 mb-sm-0">

<select placeholder = "State" id = "state-pro">
  <option value="state" disabled="" selected="">State</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select>
</div>
</div>

	</div>

<div class=" row mb-30">
		<div class="ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar    current    checkout-bar pt-25 pb-25 month1 plan-124" data-targetplan = ".plan-124" data-targetbtn = "#124-m" data-targetAddon = ".addon-124">
			<div class="flex align-center">
        <div class="checkmark  ml-25 mr-25">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
        </div>
					<div class = " ">
					<h3>Affinos - Regional Pro</h3>
				</div>
				<div class = " text-center  ml-auto w-200">

					<span class="h3 pricing-info">$119<sup>.00</sup><sub>/Month</sub></span>
          <br>
           <span class="smol">Billed Monthly</span>
				</div>
			</div>
		</div>
		<div class=" ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar    pt-25 pb-25 month6 plan-124"  data-targetplan = ".plan-124" data-targetbtn = "#124-s" data-targetAddon = ".addon-124">
			<div class="flex align-center">
        <div class="checkmark ml-25 mr-25 ">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="checkmark">
        </div>
					<div class = "">
					<h3>Affinos - Regional Pro</h3>
				</div>
				<div class = " text-center  ml-auto  w-200">
                    <span class="h3 pricing-info">$99<sup>.00</sup><sub>/Month</sub></span>
          <br>
          <span class="smol">Billed Semi-Annually</span>
				</div>
			</div>
		</div>
		<div class=" ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar     pt-25 pb-25 month12 plan-124"  data-targetplan = ".plan-124" data-targetbtn = "#124-y" data-targetAddon = ".addon-124">
			<div class="flex align-center">
        <div class="checkmark  ml-25 mr-25">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="">
        </div>
					<div class = " ">
					<h3>Affinos - Regional Pro</h3>
				</div>
				<div class = "text-center ml-auto  w-200">
                    <span class="h3 pricing-info">$69<sup>.00</sup><sub>/Month</sub></span>
          <br>
          <span class="smol">Billed Yearly</span>
				</div>
			</div>
		</div>

<div class="col-lg-4 align-center flex pl-30 pl-md-0 pr-md-0 ml-md-20 mr-md-20">
<div class="  hidden drop-holder-124">

<select placeholder = "" id = "regional-pro" class = "mt-lg-20">
  <option value="none" disabled="" selected="">Region</option>
  <option >Region A - West</option>
  <option >Region B - Mountain West</option>
  <option >Region C - Southwest</option>
  <option >Region D - Great Plains</option>
  <option >Region E - Midwest</option>
  <option >Region F - Southeast</option>
  <option >Region G - Mid-Atlantic</option>
  <option >Region H - Northeast</option>
</select>
<div class="text-center">
         <a class="smol orange" onclick="window.open('https://www.bidsync.com/map-popup','popUpWindow','height=700,width=1200,left=100,top=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" style="display: inline-block; margin-top: 10px; font-weight: 500;cursor: pointer;">View Map ▸</a>
  
</div>
</div>
</div>

	</div>

<div class=" row mb-30">
		<div class="ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar    current    checkout-bar pt-25 pb-25 month1 plan-125" data-targetplan = ".plan-125" data-targetbtn = "#125-m" data-targetAddon = ".addon-125">
			<div class="flex align-center">
        <div class="checkmark  ml-25 mr-25">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
        </div>
					<div class = " ">
					<h3>Affinos - National Pro</h3>
				</div>
				<div class = " text-center  ml-auto w-200">

					<span class="h3 pricing-info">$249<sup>.00</sup><sub>/Month</sub></span>
          <br>
           <span class="smol">Billed Monthly</span>
				</div>
			</div>
		</div>
		<div class=" ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar    pt-25 pb-25 month6 plan-125"  data-targetplan = ".plan-125" data-targetbtn = "#125-s" data-targetAddon = ".addon-125">
			<div class="flex align-center">
        <div class="checkmark ml-25 mr-25 ">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="checkmark">
        </div>
					<div class = "">
					<h3>Affinos - National Pro</h3>
				</div>
				<div class = " text-center  ml-auto  w-200">
                    <span class="h3 pricing-info">$179<sup>.00</sup><sub>/Month</sub></span>
          <br>
          <span class="smol">Billed Semi-Annually</span>
				</div>
			</div>
		</div>
		<div class=" ml-lg-20 mr-lg-20 col-lg-7 v-light-grey-background checkout-bar     pt-25 pb-25 month12 plan-125"  data-targetplan = ".plan-125" data-targetbtn = "#125-y" data-targetAddon = ".addon-125">
			<div class="flex align-center">
        <div class="checkmark  ml-25 mr-25">
          <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="">
        </div>
					<div class = " ">
					<h3>Affinos - National Pro</h3>
				</div>
				<div class = "text-center ml-auto  w-200">
                    <span class="h3 pricing-info">$119<sup>.00</sup><sub>/Month</sub></span>
          <br>
          <span class="smol">Billed Yearly</span>
				</div>
			</div>
		</div>

<div class="col-lg-4 align-center flex pl-30 pl-md-0 pr-md-0 ml-md-20 mr-md-20">
</div>

	</div>

</div>

<div class="medium-container mt-90 mb-90 mb-sm-50 mt-sm-50">

<hr>

</div>

<div class="container mt-50 mb-50 relative">

     <div class="step">2</div>


<h2 class = "mb-40">Enhance your plan</h2>

<div class="addon-123 addon-holder hidden-addon  show-addon  " >

<div class="flex align-center mb-20 wrap-sm ">

  <div class=" mr-20 mb-sm-10">
        <div class = "flex align-center">
      <div class = "down-counter h3 increment" style = "">
       -
      </div>
      <span class="counter h3 inline-block v-light-grey-background">0</span>


      <div class = "up-counter h3 increment">
        +
      </div>
</div>
</div>
    <div class="">
      <div class = "flex align-center">
        <h3 class = "mr-10">Additional Users</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$9.00</span><span class="addon-6 ">$9.00</span><span class="addon-12 ">$9.00</span>/each)</h5>
      </div>
    </div>
  </div>
  <br>
<div class="row ">
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "federal">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Federal Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$39.00</span><span class="addon-6 ">$39.00</span><span class="addon-12 ">$39.00</span>)</h5>
      </div>
    </div>
  </div>
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "military">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Military Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$39.00</span><span class="addon-6 ">$39.00</span><span class="addon-12 ">$39.00</span>)</h5>
      </div>
    </div>
  </div>
  </div>
<div class="row ">
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "canada">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Canada Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$39.00</span><span class="addon-6 ">$39.00</span><span class="addon-12 ">$39.00</span>)</h5>
      </div>
    </div>
  </div>
  </div>

</div>

<div class="addon-124 addon-holder hidden-addon  " >

<div class="flex align-center mb-20 wrap-sm ">

  <div class=" mr-20 mb-sm-10">
        <div class = "flex align-center">
      <div class = "down-counter h3 increment" style = "">
       -
      </div>
      <span class="counter h3 inline-block v-light-grey-background">0</span>


      <div class = "up-counter h3 increment">
        +
      </div>
</div>
</div>
    <div class="">
      <div class = "flex align-center">
        <h3 class = "mr-10">Additional Users</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$19.00</span><span class="addon-6 ">$19.00</span><span class="addon-12 ">$19.00</span>/each)</h5>
      </div>
    </div>
  </div>
  <br>
<div class="row ">
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "federal">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Federal Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$69.00</span><span class="addon-6 ">$69.00</span><span class="addon-12 ">$69.00</span>)</h5>
      </div>
    </div>
  </div>
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "military">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Military Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$69.00</span><span class="addon-6 ">$69.00</span><span class="addon-12 ">$69.00</span>)</h5>
      </div>
    </div>
  </div>
  </div>
<div class="row ">
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "canada">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10"> Canada Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$69.00</span><span class="addon-6 ">$69.00</span><span class="addon-12 ">$69.00</span>)</h5>
      </div>
    </div>
  </div>
  </div>

</div>

<div class="addon-125 addon-holder hidden-addon  " >

<div class="flex align-center mb-20 wrap-sm ">

  <div class=" mr-20 mb-sm-10">
        <div class = "flex align-center">
      <div class = "down-counter h3 increment" style = "">
       -
      </div>
      <span class="counter h3 inline-block v-light-grey-background">0</span>


      <div class = "up-counter h3 increment">
        +
      </div>
</div>
</div>
    <div class="">
      <div class = "flex align-center">
        <h3 class = "mr-10">Additional Users</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$39.00</span><span class="addon-6 ">$39.00</span><span class="addon-12 ">$39.00</span>/each)</h5>
      </div>
    </div>
  </div>
  <br>
<div class="row ">
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "federal">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Federal Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$79.00</span><span class="addon-6 ">$79.00</span><span class="addon-12 ">$79.00</span>)</h5>
      </div>
    </div>
  </div>
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "military">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Military Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$79.00</span><span class="addon-6 ">$79.00</span><span class="addon-12 ">$79.00</span>)</h5>
      </div>
    </div>
  </div>
  </div>
<div class="row ">
    <div class="col-lg-6 mb-30">
    <div class="check-btn flex align-center" data-addon = "canada">
      <div class="checkmark check-outline mr-30">
  <img src="{{url('/')}}/front-end/assets/icons/checkmark.svg" alt="check">
      </div>
      <div class = "flex align-center">
        <h3 class = "mr-10">Canada Bids</h3>
        <h5 class = "light-grey new-pricing" >(+<span class="addon-1 show-addon-price ">$79.00</span><span class="addon-6 ">$79.00</span><span class="addon-12 ">$79.00</span>)</h5>
      </div>
    </div>
  </div>
  </div>

</div>

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
  <form action="/verify.php" id = "pro-form" method="POST" role="form" autocomplete="off">
	<div class="flex align-center">
  		<input type="email" placeholder = "Enter Email" name = "user_name" id = "email" class = "email-check">
  		<input type="submit" value = "Verify" class = "check-arrow" style = "width: 100px">
	</div>
    <div class="flex align-center">
		<p class="wrong-email hidden smol" style="color: #AA0000; font-style: bold;">Please enter a valid email</p>
	</div>
<p class="smol pl-20 mt-10">* You must input a valid email before continuing</p>

  </form>

</div>

<div class="col-xl-4 col-md-6 text-center ">

              <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="state-monthly"  class = "large-btn  123-btn orange-btn checkout-btn state-monthly-btn  selected  " id = "123-m"> Continue </a>

        <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="state-6month"  class = "large-btn 123-btn orange-btn checkout-btn state-6month-btn  " id = "123-s"> Continue </a>

          <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="state-yearly"  class = "large-btn 123-btn orange-btn checkout-btn state-yearly-btn  " id = "123-y"> Continue </a>

      
        <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="regional-monthly"  class = "large-btn  124-btn orange-btn checkout-btn regional-monthly-btn  " id = "124-m"> Continue </a>

        <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="regional-6month"  class = "large-btn 124-btn orange-btn checkout-btn regional-6month-btn  " id = "124-s"> Continue </a>

          <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="regional-yearly"  class = "large-btn 124-btn orange-btn checkout-btn regional-yearly-btn  " id = "124-y"> Continue </a>

      
        <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="national-monthly"  class = "large-btn  125-btn orange-btn checkout-btn national-monthly-btn  " id = "125-m"> Continue </a>

        <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="national-6month"  class = "large-btn 125-btn orange-btn checkout-btn national-6month-btn  " id = "125-s"> Continue </a>

          <a href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="national-yearly"  class = "large-btn 125-btn orange-btn checkout-btn national-yearly-btn  " id = "125-y"> Continue </a>

            <br>

</div>

</div>
</div>

<!-- Modals  -->

<div class="modal-backdrop " id="modal4">
  <div class="modal-container">


      <div class="text-center white-background p-50 p-sm-20 relative">
        <div class="close-btn">

<svg width="70px" height="70px" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <desc>Created with Sketch.</desc>
  <defs></defs>
  <g id="Visual-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="BidSync_pricing_template" transform="translate(-63.000000, -1593.000000)">
          <g id="close-btn" transform="translate(63.000000, 1593.000000)">
              <circle id="Oval-Copy-2" fill="#000000" cx="35" cy="35" r="35"></circle>
              <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
              <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(-45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
          </g>
      </g>
  </g>
</svg>
        </div>
        <h2 class="mb-20 h1">Received a TIME-OUT from our verification severs.</h2>
        <p class = "mb-30">Our support personnel has been notified.  Please try again a bit later.</p>
      </div>
    </div>
</div>

<div class="modal-backdrop " id="modal3">
	<div class="modal-container">


			<div class="text-center white-background p-50 p-sm-20 relative">
				<div class="close-btn">

<svg width="70px" height="70px" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<desc>Created with Sketch.</desc>
	<defs></defs>
	<g id="Visual-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			<g id="BidSync_pricing_template" transform="translate(-63.000000, -1593.000000)">
					<g id="close-btn" transform="translate(63.000000, 1593.000000)">
							<circle id="Oval-Copy-2" fill="#000000" cx="35" cy="35" r="35"></circle>
							<rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
							<rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(-45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
					</g>
			</g>
	</g>
</svg>
				</div>

				<h2 class="mb-20 h1">Our records indicate that there is an incomplete registration with your email!</h2>
				<p class = "mb-30">Please click below to resend the verification email and continue registering.</p>
				<form action="/resendEmail.php" id = "resend-email">
        <p align="center">
          <input type="email" class = "email input" name = "email" id = "#email" readonly style = "
					width: 300px;
text-align: center;
border: none;
margin-top: -20px;
margin-bottom: 20px;
font-weight: bold;"> <br>
          <button class = "orange-btn" type = "submit">RESEND VERIFICATION EMAIL</button>
        </p>
        </form>

			</div>
		</div>
</div>

<div class="modal-backdrop " id="modal5">
    <div class="modal-container">


        <div class="text-center white-background p-50 p-sm-20 relative">
            <div class="close-btn">

                <svg width="70px" height="70px" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Visual-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="BidSync_pricing_template" transform="translate(-63.000000, -1593.000000)">
                            <g id="close-btn" transform="translate(63.000000, 1593.000000)">
                                <circle id="Oval-Copy-2" fill="#000000" cx="35" cy="35" r="35"></circle>
                                <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
                                <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(-45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

            <h2 class="mb-20 h1">Our records indicate that you have a marketplace account.</h2>
            <p class = "mb-30">Please click below to send the verification email and continue registering.</p>
            <form action="/resendEmail.php" id = "send-verification-email">
                <p align="center">
                    <input type="email" class = "email input" name = "email" id = "cuser-email" readonly style = "
					width: 300px;
text-align: center;
border: none;
margin-top: -20px;
margin-bottom: 20px;
font-weight: bold;"> <br>
                    <button class = "orange-btn" type = "submit">SEND VERIFICATION EMAIL</button>
                </p>
            </form>

        </div>
    </div>
</div>

   <div class="modal-backdrop " id="modal2">
    	<div class="modal-container">


    			<div class="text-center white-background p-50 p-sm-20 relative">
            <div class="close-btn">

  <svg width="70px" height="70px" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <desc>Created with Sketch.</desc>
      <defs></defs>
      <g id="Visual-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="BidSync_pricing_template" transform="translate(-63.000000, -1593.000000)">
              <g id="close-btn" transform="translate(63.000000, 1593.000000)">
                  <circle id="Oval-Copy-2" fill="#000000" cx="35" cy="35" r="35"></circle>
                  <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
                  <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(-45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
              </g>
          </g>
      </g>
  </svg>
        		</div>

    				<h2 class="mb-20 h1">We see that you have a legacy account on Affinos!</h2>
            <p class = "mb-30">You will need to contact sales support team to review your account, and provide
              any available changes and updates to your subscription.  Thank you for being a Affinos user.</p>
            <p align="center"> <a href="https://www.periscopeholdings.com/contact" class = "orange-btn">CONTACT SALES SUPPORT</a></p>

    			</div>
    		</div>
    </div>

    <div class="modal-backdrop " id="modal1">
      <div class="modal-container">


          <div class="text-center white-background p-50 p-sm-20 relative">
            <div class="close-btn">

    <svg width="70px" height="70px" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <desc>Created with Sketch.</desc>
      <defs></defs>
      <g id="Visual-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="BidSync_pricing_template" transform="translate(-63.000000, -1593.000000)">
              <g id="close-btn" transform="translate(63.000000, 1593.000000)">
                  <circle id="Oval-Copy-2" fill="#000000" cx="35" cy="35" r="35"></circle>
                  <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
                  <rect id="Rectangle-3" fill="#FFFFFF" transform="translate(35.000000, 35.000000) rotate(-45.000000) translate(-35.000000, -35.000000) " x="14" y="32" width="42" height="6"></rect>
              </g>
          </g>
      </g>
    </svg>
            </div>

            <h2 class="mb-20 h1">We see that you already have an existing account on Affinos.</h2>
            <p class = "mb-30">You will need to login into your account, and make any
              changes and updates to your subscription from within your account.</p>
                    					<p align="center"> <a href="" class="orange-btn" id  ="login-button">LOGIN NOW</a></p>
      				          </div>
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
    <script src ="{{url('/')}}/front-end/assets/js/chargebee-integration-v4.js"></script>
    <script>
        var addonPrices = {
            "state-monthly": {"user": 9, "federal": 39, "military": 39, "canada": 39},
            "regional-monthly": {"user": 19, "federal": 69, "military": 69, "canada": 69 },
            "national-monthly": {"user": 39, "federal": 79, "military": 79, "canada": 79 },
        };
        var planSavingsPercents = {
            "state-6month": 10.101010101010,
            "state-yearly": 40.404040404040,
            "regional-6month": 16.806722689076,
            "regional-yearly": 42.016806722689,
            "national-6month": 28.112449799197,
            "national-yearly": 52.208835341366
        };
    </script>
    <script>
        $(".gated-content").click(function(e){
            e.preventDefault();
            $(".modal-backdrop").addClass("show-me");
        })
        $(".modal-btn").click(function(e){
            e.preventDefault();
            $(".modal-backdrop").addClass("show-me");
        })
        // toggles
        $(".mobile-toggle").click(function() {
            $(".nav").toggleClass("active");
        })
        var $window = $(window);
        var lastScrollTop = 0;
        $window.scroll(function() {
            if ($window.scrollTop() > 100) {
                $("body").addClass("scrolling");
                $(".search-drop").removeClass("dropped");
                var st = $(this).scrollTop();
                if (st > lastScrollTop) {
                    $("body").removeClass("up");
                } else {
                    $("body").addClass("up");
                }
                if ($window.scrollTop() > 500){
                    $("body").addClass("scroll-2");
                }
                else if($window.scrollTop() <= 500){
                    $("body").removeClass("scroll-2");
                }
                lastScrollTop = st;
            }
            else {
                $("body").removeClass("scrolling").removeClass("scroll-2");
            }
        })
            $(".slider").slick({
            dots: true,
            arrows: false
        });
        $(".slide-laptop").slick({
            arrows: false,
            autoplay: true,
            speed: 1700
        });
        $(".quote-slide").slick({
            dots: false,
            arrows: false,
            autoplay: true,
            speed: 600,
            fade: true
        });
        $(".slide-laptop").on("beforeChange", function() {
            $(".slide-contents").hide();
        })
        $(".slide-laptop").on("afterChange", function() {
            var curr = $(".slide-laptop").slick("slickCurrentSlide")
            if (curr == 0) {
                $(".slide-0").show();
            }
            if (curr == 1) {
                $(".slide-1").show();
            }
            if (curr == 2) {
                $(".slide-2").show();
            }
        })
        $(".tab-content-2").click(function() {
            $(".active-tab").removeClass("active-tab");
            $(this).addClass("active-tab");
            $(".regional-pro, .state-pro, .free-items, .national-pro").addClass("hidden-lg").removeClass("flex-lg");
            $($(this).data("target")).addClass("flex-lg");
        })

        $(".modal-backdrop .close-btn").click(function(){
            $(".modal-backdrop").removeClass("show-me");

        })
        $("#resend-email").submit(function(e){
            e.preventDefault();
            $("#resend-email button").prop("disabled", true);
            var name = $('#email').val();
            if (name) {
                $.ajax({
                    type: 'post',
                    url: 'resend-email.php',
                    data: {
                        email: name,
                    },
                    success: function(response) {
                        console.log(response);
                        if (response == "NO_RESPONSE") {

                            $("#resend-email").html("<h3>We're sorry, there was an error. Please refresh the page and try again</h3>");

                        } else {
                            $("#resend-email").html("<h3>Please check your email for the verification message</h3>");
                        }
                    }
                });
            }
        })
        var page = 2;
        $( 'body' )
            .on( 'click', '.load-more', function( e ) {
                e.preventDefault();
                $( ".loading-container" )
                    .addClass( "show-me" );
                var response;
                $.ajax( {
                    type: "GET"
                    , url: $(this).data("page") + page
                    , dataType: 'html'
                    , success: function( response ) {
                        page++;
                        refreshProjects( response );
                    }
                } )
            } )
        function refreshProjects( response ) {
            $( ".load-more-btn" )
                .html( response );
            $( ".loading-container" )
                .removeClass( "show-me" );
        }
        $("form#basic-form").submit(function () {
            if ($(this)[0].checkValidity()) {
                $(this).submit(function () {
                    return false;
                });
                return true;

            }
            else {
                return false;
            }
        });
    </script>
@endsection