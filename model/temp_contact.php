	<?php require_once ('template/temp_01.php'); ?>
	<!-- map -->
	<div class = "top-space"></div>
		<section class="container-full">
		<div>
			<div style="overflow:hidden;height:450px;width:100%; "><div id="gmap_canvas" style="height:450px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">www.themeicrcle.net</a></div>
		</div>	
	</section>
	<!-- map_end -->	
<!-- <?php include ('model/temp_promotion.php') ?> -->
			<!--menu-->
	<?php
		include ('function.php');
		echo contact_menu ();			
	?>	
			<!--/.nav-collapse -->

	<!-- container -->
	<section class = "top jumbotron clearfix">	
	<div class = "container">
		<div class="row">		
			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>

				<div class = "col-md-8">
					<div class = "caption"><h3 class = "head-title">Address</h3></div>
					<address class="client_text">
						(24,26) , corner of Strand Road & Wadan Street, Lanmadaw Township,
						Yangon, Myanmar (Burma).
					</address>
					<div class = "caption"><h3 class = "head-title">Phone:</h4></div>
					<address class ="client_text">
						Hot Line: <br />253828881 , 253828883 , 253828884
					</address>
				</div>
				<div class = "col-md-4">
					<h4>What on Your's Mind? </h4>
				<br>
					<form action = "" method = "">
					<div class="row">
							<div class="col-sm-12">
								<input class="form-control" type="text" placeholder="Name"
								name = "name">
							</div>
					</div> <br />	
					<div class = "row">
							<div class="col-sm-12">
								<input class="form-control" type="text" placeholder="Email" 
								name = "email">
							</div>
					</div> <br />	
					<div class = "row">
							<div class="col-sm-12">
								<input class="form-control" type="text" placeholder="Phone" 
								name = "phone">
							</div>
					</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Type your message here..." class="form-control" rows="9" name = "message"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<!-- <div class="col-sm-6">
								<label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
							</div> -->
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Send message">
							</div>
						</div>
					</form>
				</div>
			</article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
	</section>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(16.775199, 96.139561),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(16.775199, 96.139561)});infowindow = new google.maps.InfoWindow({content:"<b>iNFo Net (Business Solution Development)</b><br/><br /> (24,26) , corner of Strand Road & Wadan Street, <br />Lanmadaw Township, <br />Yangon, Myanmar (Burma)." });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	<?php
	require_once ('footer.php');
	require_once ('template/temp_end.php');
	?>