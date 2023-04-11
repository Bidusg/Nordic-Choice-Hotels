<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordic Choice Hotels - Fasiliteter</title>
    <link rel="stylesheet" src="css/felles.css">
    <?php require('inc/links.php') ?>
    <style>
        *{
        font-family: 'Poppins', sans-serif;
        }
        .h-font{
        font-family: 'Merienda', cursive;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        input[type=number] {
        appearance: textfield;

        }
        .custom-bg{
        background-color: #000;
        border: 1px solid #279e8c;
        }
        .custom-bg:hover{
        background-color: #279e8c;
        border-color: #279e8c;
        }
    </style>
</head>
    <body class="bg-light">

        <?php require('inc/header.php') ?>

        <!-- Carousel--->

        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="bilder/carousel/IMG_15372.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="bilder/carousel/IMG_40905.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="bilder/carousel/IMG_55677.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="bilder/carousel/IMG_62045.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="bilder/carousel/IMG_93127.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="bilder/carousel/IMG_99736.png" class="w-100 d-block"/>
                    </div>
                </div>
            </div>
        </div>

        <!---Chech avalabality form--->

        <div class="container availability-form">
            <div class="row">
               <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5>Check Booking Avalability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Jeg vil dra til</label>
                                <select class="form-select" shadow-none>
                                    <option selected>Destinasjon eller Hotell</option>
                                    <option value="1">Oslo, Norge</option>
                                    <option value="2">Stockholm, Sverige</option>
                                    <option value="3">København, Danmark</option>
                                    <option value="2">Helsinki, Finland</option>
                                    <option value="3">Gøteborg, Sverige</option>
                                    <option value="2">Malmö, Sverige</option>
                                    <option value="3">Bergen, Norge</option>
                                    <option value="3">Trondheim, Norge</option>
                                </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Sjekk-inn</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Sjekk-Ut</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Voksen</label>
                            <select class="form-select" shadow-none>
                                <option selected>Antall</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Barn</label>
                            <select class="form-select" shadow-none>
                                <option selected>Antall</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Søk</button>
                        </div>
                    </div>
                </form>
               </div> 
            </div>
        </div>
    

        <!--- Our Rooms --->


        <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font"> Våre Rom</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
                    <img src="bilder/rooms/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">kr 849 per natt</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Soverom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bad
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balkong
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Air Conditioning
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Varme Pumpe
                                    </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge round-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
                    <img src="bilder/rooms/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">kr 849 per natt</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Soverom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bad
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balkong
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Air Conditioning
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Varme Pumpe
                                    </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge round-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
                    <img src="bilder/rooms/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">kr 849 per natt</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Soverom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bad
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balkong
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Air Conditioning
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Varme Pumpe
                                    </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge round-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Flere Rom >>></a>
                </div>
            </div>
        </div>

	   <!--- Våre fasiliteter --->
       
        <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font"> Våre Fasiliteter</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="bilder/facilities/Wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="bilder/facilities/massage.svg" width="80px">
                    <h5 class="mt-3">Massasje</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="bilder/facilities/ac.svg" width="80px">
                    <h5 class="mt-3">Air Conditioning</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="bilder/facilities/Wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="bilder/facilities/Wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-12 text-center mt-5">
			        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Les Mer >>></a>
		        </div>
            </div>
        </div>

	   <!--- Vurderinger --->

	  <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font"> Vurderinger</h2>
	  	<div class="container">
			<div class="swiper swiper-testimonials">
				<div class="swiper-wrapper mb-5">
					<div class="swiper-slide bg-white p-4">
						<div class="profile d-flex align-items-center mb-3">
                            <i class="bi bi-person-circle" style="width:30px;"></i>
							<h6 class="m-0 ms-2">
								Randomn user1
							</h6>
						</div>	
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nemo ecxcepturi, 
							incidunt qui libero at omnis iure
							magni tempora ea.
						</p>		
					
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
					<div class="swiper-slide bg-white p-4">
						<div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-person-circle" style="width:30px;"></i>
							<h6 class="m-0 ms-2">
								Randomn user1
							</h6>
						</div>	
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nemo ecxcepturi, 
							incidunt qui libero at omnis iure
							magni tempora ea.
						</p>		
					
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
					<div class="swiper-slide bg-white p-4">
						<div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-person-circle" style="width:30px;"></i>
							<h6 class="m-0 ms-2">
								Randomn user1
							</h6>
						</div>	
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nemo ecxcepturi, 
							incidunt qui libero at omnis iure
							magni tempora ea.
						</p>		
					
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
            <div class="col-lg-12 text-center mt-5">
			    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Les Mer >>></a>
		    </div>
	  	</div>


		<!-- Les Om oss-->

		<h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font"> Kontakt Oss</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
					<iframe  class="w-100 rounded"  height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d213079.5817181829!2d10.516018867492665!3d59.82497535415145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416dd2eb00ce03%3A0x9adfdf8555fa7db8!2sNordic%20Choice%20Hotels%20HQ!5e1!3m2!1sno!2sno!4v1680648291510!5m2!1sno!2sno" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="bg-white p-4 rounded mb-4">
						<h5>
							Ring Oss
						</h5>
						<a href="tel: +4722401300" class="d-inline-block mb-2 text-decoration-none text-dark"> 
							<i class="bi bi-telephone-fill"></i> +47 22 40 13 00</a>
					</div>
					<div class="bg-white p-4 rounded mb-4">
						<h5>
							Følg Oss
						</h5>
						<a href="https://twitter.com/Nordic_Choice" class="d-inline-block mb-3"> 
							<span class="badge bg-light text-dark fs-6 p-2">
								<i class="bi bi-twitter me-1">  Twitter</i>
							</span>
						</a>
						<br>
						<a href="https://www.facebook.com/nordicchoicehotels/?locale=nb_NO" class="d-inline-block mb-3"> 
							<span class="badge bg-light text-dark fs-6 p-2">
								<i class="bi bi-facebook me-1">  Facebook</i>
							</span>
						</a>
						<br>
						<a href="https://www.instagram.com/nordicchoice/" class="d-inline-block"> 
							<span class="badge bg-light text-dark fs-6 p-2">
								<i class="bi bi-instagram me-1">  Instagram</i>
							</span>
						</a>
					</div>
				</div>
				</div>
			</div>
		</div>

        <?php require('inc/footer.php') ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>        
        <script>
            var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                }
            });

		var swiper = new Swiper(".swiper-testimonials", {
			effect: "coverflow",
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: "auto",
			slidesPerView: "3",
			loop: true,
			coverflowEffect: {
			  rotate: 50,
			  stretch: 0,
			  depth: 100,
			  modifier: 1,
			  slideShadows: false,
			},
			pagination: {
			  el: ".swiper-pagination",
			},
			breakpoints: {
				320: {
					slidesPerView:1,
				},
				640: {
					slidesPerView:1,
				},
				768: {
					slidesPerView:2,
				},
				1024: {
					slidesPerView:3,
				},

			}
		    });
        </script>
    </body>
</html>
