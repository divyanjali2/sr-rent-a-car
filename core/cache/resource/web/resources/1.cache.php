<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'pagetitle' => 'Home',
    'longtitle' => 'Congratulations!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '   
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag(\'js\', new Date());

    gtag(\'config\', \'G-5861K2TN4V\');
</script>

<!-- home hero section -->
<section class="heroRent heroRent--yacht">

  <div class="heroRent__frame">

    <!-- Swiper -->
    <div class="heroRent__swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/1.jpeg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/2.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/3.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="heroRent__content">
      <div class="container">
        <div class="heroRent__contentInner heroRent__contentInner--left">
          <span class="heroRent__sub">Affordable</span>
          <h1 class="heroRent__title">Sri Lanka Rent A Car</h1>
          <p class="heroRent__lead">Premium vehicles • Chauffeur services • Airport pickup</p>
        </div>
      </div>
    </div>

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

    <!-- Wave bottom -->
    <div class="heroRent__wave">
      <svg viewBox="0 0 1440 180" preserveAspectRatio="none">
        <path fill="#ffffff" d="
          M0,170
          C220,170 360,165 520,150
          C820,120 980,55 1440,85
          L1440,180
          L0,180
          Z">
        </path>
      </svg>
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
        <div class="srAbout__bigImg" style="background-image:url(\'assets/images/home/about_us_1.jpg\');"></div>
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
          <div class="srAbout__floatImg" style="background-image:url(\'assets/images/home/about_us_2.jpg\');"></div>

          <p class="srAbout__text">
            Our new fleets of vehicles are maintained to the highest standard, ensuring cleanliness & reliability.
            We take safety very seriously, making it easier for you to relax and enjoy a family vacation.
            From a fleet of more than 500 vehicles, you can find the perfect match between budget and luxury from well-known brands.
          </p>

          <p class="srAbout__text">
            With offices conveniently located near Bandaranaike International Airport, we\'re able to meet and greet you with a smile
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

<!-- why-special section -->
<section id="why-special" class="srWhy py-5">
  <div class="container">

    <!-- Section Heading -->
    <div class="srWhy__heading text-center mb-5">
      <span class="srWhy__tag">WHY CHOOSE US</span>
      <h2 class="srWhy__title">What Makes Us Special</h2>
      <p class="srWhy__subtitle">
        Experience comfort, reliability and professional service across Sri Lanka.
      </p>
    </div>

    <!-- Cards -->
    <div class="srWhy__grid">
		<div class="srWhy__card">
		<div class="srWhy__icon">💰</div>
		<h4 class="srWhy__cardTitle">Affordable Rates</h4>
		<p class="srWhy__cardText">
			Competitive pricing with transparent costs, ensuring exceptional value for every journey.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">⏳</div>
		<h4 class="srWhy__cardTitle">20+ Years Experience</h4>
		<p class="srWhy__cardText">
			Over two decades of trusted service delivering reliability and customer satisfaction.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🛡️</div>
		<h4 class="srWhy__cardTitle">Insurance Coverage</h4>
		<p class="srWhy__cardText">
			Comprehensive insurance protection for a safe and worry-free travel experience.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🔁</div>
		<h4 class="srWhy__cardTitle">Multiple Drop-Off Locations</h4>
		<p class="srWhy__cardText">
			Flexible pick-up and drop-off options across Sri Lanka for maximum convenience.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🚨</div>
		<h4 class="srWhy__cardTitle">Roadside Assistance</h4>
		<p class="srWhy__cardText">
			24/7 emergency support to ensure uninterrupted travel throughout your trip.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🕒</div>
		<h4 class="srWhy__cardTitle">24/7 Access</h4>
		<p class="srWhy__cardText">
			Round-the-clock booking and customer support whenever you need us.
		</p>
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
                              <p style="text-align: justify;">The Kataragama Festival emerges as one of Sri Lanka\'s most mystical and inclusive religious celebrations, taking place in the sacred town of Kataragama. This unique festival transcends religious boundaries, drawing pilgrims from Buddhist, Hindu, Muslim, and indigenous communities in a remarkable display of spiritual unity. Centered around the Kataragama Devale, the festival honors Lord Skanda (Murugan), a deity revered for his warrior spirit and divine grace. The celebration reaches its zenith with spectacular fire-walking ceremonies, elaborate processions, and intense devotional rituals that blend ancient traditions with spiritual fervor.</p>
                          
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
						  <h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: rgb(0, 8, 34);size: 20px;">Rent A Car</h3>
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
						<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: rgb(0, 8, 34);size: 20px;">Airport Transfer</h3>
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
						<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: rgb(0, 8, 34);size: 20px;">Wedding Rentals</h3>
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
				  <p style="text-align: justify;">Tutto perfetto, ritiro semplice e veloce, auto in perfette condizioni..un ringraziamento particolare a Sampath per l\'attenzione e disponibilità dimostrata..consiglio assolutamente! </p>
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
							  <h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: royalblue;">Navigating a Vehicle Accident in Sri Lanka as a Foreigner: A Comprehensive Guide</h3>
							  <p style="text-align: justify; font-size: 14px;">Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations like a vehicle accident. If you find yourself in this unfortunate situation while driving a rental vehicle in Sri Lanka, knowing the right steps to...</p>
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
							<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: royalblue;">Hidden Gems near Kandy to Discover with Your Rental Car</h3>
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
							<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: royalblue;">Valid Driving Licenses To Rent A Car In Sri Lanka</h3>
							<p style="text-align: justify; font-size: 14px;">Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations like a vehicle accident. If you find yourself in this unfortunate situation while driving a rental vehicle in Sri Lanka, knowing the right steps to...</p>
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
  const heroRentSwiper = new Swiper(\'.heroRent__swiper\', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 800,
    effect: \'fade\',
    fadeEffect: { crossFade: true },
    pagination: { el: \'.heroRent__dots\', clickable: true },
    navigation: { nextEl: \'.heroRent__next\', prevEl: \'.heroRent__prev\' }
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector(\'.heroRentAcc__toggle\');
    const panel = document.getElementById(\'heroRentAccPanel\');
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
    const same = document.getElementById(\'heroRent_sameLocation\');
    const wrap = document.getElementById(\'heroRent_dropWrap\');
    const input = document.getElementById(\'heroRent_dropInput\');

    function toggleDrop(){
      if (!same || !wrap || !input) return;
      const show = !same.checked;
      wrap.style.display = show ? \'block\' : \'none\';
      input.required = show;
      if(!show) input.value = \'\';
    }

    if (same) {
      same.addEventListener(\'change\', toggleDrop);
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
</script>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1723316876,
    'editedby' => 1,
    'editedon' => 1772189882,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper ">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="index.php?id=1">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="index.php?id=4" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="index.php?id=11" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="index.php?id=3" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="index.php?id=10" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="index.php?id=6" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>



   
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag(\'js\', new Date());

    gtag(\'config\', \'G-5861K2TN4V\');
</script>

<!-- home hero section -->
<section class="heroRent heroRent--yacht">

  <div class="heroRent__frame">

    <!-- Swiper -->
    <div class="heroRent__swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/1.jpeg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/2.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
        <div class="swiper-slide heroRent__slide" style="background-image:url(\'assets/images/3.jpg\');">
          <div class="heroRent__shade"></div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="heroRent__content">
      <div class="container">
        <div class="heroRent__contentInner heroRent__contentInner--left">
          <span class="heroRent__sub">Affordable</span>
          <h1 class="heroRent__title">Sri Lanka Rent A Car</h1>
          <p class="heroRent__lead">Premium vehicles • Chauffeur services • Airport pickup</p>
        </div>
      </div>
    </div>

    <div class="heroRent__bar">
      <div class="container">
        <!-- Mobile Accordion Toggle -->
      <button type="button" class="heroRentAcc__toggle" aria-expanded="false" aria-controls="heroRentAccPanel">
        <span>Search & Reserve</span>
        <span class="heroRentAcc__icon" aria-hidden="true"></span>
      </button>

      <!-- Accordion Panel -->
      <div class="heroRentAcc__panel" id="heroRentAccPanel" hidden>
        <form class="heroRentForm" action="index.php?id=4" method="get">
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

    <!-- Wave bottom -->
    <div class="heroRent__wave">
      <svg viewBox="0 0 1440 180" preserveAspectRatio="none">
        <path fill="#ffffff" d="
          M0,170
          C220,170 360,165 520,150
          C820,120 980,55 1440,85
          L1440,180
          L0,180
          Z">
        </path>
      </svg>
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
        <div class="srAbout__bigImg" style="background-image:url(\'assets/images/home/about_us_1.jpg\');"></div>
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
          <div class="srAbout__floatImg" style="background-image:url(\'assets/images/home/about_us_2.jpg\');"></div>

          <p class="srAbout__text">
            Our new fleets of vehicles are maintained to the highest standard, ensuring cleanliness & reliability.
            We take safety very seriously, making it easier for you to relax and enjoy a family vacation.
            From a fleet of more than 500 vehicles, you can find the perfect match between budget and luxury from well-known brands.
          </p>

          <p class="srAbout__text">
            With offices conveniently located near Bandaranaike International Airport, we\'re able to meet and greet you with a smile
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

<!-- why-special section -->
<section id="why-special" class="srWhy py-5">
  <div class="container">

    <!-- Section Heading -->
    <div class="srWhy__heading text-center mb-5">
      <span class="srWhy__tag">WHY CHOOSE US</span>
      <h2 class="srWhy__title">What Makes Us Special</h2>
      <p class="srWhy__subtitle">
        Experience comfort, reliability and professional service across Sri Lanka.
      </p>
    </div>

    <!-- Cards -->
    <div class="srWhy__grid">
		<div class="srWhy__card">
		<div class="srWhy__icon">💰</div>
		<h4 class="srWhy__cardTitle">Affordable Rates</h4>
		<p class="srWhy__cardText">
			Competitive pricing with transparent costs, ensuring exceptional value for every journey.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">⏳</div>
		<h4 class="srWhy__cardTitle">20+ Years Experience</h4>
		<p class="srWhy__cardText">
			Over two decades of trusted service delivering reliability and customer satisfaction.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🛡️</div>
		<h4 class="srWhy__cardTitle">Insurance Coverage</h4>
		<p class="srWhy__cardText">
			Comprehensive insurance protection for a safe and worry-free travel experience.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🔁</div>
		<h4 class="srWhy__cardTitle">Multiple Drop-Off Locations</h4>
		<p class="srWhy__cardText">
			Flexible pick-up and drop-off options across Sri Lanka for maximum convenience.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🚨</div>
		<h4 class="srWhy__cardTitle">Roadside Assistance</h4>
		<p class="srWhy__cardText">
			24/7 emergency support to ensure uninterrupted travel throughout your trip.
		</p>
		</div>

		<div class="srWhy__card">
		<div class="srWhy__icon">🕒</div>
		<h4 class="srWhy__cardTitle">24/7 Access</h4>
		<p class="srWhy__cardText">
			Round-the-clock booking and customer support whenever you need us.
		</p>
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
                              <p style="text-align: justify;">The Kataragama Festival emerges as one of Sri Lanka\'s most mystical and inclusive religious celebrations, taking place in the sacred town of Kataragama. This unique festival transcends religious boundaries, drawing pilgrims from Buddhist, Hindu, Muslim, and indigenous communities in a remarkable display of spiritual unity. Centered around the Kataragama Devale, the festival honors Lord Skanda (Murugan), a deity revered for his warrior spirit and divine grace. The celebration reaches its zenith with spectacular fire-walking ceremonies, elaborate processions, and intense devotional rituals that blend ancient traditions with spiritual fervor.</p>
                          
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
      <a href="index.php?id=4" class="theme-btn btn-style-four" style="margin-top: 50px; padding-top: 20px; padding-bottom: 20px;border-radius: 10px;">Explore Fleet</a>

     


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
						  <h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: rgb(0, 8, 34);size: 20px;">Rent A Car</h3>
						  <hr>
						  <p style="text-align: justify; font-size: 14px;">SR Rent A Car is an independent car rental company in Sri Lanka since 2004. We offer luxurious customer service for you at the most affordable rental car rates.</p>
						  <a class="theme-btn btn-style-four" href="index.php?id=9" role="button">Explore More</a>
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
						<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: rgb(0, 8, 34);size: 20px;">Airport Transfer</h3>
						<hr>
						<p style="text-align: justify; font-size: 14px;">SR Rent A Car offer chauffeur-driven Airport Transfer and Hotel Transfer in Sri Lanka. We offer our service for Colombo International Airport & all hotels in Sri Lanka.</p>
						<a class="theme-btn btn-style-four" href="index.php?id=9" role="button">Explore More</a>
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
						<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: rgb(0, 8, 34);size: 20px;">Wedding Rentals</h3>
						<hr>
						<p style="text-align: justify; font-size: 14px;">Your wedding day is the most memorable day which you’ll remember for the rest of your life. You try your very best to make it perfect with many items.</p>
						<a class="theme-btn btn-style-four" href="index.php?id=9" role="button">Explore More</a>
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
				  <p style="text-align: justify;">Tutto perfetto, ritiro semplice e veloce, auto in perfette condizioni..un ringraziamento particolare a Sampath per l\'attenzione e disponibilità dimostrata..consiglio assolutamente! </p>
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
							  <h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: royalblue;">Navigating a Vehicle Accident in Sri Lanka as a Foreigner: A Comprehensive Guide</h3>
							  <p style="text-align: justify; font-size: 14px;">Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations like a vehicle accident. If you find yourself in this unfortunate situation while driving a rental vehicle in Sri Lanka, knowing the right steps to...</p>
							  <a class="theme-btn btn-style-three" href="index.php?id=7" role="button">Read more...</a>
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
							<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: royalblue;">Hidden Gems near Kandy to Discover with Your Rental Car</h3>
							<p style="text-align: justify; font-size: 14px;">Kandy, the cultural jewel of Sri Lanka, beckons travellers with its rich history, vibrant culture, and captivating landscapes. While the city itself teems with attractions, the true essence of this region lies in the undiscovered gems hidden in its environs. For an...</p>
							<a class="theme-btn btn-style-three" href="index.php?id=8" role="button">Read more...</a>
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
							<h3 style="font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;color: royalblue;">Valid Driving Licenses To Rent A Car In Sri Lanka</h3>
							<p style="text-align: justify; font-size: 14px;">Driving in a foreign country can be an exciting experience, but it\'s essential to be prepared for unexpected situations like a vehicle accident. If you find yourself in this unfortunate situation while driving a rental vehicle in Sri Lanka, knowing the right steps to...</p>
							<a class="theme-btn btn-style-three" href="index.php?id=12" role="button">Read more...</a>
						</div>
					</div>
				</div>
				</div>
			</div>
	
			<!-- Large Button Section -->
			<div class="text-center mt-5">
				<a class="theme-btn btn-style-two" href="index.php?id=5" role="button">View All Posts</a>
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
  const heroRentSwiper = new Swiper(\'.heroRent__swiper\', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 800,
    effect: \'fade\',
    fadeEffect: { crossFade: true },
    pagination: { el: \'.heroRent__dots\', clickable: true },
    navigation: { nextEl: \'.heroRent__next\', prevEl: \'.heroRent__prev\' }
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector(\'.heroRentAcc__toggle\');
    const panel = document.getElementById(\'heroRentAccPanel\');
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
    const same = document.getElementById(\'heroRent_sameLocation\');
    const wrap = document.getElementById(\'heroRent_dropWrap\');
    const input = document.getElementById(\'heroRent_dropInput\');

    function toggleDrop(){
      if (!same || !wrap || !input) return;
      const show = !same.checked;
      wrap.style.display = show ? \'block\' : \'none\';
      input.required = show;
      if(!show) input.value = \'\';
    }

    if (same) {
      same.addEventListener(\'change\', toggleDrop);
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
<!-- ✅ Global Top-Right Logo (visible on all pages) -->
<div class="global-logo">
  <img src="assets/images/award.png" alt="Sri Lanka Rent A Car">
</div>
<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'icon' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[~1]]' => 'index.php?id=1',
    '[[~4]]' => 'index.php?id=4',
    '[[~5]]' => 'index.php?id=5',
    '[[~9]]' => 'index.php?id=9',
    '[[~11]]' => 'index.php?id=11',
    '[[~3]]' => 'index.php?id=3',
    '[[~10]]' => 'index.php?id=10',
    '[[~6]]' => 'index.php?id=6',
    '[[$header?]]' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper ">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="index.php?id=1">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="index.php?id=4" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="index.php?id=11" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="index.php?id=3" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="index.php?id=10" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="index.php?id=6" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
    '[[~7]]' => 'index.php?id=7',
    '[[~8]]' => 'index.php?id=8',
    '[[~12]]' => 'index.php?id=12',
    '[[$footer?]]' => '<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
  ),
  'sourceCache' => 
  array (
    'MODX\\Revolution\\modChunk' => 
    array (
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper ">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="[[~1]]">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="[[~4]]" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="[[~11]]" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="[[~3]]" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="[[~10]]" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="[[~6]]" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper ">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="[[~1]]">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="[[~4]]" class="nav-link">FLEET</a></li>
        <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="[[~11]]" class="nav-link">TRANSFERS</a></li>
        <li class="nav-item"><a href="[[~3]]" class="nav-link">WEDDING RENTALS</a></li>
        <li class="nav-item"><a href="[[~10]]" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="[[~6]]" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/aos.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="footer-section">


<button id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Find Us </h4>
                            <span>371/5, Negombo Road, Seeduwa, Sri Lanka</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text" style="text-align: left;" >
                            <h4>Call us</h4>
                            <span>+94 77 778 0729</span>
                        </div>
                    </div>
                </div>
  
                <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fab fa-whatsapp"></i>
                      <div class="cta-text" style="text-align: left;">
                          <h4>Chat with us on WhatsApp</h4>
                          <span>+94 77 778 0729</span>
                      </div>
                  </div>
              </div>
              
  
            </div>


            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text" style="text-align: left;">
                            <h4>Mail us</h4>
                            <span>info@srilankarentacar.com</span>
                        </div>
                    </div>
                </div>
               
              
  
            </div>
            
             
           
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo_white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="text-align: justify;">“As a leading Sri Lanka car rental service provider, “SR Rent A Car” offers one of the practical car rental choices for tourists, businessmen and locals who want to visit and explore the “Pearl of the Indian Ocean”. The company was established in 2004 and had been providing service like ever since.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow Us On</span>
                           <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank">
                                <img src="assets/images/social_media/linkedin.png" alt="Home" style="width: 40px;height: auto;"></a>
                           
                                <a href="https://www.facebook.com/srrentacar" target="_blank">
                                    <img src="assets/images/social_media/fb.png" alt="Home" style="width: 40px;height: auto;"></a>
                                    <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank">
                                        <img src="assets/images/social_media/insta.png" alt="Home" style="width: 40px;height: auto;"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets/images/useful/1.png" alt="Home" style="width: 40px;height: auto;"> Airport Parking</a>
                            </li>
                            
                            <li><a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets/images/useful/4.png" alt="Home" style="width: 40px;height: auto;"> 9 Trees Boutique Villa</a>
                            </li>
                            
                            <li><a href="https://explore.vacations/" target="_blank">
                                <img src="assets/images/useful/2.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Sri Lanka)</a>
                            </li>
                            
                            <!--li><a href="https://explorevacations.ch/" target="_blank">
                                <img src="assets/images/useful/3.png" alt="Home" style="width: 40px;height: auto;"> Explore Vacations (Switzerland)</a>
                            </li-->
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/6.png" alt="Home" style="width: 40px;height: auto;"> SR Transfers</a>
                            </li>
                            
                            <li><a href="#" target="_blank">
                                <img src="assets/images/useful/5.png" alt="Home" style="width: 40px;height: auto;"> Euro Motors</a>
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form id="subscribeForm">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                            <p id="responseMessage" style="display: none; color: green;"></p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img src="assets/images/payment.png" alt="Payment Methods" style="height: 40px; width: 150px;">
                            <img src="assets/images/raca.png" alt="SR Rent A Car Logo" style="height: 50px; width: 90px; margin-left: 10px;">
                        </div>
                        <p style="margin: 0; font-size: 14px;">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved 
                            <a href="#" style="text-decoration: none; color: red;">SR Rent A Car</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
  </footer>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <!-- WhatsApp Chat Popup starts -->
<div id="whatsapp-chat-btn" class="wa-button">
    <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px">
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->


  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--script src="assets/js/aos.js"></script-->
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
 
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


  
  <script type="text/javascript">
  $(document).ready(function(){
    $(\'.slider\').slick({
      slidesToShow: 5,  // Number of slides to show at a time
      slidesToScroll: 1, // Number of slides to scroll at a time
      autoplay: true,   // Enable auto play
      autoplaySpeed: 1000, // Speed of auto play in milliseconds
      arrows: true,     // Show navigation arrows
      dots: true,       // Show navigation dots
      responsive: [
        {
          breakpoint: 1024, // Breakpoint for responsive design
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  </script>
  
  <!-- JavaScript -->
    <script>
      window.addEventListener(\'scroll\', function() {
        const image = document.getElementById(\'dynamic-image\');
        const scrollPosition = window.scrollY;
  
        if (scrollPosition > 0) {  // Adjust this value as needed
          image.src = \'assets/images/logo.png\';
        } else {
          image.src = \'assets/images/logo_white.png\';
        }
      });
    </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  function selectImage(index) {
    // Get the carousel element
    var carousel = $(\'#imageCarousel\');
    
    // Go to the selected image based on the index
    carousel.carousel(\'to\', index);
  }
  
  
  </script>
  
  <script>
  
   $(\'#myCarousel\').carousel({
      interval: 1000,
   })
  </script>
  
  <script>
   jQuery(document).ready(function($) {
    $(\'.slide\').unslider({
      infinite: true,
      arrows: false,
      autoplay: false
    });
  });
  </script>
  
  <script>
  document.addEventListener(\'DOMContentLoaded\', function () {
    const modalImage = document.getElementById(\'modalImage\');
    const images = document.querySelectorAll(\'img[data-bs-toggle="modal"]\');
  
    images.forEach(img => {
      img.addEventListener(\'click\', function () {
        const imgSrc = img.getAttribute(\'data-bs-img-src\');
        modalImage.src = imgSrc;
      });
    });
  });
  
  </script>
  
  <script>
  $(document).ready(function() {
      $(".gallery").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
              tError: \'<a href="%url%">The image #%curr%</a> could not be loaded.\'
          }
      });
  });



  document.getElementById(\'subscribeForm\').addEventListener(\'submit\', function(e) {
    e.preventDefault(); // Prevent form from submitting the traditional way

    const email = document.getElementById(\'email\').value;

    fetch(\'subscribe.php\', {
        method: \'POST\',
        headers: {
            \'Content-Type\': \'application/x-www-form-urlencoded\'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').innerText = \'Thank you for subscribing!\';
        document.getElementById(\'subscribeForm\').reset();
    })
    .catch(error => {
        document.getElementById(\'responseMessage\').style.display = \'block\';
        document.getElementById(\'responseMessage\').style.color = \'red\';
        document.getElementById(\'responseMessage\').innerText = \'Subscription failed. Please try again.\';
    });
});


document.addEventListener(\'scroll\', function() {
    const backToTopButton = document.getElementById(\'backToTop\');
    if (window.scrollY > 100) {
        backToTopButton.style.display = \'block\';
    } else {
        backToTopButton.style.display = \'none\';
    }
});

// document.getElementById(\'backToTop\').addEventListener(\'click\', function() {
//     window.scrollTo({ top: 0, behavior: \'smooth\' });
// });


// document.addEventListener(\'contextmenu\', function(event) {
//     event.preventDefault();
//     alert(\'Right-click is disabled!\');
// });

  
  </script>
  
  
  
  
  </body>
  </html>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);