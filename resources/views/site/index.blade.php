@include('site.includes.header')

    
<div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="qf">
        <div class="container">
            <form id="contact" action="" method="post">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3>Get additional Rs.750/- Off</h3>
                <h4>Claim your discount now!</h4>
                <fieldset>
                    <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Yes. I'm Intrested</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
    
    
   
   

    <!-- home-image -->
    <div class="home-image white-text">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-container text-left">
                        <div class="inner-text">
                            <h3>Indias First Market Place of</h3>
                            <h2 data-animation-in="zoomIn" class="delay1">
                                <span class="red-color">CA</span> Advocates CS</h2>
                            <p class="home-title">Welcome to India's first Online platform where you can easily get your work done by CA's , Advocates's, CS's for 300+ Legal category.</p>
                            <div class="buttons">
                                <a href="/services/all" class="button btn btn-lg btn-red radius5 btn-margin-right">Check All Services</a>
                                <a href="#quote" class="button btn btn-lg btn-outline-dark radius5">Get Started Now</a>
                            </div>
                            <div class="search">
                                <img src="../../assets/img/icons/common/search-bar.svg" class="search-icon">
                                <div class="search-result-container">
                                    <input type="text" class="search-field" name="search-text" placeholder="Search through all our services">
                                    <!-- Inject search results with structure like this -->
                                    <ul class="search-results">
                                        <!-- <li><a href="">Test 1</a></li>
                                        <li><a href="">Test 2</a></li>
                                        <li><a href="">Test 3</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="home-bottom">
                            <div class="container-fluid">
                                <div class="col-sm-3 boxes">
                                    <i class="fa fa-handshake fa-2x"></i>
                                    <h4>No Physical Visit</h4>
                                    <p>Sit back and releax in your home we will handle the work for you.</p>
                                </div>
                                <div class="col-sm-3 boxes p-left">
                                    <i class="fa fa-bullhorn fa-2x"></i>
                                    <h4>Compare best Prices</h4>
                                    <p>Easily Compare the best prives amoung various services.</p>
                                </div>
                                <div class="col-sm-3 boxes p-left">
                                    <i class="fa fa-clock fa-2x"></i>
                                    <h4>Predefine time and delivery</h4>
                                    <p>Get your product delived at time.</p>
                                </div>
                                <div class="col-sm-3 p-left">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                    <h4>Hashlefree refund policies</h4>
                                    <p>If your Service is notupto mark we will refund you your money back.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home image -->

    <!-- Section Startup MarketPlace -->
 <section style="background:#f3f3f3d1; ">
    <div class="marketplace">
        <div class="container">
            <div class="title padding">
                <h2>Lets <span class="red-color">Explore</span> Marketplace</h2>
                <br>
                <div class="line-thin"></div>
                <div class="line-thicken"></div>
            </div>
            <center>
            <div class="row row-marketplace" style="padding-bottom:10px">
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa fa-building fa-2x"></i>
                                <h4>Company Registration @Rs.2499/-</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-building fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">Privated Limited Company</a></li>
                            <li><a href="/public/services/private-limited-company">One Person Company</a></li>
                            <li><a href="/public/services/private-limited-company">LLP Registration</a></li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa  fa-envelope fa-2x"></i>
                                <h4>Annual Filings 2020 <br>@Rs.2999/-</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-envelope fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">Privated Limited filing</a></li>
                            <li><a href="/public/services/private-limited-company">One Person Company filings</a></li>
                            <li><a href="/public/services/private-limited-company">LLP filings</a></li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa fa-gavel fa-2x"></i>
                                <h4>GST Registration <br> @Rs.2499/-</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-gavel fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">GST Registration</a></li>
                            <li><a href="/public/services/private-limited-company">GST Composite</a></li>
                            <li><a href="/public/services/private-limited-company">GST for NRI/Foreign</a></li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa fa-lock fa-2x"></i>
                                <h4>Brand Protection<br> @Rs.999/-</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-lock fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">TM Registration</a></li>
                            <li><a href="/public/services/private-limited-company">TM Objection</a></li>
                            <li><a href="/public/services/private-limited-company">Logo Design</a></li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa fa-user fa-2x"></i>
                                <h4>NRI'S & Foreigners</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-user fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">Privated Limited (NRI's)</a></li>
                            <li><a href="/public/services/private-limited-company">Privated Limited (Foreigners)</a></li>
                            <li><a href="/public/services/private-limited-company">Foreign Subsidiary (WOS)</a></li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa fa-briefcase fa-2x"></i>
                                <h4>Business Registration</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-briefcase fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">Import-Export Code</a></li>
                            <li><a href="/public/services/private-limited-company">Food License (FSSAI)</a></li>
                            <li><a href="/public/services/private-limited-company">PF Registration</a></li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa fa-gavel fa-2x"></i>
                                <h4>Incom Tax</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-gavel fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">Pitch-Deck Design</a></li>
                            <li><a href="/public/services/private-limited-company">Presentation Design</a></li>
                            <li><a href="/public/services/private-limited-company">Corporate Profile Design</a></li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                                <i class="fa fa-handshake fa-2x"></i>
                                <h4>Startup Package</h4>
                          </div>
                          <div class="flip-card-back">
                            <i class="fa fa-handshake fa-2x"></i>
                            <li><a href="/public/services/private-limited-company">Startup India Recognition</a></li>
                            <li><a href="/public/services/private-limited-company">Startup Anual Package (Pvt Ltd)</a></li>
                            <li><a href="/public/services/private-limited-company">Startup Anual Package (LLP)</a></li>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            </center>
        </div>
        <div class="buttons">
            <center><a href="/services/all" class="button btn btn-sm btn-default btn-red radius25 btn-shadow btn-margin-right">View All</a></center>
        </div>
    </div>
 </section>
    <!-- Section Startup MarketPlace end -->
    

    
    <!-- section 7 Popular Services  -->
    <!--section class="section7">
        <div class="container">
            <div class="modern-title">
                <div class="col-sm-6">
                    <div class="text-right">
                        <h2>
                            <span class="red-color">Popular</span> Services at Glance</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-left">
                        <p>These are the Services which are popular among customers
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
            <div id="mouse-drag2_wrapper">
                <div class="mouse-drag2" id="mouse-drag2">
                  <div class="item">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                                <h3>Design</h3>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                                    <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                                <h3>Code</h3>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                                    <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                                <h3>Launch</h3>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                                    <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                                <h3>Launch</h3>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                                    <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                                <h3>Launch</h3>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                                    <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                                <h3>Launch</h3>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                                    <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                                <h3>Launch</h3>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                                    <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="buttons">
            <center><a href="/services/all" class="button btn btn-sm btn-default btn-red radius25 btn-shadow btn-margin-right">View All</a></center>
        </div>
    </section-->
    <!-- section 7 Popular Services end -->
        
    <!-- Instant Best Price -->
    <section class="separated-section" id="quote">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 no-padding left-section">
                    <div class="text-container">
                        <div class="title text-left aos-init aos-animate" data-aos="fade-up">
                            <h2>
                                <span class="red-color">Get</span> an instant best price for your services</h2>
                        </div>
                             <form action="/user/quote" method="POST">
                                {{ csrf_field() }}
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="category" style="color:#fff !important;" class="form-control" id="exampleInputEmail1">
                                                <option style="color:#fff !important;">Select Category</option>
                                                <option style="color:#fff !important;" value="Legal">Legal</option>
                                                <option style="color:#fff !important;" value="Marketing">Marketing</option>
                                                <option style="color:#fff !important;" value="Consultancy">Consultancy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="service" style="color:#fff !important;" class="form-control" id="exampleInputEmail1">
                                                <option style="color:#fff !important;">Select Service</option>
                                                @foreach($services as $s)
                                                <option style="color:#fff !important;" value="{{$s->servicename}}">{{$s->servicename}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="state" style="color:#fff !important;" class="form-control" id="exampleInputEmail1">
                                                <option style="color:#fff !important;">Select State</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text"  name="city" style="color:#fff !important;" class="form-control" id="exampleInputMobile"  placeholder="Enter Your City*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" style="color:#fff !important;" class="form-control" id="exampleInputMobile"  placeholder="Enter Your Full Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <input type="email" style="color:#fff !important;" class="form-control" id="exampleInputMobile" name="email" placeholder="Enter Your Email*">
                                                <?php 
                                                    $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
                                                    $password = substr($random, 0, 10);
                                                ?>
                                                <input name="password" value="<?php echo $password; ?>" hidden>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="mobile" style="color:#fff !important;" class="form-control" id="exampleInputMobile" name="phone" placeholder="Enter Your Phone No*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn button btn-lg btn-red radius5 btn-margin-right">Get a Quote</button>
                                        </div>
                                    </div>
                                </div>
                             </form>
                    </div>
                </div>
                <div class="col-sm-6 no-padding show-image">
    
                </div>
            </div>
        </div>
    </section>
    <!-- Instant Best Price -->

        <!--- box container How it Works -->
        <section class="simple-boxes">
            <div class="container">
                <div class="modern-title">
                    <div class="col-sm-6">
                        <div class="text-right">
                            <h2>
                                <span class="red-color">How</span> it Works?</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-left">
                            <p>Our Platform can get your work done simply
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="text-container aos-init aos-animate" data-aos="fade-right">
                            <img src="images/icons/4.png" class="img-responsive center-img" alt="">
                            <h3>Choose your Service</h3>
                            <div class="line"></div>
                            <p>Company Registration, GST Registration, Startup Registration, Trade Mark and much more.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-container aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                            <img src="images/icons/2.png" class="img-responsive center-img" alt="">
                            <h3>Payment simplified</h3>
                            <div class="line"></div>
                            <p>Credit/Debit Card, Net Banking & Wallet options. Flexible EMI without Credit card. Instant Approval.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-container aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                            <img src="images/icons/3.png" class="img-responsive center-img" alt="">
                            <h3>Upload your documents</h3>
                            <div class="line"></div>
                            <p>No need to fill-up a lengthy form. Just click a selfie of your documents and relax.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-container aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                            <img src="images/icons/5.png" class="img-responsive center-img" alt="">
                            <h3>Kick-Start your Startup</h3>
                            <div class="line"></div>
                            <p>Focus towards your Startup growth, Get consultation on Branding, Funding and much more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- How it works end -->
 <!-- About Us -->
 <section class="separated-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 no-padding show-image">

            </div>
            <div class="col-sm-6 no-padding left-section">
                <div class="text-container">
                    <div class="title text-left aos-init aos-animate" data-aos="fade-up">
                        <h3><Span class="red-color">About</Span></h3>
                            <h2><Span class="red-blue">CAADVOCATESCS</h2>
                                <p>Caadvocatescs.com is owned by CAADVOCATESCS Pvt. Ltd. Its a group of professionals having diverse knowledge and experience, who have come together to start this venture to provide a wide range of value-added services to startups for their new ventures and for existing clients. The first step of entrepreneurship is to set-up an entity to house your business. Taking this first step is the most difficult one in the start-up journey. We at Caadvotescs help you in every step of setting-up your full start-up ecosystem.</p>
                    </div>
                    <!--div class="row">
                        <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up">
                            <i class="fa fa-rocket fa-lg pull-left"></i>
                            <div class="text">
                                <h4>Speed up design process</h4>
                                <p>Many desktop publishing packages and web page editors now.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                            <i class="fa fa-server fa-lg pull-left"></i>
                            <div class="text">
                                <h4>Host your data</h4>
                                <p>Many desktop publishing packages and web page editors now.</p>
                            </div>
                        </div>
                        <div class="row2">
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <i class="fa fa-lock fa-lg pull-left"></i>
                                <div class="text">
                                    <h4>Secure your documents</h4>
                                    <p>Many desktop publishing packages and web page editors now.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                                <i class="fa fa-life-ring fa-lg pull-left"></i>
                                <div class="text">
                                    <h4>Free unlimited support</h4>
                                    <p>Many desktop publishing packages and web page editors.</p>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--  About Us End -->
 <!-- Section why choose us -->
 
    <!-- Section why choose us end -->
    

<!-- Tail Wind -->
<!--section class="partners style2">
    <div class="container">
        <div class="title padding">
            <h2>Adding <span class="red-color">tailwinds</span> to our journey</h2>
            <br>
            <div class="line-thin"></div>
            <div class="line-thicken"></div>
        </div>
        <div class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs nav-justified">
                <li class="active"><a data-toggle="tab" href="#investors">Investors</a></li>
                <li><a data-toggle="tab" href="#partners">Partners</a></li>
                <li><a data-toggle="tab" href="#advisors">Advisors</a></li>
                </ul>
      
                <div class="tab-content">
                <div id="investors" class="tab-pane fade in active">
                    <br><br>
                    <div class="images">
                        <div class="col-sm-2 col-xs-4" data-aos="fade-right">
                            <img src="../../images/png/partner1.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="50">
                            <img src="../../images/png/partner2.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="100">
                            <img src="../../images/png/partner3.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="150">
                            <img src="../../images/png/partner4.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="200">
                            <img src="../../images/png/partner5.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="250">
                            <img src="../../images/png/partner6.png" class="img-responsive" alt="">
                        </div>
                    </div>    
                </div>
                <div id="partners" class="tab-pane fade">
                    <div class="testimonials-container" data-aos="fade-up">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                    <img  class="img-responsive partners-img" src="https://s3.amazonaws.com/cdn.designcrowd.com/blog/2017/April/35-Famous-Circle-Logos/19_400.png" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1">
                                    <img class="img-responsive partners-img" src="https://develophowto.com/img/favicon.ico" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2">
                                    <img class="img-responsive partners-img" src="https://avatars2.githubusercontent.com/u/52008853?s=200&v=4" alt="">
                                </li>
                            </ol>
                            <a data-slide="prev" href="index.html#quote-carousel" class="left carousel-control">
                                <i class="fa fa-long-arrow-alt-left"></i>
                            </a>
                            <a data-slide="next" href="index.html#quote-carousel" class="right carousel-control">
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                    <br>
                                                    <small>Chris Blake</small>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                    <br>
                                                    <small>Chris Blake</small>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                    <br>
                                                    <small>Chris Blake</small>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="advisors" class="tab-pane fade">
                    <div class="testimonials-container" data-aos="fade-up">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                    <img  class="img-responsive partners-img" src="https://s3.amazonaws.com/cdn.designcrowd.com/blog/2017/April/35-Famous-Circle-Logos/19_400.png" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1">
                                    <img class="img-responsive partners-img" src="https://develophowto.com/img/favicon.ico" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2">
                                    <img class="img-responsive partners-img" src="https://avatars2.githubusercontent.com/u/52008853?s=200&v=4" alt="">
                                </li>
                            </ol>
                            <a data-slide="prev" href="index.html#quote-carousel" class="left carousel-control">
                                <i class="fa fa-long-arrow-alt-left"></i>
                            </a>
                            <a data-slide="next" href="index.html#quote-carousel" class="right carousel-control">
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                    <br>
                                                    <small>Chris Blake</small>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                    <br>
                                                    <small>Chris Blake</small>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                    <br>
                                                    <small>Chris Blake</small>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
      </div>
</section-->
<!-- End Tail Wind -->


       
    
    
        
         <!-- section 9 Join Us As Associate-->
        <section class="text-image creative">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 aos-init aos-animate" data-aos="fade-right">
                        <img src="images/jpg/tabs.jpg" class="img-responsive img-relative" alt="">
                    </div>
                    <div class="col-sm-6">
                        <div class="title text-left">
                            <h2>
                                <span class="red-color">Let’s</span> Partner Up!</h2>
                        </div>
                        <div class="text-container">
                            <div class="text">
                                <h4>We’re known for</h4>
                                <br>
                                <p>  <li>Offering 300+ legal solutions across different verticals</li>
                                    <li>Reliable team of expert lawyers, Chartered Accountants & Company Secretaries</li>
                                    <li>Delivering highest quality of services to more than 1 lakh partner referrals</li><br>
                                    <p>We’re always on the lookout for partnership opportunities with businesses across different sectors. We offer customized packages of legal services that best fit your business’ and your customers' requirements at discounted prices.</p></p>
                                    <div class="buttons">
                                        <a href="/associate/register" class="button btn btn-lg btn-red radius25">Become a Partner</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section 9 end -->
        


<!-- Refer and Earn Section -->
<section class="short-info style3">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="text-container aos-init aos-animate" data-aos="zoom-in">
                    <h3>REFER & EARN</h3>
                    <p>11,000+ People trust caadvotescs.com! Earn on every Business Shared.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-container aos-init aos-animate" data-aos="zoom-in">
                    <a href="/user/register" class="button btn btn-lg btn-outline-white radius25">Yes I'M Intrested</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end -->



     <!-- blog section -->
     <div class="blog main-blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="posts-category">
                        <h3>Blog Section</h3>
                    </div>
                </div>
                                    <div class="col-lg-4">
                                        <div class="blog-post-col">
                                            <div class="img-preview">
                                                <img src="../../images/blog-posts/technology/2.jpg" class="img-responsive"
                                                    alt="">
                                            </div>
                                            <div class="blog-text-container">
                                                <div class="posts-title">
                                                    <h4>There are many variations of passages </h4>
                                                </div>
                                                <div class="post-description">
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        availableThere are
                                                        many
                                                        variation
                                                        <br>
                                                        <a href="blog-post.html" class="btn btn-simple btn-small">Read
                                                            More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="blog-post-col">
                                            <div class="img-preview">
                                                <img src="../../images/blog-posts/technology/3.jpg" class="img-responsive"
                                                    alt="">
                                            </div>
                                            <div class="blog-text-container">
                                                <div class="posts-title">
                                                    <h4>There are many variations of passages </h4>
                                                </div>
                                                <div class="post-description">
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        availableThere are
                                                        many
                                                        variation
                                                        <br>
                                                        <a href="blog-post.html" class="btn btn-simple btn-small">Read
                                                            More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="blog-post-col">
                                            <div class="img-preview">
                                                <img src="../../images/blog-posts/technology/4.jpg" class="img-responsive"
                                                    alt="">
                                            </div>
                                            <div class="blog-text-container">
                                                <div class="posts-title">
                                                    <h4>There are many variations of passages </h4>
                                                </div>
                                                <div class="post-description">
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        availableThere are
                                                        many
                                                        variation
                                                        <br>
                                                        <a href="blog-post.html" class="btn btn-simple btn-small">Read
                                                            More</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
        </div>
    </div>
    
    
        <!-- testimonials -->
        <div class="testimonials colorful">
            <div class="container">
               <div class="title padding">
                   <h2><span class="red-color">What</span> our customers are saying</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus harum quae voluptas excepturi. Sequi fugit rem debitis culpa nesciunt, reprehenderit amet voluptates ex totam ullam, nobis laboriosam iure error commodi!</p>
               </div>
                <div class="testimonials-container" data-aos="fade-up">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                <img class="img-responsive " src="../../images/jpg/1.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1">
                                <img class="img-responsive" src="../../images/jpg/2.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2">
                                <img class="img-responsive" src="../../images/jpg/3.jpg" alt="">
                            </li>
                        </ol>
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="index.html#quote-carousel" class="left carousel-control">
                            <!--i class="fa fa-long-arrow-alt-left"></i-->
                        </a>
                        <a data-slide="next" href="index.html#quote-carousel" class="right carousel-control">
                            <!--i class="fa fa-long-arrow-alt-right"></i-->
                        </a>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                <br>
                                                <small>Chris Blake</small>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                <br>
                                                <small>Chris Blake</small>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit!</p>
                                                <br>
                                                <small>Chris Blake</small>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials -->
         <!-- Clients partners -->
 <div class="partners style2">
    <div class="container">
        <div class="title padding">
            <h2><span class="red-color">400,000 </span> clients and counting ...</h2>
            <br>
            <div class="line-thin"></div>
            <div class="line-thicken"></div>
        </div>
        <div class="images">
            <div class="col-sm-2 col-xs-4" data-aos="fade-right">
                <img src="../../images/png/partner1.png" class="img-responsive" alt="">
            </div>
            <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="50">
                <img src="../../images/png/partner2.png" class="img-responsive" alt="">
            </div>
            <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="100">
                <img src="../../images/png/partner3.png" class="img-responsive" alt="">
            </div>
            <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="150">
                <img src="../../images/png/partner4.png" class="img-responsive" alt="">
            </div>
            <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="200">
                <img src="../../images/png/partner5.png" class="img-responsive" alt="">
            </div>
            <div class="col-sm-2 col-xs-4" data-aos="fade-right" data-aos-delay="250">
                <img src="../../images/png/partner6.png" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Clients partners End-->
        
@include('site.includes.footer')