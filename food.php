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
	<div class="all-page-title page-breadcrumb-menu" data-aos="fade-down"
	data-aos-duration="1200">
	
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Food</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Food -->
	<div class="food-box"  data-aos="fade-right" data-aos-duration="3000">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<br>
						<h2>Special Food <i class="fa fa-cutlery"></i></h2>
						<p>We serve passion.</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a> 
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Salads</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Soups</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Breakfast</a>
						<a class="nav-link" id="v-pills-file-tab" data-toggle="pill" href="#v-pills-file" role="tab" aria-controls="v-pills-file" aria-selected="false">Pizza</a>
						<a class="nav-link" id="v-pills-mess-tab" data-toggle="pill" href="#v-pills-mess" role="tab" aria-controls="v-pills-mess" aria-selected="false">Tradicional food</a>
						<a class="nav-link" id="v-pills-sett-tab" data-toggle="pill" href="#v-pills-sett" role="tab" aria-controls="v-pills-sett" aria-selected="false">Meal</a>
					</div>
				</div>
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
								
						<div class="row">
							<div class="col-lg-4 col-md-6 special-grid salads">
								<div class="gallery-single fix">
									<img src="images/green.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Green Salad</h4>
										<p>carrots,tomato,onion,green salad.</p>
										<h5> $7.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid salads">
								<div class="gallery-single fix">
									<img src="images/chicken.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Chicken Salad</h4>
										<p>chicken slices,tomato,avocado.</p>
										<h5> $9.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid salads">
								<div class="gallery-single fix">
									<img src="images/caprese.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Caprese Salad</h4>
										<p>tomato,mozzarella and basil.</p>
										<h5> $10.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/broccoli.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Broccoli Soup</h4>
										<p>onion,stalk celery,chicken broth,broccoli florets.</p>
										<h5> $15.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/carrot.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Carrot Soup</h4>
										<p>carrots,onion,ginger,vegetable broth.</p>
										<h5> $18.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/chickens.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Chicken Soup</h4>
										<p>celery,carrots,onions,roasted chicken,oregano.</p>
										<h5> $20.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/cream.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Cream of Mushroom Soup</h4>
										<p>mushrooms.garlic,herbs,onion,chicken broth</p>
										<h5> $25.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/minestrone.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Minestone Soup</h4>
					                    <p> squash,zucchini,potatoes and green beans,pasta noodles,tomatoes.</p>
										<h5> $22.79</h5>
									</div>
								</div>
							</div>
						
		

							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/tomatoes.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Tomatoes Soup</h4>
										<p>carrots,onion,tomatoes,basil,whipping cream.</p>
										<h5> $7.79</h5>
									</div>
								</div>
							</div>
						
		
							
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast1.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 1</h4>
										<p>eggs,bacon,croissants,waffles,fresh fruit.</p>
										<h5> $9.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast2.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 2</h4>
										<p>sausages,egg,toast slices white bread,tomato.</p>
										<h5> $10.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast3.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 3</h4>
										<p>pancakes with fruit and peanut butter.</p>
										<h5> $15.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast4.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 4</h4>
										<p>eggs,cheese,fresh chives.</p>
										<h5> $18.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid pizza">
								<div class="gallery-single fix">
									<img src="images/bbq.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Barbeque Chicken Pizza</h4>
										<p>bbq sauce,grilled chicken slices,onion,garlic,paprika.</p>
										<h5> $20.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid pizza">
								<div class="gallery-single fix">
									<img src="images/garlic.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Garlic Chicken Pizza</h4>
										<p>tomato sauce,chicken slices,garlic,cheese.</p>
										<h5> $25.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid pizza">
								<div class="gallery-single fix">
									<img src="images/house.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>House Pizza</h4>
										<p>tomato sauce,mozzarella cheese,green pepper,mushroom,olives.</p>
										<h5> $22.79</h5>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 special-grid pizza">
								<div class="gallery-single fix">
									<img src="images/pepperoni.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Pepperoni Pizza</h4>
										<p>pepperoni,tomato sauce,cheese.</p>
										<h5> $7.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid pizza">
								<div class="gallery-single fix">
									<img src="images/margherita.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Pizza margherita</h4>
										<p>tomato sauce,mozzarella cheese,basil leaves.</p>
										<h5> $9.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid pizza">
								<div class="gallery-single fix">
									<img src="images/vg.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Vegetable Pizza</h4>
										<p>aubergine,courgette flowers,almond,basil,parmesan.</p>
										<h5> $10.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid tradicional food">
								<div class="gallery-single fix">
									<img src="images/byrek.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Byrek me mish</h4>
										<p>The best taste.</p>
										<h5> $15.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid tradicional food">
								<div class="gallery-single fix">
									<img src="images/fli.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Fli</h4>
										<p>The best taste.</p>
										<h5> $18.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid tradicional food">
								<div class="gallery-single fix">
									<img src="images/jahnia.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Jahnia</h4>
										<p>The best taste.</p>
										<h5> $20.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid tradicional food">
								<div class="gallery-single fix">
									<img src="images/pershesh.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Përshesh me Pulë</h4>
										<p>The best taste.</p>
										<h5> $25.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid tradicional food">
								<div class="gallery-single fix">
									<img src="images/pogaqe.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Pogaqe me kos</h4>
										<p>The best taste.</p>
										<h5> $22.79</h5>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 special-grid tradicional food">
								<div class="gallery-single fix">
									<img src="images/speca.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Speca të mbushur</h4>
										<p>The best taste.</p>
										<h5> $7.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid tradicional food">
								<div class="gallery-single fix">
									<img src="images/tav.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Tav Kosi</h4>
										<p>The best taste.</p>
										<h5> $9.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal1.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 1</h4>
										<p>Baked Salmon.</p>
										<h5> $10.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal2.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 2</h4>
										<p>Beefsteak.</p>
										<h5> $15.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal3.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 3</h4>
										<p> Grilled Chicken.</p>
										<h5> $18.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal4.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 4</h4>
										<p>Chicken Fettuccine Alfredo.</p>
										<h5> $20.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal5.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 5</h4>
										<p>Hamburger.</p>
										<h5> $25.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal6.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 6</h4>
										<p>Lasagna.</p>
										<h5> $22.79</h5>
									</div>
								</div>
							</div>
						
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/rissoto.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 7</h4>
										<p>Rissoto.</p>
										<h5> $18.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal8.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 8</h4>
										<p>Rump-Steak.</p>
										<h5> $20.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal9.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 9</h4>
										<p>Shrimp Spagheti.</p>
										<h5> $25.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid meal">
								<div class="gallery-single fix">
									<img src="images/meal10.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Meal 10</h4>
										<p>Tuna with Potatoes.</p>
										<h5> $22.79</h5>
									</div>
								</div>
							</div>
						</div>
					

					

					</div>
					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<div class="row">
							<div class="col-lg-4 col-md-6 special-grid salads">
								<div class="gallery-single fix">
									<img src="images/green.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Green Salad</h4>
										<p>carrots,tomato,onion,green salad.</p>
										<h5> $7.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid salads">
								<div class="gallery-single fix">
									<img src="images/chicken.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Chicken Salad</h4>
										<p>chicken slices,tomato,avocado.</p>
										<h5> $9.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid salads">
								<div class="gallery-single fix">
									<img src="images/caprese.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Caprese Salad</h4>
										<p>tomato,mozzarella and basil.</p>
										<h5> $10.79</h5>
									</div>
								</div>
							</div>
						</div>
					
			


						
					</div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
						<div class="row">
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/broccoli.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Broccoli Soup</h4>
										<p>onion,stalk celery,chicken broth,broccoli florets.</p>
										<h5> $15.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/carrot.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Carrot Soup</h4>
										<p>carrots,onion,ginger,vegetable broth.</p>
										<h5> $18.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/chickens.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Chicken Soup</h4>
										<p>celery,carrots,onions,roasted chicken,oregano.</p>
										<h5> $20.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/cream.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Cream of Mushroom Soup</h4>
										<p>mushrooms.garlic,herbs,onion,chicken broth</p>
										<h5> $25.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/minestrone.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Minestone Soup</h4>
					                    <p> squash,zucchini,potatoes and green beans,pasta noodles,tomatoes.</p>
										<h5> $22.79</h5>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 special-grid soups">
								<div class="gallery-single fix">
									<img src="images/tomatoes.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Tomatoes Soup</h4>
										<p>carrots,onion,tomatoes,basil,whipping cream.</p>
										<h5> $7.79</h5>
									</div>
								</div>
							</div>
						</div>


					

					</div>
					<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
						<div class="row">
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast1.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 1</h4>
										<p>eggs,bacon,croissants,waffles,fresh fruit.</p>
										<h5> $9.79</h5>
									</div>
								</div>
							</div>	
						
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast2.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 2</h4>
										<p>sausages,egg,toast slices white bread,tomato.</p>
										<h5> $10.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast3.jfif" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 3</h4>
										<p>pancakes with fruit and peanut butter.</p>
										<h5> $15.79</h5>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 special-grid breakfast">
								<div class="gallery-single fix">
									<img src="images/breakfast4.jpg" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4>Breakfast 4</h4>
										<p>eggs,cheese,fresh chives.</p>
										<h5> $18.79</h5>
									</div>
								</div>
							</div>
						</div>
					



						</div>
						<div class="tab-pane fade" id="v-pills-file" role="tabpanel" aria-labelledby="v-pills-file-tab">
							<div class="row">
						<div class="col-lg-4 col-md-6 special-grid pizza">
							<div class="gallery-single fix">
								<img src="images/bbq.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Barbeque Chicken Pizza</h4>
									<p>bbq sauce,grilled chicken slices,onion,garlic,paprika.</p>
									<h5> $20.79</h5>
								</div>
							</div>
						</div>

					      <div class="col-lg-4 col-md-6 special-grid pizza">
							<div class="gallery-single fix">
								<img src="images/garlic.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Garlic Chicken Pizza</h4>
									<p>tomato sauce,chicken slices,garlic,cheese.</p>
									<h5> $25.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid pizza">
							<div class="gallery-single fix">
								<img src="images/house.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>House Pizza</h4>
									<p>tomato sauce,mozzarella cheese,green pepper,mushroom,olives.</p>
									<h5> $22.79</h5>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 special-grid pizza">
							<div class="gallery-single fix">
								<img src="images/pepperoni.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Pepperoni Pizza</h4>
									<p>pepperoni,tomato sauce,cheese.</p>
									<h5> $7.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid pizza">
							<div class="gallery-single fix">
								<img src="images/margherita.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Pizza margherita</h4>
									<p>tomato sauce,mozzarella cheese,basil leaves.</p>
									<h5> $9.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid pizza">
							<div class="gallery-single fix">
								<img src="images/vg.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Vegetable Pizza</h4>
									<p>aubergine,courgette flowers,almond,basil,parmesan.</p>
									<h5> $10.79</h5>
								</div>
							</div>
						</div>
					</div>



				

						</div>
						<div class="tab-pane fade" id="v-pills-mess" role="tabpanel" aria-labelledby="v-pills-mess-tab">
							<div class="row">
						<div class="col-lg-4 col-md-6 special-grid tradicional food">
							<div class="gallery-single fix">
								<img src="images/byrek.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Byrek me mish</h4>
									<p>The best taste.</p>
									<h5> $15.79</h5>
								</div>
							</div>
						</div>

					<div class="col-lg-4 col-md-6 special-grid tradicional food">
							<div class="gallery-single fix">
								<img src="images/fli.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Fli</h4>
									<p>The best taste.</p>
									<h5> $18.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid tradicional food">
							<div class="gallery-single fix">
								<img src="images/jahnia.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Jahnia</h4>
									<p>The best taste.</p>
									<h5> $20.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid tradicional food">
							<div class="gallery-single fix">
								<img src="images/pershesh.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Përshesh me Pulë</h4>
									<p>The best taste.</p>
									<h5> $25.79</h5>
								</div>
							</div>
						</div>

					<div class="col-lg-4 col-md-6 special-grid tradicional food">
							<div class="gallery-single fix">
								<img src="images/pogaqe.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Pogaqe me kos</h4>
									<p>The best taste.</p>
									<h5> $22.79</h5>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 special-grid tradicional food">
							<div class="gallery-single fix">
								<img src="images/speca.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Speca të mbushur</h4>
									<p>The best taste.</p>
									<h5> $7.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid tradicional food">
							<div class="gallery-single fix">
								<img src="images/tav.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Tav Kosi</h4>
									<p>The best taste.</p>
									<h5> $9.79</h5>
								</div>
							</div>
						</div>
					</div>
				




						</div>
						<div class="tab-pane fade" id="v-pills-sett" role="tabpanel" aria-labelledby="v-pills-sett-tab">
							<div class="row">
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal1.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 1</h4>
									<p>Baked Salmon.</p>
									<h5> $10.79</h5>
								</div>
							</div>
						</div>
					
                          <div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal2.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 2</h4>
									<p>Beefsteak.</p>
									<h5> $15.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal3.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 3</h4>
									<p> Grilled Chicken.</p>
									<h5> $18.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal4.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 4</h4>
									<p>Chicken Fettuccine Alfredo.</p>
									<h5> $20.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal5.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 5</h4>
									<p>Hamburger.</p>
									<h5> $25.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal6.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 6</h4>
									<p>Lasagna.</p>
									<h5> $22.79</h5>
								</div>
							</div>
						</div>
					
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal7.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 7</h4>
									<p>Rissoto.</p>
									<h5> $18.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal8.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 8</h4>
									<p>Rump-Steak.</p>
									<h5> $20.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal9.jpg" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 9</h4>
									<p>Shrimp Spagheti.</p>
									<h5> $25.79</h5>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 special-grid meal">
							<div class="gallery-single fix">
								<img src="images/meal10.jfif" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>Meal 10</h4>
									<p>Tuna with Potatoes.</p>
									<h5> $22.79</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
	<!-- End Food -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background" data-aos="fade-down"
	data-aos-easing="linear"
	data-aos-duration="1500">
	<div class="container">
	<div class="row">
	<div class="col-md-8 ml-auto mr-auto text-center">
	<p class="lead ">
	" If you're not the one cooking, stay out of the way and compliment the chef. "
	</p>
	<span class="lead">Michael Strahan</span>
	</div>
	</div>
	</div>
	</div>
	<!-- End QT -->
   
	
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
                                    of this world. Breakfast will knock your slippers off.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Tringe Dema</strong></h5>
								<h6 class="text-dark m-0">Happy Customer</h6>
								<p class="m-0 pt-3">"The Food is Excellent.” The food is excellent, generous portions and great prices. The service was fast and friendly. I highly recommended it if you’re in Prishtina.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Ard Nika</strong></h5>
								<h6 class="text-dark m-0">Happy Customer</h6>
								<p class="m-0 pt-3">“The Food is Always Delicious!” We like to go to Food House every time we come to Prishtina. The food is always delicious! This is the first year we could make reservations (probably due to spacing because of the virus).
                                    Our waitress, Casey, was great!</p>
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
