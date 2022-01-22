<?php include 'sendmail.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Appointment Booking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/fevicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>






	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST">
				<img class="logo" src="img/icons/logo.png" alt="logo">
				<span class="contact100-form-title">
				
					Book Appointment
				</span>
				<Span style="color: green;"><b><?php echo $alert ?></b></Span>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 " data-validate = "Enter Your Age (20)">
					<span class="label-input100">Age *</span>
					<input class="input100" type="text" name="age" placeholder="Enter Your Age ">
				</div>
				
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Gender *</span>
					<div>
						<select class="js-select2" name="gender">
							<option>Please chooses</option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
							
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 validate-input bg1 " data-validate = "Select Date">
					<span class="label-input100">Date *</span>
					<input class="input100" type="date" name="date" placeholder="Enter Your date">
				</div>
				<div class="wrap-input100 validate-input bg1 " data-validate = "Select time">
					<span class="label-input100">Time *</span>
					<input class="input100" type="time" name="time"  max="18:00" min="10:00">
				</div>
				

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Appointment Location *</span>
					<div>
						<select class="js-select2" name="location">
							<option>Please chooses</option>
							<option>Ludhiana</option>
							<option>Patiala</option>
							<option>Jalander</option>
							<option>Panchkula</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>

				<div class="wrap-input100 validate-input bg1 " data-validate = "Enter Your Mobile Number">
					<span class="label-input100">Mobile Number *</span>
					<input class="input100" type="text" name="mobile" placeholder="Enter Your Mobile Number ">
				</div><div class="wrap-input100 validate-input bg1 " data-validate = "Enter Your Email Id">
					<span class="label-input100">Mail id *</span>
					<input class="input100" type="email" name="email" placeholder="Enter Your Email Id ">
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="submit">
						<span>
							Book Now
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				
				</div>
			</form>
		</div>
	</div>

      <script type="text/javascript">
	     if (window.history.replaceState){
			 window.history.replaceState(null, null, window.location.href);
		 }
	  </script>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').php());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').php());
	    });
	</script>
<!--===============================================================================================-->
	<script src="javascript/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
