   
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5861K2TN4V');
</script>

<!-- home hero section -->
<section class="heroRent">

  <!-- Swiper -->
  <div class="heroRent__swiper swiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide heroRent__slide" style="background-image:url('assets/images/home/bg_1.jpg');">
        <div class="heroRent__shade"></div>
      </div>

      <div class="swiper-slide heroRent__slide" style="background-image:url('assets/images/home/bg_2.jpg');">
        <div class="heroRent__shade"></div>
      </div>

      <div class="swiper-slide heroRent__slide" style="background-image:url('assets/images/home/bg_3.jpg');">
        <div class="heroRent__shade"></div>
      </div>

    </div>
  </div>

  <!-- Common content -->
  <div class="heroRent__content">
    <div class="container">
      <div class="heroRent__contentInner">
        <span class="heroRent__sub">Affordable</span>
        <h1 class="heroRent__title">Sri Lanka Rent A Car</h1>
        <!-- <a href="[[~4]]" class="theme-btn btn-style-two heroRent__cta">Reserve your vehicle Now</a> -->
      </div>
    </div>
  </div>

  <!-- Booking bar -->
  <div class="heroRent__bar">
    <div class="container">

      <!-- Mobile Accordion Toggle -->
      <button type="button" class="heroRentAcc__toggle" aria-expanded="false" aria-controls="heroRentAccPanel">
        <span>Search & Reserve</span>
        <span class="heroRentAcc__icon" aria-hidden="true"></span>
      </button>

      <!-- Accordion Panel -->
      <div class="heroRentAcc__panel" id="heroRentAccPanel" hidden>
        <form class="heroRentForm" action="[[~4]]" method="get">
          <div class="heroRentForm__grid">

            <!-- Pickup -->
            <div class="heroRentForm__field heroRentForm__field--wide">
              <label class="heroRentForm__label" for="heroRent_pickup">Vehicle Pickup location</label>
              <input class="heroRentForm__input" id="heroRent_pickup" type="text" name="pickup_location" placeholder="e.g., Colombo" required>
            </div>

            <!-- Same location checkbox -->
            <div class="heroRentForm__field heroRentForm__field--check">
              <label class="heroRentForm__checkLabel" for="heroRent_sameLocation">
                <input type="checkbox" id="heroRent_sameLocation" checked>
                <span>Return to same location</span>
              </label>
            </div>

            <!-- Drop-off -->
            <div class="heroRentForm__field heroRentForm__field--wide" id="heroRent_dropWrap" style="display:none;">
              <label class="heroRentForm__label" for="heroRent_dropInput">Vehicle Drop-off location</label>
              <input class="heroRentForm__input" type="text" name="dropoff_location" id="heroRent_dropInput" placeholder="e.g., Kandy">
            </div>

            <!-- Pickup datetime (Flatpickr) -->
            <div class="heroRentForm__field">
              <label class="heroRentForm__label" for="heroRent_pickupDT">Pickup date & time</label>
              <input class="heroRentForm__input heroRentDT" id="heroRent_pickupDT" type="text" name="pickup_datetime" placeholder="Pickup Date & Time" required>
            </div>

            <!-- Dropoff datetime (Flatpickr) -->
            <div class="heroRentForm__field">
              <label class="heroRentForm__label" for="heroRent_dropDT">Drop-off date & time</label>
              <input class="heroRentForm__input heroRentDT" id="heroRent_dropDT" type="text" name="dropoff_datetime" placeholder="Drop-off Date & Time" required>
            </div>

            <!-- Submit -->
            <div class="heroRentForm__field heroRentForm__field--submit">
              <button type="submit" class="heroRentForm__btn">Search</button>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>

</section>

<!-- who we are section -->
<section class="ftco-section ftco-wrap-about srAbout">
  <div class="container">
    <div id="tsparticles"></div>

    <div class="row align-items-start">
      <!-- LEFT: big image -->
      <div class="col-lg-5">
        <div class="srAbout__bigImg" style="background-image:url('assets/images/home/about_us_1.jpg');"></div>
      </div>

      <!-- RIGHT: content -->
      <div class="col-lg-7">
        <div class="srAbout__content ftco-animate pt-0">

          <div class="srAbout__heading">
            <span class="srAbout__tag">WHO</span>
            <h2 class="srAbout__title">We Are</h2>
          </div>

          <p class="srAbout__text">
            <b class="srAbout__brand">SR Rent A Car</b> 
            is a locally owned and operated car rental company in Sri Lanka that provides affordable options for all travelers.
            The SR Team has been welcoming visitors from all over the world since 2004. We understand what our clients expect
            and deliver because we know what it’s like to be a consumer.
          </p>

          <!-- Floating Image Inside Text -->
          <div class="srAbout__floatImg" style="background-image:url('assets/images/home/about_us_2.jpg');"></div>

          <p class="srAbout__text">
            Our new fleets of vehicles are maintained to the highest standard, ensuring cleanliness & reliability.
            We take safety very seriously, making it easier for you to relax and enjoy a family vacation.
            From a fleet of more than 500 vehicles, you can find the perfect match between budget and luxury from well-known brands.
          </p>

          <p class="srAbout__text">
            With offices conveniently located near Bandaranaike International Airport, we're able to meet and greet you with a smile
            and provide a two-way airport shuttle. You can also try our doorstep delivery service anywhere in the country for a nominal fee.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>
		
<!-- counter section -->
<section class="srStats" id="section-counter">
  <div class="container">
    <div class="srStats__grid">

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true">🏆</div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="15">0</strong>
          <span class="srStats__label">Awards</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true">⏳</div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="20">0</strong>
          <span class="srStats__label">Years of Experience</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true">🚗</div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="500">0</strong>
          <span class="srStats__label">Vehicles</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true">🧑‍✈️</div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="560">0</strong>
          <span class="srStats__label">Chauffeurs</span>
        </div>
      </div>

      <div class="srStats__card ftco-animate">
        <div class="srStats__icon" aria-hidden="true">😊</div>
        <div class="srStats__meta">
          <strong class="srStats__num number" data-number="45000">0</strong>
          <span class="srStats__label">Happy Customers Annually</span>
        </div>
      </div>

    </div>
  </div>
</section>
	  
	  <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-12 text-center heading-section ftco-animate">
					<span class="subheading">Why</span>
					<h2 class="mb-4">We Special</h2>
				</div>
			</div>
	
			<!-- Carousel -->
			<div id="servicesCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row justify-content-center">
							<div class="col-12 col-md-4 d-flex align-self-stretch ftco-animate text-center">
								<div class="item">
									<img src="assets/images/home/specialities/sr_cards_1.jpg" alt="Description of Image 1" style="width: 100%; height: auto; display: block;">
								</div>
							</div>
							<div class="col-12 col-md-4 d-flex align-self-stretch ftco-animate text-center">
								<div class="item">
									<img src="assets/images/home/specialities/sr_cards_2.jpg" alt="Description of Image 2" style="width: 100%; height: auto; display: block;">
								</div>
							</div>
							<div class="col-12 col-md-4 d-flex align-self-stretch ftco-animate text-center">
								<div class="item">
									<img src="assets/images/home/specialities/sr_cards_3.jpg" alt="Description of Image 3" style="width: 100%; height: auto; display: block;">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row justify-content-center">
							<div class="col-12 col-md-4 d-flex align-self-stretch ftco-animate text-center">
								<div class="item">
									<img src="assets/images/home/specialities/sr_cards_4.jpg" alt="Description of Image 4" style="width: 100%; height: auto; display: block;">
								</div>
							</div>
							<div class="col-12 col-md-4 d-flex align-self-stretch ftco-animate text-center">
								<div class="item">
									<img src="assets/images/home/specialities/sr_cards_5.jpg" alt="Description of Image 5" style="width: 100%; height: auto; display: block;">
								</div>
							</div>
							<div class="col-12 col-md-4  d-flex align-self-stretch ftco-animate text-center">
								<div class="item">
									<img src="assets/images/home/specialities/sr_cards_6.jpg" alt="Description of Image 6" style="width: 100%; height: auto; display: block;">
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<a class="carousel-control-prev" href="#servicesCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#servicesCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- End of Carousel -->
	
		</div>
	</section>
	




	  <section class="ftco-section">
		<div class="container">
			<div class="row no-gutters justify-content-center mb-5 pb-2">
		  <div class="col-md-12 text-center heading-section ftco-animate">
			  <span class="subheading">National</span>
			<h2 class="mb-4">Festivals</h2>
		  </div>
		</div>
  
		
  
  
		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <div class=" flex-center">
				<div class="container">
				  <div class="row align-items-center">
					<div class="col-md-7 col-12 order-md-1 order-1">
					  <h4 style="color: red; font-size: 22px;">Vesak Full Moon Poya Day</h4>
					  <p style="text-align: justify;">Vesak, also known as Buddha Purnima or Buddha Day, is the most important festival in the Buddhist calendar. It commemorates the birth, enlightenment, and passing (parinirvana) of Gautama Buddha, all of which are believed to have occurred on the same full moon day in the month of Vesak</p>
				  
					  <a href="#" style="font-size: 20px;font-weight: 700; border: 1px solid rgb(134, 0, 0); padding: 5px;">Festival Session : April or May</a> </div>
					<div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/images/festivals/1.jpg" class="mx-auto" alt="slide"></div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <div class=" flex-center">
				<div class="container">
				  <div class="row align-items-center">
					<div class="col-md-7 col-12 order-md-1 order-2">
					  <h4 style="color: red; font-size: 22px;">Deepavali Festival</h4>
					  <p style="text-align: justify;">Deepavali, also known as Diwali, is one of the most important and widely celebrated festivals in Hinduism, as well as in other Indian-origin religions like Sikhism and Jainism. The word "Deepavali" comes from the Sanskrit words "deepa," meaning light, and "avali," meaning row, which signifies "a row of lights." It is often called the "Festival of Lights" and symbolizes the victory of light over darkness, good over evil, and knowledge over ignorance.</p>
				  
					  <a href="#" style="font-size: 20px; font-weight: 700; border: 1px solid rgb(134, 0, 0); padding: 5px;">
					   Festival Session : October or November
					</a>
					 </div>
					<div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/images/festivals/2.jpg" class="mx-auto" alt="slide"></div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <div class=" flex-center">
				<div class="container">
				  <div class="row align-items-center">
					<div class="row align-items-center">
					  <div class="col-md-7 col-12 order-md-1 order-3">
						<h4 style="color: red; font-size: 22px;">Sinhala & Tamil New Year Festival</h4>
						<p style="text-align: justify;">Sinhala New Year, also known as Aluth Avurudu, is a major cultural festival in Sri Lanka, primarily celebrated by the Sinhalese community. It marks the end of the harvest season and the transition of the sun from the zodiac sign Pisces to Aries, symbolizing the start of the new year in the Hindu solar calendar. This event typically occurs in April and is a time for family gatherings, rituals, and festivities that blend both Buddhist and astrological traditions.</p>
					
						<a href="#" style="font-size: 20px;font-weight: 700; border: 1px solid rgb(134, 0, 0); padding: 5px;">Festival Session : April</a> </div>
					  <div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/images/festivals/3.jpg" class="mx-auto" alt="slide"></div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
  
			<div class="carousel-item">
			  <div class=" flex-center">
				<div class="container">
				  <div class="row align-items-center">
					<div class="row align-items-center">
					  <div class="col-md-7 col-12 order-md-1 order-4">
						<h4 style="color: red; font-size: 22px;">Esala Perahara</h4>
						<p style="text-align: justify;">Esala Perahera, also known as the Festival of the Tooth, is one of the grandest and most sacred Buddhist festivals in Sri Lanka. It takes place annually in the city of Kandy during the month of Esala (July or August), and is held in honor of the Sacred Tooth Relic of the Buddha, which is enshrined in the Temple of the Tooth (Sri Dalada Maligawa).</p>
					
						<a href="#" style="font-size: 20px;font-weight: 700; border: 1px solid rgb(134, 0, 0); padding: 5px;">Festival Session : July or August</a> </div>
					  <div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/images/festivals/4.jpg" class="mx-auto" alt="slide"></div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
  
			<div class="carousel-item">
			  <div class=" flex-center"></div>
				<div class="container">
				  <div class="row align-items-center">
					<div class="row align-items-center">
					  <div class="col-md-7 col-12 order-md-1 order-5">
						<h4 style="color: red; font-size: 22px;">Sri Pada Festival</h4>
						<p style="text-align: justify;">The Sri Pada Festival is an annual pilgrimage that takes place at Sri Pada (Adam’s Peak) in Sri Lanka. This sacred mountain is a revered site for Buddhists, Hindus, Muslims, and Christians due to the sacred footprint at its summit, which each religion attributes to a significant religious figure. The pilgrimage season typically runs from December to April, coinciding with the dry season, making it easier to ascend the mountain.</p>
					
						<a href="#" style="font-size: 20px;font-weight: 700; border: 1px solid rgb(134, 0, 0); padding: 5px;"> Festival Session : December to April</a> </div>
					  <div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/images/festivals/5.jpg" class="mx-auto" alt="slide"></div>
					</div>
				  </div>
				</div>
			  </div>


              <div class="carousel-item">
                <div class=" flex-center"></div>
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-5">
                          <h4 style="color: red; font-size: 22px;">Nallur Festival</h4>
                          <p style="text-align: justify;">The Nallur Festival stands as a vibrant and extraordinary Hindu celebration deeply rooted in Sri Lankan cultural heritage. This spectacular 25-day festival centers around the historic Nallur Kandswamy Temple in Jaffna, dedicated to Lord Murugan (also known as Skanda), the Hindu god of war and victory. The festival transforms the temple premises into a mesmerizing spectacle of devotion, featuring elaborate rituals, traditional music, intricate dance performances, and breathtaking processions.</p>
                      
                          <a href="#" style="font-size: 20px;font-weight: 700; border: 1px solid rgb(134, 0, 0); padding: 5px;"> Festival Session : July to August</a> </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/images/festivals/6.jpg" class="mx-auto" alt="slide"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                    <div class=" flex-center"></div>
                      <div class="container">
                        <div class="row align-items-center">
                          <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-5">
                              <h4 style="color: red; font-size: 22px;">Nallur Festival</h4>
                              <p style="text-align: justify;">The Kataragama Festival emerges as one of Sri Lanka's most mystical and inclusive religious celebrations, taking place in the sacred town of Kataragama. This unique festival transcends religious boundaries, drawing pilgrims from Buddhist, Hindu, Muslim, and indigenous communities in a remarkable display of spiritual unity. Centered around the Kataragama Devale, the festival honors Lord Skanda (Murugan), a deity revered for his warrior spirit and divine grace. The celebration reaches its zenith with spectacular fire-walking ceremonies, elaborate processions, and intense devotional rituals that blend ancient traditions with spiritual fervor.</p>
                          
                              <a href="#" style="font-size: 20px;font-weight: 700; border: 1px solid rgb(134, 0, 0); padding: 5px;"> Festival Session : July to August</a> </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/images/festivals/7.jpg" class="mx-auto" alt="slide"></div>
                          </div>
                        </div>
                      </div>
                    </div>






			</div>
			  
			</div>
  
		  </div>
		  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
	  
		</div>
	</section>
  
  
  
  
  
  
  
  
  
  
	
  
		
			<!-- Slick Carousel -->
		  
  
  <section class="ftco-section bg-light">
	<div class="container">
	  <div class="row justify-content-center mb-5 pb-2">
		<div class="col-md-12 text-center heading-section ftco-animate">
		  <span class="subheading">Our</span>
		  <h2 class="mb-4">Fleet</h2>
		</div>
	  </div>
  
	  <!-- Carousel -->
	  <div id="fleetCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		  <!-- First item -->
		  <div class="carousel-item active">
			<div class="row">
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/mcar.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title">MINI CARS</h1>
                      
					</div>
					<div class="info-card-detail">
					 <h6 class="cat">Perudua Axia</h6>
					 <h6 class="cat">Japan Alto</h6>
					 <h6 class="cat">Indian Alto</h6>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/econ.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> ECONOMY CARS </h1>
                      
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Toyota Aqua</h6>
						<h6 class="cat">Suzuki Hustler</h6>
						<h6 class="cat">Suzuki Swift</h6>

						<h6 class="cat">Suzuki WagonR</h6>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/standard.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> STANDARD CARS</h1>
                      
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Perudua Bezza</h6>
						<h6 class="cat">Honda Insight</h6>
						<h6 class="cat">KIA RIO </h6>
						<h6 class="cat">Nissan Sunny</h6>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/semi_ex.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> SEMI EXECUTIVE CARS </h1>
                    
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Toyota Corolla 121</h6>
						<h6 class="cat">Toyota Belta</h6>
						<h6 class="cat">Honda Grace </h6>
						<h6 class="cat">Toyota Prius</h6>
					</div>
				  </div>
				</div>
			  </div>
			  <!-- Add more items here for the first slide -->
			</div>
		  </div>
  
		  <!-- Second item -->
		  <div class="carousel-item">
			<div class="row">
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/ex.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> EXECUTIVE CARS </h1>
                      
					 
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Toyota Axio</h6>
						<h6 class="cat">Toyota Allion</h6>
						
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/lux.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> LUXURY CARS </h1>
                     
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Mercedes Benz</h6>
						<h6 class="cat">BMW 520D</h6>
						<h6 class="cat">Jaguar RXF</h6>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/msuv.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> MINI SUV (4 X 4 ) </h1>
                    
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Hyundai Tucson</h6>
						<h6 class="cat">Nissan X - Trail</h6>
						<h6 class="cat">KIA Sorento</h6>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/lsuv.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> LARGE SUV (4 X 4 ) </h1>
				  
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Toyota Land Cruiser V8</h6>
						<h6 class="cat">Toyota Land Cruiser V150</h6>
						<h6 class="cat">Mitsibishi Montero</h6>
					</div>
				  </div>
				</div>
			  </div>
			  <!-- Add more items here for the second slide -->
			</div>
		  </div>
  
  
		  <div class="carousel-item">
			<div class="row">
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/minivan.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> MINI VAN </h1>
					 
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Nissan Vanette</h6>
						<h6 class="cat">Nissan Caravan</h6>
						
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/van.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> VAN </h1>
					 
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Toyota KDH</h6>
						<h6 class="cat">Micro Tourer</h6>
						
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/minibus.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> LUXURY COACH </h1>
				  
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Toyota Coaster</h6>
					
					</div>
				  </div>
				</div>
			  </div>
  
			  <div class="col-sm-6 col-md-3">
				<div class="info-card">
				  <img style="width: 100%" src="assets/images/fleet/bus.png" />
				  <div class="info-card-details animate">
					<div class="info-card-header">
					  <h1 class="car_title"> SUPER LUXURY COACH </h1>
				  
					</div>
					<div class="info-card-detail">
						<h6 class="cat">Scania</h6>
						
					</div>
				  </div>
				</div>
			  </div>
  
			  <!-- Add more items here for the second slide -->
			</div>
		  </div>
  
  
  
  
  
  
		  <!-- Add additional carousel items as needed -->
		  
		</div>
		
		<!-- Controls -->
		<a class="carousel-control-prev" href="#fleetCarousel" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#fleetCarousel" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
      <a href="[[~4]]" class="theme-btn btn-style-four" style="margin-top: 50px; padding-top: 20px; padding-bottom: 20px;border-radius: 10px;">Explore Fleet</a>

     


	</div>
   
  </section>
  
  <!-- Include jQuery and Bootstrap JS (add this before the closing </body> tag) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
	
  <section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">What</span>
				<h2 class="mb-4">We Offer</h2>
			</div>
		</div>

		<div class="container mb-4">
			<div class="row">
				<!-- Card 1 -->
				<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
				  <div class="card shadow">
					  <div class="card-body text-center" style="height: 450px;">
						  <a href="#">
							  <img class="card-img-top" src="assets/images/home/rentacar.jpg" alt="">
						  </a>
						  <hr>
						  <h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: rgb(0, 8, 34);size: 20px;">Rent A Car</h3>
						  <hr>
						  <p style="text-align: justify; font-size: 14px;">SR Rent A Car is an independent car rental company in Sri Lanka since 2004. We offer luxurious customer service for you at the most affordable rental car rates.</p>
						  <a class="theme-btn btn-style-four" href="[[~9]]" role="button">Explore More</a>
					  </div>
				  </div>
			  </div>
			  <!-- Card 2 -->
			  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
				<div class="card shadow">
					<div class="card-body text-center" style="height: 450px;">
						<a href="#">
							<img class="card-img-top" src="assets/images/home/transfer.jpg" alt="">
						</a>
						<hr>
						<h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: rgb(0, 8, 34);size: 20px;">Airport Transfer</h3>
						<hr>
						<p style="text-align: justify; font-size: 14px;">SR Rent A Car offer chauffeur-driven Airport Transfer and Hotel Transfer in Sri Lanka. We offer our service for Colombo International Airport & all hotels in Sri Lanka.</p>
						<a class="theme-btn btn-style-four" href="[[~9]]" role="button">Explore More</a>
					</div>
				</div>
			</div>

			  <!-- Card 3 -->
			  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
				<div class="card shadow">
					<div class="card-body text-center" style="height: 450px;">
						<a href="#">
							<img class="card-img-top" src="assets/images/home/wedding.jpg" alt="">
						</a>
						<hr>
						<h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: rgb(0, 8, 34);size: 20px;">Wedding Rentals</h3>
						<hr>
						<p style="text-align: justify; font-size: 14px;">Your wedding day is the most memorable day which you’ll remember for the rest of your life. You try your very best to make it perfect with many items.</p>
						<a class="theme-btn btn-style-four" href="[[~9]]" role="button">Explore More</a>
					</div>
				</div>
			</div>
			</div>
		</div>

	

	</div>
</section>
		  
		  <section class="ftco-section testimony-section img">
			  <div class="overlay"></div>
		<div class="container">
		  <div class="row justify-content-center mb-5">
			<div class="col-md-12 text-center heading-section ftco-animate">
				<span class="subheading">Testimony</span>
			  <h2 class="mb-4">Happy Customer</h2>
			</div>
		  </div>
		 
		  <!--heading--->
   
		<!--testimonials-box-container------>
		<div class="testimonial-box-container">
		   
			<!--BOX-2-------------->
			<div class="testimonial-box">
				<!--top------------------------->
				<div class="box-top">
					<!--profile----->
					<div class="profile">
						<!--img---->
						<div class="profile-img">
							<img src="assets/images/testimonial/1.png" />
						</div>
						<!--name-and-username-->
						<div class="name-user">
							<strong>UnderSmokingDoors TV </strong>
							<span>August 20, 2024.</span>
						</div>
					</div>
					<!--reviews------>
					<div class="reviews">
					  <img src="assets/images/testimonial/google.png" alt="Google Logo" class="google-logo">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i><!--Empty star-->
					</div>
				</div>
				<!--Comments---------------------------------------->
				<div class="client-comment">
				  <p style="text-align: justify;">Tutto perfetto, ritiro semplice e veloce, auto in perfette condizioni..un ringraziamento particolare a Sampath per l'attenzione e disponibilità dimostrata..consiglio assolutamente! </p>
				</div>
			</div>
			  <!--BOX-1-------------->
			  <div class="testimonial-box">
				<!--top------------------------->
				<div class="box-top">
					<!--profile----->
					<div class="profile">
						<!--img---->
						<div class="profile-img">
							<img src="assets/images/testimonial/2.png" />
						</div>
						<!--name-and-username-->
						<div class="name-user">
							<strong>Daniel “Kraiks” Vachal </strong>
							<span>August 12, 2024.</span>
						</div>
					</div>
					<!--reviews------>
					<div class="reviews">
					  <img src="assets/images/testimonial/google.png" alt="Google Logo" class="google-logo">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i><!--Empty star-->
					</div>
				</div>
				<!--Comments---------------------------------------->
				<div class="client-comment">
					<p style="text-align: justify;">Great service overall, we were delayed because of our flight. No problem, they offered to deliver the car to our hotel.However, i didnt have my international </p>
				</div>
			</div>
			<!--BOX-3-------------->
			<div class="testimonial-box">
				<!--top------------------------->
				<div class="box-top">
					<!--profile----->
					<div class="profile">
						<!--img---->
						<div class="profile-img">
							<img src="assets/images/testimonial/3.png" />
						</div>
						<!--name-and-username-->
						<div class="name-user">
						  <strong>Brian Steele </strong>
						  <span>August 19, 2024.</span>
						</div>
					</div>
					<!--reviews------>
					<div class="reviews">
					  <img src="assets/images/testimonial/google.png" alt="Google Logo" class="google-logo">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i><!--Empty star-->
				 
					</div>
				</div>
				<!--Comments---------------------------------------->
				<div class="client-comment">
					<p>We had booked an airport transfer from Our hotel in Bentota Thaala to the airport and our driver Sahan had been delayed by the weather and traffic but still managed ...</p>
				</div>
			</div>
			<!--BOX-4-------------->
			<div class="testimonial-box">
				<!--top------------------------->
				<div class="box-top">
					<!--profile----->
					<div class="profile">
						<!--img---->
						<div class="profile-img">
							<img src="assets/images/testimonial/4.png" />
						</div>
						<!--name-and-username-->
						<div class="name-user">
							<strong>Devran Karaveli </strong>
							<span>July 22, 2024.</span>
						</div>
					</div>
					<!--reviews------>
					<div class="reviews">
					  <img src="assets/images/testimonial/google.png" alt="Google Logo" class="google-logo">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i><!--Empty star-->
					</div>
				</div>
				<!--Comments---------------------------------------->
				<div class="client-comment">
					<p>A good, reliable business with understanding and well-intentioned staff who help in every way possible.</p>
				</div>
			</div>
		   
		</div>
	
			  </div>
			</div>
		  </div>
		</div>
		<br><br>
		<div class="bottom-image"><a href="https://www.google.com/search?client=firefox-b-d&q=sr+rent+a+car#lrd=0x3ae2f9da7f0d8cad:0x23cc584d58386b05,1,,,," target="_blank">
		  <img src="assets/images/home/google.png" alt="Bottom Image"></a>
	  </div>
	  </section>
	  <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Recent Posts</h2>
				</div>
			</div>
	
			<div class="container mb-4">
				<div class="row">
					<!-- Card 1 -->
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
					  <div class="card shadow">
						  <div class="card-body text-center">
							  <a href="#">
								  <img class="card-img-top" src="assets/images/blog/car_crashed.jpg" alt="">
							  </a>
							  <ul class="list-inline mt-3">
								  <li class="list-inline-item"><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
								  <li class="list-inline-item"><i class="far fa-clock"></i> Apr 19, 2024</li>
							  </ul>
							  <hr>
							  <h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: royalblue;">Navigating a Vehicle Accident in Sri Lanka as a Foreigner: A Comprehensive Guide</h3>
							  <p style="text-align: justify; font-size: 14px;">Driving in a foreign country can be an exciting experience, but it's essential to be prepared for unexpected situations like a vehicle accident. If you find yourself in this unfortunate situation while driving a rental vehicle in Sri Lanka, knowing the right steps to...</p>
							  <a class="theme-btn btn-style-three" href="[[~7]]" role="button">Read more...</a>
						  </div>
					  </div>
				  </div>
				  <!-- Card 2 -->
				  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
					<div class="card shadow">
						<div class="card-body text-center">
							<a href="#">
								<img class="card-img-top" src="assets/images/blog/hidden_gems.jpg" alt="">
							</a>
							<ul class="list-inline mt-3">
								<li class="list-inline-item"><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
								<li class="list-inline-item"><i class="far fa-clock"></i> Sep 20, 2023</li>
							</ul>
							<hr>
							<h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: royalblue;">Hidden Gems near Kandy to Discover with Your Rental Car</h3>
							<p style="text-align: justify; font-size: 14px;">Kandy, the cultural jewel of Sri Lanka, beckons travellers with its rich history, vibrant culture, and captivating landscapes. While the city itself teems with attractions, the true essence of this region lies in the undiscovered gems hidden in its environs. For an...</p>
							<a class="theme-btn btn-style-three" href="[[~8]]" role="button">Read more...</a>
						</div>
					</div>
				</div>
  
				  <!-- Card 3 -->
				  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
					<div class="card shadow">
						<div class="card-body text-center">
							<a href="#">
								<img class="card-img-top" src="assets/images/blog/driving_license.jpg" alt="">
							</a>
							<ul class="list-inline mt-3">
								<li class="list-inline-item"><i class="fas fa-user"></i> Sri Lanka Travel Guide</li>
								<li class="list-inline-item"><i class="far fa-clock"></i>Nov 1, 2021</li>
							</ul>
							<hr>
							<h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: royalblue;">Valid Driving Licenses To Rent A Car In Sri Lanka</h3>
							<p style="text-align: justify; font-size: 14px;">Driving in a foreign country can be an exciting experience, but it's essential to be prepared for unexpected situations like a vehicle accident. If you find yourself in this unfortunate situation while driving a rental vehicle in Sri Lanka, knowing the right steps to...</p>
							<a class="theme-btn btn-style-three" href="[[~12]]" role="button">Read more...</a>
						</div>
					</div>
				</div>
				</div>
			</div>
	
			<!-- Large Button Section -->
			<div class="text-center mt-5">
				<a class="theme-btn btn-style-two" href="[[~5]]" role="button">View All Posts</a>
			</div>
	
		</div>
	</section>
	

	<style>
		.card-body:hover {
			border-color: #051425; /* Choose your preferred border color */
			box-shadow: 10px 20px 35px rgba(0, 0, 0, 0.2); /* Optional: add shadow for better effect */
		}
	</style>

<script>
  // Swiper init
  const heroRentSwiper = new Swiper('.heroRent__swiper', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 800,
    effect: 'fade',
    fadeEffect: { crossFade: true },
    pagination: { el: '.heroRent__dots', clickable: true },
    navigation: { nextEl: '.heroRent__next', prevEl: '.heroRent__prev' }
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector('.heroRentAcc__toggle');
    const panel = document.getElementById('heroRentAccPanel');
    const mq = window.matchMedia("(max-width: 767px)");

    function setAccordionState() {
      if (!btn || !panel) return;

      const isMobile = mq.matches;

      if (isMobile) {
        if (btn.getAttribute("data-user-toggled") !== "1") {
          btn.setAttribute("aria-expanded", "false");
          panel.hidden = true;
        }
      } else {
        btn.setAttribute("aria-expanded", "true");
        panel.hidden = false;
      }
    }

    if (btn && panel) {
      btn.addEventListener("click", () => {
        btn.setAttribute("data-user-toggled", "1");
        const expanded = btn.getAttribute("aria-expanded") === "true";
        btn.setAttribute("aria-expanded", String(!expanded));
        panel.hidden = expanded;

        if (!expanded) setTimeout(initFlatpickr, 50);
      });

      // initial state
      setAccordionState();

      if (mq.addEventListener) {
        mq.addEventListener("change", () => {
          btn.removeAttribute("data-user-toggled");
          setAccordionState();
          if (!mq.matches) setTimeout(initFlatpickr, 0);
        });
      } else {
        window.addEventListener("resize", () => {
          btn.removeAttribute("data-user-toggled");
          setAccordionState();
          if (!mq.matches) setTimeout(initFlatpickr, 0);
        });
      }
    }

    // ----- Same location toggle -----
    const same = document.getElementById('heroRent_sameLocation');
    const wrap = document.getElementById('heroRent_dropWrap');
    const input = document.getElementById('heroRent_dropInput');

    function toggleDrop(){
      if (!same || !wrap || !input) return;
      const show = !same.checked;
      wrap.style.display = show ? 'block' : 'none';
      input.required = show;
      if(!show) input.value = '';
    }

    if (same) {
      same.addEventListener('change', toggleDrop);
      toggleDrop();
    }

    let fpInitialized = false;

    function initFlatpickr() {
      if (fpInitialized) return;

      if (typeof flatpickr === "undefined") {
        console.error("Flatpickr is not loaded. Include flatpickr.js before init.");
        return;
      }

      const pickupEl = document.getElementById("heroRent_pickupDT");
      const dropEl   = document.getElementById("heroRent_dropDT");
      if (!pickupEl || !dropEl) return;

      let dropPicker;

      flatpickr(pickupEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: "today",
        time_24hr: true,
        minuteIncrement: 15,
        disableMobile: true, 
        onChange: function(selectedDates) {
          if (dropPicker && selectedDates && selectedDates[0]) {
            dropPicker.set("minDate", selectedDates[0]);
            const d = dropPicker.selectedDates[0];
            if (d && d < selectedDates[0]) dropPicker.clear();
          }
        }
      });

      dropPicker = flatpickr(dropEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: "today",
        time_24hr: true,
        minuteIncrement: 15,
        disableMobile: true 
      });

      fpInitialized = true;
    }
    if (!mq.matches) initFlatpickr();

  });
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {

  function attachAuto(id, defaultValue = null){
    const el = document.getElementById(id);
    if(!el || !window.google) return;

    const ac = new google.maps.places.Autocomplete(el, {
      componentRestrictions: { country: "lk" }
    });

    // Set default value if provided
    if (defaultValue) {
      el.value = defaultValue;

      // Optional: force Google to recognize the default as a real place
      const service = new google.maps.places.AutocompleteService();
      service.getPlacePredictions({
        input: defaultValue,
        componentRestrictions: { country: "lk" }
      }, function(predictions, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK && predictions.length > 0) {
          // You could optionally fetch full place details here if needed
          // But for most booking forms, just pre-filling text is enough
        }
      });
    }

    ac.addListener("place_changed", () => {
      const place = ac.getPlace();
      // console.log(place.formatted_address);
    });
  }

  // Pickup with default
  attachAuto("heroRent_pickup", "SR Rent A Car Sri Lanka, Negombo");

  // Dropoff without default
  attachAuto("heroRent_dropInput");

});
</script>