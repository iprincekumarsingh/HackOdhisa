@include('layouts.form')
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  action="{{route('h.verify')}}" method="post" class="login100-form validate-form">
                    @csrf
					<br>
					<span class="login10-form-title p-b-10">
                        Please enter the OTP sent to your number| {{session('phone_number')}}
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: Enter 10 digit phone number">
                        <input type="hidden" name="phone_number" value="{{session('phone_number')}}">
						<input class="input100" type="tel"  name="verification_code">
						<span class="focus-input100"></span>
						<span class="label-input100">Enter you 4 digit OTP</span>
					</div>
                    @error('verification_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
					<br>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Submit OTP
						</button>
					</div>




				</form>

				<div class="login100-more" style="background-image: url('images/Untitled\ \(9\).png');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
