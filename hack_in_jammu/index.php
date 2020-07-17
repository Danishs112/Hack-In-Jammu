<?php
if(isset($_POST['submit']))
 {
 
 $first_name=$_POST['first_name'];
 echo $first_name;
 $last_name=$_POST['last_name'];
 echo $last_name;
 $email=$_POST['email'];
 echo $email;
 $phone_no=$_POST['phone_no'];
 $address =$_POST['address'];
 $mobile_no =$_POST['phone_no'];
 $subject="Hack in Jammu";
 $body=$_POST['message'];
 $dtcreated=date('d-M-Y');
 $output ="You recorded have been recorded";
 





}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hack in Jammmu</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body style="overflow-x: hidden;" data-spy="scroll" data-target="#main-nav" id="home">
<!---------------------------------------------------------------------------------------------------->
<div id="navbar">
<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top mb-4 pb-2" id="main-nav">
  <a class="navbar-brand ml-5" href="#">Hack In Jammu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item ">
        <a class="nav-link" href="#registration">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#timeline">Timeline</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#schedule">Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prize" tabindex="-1" aria-disabled="true">Prizes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#judge" tabindex="-1" aria-disabled="true">Judges</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sponsors" tabindex="-1" aria-disabled="true">Sponsors</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#asked_question" tabindex="-1" aria-disabled="true">FAQ</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#contact_form" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<!--------------------------------------navbar-------------------------------------------------------->
<div id="registration">
	<div class="container">
		<div class="row ">
			<div class="col mt-5  ">
				<span class="vla mt-5"></span>
				<h1 class="ml-5 font-weight-bold text-white mt-5" style="font-size: 80px;">HACK IN JAMMU</h1> 
				<h1 class="ml-5 font-weight-bold text-white mt-4" style="font-size: 60px;">Jammu's Biggest HACKATHON</h1>
				<p class="text-right text-white lead mr-4" style="font-size:35px;"> Let's Hack it</p>
			</div>

		</div>

<div class="row ml-4 text-secondary text-left">
	<div class="col">
		<p><span class="mr-2"> <i class="fa fa-calendar fa-2x" aria-hidden="true"></i></span>14 November 2020 - 15 November 2020</p>
</div>
	</div>

	<br><br><br>
</div>
<!----------------------------------------------About US------------------------------------------------>
<div id="about_us" class="bg-secondary">
<div class="container">
	<div class="row">
		<div class="col mt-5">
			<p class="ml-4 text-white" style="font-size:32px;">About Us</p>
           <span class="vll"></span>
           
           <h1 class="ml-4 font-weight-bold text-white mt-4" style="font-size: 102px;">HACK IN JAMMU 2020</h1>
           <p style="font-size: 30px; text-align:justify;" class="ml-4 text-white">This event is festival  for all young, talented and intelligent minds and is going to be evaluated on a national grade looking forward for developing the most ingenious solution for the prevailing scenario our world is facing in a sprint like manner using the technologies of Artificial Intelligence and Augmented Reality which could easily help us in the precinct of health and ed-tech.<br><br>It is the 1st edition of HACK IN JAMMU going to be organised by the Script Foundation. It will be host to technical competition.</p>
	</div>
</div>

<br><br>
<div class="row text-center">
<div class="col">
	<h2 class="lead text-white text-center" style="font-size: 30px; text-align:justify;"> Join our Slack Group</h2>
<a href="https://join.slack.com/t/hackinjammu/shared_invite/zt-fvb2ero5-TktUmu8nEWpJZ8VPpaAHyQ"  class="btn btn-danger btn-lg rounded-pill text-center"> <i class="fa fa-slack" aria-hidden="true"></i>
SLACK</a>
<br><br>
</div>
</div>
</div>
</div>
<!--------------------------------------------counter + registration link------------------------------------->
<div id="registration">
	<div class="container">
		<div class="row">
			<div class="col">
				<br><br>
				<p id="demo"></p><br>
			</div>
		</div>

		<div class="row text-center">
			<div class="col">
		
	<a href="#"  class="btn btn-success btn-lg rounded-pill text-center">Register Here <i class="fa fa-rocket fa-1x" aria-hidden="true"> </i>
</a> 
	<br><br>
			</div>
		</div>

<div class="row text-secondary text-right">
	<div class="col">
		<p> Registeration closes on 10 November
</div>


	</div>
</div>
</div>
<!------------------------------------------Timeline------------------------------------------->
<div id="timeline">
	<div class="row">
		<div class="col">
			<img src="images/image.jpeg" alt="image" width="100%">
		</div>
	</div>
</div>
<!----------------------------------hackathon schedule--------------------------------------->

<div id="schedule" style="background-color: #193367" >
	<div class="container">
			<div class="row ml-5">
		<div class="col  mt-5">
          <span class="vl"></span>
          <h1 class="ml-3 font-weight-bold text-white mt-4" style="font-size: 50px;">Hackathon Schedule</h1> 
		</div>
	</div>

	<div class="row mt-5">
			<div class="col  mt-2">
				<p class="lead text-white text-center" style="font-size:20px;">Will be declared a Week ago before the Hackathon</p>
			</div>
		</div>
		</div>
	</div>

<!-----------------------------------------------------tracks--------------------------------------->

<div id="tracks" class="bg-secondary text-center">
	<div class="container">
		<div class="row">
			<div class="col mt-2">
				<h1 class="ml-3 lead text-white mt-2 text-center" style="font-size: 80px;">Tracks</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-4 mt-4">
				<img src="images/image1.png" alt="image1">
			</div>

			<div class="col-4 mt-4">
				<img src="images/image4.png" alt="image1">
			</div>

			<div class="col-4 mt-4">
				<img src="images/image5.png" alt="image1">
			</div>

			<div class="col-4 mt-4 ml-5">
				<img src="images/image6.jpeg" alt="image1" width="300px" height="170px" style="margin-left:200px;">
			</div>

				<div class="col-4 mt-4 ml-5">
				<img src="images/image3.jpeg" alt="image1" style="margin-left:180px;">
			</div>
		</div>
	</div>
	<br><br>
</div>
<!----------------------------------------------------Prize----------------------------------------->
<div id="prize" style="background-color: #193367">
	<div class="container">
	<div class="row ml-5">
		<div class="col  mt-5">
          <span class="vl "></span>
          <h1 class="ml-3 font-weight-bold text-white mt-4" style="font-size: 80px;">Prizes</h1> 
		</div>
	</div>


		<div class="row mt-5">
			<div class="col  mt-2">
				<p class="lead text-white text-center" style="font-size:20px;">To be declared Soon</p>
			</div>
		</div>

	<br> 
</div>
</div>



<!---------------------------------------------------Judges------------------------------------------->
<div id="judge" class="bg-secondary text-center">
	<div class="container">
		<div class="row">
			<div class="col">
               <h1 class="ml-3 lead text-white mt-4 " style="font-size: 80px;"> Judges</h1>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-sm">
				<img src="images/default.jpeg" alt="default_image" class="rounded-circle">
			</div>


			<div class="col-sm">
				<img src="images/default.jpeg" alt="default_image" class="rounded-circle">
			</div>

			<div class="col-sm">
				<img src="images/default.jpeg" alt="default_image" class="rounded-circle">
			</div>

		</div>

		<div class="row mt-5">
			<div class="col  mt-2">
				<p class="lead text-white" style="font-size:20px;">To be declared Soon</p>
			</div>
		</div>
		</div>
	</div>
</div>



<!------------------------------------event-partner and community partner------------------------------>
<div id="sponsors" style="background-color: #193367">
	<div class="container">
	<div class="row ml-5">
		<div class="col  mt-5">
          <span class="vl "></span>
          <h1 class="ml-3 font-weight-bold text-white mt-4" style="font-size: 80px;">Sponsors</h1>  
		</div>
	</div>
	<br>  
<!------------------------------------------------------------------------------------------------>	
	<div class="row ml-5">
		<div class="col ml-5 container">
			<span class="mr-4"><img src="images/logo.png" alt="givemycertificate"></span>
			<span class="ml-5"><img src="images/coding_block.png" alt="coding_block"> </span> 
		</div>
	</div>
<!------------------------------------------------------------------------------------------------->
 <div class="row">
 	<div class="col text-center">
 <p  style="font-size: 30px;" class="lead text-center text-white mt-5"> If You want to Sponsor us </p>
 <a href ="https://forms.gle/GJrz6CxbtBwtGEw3A" class=" btn-lg btn btn-info text-center" style="color:white;">Apply Here</a>
</div>
</div>
<!----------------------------------------------------------------------------------------------->
	</div>
	<br><br>
</div>
<!--------------------------------------Frequently asked question--------------------------------->

<div id="asked_question" class="bg-secondary text-center" >
	<div class="container">
		<div class="row">
			<div class="col mt-5">
                  <h1 class="lead text-white" style="font-size: 35px;"> Frequently Asked Questions </h1>
			</div>
		</div>
		<br><br>
<!----------------------------------------------------------------------------------------------->	
     <div class="row ml-4 mr-4">
     	<div class="col">

       <div class="accordion" id="accordionExample">

  <div class="card" style="background:#595959" >
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-white btn-block text-left" type="button" height="300" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="text-center" style="text-decoration: none;">
         <span style="color:white; font-size: 25px; margin-right:10px;"> Q1</span><span style="color:white; font-size: 30px;"> What is Hack In Jammu ?</span>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body text-white text-left">
Hack in Jammu is a nation-wide virtual Hackathon especially for communities and youngsters who intend to display their skills nationally and experience competitive world around them. It is a platform which will lead to a huge exposure for a novice and open gates for various opportunities for a developer.
      </div>
    </div>
  </div>
  

  <div class="card mt-2"  style="background:#595959" >
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-center" style="text-decoration: none;">
         <span style="color:white; font-size: 30px; margin-right:10px;"> Q2</span><span style="color:white; font-size: 30px;"> Why Hack In Jammu ?</span>
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body text-left text-white">
       This Hackathon does not only represents our country instead it represents contrasting mindsets of people existing in our country. We seek the most diverse solutions for the sake of evolution of our country in this time of catastrophe.
      </div>
    </div>
  </div>


  <div class="card mt-2" style="background:#595959">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="text-center" style="text-decoration: none;">
         <span style="color:white; font-size: 30px; margin-right:10px;"> Q3</span><span style="color:white; font-size: 30px;"> Can Students Attend ?</span>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body text-left text-white">
     Yes, everyone including students are welcomed for participation. We would love to see your participation as it is an event which focuses on surge of advancement of our nation.
      </div>
    </div>
  </div>


<div class="card mt-2" style="background:#595959">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="text-center" style="text-decoration: none;">
         <span style="color:white; font-size: 30px; margin-right:10px;"> Q4</span><span style="color:white; font-size: 30px;"> What Should I get from Hack In Jammu?</span>
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body text-left text-white">
   Hack In Jammu is an Virtual National Hackathon, which means it provides you the opportunity to participate directly from your Home<br>
-Get Goodies and Swags for every participant.<br>
-Exciting Prizes From Wolfarm,Jet Brains,Voiceflow and EchoAR<br>
-Learn Exiciting from Mentors.Judges and Speakers in 24 Hours<br>
-Get Balsamiq cloud credits and use to develop exciting projects<r>b

      </div>
    </div>
  </div>
</div>
</div>
     </div>
	</div>

	<br /><br /><br />
</div>
<!-----------------------------------------contact form-------------------------------------------->

<div id="contact_form" style="background-color: #193367">
	<div class="container ">
		<div class="row" >
			<div class="col mt-4">
				<span class="vl "></span>
                <h1 class="ml-4 font-weight-bold text-white mt-4" style="font-size: 70px;"> Contact Us</h1> 
                </div>
                </div>

<!------------------------------form---------------------------------------------------->
        <div class="row ml-4">
        	<div class="col-sm">
              <h3 class="lead ml-2 mb-4 mt-5 text-white">GET IN TOUCH</h3>


        	<form method="post" action="index.php">
             
            <div class="form-row">
            
             <div class="col">
             <input type="text" class="form-control" name="first_name" style="opacity:0.6;" placeholder="First name">
             </div>
              
             <div class="col">
             <input type="text" class="form-control" name="last_name" style="opacity:0.6;" placeholder="Last name">
             </div>
            
            </div>
<!--------------------------------------------------------------------------------------------->
            <div class="form-row mt-3">
            
             <div class="col">
             <input type="text" class="form-control" name="email" style="opacity:0.6;" placeholder="Email">
             </div>
              
             <div class="col">
             <input type="text" class="form-control" name="phone_no" style="opacity:0.6;" placeholder="Phone No">
             </div>
            
            </div>
<!----------------------------------------------------------------------------------------------->

            <div class="form-row mt-3">
            
             <div class="col">
             <input type="text" class="form-control" name="address" style="opacity:0.6;" placeholder="Address">
             </div>
             </div>
<!------------------------------------------------------------------------------------------------>

 <div class="form-row mt-3">
            
             <div class="col">
            
  <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" style="opacity:0.6;" placeholder="Type your Message here*"rows="3"></textarea>
            </div>
        </div> 
   <br>
 <input type="submit" name="submit" value="Submit" class="btn btn-lg rounded-pill" style="background-color:#0a1429; color:white; width:150px; font-size:15px; ">  

<!------------------------------------------------------------------------------------------------>         
            </form>
             
             </div>



        	<div class="col-sm">
        	</div>
        </div>
               

<!-------------------------------------------------------------------------------------->
</div>
	<br/><br ><br/><br >
</div>
<!----------------------------------------footer------------------------------------------------------->
<div id="footer" class="bg-secondary text-center">
	<div class="container ">
		<div class="row ">
			<div class="col mt-5 text-center">
				<span class="mr-3 " style="font-size:20px;">Join our mailing list an never miss an update!</span>
				 <!--- facebook --->
				 <span class="fa-stack fa-lg">
                     <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                     </span>
                <!--------facebook ---->    

                <!-----------instagram------>
                 <span class="fa-stack fa-lg mr-2">
                     <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                     </span>
                <!-----------instagram------>
                 <span class="fa-stack fa-lg mr-2">
                     <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
                <!-----------linkedin------>
                 <span class="fa-stack fa-lg mr-2">
                     <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                <!-----------youtube------>

                 <span class="fa-stack fa-lg mr-2">
                     <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-youtube-play fa-stack-1x fa-inverse" aria-hidden="true"></i>
                </span>
                <!-----------youtube------>
			</div>
		</div>

	<div class="row container ml-xl-5  mt-4">
	<div class="col text-center ml-xl-5">
    <form class="form-inline ml-xl-5">
    
    <div class="form-group mx-lg-3 mb-2 ml-xl-5" style="opacity:0.7px;">

    <input class="form-control"  type="text" style="opacity:0.6; width:400px;"  placeholder="Enter your email address*">
  </div>
  <button type="submit" class="btn btn-dark  text-white mb-2 rounded-pill" style="border:3px;">subscribe</button>
  
  </form>
 
	</div>	
	</div>

	<div class="row mt-5">
		<div class="col  text-center">
           <p style="font-size: 13px;" class="text-light"> &copy; Script Foundation. All rights reserved </p>
		</div>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!---------------------------------------animation---------------------------------------------------------------->
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js"></script>
<!------------------------------------------------------------------------------------------------------>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 14, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " " +"days" +" " + hours + "h" + " "
  + minutes + "m" + " " + seconds + "s";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

</script>

<script>
    $('.slider').slick({
        dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1 
     
    })
</script>
<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav' });

    // Smooth Scrolling
    $("#main-nav a").on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {

          window.location.hash = hash;
        });
      }
    });
  </script>

</body>
</html>