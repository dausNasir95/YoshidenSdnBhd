@extends('layouts.sidemaster')

@section('title', 'Dashboard')

@section('content')

<main id="main">

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Manufacturing Machines, <span>Equipments, </span><br>and Automation Systems</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/about/1.jpg');"></div>
      <div class="item" style="background-image: url('img/about/2.jpg');"></div>
      <div class="item" style="background-image: url('img/about/3.jpg');"></div>
      <div class="item" style="background-image: url('img/about/4.jpg');"></div>
      <div class="item" style="background-image: url('img/about/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/Test_Render.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Our Company</h2>
            <h3>Yoshiden has built a reputation by fully meeting its clients’ specific needs, quick response time for product support and on time delivery of quality test fixture.</h3>
           
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Design and manufacturing of Custom Machines.</li>
              <li><i class="ion-android-checkmark-circle"></i> Design and manufacturing of Functional Test Fixture.</li>
              <li><i class="ion-android-checkmark-circle"></i> Design and manufacturing of In - Circuit Test Fixture.</li>
              <li><i class="ion-android-checkmark-circle"></i> Trading of Electronic Tools and Equipment.</li>
            </ul>

            <h3>
                In short Yoshiden acts as a one stop center for all your PCBA needs. With a team of dedicated workforce and a location which is close to customers, our facilities and resources offer a complete fixture design, programming, fabrication and trading under one roof. Having carved a niche position in the industry, we are proud to have positioned the company among the best fixture house and tools and equipment supplier in Malaysia.
            </h3>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>We provide end-to-end solutions for fabrication, trading, PCB services, automation, and used equipment—delivering precision and efficiency for your industrial needs.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Trading </a></h4>
              <p class="description">Probes (QA, POGO, etc.), ICT spare parts, electronic components, tape/reel machines, soldering tools, microscopes, testers , and dispensers.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-microchip"></i></div>
              <h4 class="title"><a href="">PCB Design, Fabrication & Repair</a></h4>
              <p class="description">Single, double, multi-layer PCB prototyping and repair services down to component level.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-cogs"></i></div>
              <h4 class="title"><a href="">Machine , Jig & Fixture Fabrication</a></h4>
              <p class="description">Design and fabrication of custom machines, jigs, and fixtures to optimize production efficiency. We provide end-to-end design, precision machining, and assembly.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-industry"></i></div>
              <h4 class="title"><a href="">Factory Automation Solutions </a></h4>
              <p class="description">Design, supply, and upgrade of semi-auto to fully automatic equipment and custom automation jigs.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-delicious"></i></div>
              <h4 class="title"><a href="">Used Machines & Instruments</a></h4>
              <p class="description">Sourcing and selling used PCB assembly equipment and testers, including inserters, conveyors, wave soldering, and SMT machines.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-desktop"></i></div>
              <h4 class="title"><a href="">Software Solutions</a></h4>
              <p class="description">Automation software, PLC/PC-based systems, machine vision, inventory management, and seamless integration.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header box wow fadeInLeft" data-wow-delay="0.2s"">
          <h2>Clients</h2>
          <h6>Since 1999, Yoshiden has been a trusted partner in high-performance test fixtures, PCB assembly tools, and industrial automation solutions. Our end-to-end expertise—from custom fabrication and equipment supply to software-driven automation—ensures seamless production for global clients.</h6>

          <h6>Why Partner With Us?</h6>
          <ul>
            <li><i class="ion-android-checkmark-circle"></i> 25+ Years of engineering excellence in test fixtures & PCBA tools.</li>
            <li><i class="ion-android-checkmark-circle"></i> One-Stop Solutions – Fabrication, automation, PCB repair, and machine vision integration.</li>
            <li><i class="ion-android-checkmark-circle"></i> Reliable Supply Chain – Premium probes, soldering systems, and used equipment sourcing.</li>
            <li><i class="ion-android-checkmark-circle"></i> Future-Ready – PLC/PC-based automation, inventory software, and smart factory upgrades.</li>
          </ul>
          <h6>Where precision meets innovation.</h6> </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <div class="portfolio-section">

            <h6>25+ years of solving complex manufacturing challenges across industries</h6>
          
            <!-- Electronics & Factory Automation -->
            <div class="industry-section">
              <h3><span class="icon" data-wow-delay="0.2s">🔍</span> Vision Inspection & Software Solutions PC & PLC Based</h3>
              
              <div class="project-card box wow fadeInRight" data-wow-delay="0.2s">
                <h4>AI-Powered Vision Inspection System</h4>
                <ul>
                  <li>Developed <strong>custom machine vision</strong> for Our Client.</li>
                  <li>Reduced false rejects by <strong>35%</strong></li>
                  <li><em>Features:</em> Feature Matching, Color Inspection, Parts recognition, PLC integration and etc.</li>
                </ul>
              </div>
          
              <div class="project-card box wow fadeInLeft" data-wow-delay="0.2s">
                <h4>Software Solutions PC & PLC Based</h4>
                <ul>
                  <li>Delivered <strong>end-to-end ICT/FCT fixtures</strong> for smartwatch manufacturer</li>
                  <li>Increased throughput by <strong>50%</strong></li>
                  <li><em>Key Tech:</em> HiOS screwdrivers, TR518 testers, in-house PCB repair</li>
                </ul>
              </div>
            </div>
          
            <!-- Energy & Industrial Solutions -->
            <div class="industry-section">
              <h3><span class="icon">⚡</span> EV Battery & Energy Solutions</h3>
              
              <div class="project-card box wow fadeInRight" data-wow-delay="0.2s">
                <h4>Solar Panel PV Test Rigs</h4>
                <ul>
                  <li>Built <strong>high-voltage test fixtures</strong> for renewable energy firm</li>
                  <li>Ensured <strong>100% IEC compliance</strong></li>
                  <li><em>Features:</em> Goodwill insulators, custom safety interlocks</li>
                </ul>
              </div>
          
              <div class="project-card box wow fadeInLeft" data-wow-delay="0.2s">
                <h4>EV Battery Module Assembly Line</h4>
                <ul>
                  <li>Designed <strong>semi-to-full automation</strong> for battery packs including:</li>
                  <li>Laser-welding jigs</li>
                  <li>In-line resistance testing (Hioki meters)</li>
                  <li>Tape-and-reel (Vanguard machines)</li>
                </ul>
              </div>
            </div>
          
            <!-- Niche Custom Machines -->
            <div class="industry-section">
              <h3><span class="icon">🛠️</span> Industrial Automation</h3>
              
              <div class="project-card box wow fadeInRight" data-wow-delay="0.2s">
                <h4>Smart Factory Robotics Integration</h4>
                <ul>
                  <li>Automated <strong>component sorting</strong> with 6-axis robots</li>
                  <li>Integrated <strong>machine vision QC</strong> (Cognex/Keyence)</li>
                  <li>Cut labor costs by <strong>45%</strong></li>
                </ul>
              </div>
          
              <div class="project-card box wow fadeInLeft" data-wow-delay="0.2s">
                <h4>PLC-Based Assembly Line</h4>
                <ul>
                  <li>Upgraded legacy production to <strong>fully automated system</strong></li>
                  <li>Implemented <strong>Mitsubishi PLCs</strong> with SCADA monitoring</li>
                  <li>Increased output by <strong>30%</strong></li>
                </ul>
              </div>
            </div>
          
            <!-- Stats Section -->
            <div class="stats-section">
              <h3>By the Numbers</h3>
              <div class="stats-grid">
                <div class="stat-item box wow fadeInRight" data-wow-delay="0.2s">
                  <div class="stat-number">800+</div>
                  <div class="stat-desc">custom machines/fixtures deployed</div>
                </div>
                <div class="stat-item box wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="stat-number">30%</div>
                  <div class="stat-desc">avg. efficiency gain for energy clients</div>
                </div>
                {{-- <div class="stat-item box wow fadeInRight" data-wow-delay="0.2s">
                  <div class="stat-number">5</div>
                  <div class="stat-desc">patents supported through R&D</div>
                </div> --}}
              </div>
            </div>
          
            {{-- <!-- Testimonial -->
            <div class="testimonial">
              <blockquote>
                "Yoshiden's team reverse-engineered a discontinued wafer tester in 3 weeks — saving our $2M production line."
                <footer>- Semiconductor Equipment Manufacturer, Japan</footer>
              </blockquote>
            </div> --}}
          </div>
        </div>
      </div>

      <div class="container-fluid" style="display:none;">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.jpg" class="portfolio-popup">
                <img src="img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.jpg" class="portfolio-popup">
                <img src="img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.jpg" class="portfolio-popup">
                <img src="img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.jpg" class="portfolio-popup">
                <img src="img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.jpg" class="portfolio-popup">
                <img src="img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.jpg" class="portfolio-popup">
                <img src="img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.jpg" class="portfolio-popup">
                <img src="img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp d-none">
      <div class="container">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp d-none">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          {{-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p> --}}
        </div>

        <div class="row contact-info">

          <div class="col-md-6">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>11, Jalan Industri PBP 9, Taman Perindustrian Pusat Bandar Puchong, 47100 Puchong, Selangor</address>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+603-5882 8720">+603-5882 8720 </a><span style="color: #50d8af">/</span><a href="tel:+603-5882 0541"> +603-5882 0541</a></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-whatsapp">
              <i class="ion-social-whatsapp-outline"></i>
              <h3>Whatsapp</h3>
              <p><a href="https://wa.link/g4830m">+6012-382 5459 - (Mr. Sargunan Vaiyapuri)</a></p>
              <p><a href="https://wa.link/7rtk3o">+6012-307 1806 - (Mr. Lim Soo Cheow)</a></p>
              <p><a href="https://wa.link/qw0tln">+6017-949 8720 - (Admin)</a></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:yoshiden@yoshiden.com.my">yoshiden@yoshiden.com.my</a></p>
              <p><a href="mailto:yoshidensb@gmail.com">yoshidensb@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3159225275213!2d101.61669627497056!3d3.0094489969665132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb50040358a33%3A0xb8f493de90f7a358!2sYoshiden%20(M)%20Sdn.%20Bhd.!5e0!3m2!1sen!2smy!4v1745898087024!5m2!1sen!2smy" width="100%"  height: 290px;
      margin-bottom: 20px; style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </section><!-- #contact -->


            <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Have Questions or Need Help?</h3>
            <p class="cta-text">Reach us now<br/>Our team is ready to assist you. Reach out now and we’ll respond promptly to your inquiry.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section><!-- #call-to-action -->
<!-- Contact Section -->
<section id="contact" class="wow fadeInUp py-5 bg-light">
  <div class="container">
    {{-- <div class="section-header text-center mb-5">
      <h2>Contact Us</h2>
      <p class="text-muted">Have a question or need help? Fill out the form and we’ll get back to you shortly.</p>
    </div> --}}

    <div class="form bg-white p-4 shadow rounded">
      <div id="sendmessage" class="alert alert-success d-none">Your message has been sent. Thank you!</div>
      <div id="errormessage" class="alert alert-danger d-none"></div>

      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row row">
          <div class="form-group col-md-6">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:8" data-msg="Please enter at least 8 chars of subject" />
          <div class="validation"></div>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Your message"></textarea>
          <div class="validation"></div>
        </div>

        <!-- Google reCAPTCHA -->
        <div class="form-group text-center mb-3">
          <div class="g-recaptcha d-inline-block" data-sitekey="6Lct_jArAAAAAD2IKjRG0m-Z5VRWrHwhcNsGOy_j"></div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-lg px-4">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</section>
  </main>
@endsection
