<!DOCTYPE HTML>

<html>
	<head>
		<title>Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
        <link rel="stylesheet" href="{{ asset('path/to/fontawesome-all.min.css') }}">



    </head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Who we are</a></li>
							<li><a href="#two">What we do</a></li>
							<li><a href="#three">Get in touch</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

                <!-- Wrapper -->
                <div id="wrapper">

                    <!-- Intro -->
                    <section id="intro" class="wrapper style1 fullscreen fade-up">
                        <div class="inner" style="color:#E7DDC0;">

                            <h1 class="style1-al" style="color:#E7DDC0;">{{ config('content.intro_heading') }}</h1>
                            <p>{{ config('content.intro_text') }}</p>
                            <ul class="actions">
                                <li><a href="#one" class="button scrolly">{{ config('content.intro_action') }}</a></li>
                            </ul>
                        </div>
                    </section>

                    <!-- One -->
                    <section id="one" class="wrapper style2 spotlights">
                        <section>
                            <a href="#" class="image"><img src="{{ asset(config('content.one_image_1')) }}" alt="" data-position="top center" /></a>
                            <div class="content">
                                <div class="inner">
                                    <h2>{{ config('content.one_heading_1') }}</h2>
                                    <p>{{ config('content.one_text_1') }}</p>
                                    <ul class="actions">
                                        <li><a href="generic.html" class="button">{{ config('content.one_action_1') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section>
                            <a href="#" class="image"><img src="{{ asset(config('content.one_image_2')) }}" alt="" data-position="top center" /></a>
                            <div class="content">
                                <div class="inner">
                                    <h2>{{ config('content.one_heading_2') }}</h2>
                                    <p>{{ config('content.one_text_2') }}</p>
                                    <ul class="actions">
                                        <li><a href="generic.html" class="button">Find Out How</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section>
                            <a href="#" class="image"><img src="{{ asset(config('content.one_image_3')) }}" alt="" data-position="top center" /></a>
                            <div class="content">
                                <div class="inner">
                                    <h2>{{ config('content.one_heading_3') }}</h2>
                                    <p>{{ config('content.one_text_3') }}</p>
                                    <ul class="actions">
                                        <li><a href="generic.html" class="button">Learn More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </section>

                    <!-- Two -->
                    <section id="two" class="wrapper style3 fade-up">
                        <div class="inner">
                            <h2>{{ config('content.two_heading') }}</h2>
                            <p>{{ config('content.two_text') }}</p>
                            <div class="features">
                                <section>
                                    <span class="icon solid major fa-home"></span>
                                    <h3>{{ config('content.two_home') }}</h3>
                                    <p>{{ config('content.two_home-text') }}</p>
                                </section>
                                <section>
                                    <span class="icon solid major fa-thumbs-up"></span>
                                    <h3>{{ config('content.two_thumbsUp') }}</h3>
                                    <p>{{ config('content.two_thumbsUp-text') }}</p>
                                </section>
                                <section>
                                    <span class="icon solid major fa-handshake"></span>
                                    <h3>{{ config('content.two_handshake') }}</h3>
                                    <p>{{ config('content.two_handshake-text') }}</p>
                                </section>
                                <section>
                                    <span class="icon solid major fa-comments"></span>
                                    <h3>{{ config('content.two_comments') }}</h3>
                                    <p>{{ config('content.two_comments-text') }}</p>

                                </section>
                            </div>
                            <ul class="actions">
                                <li><a href="generic.html" class="button">Get in Touch</a></li>
                            </ul>
                        </div>
                    </section>
                </div>


                <!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
                            <h2>{{ config('content.three_heading') }}</h2>
                            <p>{{ config('content.three_text') }}</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
                                        <li>
                                            <h3>Address</h3>
                                            <span>{{ config('content.contact_name') }}</span>
                                            <span>{{ config('content.contact_address') }}</span>

                                        </li>
                                        <li>
                                            <h3>Email</h3>
                                            <span>{{ config('content.contact_email') }}</span>
                                        </li>
                                        <li>
                                            <h3>Phone</h3>
                                            <span>{{ config('content.contact_phone') }}</span>
                                        </li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: OE</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->

        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>

        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('/assets/js/browser.min.js') }}"></script>
        <script src="{{ asset('/assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('/assets/js/util.js') }}"></script>
        <script src="{{ asset('/assets/js/main.js') }}"></script>


	</body>
</html>
