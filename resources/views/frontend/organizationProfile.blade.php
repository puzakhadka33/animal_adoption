{{-- @extends('layouts.master')
@section('content')
<style>
    body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

/* .about-avatar img{
    margin-right: 250px;
    
} */

#org-picture{
    position: absolute;
    top:115px;
    left: 110px;
}
.about-avatar img{
    width: 70%;
    height: 285px;
    /* margin-bottom: 20px; */
}

#org-info{
    
}
h4 span{
    font-weight: bold;
    color: black;
}
</style>

<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                   
                        
                    <h3 class="dark-color">{{$organization->user->name}}</h3>
                    
                    <p>{{$organization->status}}</p>
                    <div class="row about-list" id="org-info">
                        <div class="col-md-6">
                            <div class="media">
                                
                                <h4><span>Email : </span>{{$organization->user->email}}</h4>

                            </div>
                            <div class="media">
                                <h4><span>Contact : </span>{{$organization->user->contact}}</h4>
                            </div>
                            
                            <div class="media">
                                <h4><span>Address : </span>{{$organization->user->address}}</h4>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="org-picture">
                <div class="about-avatar">
                    <img src="{{url('images/')}}/{{$organization->image}}" class="card-img-top" alt="...">
                </div>
            </div>
            
        </div>
        
            
        </div>
    </div>
</section>
@endsection --}}

{{-- new profile section --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{url("assets/css/org.css")}} rel="stylesheet" />
        <style>
            .card{
                display: inline-block;
                margin:20px;
                border: 2px solid;
                box-shadow: 5px 5px black;
            }
            .card-text{
                border-top: 2px solid;
            }

            .card-body{
                width: 100%;
            }

            .card-body p{
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 6;
                -webkit-box-orient: vertical;
                text-align: justify;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="" height="150px" width="150px" src="{{url('images/')}}/{{$organization->image}}" alt="..."  style="border-radius: 50%"></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#animals">Animals</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{$organization->user->name}}
                        
                    </h1>
                    <div class="subheading mb-5">
                        {{$organization->user->address}}
                        <br>
                        <a href="mailto:name@email.com">{{$organization->user->email}}</a>
                    </div>
                    <p class="lead mb-5">{{$organization->status}}</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="animals">
                   
                    <div class="card-container">
                        @foreach ($animals as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{url('images')}}/{{$item->image}}" alt="Card image cap" style="height: 250px; width:100%;">
                            <div class="card-body">
                              <h5 class="card-title">{{$item->name}}</h5>
                              <p class="card-text">{{$item->description}}</p>
                              <a href="{{route('adopt', ['animal' => $item->id])}}" class="btn btn-primary">Adopt</a>
                            </div>
                          </div>
                        
                       
                    @endforeach
                   
                    
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
           
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
