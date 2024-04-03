<!DOCTYPE html>
<html>
<head>
<title>DTLK & BMA Limited | Careers</title>
	<link rel="icon" type="image/png" href="images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Life Cycle Asset Development and Management, Facility management, Project / Constrution Management, Procurement Management, Generator Servicing, Environment, Health and Safety Services, " />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
<header>

		
	<?php
        include('menu.php');
    ?>

	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider1">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider1-img" id="con-ban" style="background-image: url(images/banner01.jpg);" >
							<div class="slider_banner_info">

								
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>


<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		
		<div class="career-form" style="margin-bottom: 100px;">
            <div class="container">
				<h1>Careers</h1>
                <div class="contact-wthree">
						<h5>Complete The Form Below</h5><br>
					<form action="#" method="post">
                    <div class="form-group">
                            <!-- <label for="email">Email address:</label> -->
                            <input type="text" class="form-control" name="name" required="" placeholder="Your Full Name">
                          </div>
                          <div class="form-group">
                            <!-- <label for="email">Email address:</label> -->
                            <input type="email" class="form-control" name="email" required="" placeholder="Your Email">
                          </div>
                          <div class="form-group">
                            <!-- <label for="email">Email address:</label> -->
                            <input type="text" class="form-control" name="phone" required="" placeholder="Your Phone Number">
                          </div>
                          <div class="form-group">
                            <!-- <label for="email">Email address:</label> -->
                            <textarea type="text" class="form-control" name="message" required="" placeholder="Comments" style="height: 160px;"></textarea>
                          </div>
                        
						<div class="col-md-12">
						Specify your employment status <br><br>
						<div class="form-check-inline">
							<label class="form-check-label" for="check1">
								<input type="radio" class="form-check-input" id="check" name="vehicle" value="something" >Employed
							</label>
							</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<div class="form-check-inline">
							<label class="form-check-label" for="check2">
								<input type="radio" class="form-check-input" id="check" name="vehicle" value="something">Unemployed
							</label>
							</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<div class="form-check-inline">
							<label class="form-check-label" for="check3">
								<input type="radio" class="form-check-input"  id="check" name="vehicle" value="something">NYSC
							</label>
							</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<div class="form-check-inline">
							<label class="form-check-label" for="check4">
								<input type="radio" class="form-check-input"  id="check" name="vehicle" value="something">Intern
							</label>
						</div>
						</div>
						
						<br><br>
						<div style="text-align: center;">
							<input type="file" name="cv" accept=".pdf,.doc,.docx" required=""> <br><br>
						</div>
                        
						<input class="btn btn-success" type="submit" value="SUBMIT" style="width: 100%; background-color: #00a54f; color: #fff;">
					</form>
				</div>
            </div>
        </div>
	</div>
	<div class="col-md-2"></div>
</div>


<!-- Footer-->
<?php
        include('footer.php');
    ?>

<script  src="js/jquery.min.v3.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	

	
   <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
	
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">
	$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->


</body>
</html>