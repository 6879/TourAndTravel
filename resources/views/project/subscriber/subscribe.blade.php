@extends('project/inc/header1')
@section('content')<br> @if(Auth::user()->status==0)<div style="font-size: 0">
 <section >
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" >
				<div class="section-title text-center">
					<h5><i class="fa fa-clock-o" style="font-size:24px;color:#13CE20"></i>Waiting for payment </h5>
					
				</div>
			</div>
		</div>
		
		
	</div>
</section> 
<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" >
				<div class="section-title text-center">
					<h5><img src="{{URL::asset('frontend/images/icon/bkash.jpg ')}}" style="height: 100px; ">Reference Number= {{ Auth::user()->reference }}<br>Ammount=৳500</h5><hr>
					
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12" >
				<div class="">
					<p>Please pay by APP / USSD within 48 hours</p><hr>
					<p>Payment Instructions</p><hr>
					<p>1. For App Payment<br>
2. Make Payment<br>
3. Enter  Merchant Number: 01 966 114 400<br>
4. Enter total order amount<br>
5. Enter Reference Number (as displayed above)<br>
6. Verify your payment by entering your PIN<br>
7. It might take up to 15 minutes for payment verification<br>
8. For USSD Payment follow below steps<br>
9. Dial *247# to view bKash Menu<br>
10. Press 3 for "Payments"<br>
11. Enter  Merchant Number: 01 966 114 400<br>
12. Enter total order amount<br>
13. Enter Reference Number (as displayed above)<br>
14. Enter 1 for the bKash Counter No<br>
15. Verify your payment by entering your PIN<br>
16. It might take up to 15 minutes for payment verification Please note that Travel star will not accept split bKash payments for a single order. All bKash order payment must be on the exact order amount. Split payments will result in cancelled orders and will not be eligible for cashback.<br>
</p>
					
				</div>
			</div>
		</div>
		
		
	</div></div>

@else
<section >
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" >
				<div class="section-title text-center">
					<h5>Go to admin pannel </h5>
					
				</div>
			</div>
		</div>
		
		
	</div>
</section> 
	@endif
@stop