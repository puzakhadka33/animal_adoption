
  @extends('layouts.front')
  @section('temp')
      
 
  <style>
      #blog-img{
          height: 300px;
          width: 100%;
      }

      .blog-text{
          width: 100%;
          
      }
      .blog-text p{
         text-align: justify;
          overflow: hidden;
          text-overflow: ellipsis;
          display: -webkit-box;
          -webkit-line-clamp: 10;
          -webkit-box-orient: vertical;
      }

      #adoption-img{
        height: 330px;
        width: 410px;
      }

      #contactfrm-btn{
        padding: 15px 25px;
        color: white;
        border: 2px solid rgb(28, 121, 197);
        border-radius: 12px;
        background-color: rgb(28, 121, 197);
        font-weight: bold;
      }

      
  </style>


  <!-- ======= Carousel Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(images/animalcarousel.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Save a life today</h2>
                <p class="animate__animated animate__fadeInUp">We're Here to help the needy and voiceless </p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(images/animalcarousel2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Help the Voiceless</h2>
                <p class="animate__animated animate__fadeInUp">Did you know that they feel pain, hunger, helplessness, loneliness and much the same emotions that humans do?</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(images/animalcarousel3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Live and let live</h2>
                <p class="animate__animated animate__fadeInUp">Animals too have a life. They too have feelings of hurt, pain and have every right to live.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="images/aboutus.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
             
                  <h4 class="sec-head">Why do we help animals ?</h4>
               
                <p style="text-align: justify">
                    Animal welfare is the well-being of non-human animals. Formal standards of animal welfare vary between contexts, but are debated mostly by animal welfare groups, legislators, and academics.[1][2] Animal welfare science uses measures such as longevity, disease, immunosuppression, behavior, physiology, and reproduction,[3] although there is debate about which of these best indicate animal welfare.
                    <br>
                    Respect for animal welfare is often based on the belief that nonhuman animals are sentient and that consideration should be given to their well-being or suffering, especially when they are under the care of humans.[4] These concerns can include how animals are slaughtered for food, how they are used in scientific research, how they are kept (as pets, in zoos, farms, circuses, etc.), and how human activities affect the welfare and survival of wild species.
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Helping the voiceless
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Giving the voiceless support
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Giving them new life
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->
    

   {{-- Organization Section --}}
    <div id="team" class="our-team-area area-padding">
      <div class="container" id="org-container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Organizations</h2>
            </div>
          </div>
        </div>
        
        <div class="row">
            @foreach ($organization as $item)
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="single-team-member">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{url('images')}}/{{$item->image}}" alt="" style="height:300px; width:100%">
                </a>
                <div class="team-social-icon text-center">
                    <ul>
                    <li>
                        <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li>
                <li>
                      <a href="#">
                          <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team-content text-center">
            <h4><a href="{{route('orgprofile.show',['id'=>$item->id])}}">{{$item->user->name}}</a></h4>
            <p>{{$item->user->address}}</p>
        </div>
    </div>
</div>
@endforeach
<!-- End organization-->

        
         
   

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Animals</h2>
            </div>
          </div>
        </div>
        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          @foreach ($animal as $item)
              
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{url('images')}}/{{$item->image}}" alt="" id="adoption-img"></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{route('adopt.view',['id'=>$item->id])}}">
                      <h4>{{$item->name}}</h4>
                      <span>Colour: {{$item->color}}</span>
                      <br>
                      <span>Height:{{$item->height}} </span>
                      <br>
                      <span>Breed: {{$item->breed}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- portfolio-item end -->


        </div>
      </div>
    </div><!-- End Portfolio Section -->


    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Left Blog -->
                @foreach ($blog as $item)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <a href="blog.html">
                                <img src="{{url('images')}}/{{$item->image}}" alt="" id="blog-img">
                            
                            </a>
                        </div>
                        <div class="blog-meta">
                            <span class="comments-type">
                                <i class="fa fa-comment-o"></i>
                                <a href="#"></a>
                            </span>
                            <span class="date-type">
                                <i class="fa fa-calendar"></i>{{$item->created_at}}
                            </span>
                        </div>
                        <div class="blog-text">
                            <h4>
                                <a href="{{route('blogview.viewDetails',['id'=>$item->id])}}">{{$item->title}}</a>
                            </h4>
                            <p>
                                {{$item->description}}
                            </p>
                        </div>
                        <span>
                            <a href="{{route('blogview.viewDetails',['id'=>$item->id])}}" class="ready-btn">Read more</a>
                        </span>
                    </div>
                </div>
                @endforeach
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Help to save an innocent life</h3>
              <a class="sus-btn" href="{{route('message.index')}}">Click Here</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +977-9803210606<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: ashwinkhadka911@gmail.com<br>
                    <span>Web: www.liveandletlive.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: Dhapasi,Kathmandu<br>
                    <span></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14136.22314979552!2d85.29638280419542!3d27.65374564570088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17f4a9113665%3A0x55c572a085a12046!2sSneha&#39;s%20Care!5e0!3m2!1sen!2snp!4v1641829004325!5m2!1sen!2snp" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
           
          
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="{{route('contact.store')}}" method="POST" role="form" class="">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <br>
                  <button type="submit" id="contactfrm-btn">send</button>
                  <div class="my-3">
                    {{-- <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                    {{-- <div class=""><button type="submit">Send Message</button></div> --}}
                  </div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection

 