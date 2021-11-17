<div role="main" class="main">

				<div class="container py-4 my-5">
					<div class="row align-items-center">
						<div class="col-lg-5 col-xl-4 offset-xl-1 mb-5 mb-lg-0">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold line-height-3 text-5-6 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">123 Street Name, Los Angeles, CA</h2>
							</div>
							<div class="overflow-hidden">
								<a href="#get-direction" data-hash data-hash-offset="100" class="d-inline-block custom-text-underline-1 font-weight-bold border-color-primary text-decoration-none text-3-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">GET DIRECTIONS</a>
							</div>
							<ul class="list list-unstyled text-color-dark font-weight-bold text-4 py-2 my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
								<li class="d-flex align-items-center mb-2">
									<i class="icons icon-envelope text-color-dark mr-2"></i>
									Email: <a href="mailto:porto@domain.com" class="text-color-dark text-color-hover-primary text-decoration-none ml-1">porto@domain.com</a>
								</li>
								<li class="d-flex align-items-center mb-0">
									<i class="icons icon-phone text-color-dark mr-2"></i>
									Phone: <a href="tel:1234567890" class="text-color-dark text-color-hover-primary text-decoration-none ml-1">+123 4567 890</a>
								</li>
							</ul>
							<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">We are here to help you with your auto repair and service needs. Come in, give us a call or send us an email. We will get back to you as soon as we can during regular business hours.</p>
						</div>
						<div class="col-lg-6 col-xl-5 offset-lg-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
							<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
                                
                                <div class="form-row row-gutter-sm">
                                    <div class="form-group col mb-3">
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-row row-gutter-sm">
                                    <div class="form-group col mb-3">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required placeholder="E-mail Address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col mb-3">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-row appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1500">
                                    <div class="form-group col mb-0">
                                        <button type="submit" class="btn btn-primary btn-modern font-weight-bold custom-btn-border-radius custom-btn-arrow-effect-1 text-3 px-5 py-3" data-loading-text="Loading...">
                                        	SUBMIT
                                        	<svg class="ml-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
											</svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>

				<section id="get-direction" class="section bg-light border-0 box-shadow-1 position-relative z-index-1 py-4 m-0">
					<div class="container py-2">
						<div class="row align-items-center justify-content-lg-center justify-content-xl-start">
							<div class="col-lg-3 col-xl-2 offset-xl-1 mb-2 mb-lg-0">
								<h2 class="text-color-dark font-weight-bold text-4-5 mb-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -100}">GET DIRECTIONS:</h2>
							</div>
							<div class="col-lg-8">
								<form class="custom-get-direction-form custom-form-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -100}" action="" method="post">
									<div class="d-flex align-items-stretch">
										<input type="text" class="custom-get-direction-address form-control w-100" data-msg-required="Please enter Starting Address." name="getDirectionAddress" value="" placeholder="Enter Your Starting Address" required>
										<button type="submit" class="btn btn-dark btn-modern font-weight-bold custom-btn-border-radius text-3 btn-px-4 ml-3 my-1" data-loading-text="...">GO</button>
									</div>
								</form>
							</div>
							<div class="col-lg-11 col-xl-10 offset-xl-1 custom-get-direction-error alert alert-danger d-none mt-4 mx-3 mx-sm-auto">
								<p class="text-center mb-0">There's an error and we couldn't find your address.<br><strong class="custom-get-direction-error-message d-none"></strong></p>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div class="position-relative appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750">
					<div class="custom-directions-panel position-absolute top-0 left-0 w-100pct w-md-50pct w-lg-25pct h-100 mh-100 overflow-auto z-index-1"></div>
					<div id="googlemaps" class="google-map m-0" style="min-height: 500px;"></div>
				</div>				

				<section class="section bg-transparent position-relative border-0 z-index-1 m-0 p-0">
					<div class="container py-4">
						<div class="row align-items-center text-center py-5">
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;" />
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;" />
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
								<img src="img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;" />
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;" />
							</div>
							<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
								<img src="img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;" />
							</div>
							<div class="col-sm-4 col-lg-2">
								<img src="img/logos/logo-13.png" alt class="img-fluid" style="max-width: 110px;" />
							</div>
						</div>
					</div>
					<svg class="custom-svg-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 193 495">
						<path fill="#1C5FA8" d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"/>
						<path fill="none" stroke="#FFF" stroke-width="1.5" stroke-miterlimit="10" d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"/>
					</svg>
				</section>
			</div> 