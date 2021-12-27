@extends('layouts.master')
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
                    @foreach ($organization as $item)
                        
                    <h3 class="dark-color">{{$item->user->name}}</h3>
                    
                    <p>{{$item->status}}</p>
                    <div class="row about-list" id="org-info">
                        <div class="col-md-6">
                            <div class="media">
                                
                                <h4><span>Email : </span>{{$item->user->email}}</h4>

                            </div>
                            <div class="media">
                                <h4><span>Contact : </span>{{$item->user->contact}}</h4>
                            </div>
                            
                            <div class="media">
                                <h4><span>Address : </span>{{$item->user->address}}</h4>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="org-picture">
                <div class="about-avatar">
                    <img src="{{url('images/')}}/{{$item->image}}" class="card-img-top" alt="...">
                </div>
            </div>
            @endforeach
        </div>
        
            
        </div>
    </div>
</section>
@endsection