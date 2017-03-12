<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PixMix - Webcasts</title>
    <meta name="description" content="Covering All The Angles. Nothing slips through the cracks at PixMix, click to read more." />
    <meta name="keywords" content="PixMix Video Services, PixMix, satellite media tours, satellite media tours boston, satellite media tour companies, satellite media tour companies boston, SMT Boston" />    

	<?php include('./partials/base-metadata.php'); ?>    
    <?php include('./partials/base-css.php'); ?>    
    <?php include('./partials/base-js.php'); ?>

	<link type="text/css" rel="stylesheet" href="css/Combiner-gallery7.css">

	<!-- Javascripts -->
	<script type="text/javascript" src="js/jquery.pikachoose.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/tiptip.js"></script>
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(
			function (){
				$("#pikame").PikaChoose({autoPlay:true, speed:4000, transition:[0]});
			});
	</script>
	
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/Combiner-gallery7.js"></script>

</head>
<body id="subpage">
	<div id="wrapper">
		<div id="header-subpage">
				
			<?php include('./partials/top.php'); ?>

		</div><!-- end of header-subpage -->


		<!-- end of navbar -->
		<div id="main-content">
			<div class="content-left">
				<h2>&nbsp;</h2>

                <div id="bigpic2"><img src="images/webcast/webcasta.png" alt="Webcast" />
                	<p id="desc">Move your mouse over the images below to view here...</p>
                </div>

                <div id="thumbs2">

                <ul>
                    <li><a rel="images/webcast/webcasta_sm.png" href="images/webcast/webcasta.png">
                		<img src="images/webcast/webcasta_sm.png" alt="Webcast" title="Wide shot of Multi-Camera webcast in studio" /></a></li>
                    <li> <a rel="images/webcast/webcastb_sm.png" href="images/webcast/webcastb.png">
                		<img src="images/webcast/webcastb_sm.png" alt="Webcast" title="2 shot of Multi-Camera Live web training for IBM" /></a></li>
                    <li> <a rel="images/webcast/webcastc_sm.png" href="images/webcast/webcastc.png">
                		<img src="images/webcast/webcastc_sm.png" alt="Webcast" title="Medium shot of webcast host" /></a></li>
                   	<li> <a rel="images/webcast/webcastd_sm.png" href="images/webcast/webcastd.png">
                		<img src="images/webcast/webcastd_sm.png" alt="Webcast" title="Webcast blade server instructional" /></a></li>
                </ul>

                </div>
			</div><!-- end of content-left -->

			<div id="sidebar">
				<span class="sidebar-top"></span><!-- end of sidebar-top -->
				<div class="sidebar-middle">
					<div class="sidebar-block">
						<h4 class="title">Webcasts</h4>
						<div class="block-content">
                            <p>
                                Webcasts are similar to Live Shots as they are
                                generally LIVE events.  One major difference is 
                                that webcasts typically utilize two or three cameras,
                                and generally run about 60 minutes or more in length.
                            </p>
                            <p>
                                PixMix works with the nation&rsquo;s leading webcast
                                service providers like ON24, <span class="no-wrap">Talk Point</span>,
                                <span class="no-wrap">U-Stream</span> and LiveStream to broadcast
                                the event out onto the web.
                                We can &ldquo;encode on site&rdquo; and stream the event directly
                                from our attached HD Control Room.   Or we can
                                use our Dedicated HD Fiber Line to deliver the 
                                video signal directly to any Content Delivery Network 
                                that you request. 
                            </p>
                            <p>
                                Live webcasts often include viewer interaction
                                through the use of real time e-mail Q &amp; A.
                                The webcast team works at our back bench
                                to coordinate this portion of the event with
                                the talent in the studio. 
                            </p>
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