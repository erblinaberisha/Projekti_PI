<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Start header -->
	<?php
	if(!file_exists('assets/headernav.php') || !file_exists('assets/footer.php')){
		exit('The file was not included correctly in this website. Maybe that file does not exist.');
	}
	include('assets/headernav.php');
	?>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb-gallery">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Gallery</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>“Never Disappointed”</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="gallery-img-01.jpg">
							<img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="gallery-img-03.jpg">
							<img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="gallery-img-04.jpg">
							<img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="gallery-img-05.jpg">
							<img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="gallery-img-06.jpg">
							<img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!--Start Video-->
    <div style="text-align:center">

        <button onclick="playPause()">Play/Pause</button>
        <button onclick="makeBig()">Big</button>
        <button onclick="makeSmall()">Small</button>
        <button onclick="makeNormal()">Normal</button>
        <br><br>
        <video id="video1" width="420">
		  <source src="images/movie.mp4" type="video/mp4">
		  <source src="images/movie.ogg" type="video/ogg">
		  Your browser does not support HTML video.
		</video>
    </div>

    <script>
        var myVideo = document.getElementById("video1");

        function playPause() {
            if (myVideo.paused)
                myVideo.play();
            else
                myVideo.pause();
        }

        function makeBig() {
            myVideo.width = 650;
        }

        function makeSmall() {
            myVideo.width = 320;
        }

        function makeNormal() {
            myVideo.width = 520;
        }
    </script>
	<!--End Video-->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>We serve passion</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Blerina Luma</strong></h5>
                                <h6 class="text-dark m-0">Happy Customer</h6>
                                <p class="m-0 pt-3">“Breakfast will knock your slippers off.” I had breakfast there this morning and dinner tonight. All were well beyond my expectations. Everything is so fresh. Best clam chowder I have ever had. Clams and linguine were out
                                    of this world. Breakfast will knock your slippers off.
                                </p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Tringe Dema</strong></h5>
                                <h6 class="text-dark m-0">Our Customer</h6>
                                <p class="m-0 pt-3">"The Food is Excellent.” The food is excellent, generous portions and great prices. The service was fast and friendly. I highly recommended it if you’re in Prishtina.
                                </p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Ard Nika</strong></h5>
                                <h6 class="text-dark m-0">Our Customer</h6>
                                <p class="m-0 pt-3"> “The Food is Always Delicious!” We like to go to Food House every time we come to Prishtina. The food is always delicious! This is the first year we could make reservations (probably due to spacing because of the virus).
                                    Our waitress, Casey, was great!
                                </p>
                            </div>
                        </div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<?php include('assets/footer.php');?>
<!-- End Footer -->

</body>
</html>
