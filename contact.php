<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PixMix - Contact</title>
    <meta name="description" content="Covering All The Angles. Nothing slips through the cracks at PixMix, click to read more." />
    <meta name="keywords" content="PixMix Video Services, PixMix, video, videotaping, video productions company, video production, customized video production, video production studio, live video production, video production services, webcasting, live event production, event video production, corporate video production, news video production, mobile production, production studios boston, watertown, boston, massachusetts, new england, Ray Boyer" />
	
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	
	<?php include('./partials/base-metadata.php'); ?>    
    <?php include('./partials/base-css.php'); ?>    
    <?php include('./partials/base-js.php'); ?>

	<!-- Javascripts -->
	<script type="text/javascript" src="js/contact.js"></script>
	<script type="text/javascript" src="js/tiptip.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</head>
<body id="subpage">
	<div id="wrapper">
		<div id="header-subpage">
			<?php include('./partials/top.php'); ?>
		</div><!-- end of header-subpage -->

		<div id="main-content">
			<div class="content-left">
				<h2>Our Office</h2>

				<div class="block-content">
					<div class="address-sidebar">
						<div>
							<h4>Studio Location</h4>
							<div>960 Turnpike Street</div>
							<div>FoxFord Business Center</div>
							<div>Suite 203  Second Floor</div>
							<div>Canton, MA  02021</div>
						</div>
						<div>
							<h4>Main Business Number</h4>
							<div>617-901-7157</div>
						</div>
						<div>
						<h4><strong>PixMix is on the LTN Network</strong></h4>
							<h4>Fiber Circuit Number</h4>
							<div>Our Outbound (SEND) circuit # is <strong class="no-wrap">PIXM-BOS-E1</strong></div>
							<div>Our Inbound (RECEIVE) circuit # is <strong class="no-wrap">PIXM-BOS-D1</strong></div>
						</div>
						<div>
							<h4>Inbound IFB Number</h4>
							<div>339-502-9155</div>
						</div>
						<div>
							<h4>Inbound PL Number</h4>
							<div>508-395-2134</div>
						</div>
						<div>
							<h4>Control Room Trouble Number</h4>
							<div>617-901-7157</div>
						 </div>		 
						<div>
							<h4>Business Office</h4>
							<div>7 Cliff Road Suite 201</div>
							<div>Bellingham, MA 02019</div>
							<div><strong>Cell</strong> 617-901-7157</div>
							<div><strong>Land Line</strong> 508-966-3648</div>
						</div>
					</div>
					<div>
						<h2>Our Location</h2>
						<p>
							<strong>PixMix Video Services</strong> is located at 960 Turnpike Street in Canton MA.
							<br />
							We are in the first building on the LEFT as you enter the FoxFord Business Campus.
							<br />
							Our location is on the second floor of the building. We have ample, FREE off street parking.
						</p>
					</div>
					<div>
						<h2>SEND US AN EMAIL</h2>
						<!-- Contact Form -->
						<div id="contact">
							<div id="message"></div>
								<form method="post" action="submit-contact" name="contactform" id="contactform">
								<fieldset>
									<span class="input-wrapper">
										<label for=name accesskey=U><span class="required"></span> Name:</label>
										<input name="name" type="text" id="name" size="30" value="" />
									</span>
				          <br />
									<span class="input-wrapper">
				            <label for=email accesskey=E><span class="required"></span> Email:</label>
				            <input name="email" type="text" id="email" size="30" value="" />
									</span>
									<br />
									<span class="input-wrapper">
										<label for=subject accesskey=S><span class="required"></span> Subject:</label>
										<input name="subject" type="text" id="subject" size="30" value="" />
									</span>
				          <br />
									<label for=comments accesskey=C><span class="required"></span> Message:</label>
									<span class="input-text">
										<textarea name="comments" cols="40" rows="12"  id="comments" style="overflow: hidden;"></textarea>
									</span>
				          <br />
									<label class="submit"><input name="Submit" id="submit" type="submit" /><span>Submit Message</span></label>
								</fieldset>
							</form>
						</div><!--  End of contact form  -->
					</div>
				</div><!-- end of content-left -->
			</div>
			
			<div id="sidebar">
				<span class="sidebar-top"></span><!-- end of sidebar-top -->
				<div class="sidebar-middle">
			
					<div class="sidebar-block">
						<h4 class="title">Find us on the map</h4>
						<div class="block-content">
							<div class="map-holder">
								<iframe src="https://www.google.com/maps/embed/v1/place?q=960%20Turnpike%20Street%2C%20Canton%2C%20MA%2C%20USA&key=AIzaSyDV_9qcYFKiuPz2-dp1SvDZqj8yheuqX14"
									style="border:0;width:100%;"
									allowfullscreen=""
									loading="lazy"
								></iframe>
							</div>
							 
							<ul class="western">
						    <li>
						      <img src="images/contact/sign-960-turnpike-st-canton-ma.jpg" alt="Location Sign 960 Turnpike Street, Canton" />
						    </li>
						    <li>
							    <img src="images/contact/foxwoods-buisness-center.jpg" alt="Full View of Sign (the wide shot of the sign)" />
							  </li>
								<li>
									<img src="images/contact/exterior-960-turnpike-canton.jpg" alt="Exterior shot of 960 Turnpike Street building " />	
								</li>
								<li>
									<img src="images/contact/main-entrance.jpg" alt="Main Entrance" />	
								</li>
							</ul>
						</div><!-- end of block-content -->
					</div><!-- end of sidebar-block -->


				</div><!-- end of sidebar-middle -->
				<span class="sidebar-bottom"></span>
			</div><!-- end of sidebar -->


		</div><!-- end of main-content -->
	</div><!-- end of wrapper -->

	<?php include('./partials/footer.php'); ?>

</body>
</html>