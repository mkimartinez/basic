<?php

$name = "Welcome Here";


echo $name;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Website</title>
    <meta name="description" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
   </head>
   <style>
    i.custom {font-size: 2em; color: gray;}

   </style>
   <body>
   <nav class="navbar navbar-inverse navbar-fixed-top" id="my navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">mtech</a>
    </div>
<div class="collapse navbar-collapse " id="navbar-collapse">
<a href="" class="btn btn-warning navbar-btn navbar-right ">Download Now</a>
      <ul class="nav navbar-nav">
         
           <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Comments</a></li>
			<li><a href="#"><?php echo $name;?></a></li>
      </ul>
	  </div>
	  </div> <!-- end container -->
	  </nav> <!-- end navbar -->
	  <!-- jumbotron -->
	   <div class="container  ">
	  <div class="jumbotron">
	 
  <h1><b>Mtech stores!<b></h1>
  <p class="text-center">The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men..</p>
<!--   <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
		<div class "btn-group">
		<a href=""class="btn btn-lg btn-info"><?php echo date('Y/m/d H:i:s')?></a>
		<a href=""class="btn btn-lg btn-info">Shop</a>
		<a href=""class="btn btn-lg btn-info">Help</a>
</div>
</div>  
</div> <!-- end container -->


<div class="container">
<section>
<div class="page-header" id="Home">
			<h2> Home </h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
			 when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
			 It has survived not only five centuries, but also the leap into electronic typesetting, 
			 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
			 sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
			 like Aldus PageMaker including versions of Lorem Ipsum </p
 </div>
 <div class="row">
	<div class="col-lg-4">
		<blockquote>
		<i class = "fa fa-adjust custom"></i>

		<h2><b>Nagbabasa</b></h2>
			<p> Matagal na nating alam na nakukuha ang atensyon ng nagbabasa ang nababasa na nilalaman ng pahina kapag tinitignan ang pagkakaayos.</p>
			<footer>martinez</footer>
			</blockquote>
</div>   <!--end container--->

	<div class="col-lg-4">
		<blockquote>
		<h2><b>Nagbabasa</b></h2>
			<p> Matagal na nating alam na nakukuha ang atensyon ng nagbabasa ang nababasa na nilalaman ng pahina kapag tinitignan ang pagkakaayos.</p>
			<footer>martinez</footer>
			</blockquote>
</div>   <!--end container--->
	<div class="col-lg-4">
		<blockquote>
		<h2><b>Nagbabasa</b></h2>
			<p> Matagal na nating alam na nakukuha ang atensyon ng nagbabasa ang nababasa na nilalaman ng pahina kapag tinitignan ang pagkakaayos.</p>
			<footer>martinez</footer>
			</blockquote>
	</div>
</div>   <!--end container--->
</section>
</div> 
<!--call to action--->
<section>
<div class="well">
<div class="container text-center">
<h3>Subscribe for notifications</h3>
<p>Enter your name and email</p>
<form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
  <button type="submit" class="btn btn-default"><i class = "fa fa-car custom">Send invitation</i></button>
</form>

</div>  <!--end container--->
</div> <!--end well-->

</section>
<i class = "fa fa-inr custom"></i>

	  
	  
    <script src="http://code.jquery.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
   </html>
