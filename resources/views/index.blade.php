<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Space Dynamic - SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Start Nav ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>Spac<span>Dyna</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li> 
              <li class="scroll-to-section"><a href="#contact">Message Us</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** End Nav ***** -->







<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to {{ $dataHed->company_name}}</h6>
                <h2>We Make <em>{{ $dataHed->special1}}</em> &amp; <span>{{ $dataHed->special2}}</span></h2>
                <p>{{$dataHed->brief_summary}} .</p>
                <form id="search" action="#" method="GET">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="Your website URL..." autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="main-button">Analyze Site</button>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/'.$dataHed->img)}}" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- End Header --}}




{{-- Start About --}}
  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="{{asset('assets/images/'.$About->img)}}" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$About->icon_special1)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $About->special1 }}</h4>
                    <p>{{$About->definition_special1}}</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$About->icon_special2)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $About->special2 }}</h4>
                    <p>{{$About->definition_special2}}</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$About->icon_special3)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $About->special3 }}</h4>
                    <p>{{$About->definition_special3}}</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$About->icon_special4)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $About->special4 }}</h4>
                    <p>{{$About->definition_special4}}</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- End About --}}







{{-- Start services --}}
<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="left-image">
          <img src="{{asset('assets/images/'.$Services->img)}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="section-heading">
          <h2>Grow your website with our <em>{{$Services->service1}}</em> &amp; <span>{{$Services->service2}}</span></h2>
          <p>{{$Services->service_definition}}.</p>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="first-bar progress-skill-bar">
              <h4>{{$About->special1}}</h4>
              <span>{{$Services->services1_progress}}%</span>
              <div class="filled-bar" style="width: {{$Services->services1_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="second-bar progress-skill-bar">
              <h4>{{$About->special2}}</h4>
              <span>{{$Services->services2_progress}}%</span>
              <div class="filled-bar" style="width: {{$Services->services2_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="third-bar progress-skill-bar">
              <h4>{{$About->special3 }}</h4>
              <span>{{$Services->services3_progress}}%</span>
              <div class="filled-bar" style="width: {{$Services->services3_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="third-bar progress-skill-bar">
              <h4>{{$About->special4 }}</h4>
              <span>{{$Services->services4_progress}}%</span>
              <div class="filled-bar" style="width: {{$Services->services4_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End services --}}








 {{-- Start portfolio --}}
  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
          </div>
        </div>
      </div>
      <div class="row">

      @foreach ($Portfolio as $work)
            
        

        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>{{$work->work_name}}</h4>
                <p>{{$work->description_work}}.</p>
              </div>
              <div class="showed-content position-relative">
                
                <img src="{{asset('assets/images/'.$work->img)}}" alt="">
                
              </div>
            </div>
          </a>
        </div>
    @endforeach

      </div>
    </div>
  </div>
{{-- End portfolio --}}





{{-- Start blog --}}
  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="{{asset('assets/images/blog-dec.png')}}" alt="">
          </div>
        </div>
      </div>
      <div class="row mb-4">



    @foreach ($Post as $item)
            
        
        <div class="col-lg-4 col-md-6 mt-3 " >
          <div class="card" style="border: 1px solid #ff3448">
            <img src="{{asset('assets/images/'.$item->img)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 style="color: #03a4ed">{{ $item->name }}</h5>
              <p class="card-text">{{ substr($item->content,0,100) }}...</p>
            </div>
            <div class="card-footer" style="background:#ff3448">
              <p>{{$item->created_at}}</p>
            </div>
          </div>
        </div>
    @endforeach




        


      </div>
    </div>
  </div>
{{-- End blog --}}





{{-- Start contact-us --}}
  <div id="contact" class="contact-us section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
            <p> {{$Contact->about_me}} </p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="tel:{{$Contact->phone}}">{{$Contact->phone}}</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          
          <form id="contact" action="{{url('admin/settings/message')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="subject" id="surname" placeholder="subject" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>

                @if (session()->get('SMS_Session'))
                    <div class="alert alert-danger"> {{session()->get('SMS_Session')}} </div>
                @endif

              </div>
            </div>
            <div class="contact-dec">
              <img src="{{asset('assets/images/contact-decoration.png')}}" alt="">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
{{-- End contact-us --}}




{{-- Start footer --}}
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved. 
          
          <br>Design: <a rel="nofollow" href="https://www.behance.net/abdelrhman958e2">Abdelrhman Hassan (3twa)</a></p>
        </div>
      </div>
    </div>
  </footer>
{{-- End footer --}}


  <!-- Scripts -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/animation.js')}}"></script>
  <script src="{{asset('assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('assets/js/templatemo-custom.js')}}"></script>

</body>
</html>