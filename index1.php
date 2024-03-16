<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php';    ?>
<script>
   function redirect() {
   if (screen.width <= 1000) {
       window.location.href= "http://bclub.co.in/mob/";
      
   }

   }
</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" onload="redirect();">
    <?php include 'nav.php'; ?>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>WELCOME TO <span class="text_color">Business Club</span> </h2>
			<h4>Technology Student's Gymkhana, IIT Kharagpur</h4>
		</div>
						
		<div class="page-scroll">
			<a href="#about" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
         <div class="container">
        	<div class="col-md-offset-4 col-md-6">
    			<div class="row">
					<div class="col-md-offset-1 col-md-6">
						<p>      
                            <br><br><br>
                           <a href="http://bclub.co.in/icc2020/" target="_blank" title="Register for ICC 2019"><button type="button" class="btn btn-lg btn-block" style="text-align: center; color: black; "><span style="font-size:30px;">ICC 2020</span></button></a>
                           
					    </p>
					</div>
				</div>
             </div>
		</div>		
    </section>

    

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h3> We are IIT Kharagpur’s in-campus society for all business things</h3>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
			        <div class="row">
			            <div class="col-xs-6 col-sm-4 col-md-4">
							<div class="wow bounceInUp" data-wow-delay="0.2s">
			                    <div class="inner">
			                        <div class="avatar">
			                        	<a title="Objective"><img src="img/objective.png" class="img-responsive img-circle" title="objective" alt="Cinque Terre" data-toggle="modal" data-target="#project1"></a>
			                        	<p><h3>Objective</h3></p>
			                        </div>
			                    </div>
							</div>
			            </div>
						<div class="col-xs-6 col-sm-4 col-md-4">
							<div class="wow bounceInUp" data-wow-delay="0.5s">
			                    <div class="inner">
			                        <div class="avatar">
			                        	<a title="Growth"><img src="img/growth.png" class="img-responsive img-circle" title="growth" alt="Cinque Terre" data-toggle="modal" data-target="#project2"></a>
			                        	<p><h3>Growth</h3></p>
			                        </div>
			                    </div>
							</div>
			            </div>
						<div class="col-xs-6 col-sm-4 col-md-4">
							<div class="wow bounceInUp" data-wow-delay="0.8s">
			                    <div class="inner">
			                        <div class="avatar">
			                        	<a titlle="Pathway"><img src="img/pathway.jpg" class="img-responsive img-circle" title="pathway" alt="Cinque Terre" data-toggle="modal" data-target="#project3"></a>
			                        	<p><h3>Pathway</h3></p>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>    		
			</div>
		</div>	
	</section>
	
	<!-- Modal -->	

	<div class="modal fade" id="project1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
		    <div class="modal-content">
			    <div class="modal-header">
			    	<h4 class="modal-title" id="myModalLabel">Objective</h4>
			    </div>
			    <div class="modal-body">
			        <p>The club's primary objective is to provide students with a platform through which they can enhance their understanding of finance, consulting and data analytics - subjects with an escalating and ubiquitous importance, but fraught with insufficient exposure due to lack of guidance in undergraduate institutions focusing on engineering.</p>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
		    </div>
	    </div>
    </div>

    <div class="modal fade" id="project2" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
	    <div class="modal-dialog">
		    <div class="modal-content">
			    <div class="modal-header">
			    	<h4 class="modal-title" id="myModalLabel">Growth</h4>
			    </div>
			    <div class="modal-body">
			        <p>We provide for our members, and increasingly the general student community, a knowledge sharing interface to interact with their concurrent peers and also with teachers, alumni and industry professionals.</p>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
		    </div>
	    </div>
    </div>

    <div class="modal fade" id="project3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
		    <div class="modal-content">
			    <div class="modal-header">
			    	<h4 class="modal-title" id="myModalLabel">Pathway</h4>
			    </div>
			    <div class="modal-body">
			        <p>The journey to our goals is being brought about by conducting educational open house sessions, seminars with eminent personalities, regular knowledge meetings and competitions for the students to test their deployability. It doesn’t just conclude  there; we are also unswervingly  committed to helping the general population in and around the campus, helping us give back to the society by creating an awareness of financial instruments available at their disposal.</p>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
		    </div>
	    </div>
    </div>	

	<?php include 'footer.php'; ?>

</body>

</html>
