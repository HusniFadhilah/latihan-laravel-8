<!DOCTYPE html>
<html lang="en">

<head>
	<title>Coming Soon | Edusiana.id</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ Storage::url('public/comingsoon/images/icons/logo.ico') }}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('public/comingsoon/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('public/comingsoon/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('public/comingsoon/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('public/comingsoon/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('public/comingsoon/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('public/comingsoon/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('public/comingsoon/css/main.css') }}">
	<!--===============================================================================================-->
</head>

<body>


	<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-20 p-b-20 respon1">
		<span></span>
		<div class="flex-col-c p-t-50 p-b-50">
			<img src="{{ Storage::url('public/comingsoon/images/logo/logo-long.jpg') }}" class="img-fluid w-20 mb-5">
			<h3 class="l1-txt1 txt-center p-b-10">
				Coming Soon
			</h3>

			<p class="txt-center l1-txt2 p-b-40">
				Our website is under construction
			</p>

			<div class="flex-w flex-c cd100 p-b-50">
				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 days">35</span>
					<span class="s1-txt1">Days</span>
				</div>

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 hours">17</span>
					<span class="s1-txt1">Hours</span>
				</div>

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 minutes">50</span>
					<span class="s1-txt1">Minutes</span>
				</div>

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 seconds">39</span>
					<span class="s1-txt1">Seconds</span>
				</div>
			</div>

			<a href="https://www.instagram.com/edusiana.id/">
				<button class="flex-c-m s1-txt2 size3 how-btn">
					Follow us for update now!
				</button>
			</a>
		</div>

		<span class="s1-txt3 txt-center">
			@ 2020 | Edusiana.id
		</span>

	</div>


	<!--===============================================================================================-->
	<script src="{{ Storage::url('public/comingsoon/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ Storage::url('public/comingsoon/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ Storage::url('public/comingsoon/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ Storage::url('public/comingsoon/vendor/select2/select2.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ Storage::url('public/comingsoon/vendor/countdowntime/moment.min.js') }}"></script>
	<script src="{{ Storage::url('public/comingsoon/vendor/countdowntime/moment-timezone.min.js') }}"></script>
	<script src="{{ Storage::url('public/comingsoon/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
	<script src="{{ Storage::url('public/comingsoon/vendor/countdowntime/countdowntime.js') }}"></script>
    <script>
        var releaseDate = "{{ env('EDUSIANA_OPEN_COMING_SOON') }}";
        $('#dateDisplay').text(moment(releaseDate).format('D MMMM YYYY'))
        var releaseDateSplitted = releaseDate.split('-')
        $(".cd100").countdown100({
          /*Set Endtime here*/
          /*Endtime must be > current time*/
          endtimeYear: parseInt(releaseDateSplitted[0]),
          endtimeMonth: parseInt(releaseDateSplitted[1]),
          endtimeDate: parseInt(releaseDateSplitted[2]),
          endtimeHours: 0,
          endtimeMinutes: 0,
          endtimeSeconds: 0,
          timeZone: "Asia/Jakarta",
          // ex:  timeZone: "America/New_York"
          //go to " http://momentjs.com/timezone/ " to get timezone
        });
      </script>
	<!--===============================================================================================-->
	<script src="{{ Storage::url('public/comingsoon/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{ Storage::url('public/comingsoon/js/main.js') }}"></script>

</body>

</html>