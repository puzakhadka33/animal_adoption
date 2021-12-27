@extends('layouts.master')
@section('content')

<style>
    
/* .land-img img{
    width: 100%;
    height: 500px;
} */
/* carousel */
.card{
    width:100%;
    height: 500px;

}
.org-list{
    margin-top: 20px;
    /* border:2px solid; */
    /* height: 250px; */
    margin: 50px 220px;
    border-radius: 12px;
    /* background-color: grey; */
}

.org img{
    width:30%;
    height: 245px;
    border: 2px;
    padding: 18px;
    

}
.org{
    display: inline-block;
    box-sizing: border-box;
    /* display: inline-block; */
    border: 3px solid rgb(128, 123, 123);
    border-radius: 12px;
    margin-bottom: 20px;
    height: 250px;
    box-sizing: border-box;
    /* margin-bottom: 10px; */
}


.org-details{
    float: left;
    margin-left: 375px;
    display: inline-block;
}

    .section-cards {
    z-index: 3;
    position: relative;
}

.section-gray {
    background: #E5E5E5;
    padding: 60px 0 30px 0;
}


/*---------------------------------------------------------------------- /
CARDS
----------------------------------------------------------------------- */

.card {
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    border-radius: 6px;
    color: rgba(0, 0, 0, 0.87);
    background: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.card .card-image {
    height: 60%;
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card .card-image img {
    width: 100%;
    height: 100%;
    border-radius: 6px;
    pointer-events: none;
}

.card .card-image .card-caption {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: #fff;
    font-size: 1.3em;
    text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}

.card img {
    width: 100%;
    height: auto;
}

.img-raised {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card .ftr {
    margin-top: 15px;
}

.card .ftr div {
    display: inline-block;
}

.card .ftr .author {
    color: #888;
}

.card .ftr .stats {
    float: right;
    line-height: 30px;
}

.card .ftr .stats {
    position: relative;
    top: 1px;
    font-size: 14px;
}


/* ============ Card Table ============ */

.table {
    margin-bottom: 0px;
}

.card .table {
    padding: 15px 30px;
}

.card .table-primary {
    background: linear-gradient(60deg, #ab47bc, #7b1fa2);
}

.card .table-info {
    background: linear-gradient(60deg, #26c6da, #0097a7);
}

.card .table-success {
    background: linear-gradient(60deg, #66bb6a, #388e3c);
}

.card .table-warning {
    background: linear-gradient(60deg, #ffa726, #f57c00);
}

.card .table-danger {
    background: linear-gradient(60deg, #ef5350, #d32f2f);
}

.card .table-rose {
    background: linear-gradient(60deg, #ec407a, #c2185b);
}

.card [class*="table-"] {
    color: #FFFFFF;
    border-radius: 6px;
}

.card [class*="table-"] .card-caption a,
.card [class*="table-"] .card-caption,
.card [class*="table-"] .icon i {
    color: #FFFFFF;
}

.card [class*="table-"] .icon i {
    border-color: rgba(255, 255, 255, 0.25);
}

.card [class*="table-"] .author a,
.card [class*="table-"] .ftr .stats,
.card [class*="table-"] .category,
.card [class*="table-"] .card-description {
    color: rgba(255, 255, 255, 0.8);
}

.card [class*="table-"] .author a:hover,
.card [class*="table-"] .author a:focus,
.card [class*="table-"] .author a:active {
    color: #FFFFFF;
}

.card [class*="table-"] h1 small,
.card [class*="table-"] h2 small,
.card [class*="table-"] h3 small {
    color: rgba(255, 255, 255, 0.8);
}


/* ============ Card Blog ============ */

.card-blog {
    margin-top: 30px;
}

.card-blog .card-caption {
    margin-top: 5px;
}

.card-blog .card-image + .category {
    margin-top: 20px;
}

.card-raised {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}


/* ============ Card Background ============ */

.card-background {
    background-position: center;
    background-size: cover;
    text-align: center;
}

.card-background .table {
    position: relative;
    z-index: 2;
    min-height: 280px;
    padding-top: 40px;
    padding-bottom: 40px;
    max-width: 440px;
    margin: 0 auto;
}

.card-background .category,
.card-background .card-description,
.card-background small {
    color: rgba(255, 255, 255, 0.8);
}

.card-background .card-caption {
    color: #FFFFFF;
    margin-top: 10px;
}

.card-background:after {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    table: "";
    background-color: rgba(0, 0, 0, 0.56);
    border-radius: 6px;
}


/* ============ Card Profile ============ */

.card-profile {
    margin-top: 30px;
    text-align: center;
}


/* ============ Card Category ============ */

.category {
    position: relative;
    line-height: 0;
    margin: 15px 0;
}

.card .category-social .fa {
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 2px;
    margin-right: 5px;
}


/* ============ Card Author ============ */

.card .author .avatar {
    width: 36px;
    height: 36px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px;
}

.card .author a {
    color: #333;
    text-decoration: none;
}

.card .author a .ripple-cont {
    display: none;
}


/* ============ Card Product ============ */

.card-product {
    margin-top: 30px;
}

.card-product .btn-simple.btn-just-icon {
    padding: 0;
}

.card-product .ftr {
    margin-top: 5px;
}

.card-product .ftr .stats {
    margin-top: 4px;
    top: 0;
}

.card-product .ftr h4 {
    margin-bottom: 0;
}

.card-product .card-caption,
.card-product .category,
.card-product .card-description {
    text-align: center;
}

.card-description p {
    color: #888;
}

.card-caption,
.card-caption a {
    color: #333;
    text-decoration: none;
}

.card-caption {
    font-weight: 700;
    font-family: "Roboto Slab", "Times New Roman", serif;
}


/* ============ Card Testimonial ============ */

.card-testimonial {
    margin-top: 0;
    margin-bottom: 60px;
    text-align: center;
}

.card-profile .btn-just-icon.btn-raised,
.card-testimonial .btn-just-icon.btn-raised {
    margin-left: 6px;
    margin-right: 6px;
}

.card-profile .card-avatar,
.card-testimonial .card-avatar {
    max-width: 130px;
    max-height: 130px;
    margin: -50px auto 0;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card-profile.card-plain .card-avatar,
.card-testimonial.card-plain .card-avatar {
    margin-top: 0;
}

.card-testimonial .card-avatar {
    max-width: 100px;
    max-height: 100px;
}

.card-testimonial .card-description {
    font-style: italic;
}

.card-testimonial .card-description + .card-caption {
    margin-top: 30px;
}

.card-testimonial .icon {
    margin-top: 30px;
}

.card-testimonial .icon {
    font-size: 40px;
}

.card-testimonial .ftr {
    margin-top: 0;
}

.card-testimonial .ftr .card-avatar {
    margin-top: 10px;
    margin-bottom: -50px;
}


/* ============ Text Color ============ */

.text-warning {
    color: #ff9800;
}

.text-primary {
    color: #9c27b0;
}

.text-danger {
    color: #f44336;
}

.text-success {
    color: #4caf50;
}

.text-info {
    color: #00bcd4;
}

.text-rose {
    color: #e91e63;
}

.text-gray {
    color: #888;
}


/*---------------------------------------------------------------------- /
BUTTONS
----------------------------------------------------------------------- */

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}

.btn,
.navbar .navbar-nav > li > a.btn {
    border: none;
    border-radius: 3px;
    position: relative;
    padding: 12px 30px;
    margin: 10px 1px;
    font-size: 12px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0;
    will-change: box-shadow, transform;
    transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.btn:focus,
.btn:active,
.btn:active:focus {
    outline: 0;
}

.btn.btn-round,
.navbar .navbar-nav > li > a.btn.btn-round {
    border-radius: 30px;
}

.btn.btn-just-icon,
.navbar .navbar-nav > li > a.btn.btn-just-icon {
    font-size: 20px;
    padding: 12px 12px;
    line-height: 1em;
}

.btn.btn-just-icon i,
.navbar .navbar-nav > li > a.btn.btn-just-icon i {
    width: 20px;
}


/* Button Info */

.btn.btn-info {
    background-color: #00bcd4;
    color: #FFFFFF;
}

.btn.btn-info:focus,
.btn.btn-info:active,
.btn.btn-info:hover {
    box-shadow: 0 14px 26px -12px rgba(0, 188, 212, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2);
}


/* Button Danger */

.btn.btn-danger {
    background-color: #f44336;
    color: #FFFFFF;
}

.btn.btn-danger:focus,
.btn.btn-danger:active,
.btn.btn-danger:hover {
    box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}


/* Button Warning */

.btn.btn-warning.btn-simple:hover,
.btn.btn-warning.btn-simple:focus,
.btn.btn-warning.btn-simple:active {
    background-color: transparent;
    color: #ff9800;
}

.btn.btn-warning.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-warning.btn-simple {
    background-color: transparent;
    color: #ff9800;
    box-shadow: none;
}

.btn.btn-warning,
.navbar .navbar-nav > li > a.btn.btn-warning {
    box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12);
}


/* Button Rose */

.btn.btn-rose.btn-simple:hover,
.btn.btn-rose.btn-simple:focus,
.btn.btn-rose.btn-simple:active {
    background-color: transparent;
    color: #e91e63;
}

.btn.btn-rose.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-rose.btn-simple {
    background-color: transparent;
    color: #e91e63;
    box-shadow: none;
}


/* Button White */

.btn.btn-white,
.btn.btn-white:focus,
.btn.btn-white:hover {
    background-color: #FFFFFF;
    color: #888;
}

.btn.btn-white.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-white.btn-simple {
    color: #FFFFFF;
    background: transparent;
    box-shadow: none;
}


/*---------------------------------------------------------------------- /
SOCIAL MEDIA BUTTONS
----------------------------------------------------------------------- */


/* facebook */

.btn.btn-facebook,
.navbar .navbar-nav > li > a.btn.btn-facebook {
    background-color: #3b5998;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(59, 89, 152, 0.14), 0 3px 1px -2px rgba(59, 89, 152, 0.2), 0 1px 5px 0 rgba(59, 89, 152, 0.12);
}

.btn.btn-facebook:focus,
.btn.btn-facebook:active,
.btn.btn-facebook:hover {
    background-color: #3b5998;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(59, 89, 152, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(59, 89, 152, 0.2);
}

.btn.btn-facebook.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-facebook.btn-simple {
    color: #3b5998;
    background-color: transparent;
    box-shadow: none;
}


/*twitter*/

.btn.btn-twitter,
.navbar .navbar-nav > li > a.btn.btn-twitter {
    background-color: #55acee;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(85, 172, 238, 0.14), 0 3px 1px -2px rgba(85, 172, 238, 0.2), 0 1px 5px 0 rgba(85, 172, 238, 0.12);
}

.btn.btn-twitter:focus,
.btn.btn-twitter:active,
.btn.btn-twitter:hover {
    background-color: #55acee;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(85, 172, 238, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(85, 172, 238, 0.2);
}

.btn.btn-twitter.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-twitter.btn-simple {
    color: #55acee;
    background-color: transparent;
    box-shadow: none;
}


/*pinterest*/

.btn.btn-pinterest,
.navbar .navbar-nav > li > a.btn.btn-pinterest {
    background-color: #cc2127;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(204, 33, 39, 0.14), 0 3px 1px -2px rgba(204, 33, 39, 0.2), 0 1px 5px 0 rgba(204, 33, 39, 0.12);
}

.btn.btn-pinterest:focus,
.btn.btn-pinterest:active,
.btn.btn-pinterest:hover {
    background-color: #cc2127;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(204, 33, 39, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(204, 33, 39, 0.2);
}

.btn.btn-pinterest.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-pinterest.btn-simple {
    color: #cc2127;
    background-color: transparent;
    box-shadow: none;
}


/*google*/

.btn.btn-google,
.navbar .navbar-nav > li > a.btn.btn-google {
    background-color: #dd4b39;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(221, 75, 57, 0.14), 0 3px 1px -2px rgba(221, 75, 57, 0.2), 0 1px 5px 0 rgba(221, 75, 57, 0.12);
}

.btn.btn-google:focus,
.btn.btn-google:active,
.btn.btn-google:hover {
    background-color: #dd4b39;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(221, 75, 57, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(221, 75, 57, 0.2);
}

.btn.btn-google.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-google.btn-simple {
    color: #dd4b39;
    background-color: transparent;
    box-shadow: none;
}


/*dribbble*/

.btn.btn-dribbble,
.navbar .navbar-nav > li > a.btn.btn-dribbble {
    background-color: #ea4c89;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(234, 76, 137, 0.14), 0 3px 1px -2px rgba(234, 76, 137, 0.2), 0 1px 5px 0 rgba(234, 76, 137, 0.12);
}

.btn.btn-dribbble:focus,
.btn.btn-dribbble:active,
.btn.btn-dribbble:hover {
    background-color: #ea4c89;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(234, 76, 137, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(234, 76, 137, 0.2);
}

.btn.btn-dribbble.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-dribbble.btn-simple {
    color: #ea4c89;
    background-color: transparent;
    box-shadow: none;
}


/*instagram*/

.btn.btn-instagram,
.navbar .navbar-nav > li > a.btn.btn-instagram {
    background-color: #125688;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(18, 86, 136, 0.14), 0 3px 1px -2px rgba(18, 86, 136, 0.2), 0 1px 5px 0 rgba(18, 86, 136, 0.12);
}

.btn.btn-instagram:focus,
.btn.btn-instagram:active,
.btn.btn-instagram:hover {
    background-color: #125688;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(18, 86, 136, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(18, 86, 136, 0.2);
}

.btn.btn-instagram.btn-simple,
.navbar .navbar-nav > li > a.btn.btn-instagram.btn-simple {
    color: #125688;
    background-color: transparent;
    box-shadow: none;
}


/*---------------------------------------------------------------------- /
BOOTSTRAP COL-MD-12 CLASS
----------------------------------------------------------------------- */

.col-md-12 {
    padding-right: 0px;
    padding-left: 0px;
}


/*---------------------------------------------------------------------- /
FONT AWESOME FA CLASS
----------------------------------------------------------------------- */

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/***********Only4Demo*******************/
/**************************************/

/* ======= GENERAL  ======= */

body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4 {
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    font-weight: 300;
    line-height: 1.5em;
}

a {
    color: #9c27b0;
    text-decoration: none;
}

a:hover {
    color: #9c27b0;
    text-decoration: underline;
}

p {
    color: #3C4857;
}

header {
    border-bottom: 1px solid #dedede;
    text-align: center;
}


h1, .h1 {
  font-size: 3.8em;
}

h2, .h2 {
  font-size: 2.0em;
  line-height: 1.6em;
  margin: 15px 0 15px;
  font-weight: 700;
  font-family: "Roboto Slab", "Times New Roman", serif;
  text-align: center;
}

h3, .h3 {
  font-size: 1.825em;
  line-height: 1.4em;
  margin: 30px 0 30px;
  font-weight: 700;
  font-family: "Roboto Slab", "Times New Roman", serif;
  text-align: center;
}

h4, .h4 {
  font-size: 1.3em;
  line-height: 1.55em;
}

h5, .h5 {
  font-size: 1.25em;
  line-height: 1.55em;
  margin-bottom: 15px;
}

h6, .h6 {
  font-size: 0.9em;
  font-weight: 500;
}
.carousel-item img{
    height: 570px;
}
.card-group{
    margin-top: 40px;
}
.blog{
    margin-top: 50px;
}
.card img{
    height: 200px;
    width: 80%;
    margin-left: 40px;


}
.card{
    margin: 2px 20px;
}
.card-body{
    margin: 15px 20px;
    text-align: justify;
}
.card-title p{
    font-weight: bold;
}

.card {
    overflow: hidden;
    height: auto;
}
.caption-cow p{
    font-weight: 100;
    font-size: 18px;
    line-height: 20px;
}

.card{
    
}

#monkeycard{
    margin-top: 50px;
}
.category-social p{
    font-weight: 100;
    font-size: 18px;
    line-height: 20px;
}
#social-class{
    margin-top: 32px;
}

#blog-container{
    height: 370px;
    width: 99%;
}
#blog-container p{
 overflow: hidden;
 text-overflow: ellipsis;
 display: -webkit-box;
 -webkit-line-clamp: 10;
 -webkit-box-orient: vertical; 
}
#blog-container a{
    text-decoration: none;
}

.card-cpt p{
text-align: justify;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 4;
 
}

.organization-btn{
    padding: 10px;
    margin-left: 140px;
    border: 2px solid;
    border-radius: 12px;
    color: white;
    background-color: rgb(106, 106, 165); 
    margin-bottom: 20px;
}
.org-content{
    height: 250px;;
}

.organization-btn a{

    text-decoration: none;
    color: white;
}
</style>

    {{-- <img src="images/front.jpg" alt="" srcset=""> --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/front.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/goat.jfif" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/ani.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

{{-- card organization --}}


<div class="card-group">
    @foreach ($organization as $item)
    <div class="card">
      <img src="{{url('images/')}}/{{$item->image}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">{{$item->user->name}}</h4>
        <p class="card-text">{{$item->user->contact}}</p>
        <p>{{$item->user->address}}</p>
        <p class="org-content">{{$item->status}}</p>
      </div>
      <button class = "organization-btn" > <a href="orgprofile">View Organization</a></button>
    </div>
    @endforeach
</div>
    
<!-- organization list -->

<br>


<!-- blog section -->
<div class="blog">
    <div class="cards-1 section-gray">
        <div class="container">
                <h2>Blog Cards</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <img src="images/dog.jpg" alt="">
                                    <div class="card-caption">let support animal </div>
                                </a>
                                <div class="ripple-cont"></div>
                            </div>
                            @foreach ($blog as $item)
                            <div class="table" id="blog-container">
                                    
                        
                                <h6 class="category text-info">{{$item->title}}</h6>
                                <div class="card-cpt"><p>{{$item->description}}</p>
                                <a href="/blogdetail">See More</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="card" id="social-class">
                            <div class="table table-info">
                                <h5 class="category-social">
	    									<i class="table"></i> Injury
                                            <p>I helped a poor puppy once.I was strolling down the newly paved footpath in the park once when I saw some big teenagers doing some hitting action.</p>
	    								</h5>
                                <div class="ftr">
                                    
                                    <div class="stats">   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="table">
                                <h6 class="category text-danger">
	    									<i class="fa fa-globe "></i> Wild lifes
	    								</h6>
                                <p class="card-cpt">
	    								For the past five decades, we are on a mission to protect critical species and eco-regions of national and global importance. Additionally, we recognise more significant conservation issues that affect the overall biodiversity of our country.
                                </p>
                                <div class="ftr">
                                    
                                    <div class="stats"> <i class="fa fa-heart"></i> <i class="fa fa-comment"></i>  </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-blog" id="monkeycard">
                            <div class="card-image">
                               <img src="images/oo.jpg" alt="">
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                <h6 class="category text-success"><i class="fa fa-university"></i> Monkeys</h6>
                                <h4 class="card-cpt">
                            <a href="#">everyone deserve home </a>
	    			        </h4>
                                <p class="card-cpt"> Monkey is a common name that may refer to most mammals of the infraorder Simiiformes, also known as the simians. </p>
                                <div class="ftr">
                                   
                                    <div class="stats"> <i class="fa fa-clock-o"></i>  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <img src="images/cow.jfif" alt="">
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                <h6 class="category text-warning">
	    									<i class="fa fa-soundcloud"></i> cow
	    								</h6>
                                <h4 class="card-caption">
                                <a href="#">They deserve to live their own life</a>
                                <div class="caption-cow">
                                <p>A cow can live for around 20 years but in commercial systems she will be culled at 6 year old, on average. She can give birth from 2-3 years old. </p>
                            </div>
                                <div class="ftr">
                                    
                                    <div class="stats"> <i class="fa fa-clock-o"></i>  </div>
                                </div>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>

</div>

<div class="maping">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.1164467747594!2d85.29047121453704!3d27.651868734535842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17f4a9113665%3A0x55c572a085a12046!2sSneha&#39;s%20Care!5e0!3m2!1sen!2snp!4v1640072449575!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection