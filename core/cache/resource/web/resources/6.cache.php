<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 6,
    'type' => 'document',
    'pagetitle' => 'contact_us',
    'longtitle' => 'Congratulations!',
    'description' => '',
    'alias' => 'contact-us',
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

<section class="hero-wrap hero-wrap-2" style="background-image: url(\'assets/images/home/breadcrumb.jpg\');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate text-center mb-4">
			<h1 class="mb-2 bread">Contact Us</h1>
			<p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
		</div>
		</div>
	</div>
</section>

<section class="contact-modern">
	<div class="container">

		<div class="row align-items-center">

		<!-- LEFT: Contact Info -->
		<div class="col-lg-5">
			<div class="contact-card">

			<h2 class="text-white">Get In Touch</h3>
			<p>We’re here to help you with rentals, transfers, and reservations. Reach out anytime.</p>

			<div class="contact-item">
				<span class="contact-icon">📍</span>
					<div>
				<strong>Address</strong>
				<p>
					<a href="https://maps.app.goo.gl/N69GRNHpC4VfgpWs5"
					target="_blank"
					class="contact-link">
					SR Rent A Car (Pvt.) Ltd,<br>
					371/5, Negombo Road, Seeduwa, Sri Lanka
					</a>
				</p>
				</div>
			</div>

			<div class="contact-item">
				<span class="contact-icon">📞</span>
				<div>
				<strong>Phone</strong>
				<p><a href="tel:+94777780729">+94 77 778 0729</a></p>
				</div>
			</div>

			<div class="contact-item">
				<span class="contact-icon">✉️</span>
				<div>
				<strong>Email</strong>
				<p><a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a></p>
				</div>
			</div>

			<div class="social-section">
				<h6>Follow Us</h6>
				<div class="social-icons">

					<a href="https://www.linkedin.com/company/31174684/admin/dashboard/" 
						target="_blank" 
						class="social-btn linkedin">
						<i class="fab fa-linkedin-in"></i>
					</a>

					<a href="https://www.facebook.com/srrentacar" 
						target="_blank" 
						class="social-btn facebook">
						<i class="fab fa-facebook-f"></i>
					</a>

					<a href="https://www.instagram.com/srrentacarsrilanka/" 
						target="_blank" 
						class="social-btn instagram">
						<i class="fab fa-instagram"></i>
					</a>

					</div>
			</div>

			</div>
		</div>

		<!-- RIGHT: Contact Form -->
		<div class="col-lg-7">
			<div class="contact-form-box">

			<h3>Send Us a Message</h3>

			<form id="contactForm" method="POST">
				<div class="floating-group">
				<input type="text" name="name" required placeholder="Your Name">
				<!-- <label>Your Name</label> -->
				</div>

				<div class="floating-group">
				<input type="email" name="email" required placeholder="Your Email">
				<!-- <label>Your Email</label> -->
				</div>

				<div class="floating-group">
				<input type="text" name="subject" required placeholder="Subject">
				<!-- <label>Subject</label> -->
				</div>

				<div class="floating-group">
				<textarea name="message" rows="5" required placeholder="Your Message"></textarea>
				<!-- <label>Your Message</label> -->
				</div>

				<button type="submit" class="contact-btn">
				Send Message →
				</button>

			</form>

			<div id="formMessage"></div>

			</div>
		</div>

		</div>
	</div>
</section>
     
<div class="row">
	<div class="col-12">
		<div class="map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.971183150275!2d79.87322757499844!3d7.129329892874595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f9da7f0d8cad%3A0x23cc584d58386b05!2sSR%20Rent%20A%20Car%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1724917513316!5m2!1sen!2slk"
				width="100%" height="450" style="border:2;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</div>      

<script>
	document.getElementById("contactForm").addEventListener("submit", function(e) {
		e.preventDefault();

		const form = this;
		const button = form.querySelector("button[type=\'submit\']");
		const msg = document.getElementById("formMessage");

		button.disabled = true;
		button.innerHTML = "Sending...";
		msg.innerHTML = "";

		const formData = new FormData(form);

		fetch("send-mail.php", {
			method: "POST",
			body: formData
		})
		.then(response => response.text())
		.then(data => {

			if (data.trim() === "success") {
				msg.innerHTML = "<p style=\'color:green;font-weight:600;\'>✔ Message sent successfully!</p>";

				setTimeout(() => {
					location.reload();
				}, 2500);

			} else {
				msg.innerHTML = "<p style=\'color:red;\'>Something went wrong. Please try again.</p>";
				button.disabled = false;
				button.innerHTML = "Send Message →";
			}
		})
		.catch(error => {
			msg.innerHTML = "<p style=\'color:red;\'>Server error. Please try later.</p>";

			button.disabled = false;
			button.innerHTML = "Send Message →";
		});
	});
</script>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 4,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1724916257,
    'editedby' => 1,
    'editedon' => 1772526931,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1724916240,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'contact-us.html',
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
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
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

<section class="hero-wrap hero-wrap-2" style="background-image: url(\'assets/images/home/breadcrumb.jpg\');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate text-center mb-4">
			<h1 class="mb-2 bread">Contact Us</h1>
			<p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
		</div>
		</div>
	</div>
</section>

<section class="contact-modern">
	<div class="container">

		<div class="row align-items-center">

		<!-- LEFT: Contact Info -->
		<div class="col-lg-5">
			<div class="contact-card">

			<h2 class="text-white">Get In Touch</h3>
			<p>We’re here to help you with rentals, transfers, and reservations. Reach out anytime.</p>

			<div class="contact-item">
				<span class="contact-icon">📍</span>
					<div>
				<strong>Address</strong>
				<p>
					<a href="https://maps.app.goo.gl/N69GRNHpC4VfgpWs5"
					target="_blank"
					class="contact-link">
					SR Rent A Car (Pvt.) Ltd,<br>
					371/5, Negombo Road, Seeduwa, Sri Lanka
					</a>
				</p>
				</div>
			</div>

			<div class="contact-item">
				<span class="contact-icon">📞</span>
				<div>
				<strong>Phone</strong>
				<p><a href="tel:+94777780729">+94 77 778 0729</a></p>
				</div>
			</div>

			<div class="contact-item">
				<span class="contact-icon">✉️</span>
				<div>
				<strong>Email</strong>
				<p><a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a></p>
				</div>
			</div>

			<div class="social-section">
				<h6>Follow Us</h6>
				<div class="social-icons">

					<a href="https://www.linkedin.com/company/31174684/admin/dashboard/" 
						target="_blank" 
						class="social-btn linkedin">
						<i class="fab fa-linkedin-in"></i>
					</a>

					<a href="https://www.facebook.com/srrentacar" 
						target="_blank" 
						class="social-btn facebook">
						<i class="fab fa-facebook-f"></i>
					</a>

					<a href="https://www.instagram.com/srrentacarsrilanka/" 
						target="_blank" 
						class="social-btn instagram">
						<i class="fab fa-instagram"></i>
					</a>

					</div>
			</div>

			</div>
		</div>

		<!-- RIGHT: Contact Form -->
		<div class="col-lg-7">
			<div class="contact-form-box">

			<h3>Send Us a Message</h3>

			<form id="contactForm" method="POST">
				<div class="floating-group">
				<input type="text" name="name" required placeholder="Your Name">
				<!-- <label>Your Name</label> -->
				</div>

				<div class="floating-group">
				<input type="email" name="email" required placeholder="Your Email">
				<!-- <label>Your Email</label> -->
				</div>

				<div class="floating-group">
				<input type="text" name="subject" required placeholder="Subject">
				<!-- <label>Subject</label> -->
				</div>

				<div class="floating-group">
				<textarea name="message" rows="5" required placeholder="Your Message"></textarea>
				<!-- <label>Your Message</label> -->
				</div>

				<button type="submit" class="contact-btn">
				Send Message →
				</button>

			</form>

			<div id="formMessage"></div>

			</div>
		</div>

		</div>
	</div>
</section>
     
<div class="row">
	<div class="col-12">
		<div class="map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.971183150275!2d79.87322757499844!3d7.129329892874595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f9da7f0d8cad%3A0x23cc584d58386b05!2sSR%20Rent%20A%20Car%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1724917513316!5m2!1sen!2slk"
				width="100%" height="450" style="border:2;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</div>      

<script>
	document.getElementById("contactForm").addEventListener("submit", function(e) {
		e.preventDefault();

		const form = this;
		const button = form.querySelector("button[type=\'submit\']");
		const msg = document.getElementById("formMessage");

		button.disabled = true;
		button.innerHTML = "Sending...";
		msg.innerHTML = "";

		const formData = new FormData(form);

		fetch("send-mail.php", {
			method: "POST",
			body: formData
		})
		.then(response => response.text())
		.then(data => {

			if (data.trim() === "success") {
				msg.innerHTML = "<p style=\'color:green;font-weight:600;\'>✔ Message sent successfully!</p>";

				setTimeout(() => {
					location.reload();
				}, 2500);

			} else {
				msg.innerHTML = "<p style=\'color:red;\'>Something went wrong. Please try again.</p>";
				button.disabled = false;
				button.innerHTML = "Send Message →";
			}
		})
		.catch(error => {
			msg.innerHTML = "<p style=\'color:red;\'>Server error. Please try later.</p>";

			button.disabled = false;
			button.innerHTML = "Send Message →";
		});
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
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
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
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
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
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
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