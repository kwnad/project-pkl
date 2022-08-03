<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="pokok/plugins/bootstrap/bootstrap.min.css">
        <!-- slick slider -->
        <link rel="stylesheet" href="pokok/plugins/slick/slick.css">
        <!-- themefy-icon -->
        <link rel="stylesheet" href="pokok/plugins/themify-icons/themify-icons.css">
        <!-- venobox css -->
        <link rel="stylesheet" href="pokok/plugins/venobox/venobox.css">
        <!-- card slider -->
        <link rel="stylesheet" href="pokok/plugins/card-slider/css/style.css">
    
        <!-- Main Stylesheet -->
        <link href="pokok/css/style.css" rel="stylesheet">
        
        <!--Favicon-->
        <link rel="shortcut icon" href="pokok/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="pokok/images/favicon.ico" type="image/x-icon">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
        </style>
    </head>
    
        
           

            <!--
             // WEBSITE: https://themefisher.com
             // TWITTER: https://twitter.com/themefisher
             // FACEBOOK: https://www.facebook.com/themefisher
             // GITHUB: https://github.com/themefisher/
            -->    
            
            <body id="page-top">
              
            
            <header class="navigation fixed-top">
              <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.html"><img src="assets/dist/img/logo-custom.png" alt="Egen"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                  aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse text-center" id="navigation">
                  <ul class="navbar-nav ml-auto">
                    
                    
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item text-light">
                            <a href="{{ url('/home') }}" class="nav-link text-light">Home</a> 
                        </li>
                        @else
                        
                            <li class="nav-item text-light">
                            <a href="{{ route('login') }}" class="nav-link  text-light">Login</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link  text-light">Register</a>
                            </li>
                            @endif
                        @endauth
                   @endif
               
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About</a>
                    </li>
                    
                    
                    
                   
                  </ul>
                </div>
              </nav>
            </header>
            
            <!-- banner -->
            <section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
              data-background="pokok/images/backgrounds/page-title.jpg">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center">
                    <h3 class="display-1 text-white font-weight-bold font-primary" >Absensi smk asssalaam bandung</h3>
                  </div>
                </div>
              </div>
            </section>
            <!-- /banner -->
            
            <!-- service -->
            {{-- <section class="section">
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 mx-auto text-center">
                    <h2 class="section-title">Our Services</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat.</p>
                    <div class="section-border"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card hover-bg-secondary shadow py-4 active">
                      <div class="card-body text-center">
                        <div class="position-relative">
                          <i
                            class="icon-lg icon-box bg-gradient-primary rounded-circle ti-palette mb-5 d-inline-block text-white"></i>
                          <i class="icon-lg icon-watermark text-white ti-palette"></i>
                        </div>
                        <h4 class="mb-4">Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card hover-bg-secondary shadow py-4">
                      <div class="card-body text-center">
                        <div class="position-relative">
                          <i
                            class="icon-lg icon-box bg-gradient-primary rounded-circle ti-dashboard mb-5 d-inline-block text-white"></i>
                          <i class="icon-lg icon-watermark text-white ti-dashboard"></i>
                        </div>
                        <h4 class="mb-4">Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card hover-bg-secondary shadow py-4">
                      <div class="card-body text-center">
                        <div class="position-relative">
                          <i
                            class="icon-lg icon-box bg-gradient-primary rounded-circle ti-announcement mb-5 d-inline-block text-white"></i>
                          <i class="icon-lg icon-watermark text-white ti-announcement"></i>
                        </div>
                        <h4 class="mb-4">Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}
            <!-- /service -->
            
            <!-- feature -->
            {{-- <section class="section bg-secondary position-relative">
              <div class="bg-image overlay-secondary">
                <img src="pokok/images/feature.jpg" alt="bg-image">
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xl-9 mx-auto">
                    <div class="row align-items-center">
                      <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="pokok/images/feature.jpg" alt="feature-image" class="img-fluid">
                      </div>
                      <div class="col-lg-7 offset-lg-1">
                        <div class="row">
                          <div class="col-12">
                            <h2 class="text-white">We know What Bait to Use</h2>
                            <div class="section-border ml-0"></div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="media">
                              <i class="icon text-gradient-primary ti-vector mr-3"></i>
                              <div class="media-body">
                                <h4 class="text-white">User Experience</h4>
                                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="media">
                              <i class="icon text-gradient-primary ti-layout mr-3"></i>
                              <div class="media-body">
                                <h4 class="text-white">Responsive Layout</h4>
                                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="media">
                              <i class="icon text-gradient-primary ti-headphone-alt mr-3"></i>
                              <div class="media-body">
                                <h4 class="text-white">Digital Solutions</h4>
                                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="media">
                              <i class="icon text-gradient-primary ti-ruler-pencil mr-3"></i>
                              <div class="media-body">
                                <h4 class="text-white">Bootstrap 4x</h4>
                                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}
            <!-- /feature -->
            
            <!-- team -->
            {{-- <section class="section">
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                    <div class="section-border"></div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                      <img src="pokok/images/team/member-1.jpg" alt="team-member" class="card-img-top">
                      <div class="card-body text-center position-relative zindex-1">
                        <h4><a class="text-dark" href="team-single.html">Sara Adams</a></h4>
                        <i>Designer</i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                      <img src="pokok/images/team/member-2.jpg" alt="team-member" class="card-img-top">
                      <div class="card-body text-center position-relative zindex-1">
                        <h4><a class="text-dark" href="team-single.html">Tom Bills</a></h4>
                        <i>Developer</i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                      <img src="pokok/images/team/member-3.jpg" alt="team-member" class="card-img-top">
                      <div class="card-body text-center position-relative zindex-1">
                        <h4><a class="text-dark" href="team-single.html">Anna Walle</a></h4>
                        <i>Manager</i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                      <img src="pokok/images/team/member-4.jpg" alt="team-member" class="card-img-top">
                      <div class="card-body text-center">
                        <h4>Devid Json</h4>
                        <i>CEO</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}
            <!-- /team -->
            
            <!-- about -->
            {{-- <section class="section-lg position-relative bg-cover" data-background="pokok/images/backgrounds/about-bg.jpg">
              <img src="pokok/images/backgrounds/about-bg-overlay.png" alt="overlay" class="overlay-image img-fluid">
              <div class="container">
                <div class="row justify-content-between">
                  <div class="col-lg-6 col-md-8 col-sm-7 col-8">
                    <h2 class="text-white mb-4">Who We Are</h2>
                    <p class="text-light mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                      incididunt
                      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat.</p>
                    <a href="about.html" class="btn btn-primary">Read More</a>
                  </div>
                  <div class="col-md-2 col-sm-4 col-4 text-right align-self-end">
                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                      href="https://www.youtube.com/watch?v=jrkvirglgaQ"><i
                        class="text-center icon-sm icon-box rounded-circle text-white bg-gradient-primary d-block ti-control-play"></i></a>
                  </div>
                </div>
              </div>
            </section> --}}
            <!-- /about -->
            
            <!-- project -->
            <section class="section">
              <div class="container-fluid px-0">
                <div class="row">
                  <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Feature Works</h2>
                    <div class="section-border"></div>
                  </div>
                </div>
            
                <div class="row no-gutters shuffle-wrapper">
                  <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                      <img src="pokok/images/project/project-1.jpg" alt="project-image" class="img-fluid w-100">
                      <div class="project-hover bg-secondary px-4 py-3">
                        <a href="#" class="text-white h4">Project title</a>
                        <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                      <img src="pokok/images/project/project-2.jpg" alt="project-image" class="img-fluid w-100">
                      <div class="project-hover bg-secondary px-4 py-3">
                        <a href="#" class="text-white h4">Project title</a>
                        <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                      <img src="pokok/images/project/project-3.jpg" alt="project-image" class="img-fluid w-100">
                      <div class="project-hover bg-secondary px-4 py-3">
                        <a href="#" class="text-white h4">Project title</a>
                        <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                      <img src="pokok/images/project/project-4.jpg" alt="project-image" class="img-fluid w-100">
                      <div class="project-hover bg-secondary px-4 py-3">
                        <a href="#" class="text-white h4">Project title</a>
                        <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                      <img src="pokok/images/project/project-5.jpg" alt="project-image" class="img-fluid w-100">
                      <div class="project-hover bg-secondary px-4 py-3">
                        <a href="#" class="text-white h4">Project title</a>
                        <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- /project -->
            
            <!-- call to action -->
            {{-- <section>
              <div class="container section-sm overlay-secondary-half bg-cover" data-background="pokok/images/backgrounds/cta-bg.jpg">
              <div class="row">
                <div class="col-lg-8 offset-lg-1">
                  <h2 class="text-gradient-primary">Let's Start With Us!</h2>
                  <p class="h4 font-weight-bold text-white mb-4">Lorem ipsum dolor sit amet, magna habemus ius ad</p>
                  <a href="contact.html" class="btn btn-lg btn-primary">Let’s talk</a>
                </div>
              </div>
            </div>
            </section> --}}
            <!-- /call to action -->
            
            <!-- pricing -->
            {{-- <section class="section pb-0">
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Smart Pricing Table</h2>
                    <div class="section-border"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card bottom-shape bg-secondary pt-4 pb-5">
                      <div class="card-body text-center">
                        <h4 class="text-white">Basic</h4>
                        <p class="text-light mb-4">Besic and simple website</p>
                        <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
                        <ul class="list-unstyled mb-5">
                          <li class="text-white mb-3">Mobile-Optimized Website</li>
                          <li class="text-white mb-3">Powerful Website Metrics</li>
                          <li class="text-white mb-3">Free Custom Domain</li>
                          <li class="text-white mb-3">24/7 Customer Support</li>
                          <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
                          <li class="text-white mb-3">Sell unlimited Product</li>
                        </ul>
                        <a href="#" class="btn btn-outline-light">Try it now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card bottom-shape bg-secondary pt-4 pb-5">
                      <div class="card-body text-center">
                        <h4 class="text-white">Basic</h4>
                        <p class="text-light mb-4">Besic and simple website</p>
                        <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
                        <ul class="list-unstyled mb-5">
                          <li class="text-white mb-3">Mobile-Optimized Website</li>
                          <li class="text-white mb-3">Powerful Website Metrics</li>
                          <li class="text-white mb-3">Free Custom Domain</li>
                          <li class="text-white mb-3">24/7 Customer Support</li>
                          <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
                          <li class="text-white mb-3">Sell unlimited Product</li>
                        </ul>
                        <a href="#" class="btn btn-outline-light">Try it now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card bottom-shape bg-secondary pt-4 pb-5">
                      <div class="card-body text-center">
                        <h4 class="text-white">Basic</h4>
                        <p class="text-light mb-4">Besic and simple website</p>
                        <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
                        <ul class="list-unstyled mb-5">
                          <li class="text-white mb-3">Mobile-Optimized Website</li>
                          <li class="text-white mb-3">Powerful Website Metrics</li>
                          <li class="text-white mb-3">Free Custom Domain</li>
                          <li class="text-white mb-3">24/7 Customer Support</li>
                          <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
                          <li class="text-white mb-3">Sell unlimited Product</li>
                        </ul>
                        <a href="#" class="btn btn-outline-light">Try it now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}
            <!-- /pricing -->
            
            <!-- blog -->
            {{-- <section class="section">
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 mx-auto text-center">
                    <h2>Latest News</h2>
                    <div class="section-border"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <article class="card">
                      <img src="pokok/images/blog/post-1.jpg" alt="post-thumb" class="card-img-top mb-2">
                      <div class="card-body p-0">
                        <time>January 15, 2018</time>
                        <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                          Book Covers Reflect the Design</a>
                        <a href="#" class="btn btn-transparent">Read more</a>
                      </div>
                    </article>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <article class="card">
                      <img src="pokok/images/blog/post-2.jpg" alt="post-thumb" class="card-img-top mb-2">
                      <div class="card-body p-0">
                        <time>January 15, 2018</time>
                        <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                          Book Covers Reflect the Design</a>
                        <a href="#" class="btn btn-transparent">Read more</a>
                      </div>
                    </article>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <article class="card">
                      <img src="pokok/images/blog/post-3.jpg" alt="post-thumb" class="card-img-top mb-2">
                      <div class="card-body p-0">
                        <time>January 15, 2018</time>
                        <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                          Book Covers Reflect the Design</a>
                        <a href="#" class="btn btn-transparent">Read more</a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </section> --}}
            <!-- /blog -->
            
            <!-- footer -->
            <footer class="bg-secondary position-relative">
              <img src="pokok/images/backgrounds/map.png" class="img-fluid overlay-image" alt="">
              <div class="section">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-3 col-6">
                      <h4 class="text-white mb-5">Tentang</h4>
                      <ul class="list-unstyled">
                        <li><a href="#" class="text-light d-block mb-3">Service</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Kontak</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Tentang kita</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Blog</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Dukungan</a></li>
                      </ul>
                    </div>
                    <div class="col-md-3 col-6">
                      <h4 class="text-white mb-5">Aplikasi</h4>
                      <ul class="list-unstyled">
                        <li><a href="#" class="text-light d-block mb-3">Service</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Kontak</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Tentang kita</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Blog</a></li>
                        <li><a href="#" class="text-light d-block mb-3">Dukungan</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <div class="bg-white p-4">
                        <h3>Tentang Kita</h3>
                        <form action="#">
                          <input type="text" id="name" name="name" class="form-control mb-4 px-0" placeholder="Full name">
                          <input type="text" id="email" name="name" class="form-control mb-4 px-0" placeholder="Alamat email">
                          <textarea name="message" id="message" class="form-control mb-4 px-0" placeholder="Pesan"></textarea>
                          <button class="btn btn-primary" type="submit">Kirim</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pb-4">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-left">
                      <p class="text-light mb-0">Copyright &copy; 2022 Oleh Kami Bersama <a class="text-gradient-primary" href="https://themefisher.com">Template Keren Klik Ini</a>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <ul class="list-inline text-md-right text-center">
                        <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-github"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
            <!-- /footer -->
            
            <!-- jQuery -->
            <script src="pokok/plugins/jQuery/jquery.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="pokok/plugins/bootstrap/bootstrap.min.js"></script>
            <!-- slick slider -->
            <script src="pokok/plugins/slick/slick.min.js"></script>
            <!-- venobox -->
            <script src="pokok/plugins/venobox/venobox.min.js"></script>
            <!-- shuffle -->
            <script src="pokok/plugins/shuffle/shuffle.min.js"></script>
            <!-- apear js -->
            <script src="pokok/plugins/counto/apear.js"></script>
            <!-- counter -->
            <script src="pokok/plugins/counto/counTo.js"></script>
            <!-- card slider -->
            <script src="pokok/plugins/card-slider/js/card-slider-min.js"></script>
            <!-- google map -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
            <script src="pokok/plugins/google-map/gmap.js"></script>
            
            <!-- Main Script -->
            <script src="pokok/js/script.js"></script>
            
            </body>
            </html>
