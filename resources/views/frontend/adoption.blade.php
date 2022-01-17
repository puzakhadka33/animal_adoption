
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0
}

.container {
    min-height: 100vh;
    background-color: rgb(255, 255, 255);
    display: flex;
    justify-content: center;
    align-items: center
}

.card {
    border: 2px solid;
    height: 430px;
    width: 320px;
    background-color: #fff;
    overflow: hidden;
    border-radius: 10px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    position: relative;
    box-shadow: 5px 5px rgb(158, 157, 157);
}

.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 999
}

.overlay .fa-close {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #fff
}

.overlay img {
    object-fit: cover;
    transition: all 2s;
    height: 100%;
    width: 100%
}

.d-none {
    display: none
}

.top-div {
    position: relative;
    padding: 20px;
    font-size: 17px;
    color: #fff;
    z-index: 1
}

.top-div i:nth-child(1) {
    position: absolute;
    transition: all 0.5s;
    left: -40px
}

.top-div i:nth-child(2) {
    position: absolute;
    top: 19px;
    right: -40px;
    transition: all 0.5s
}

.card:hover i:nth-child(1) {
    top: 20px;
    left: 20px
}

.card:hover i:nth-child(2) {
    right: 20px
}

.image {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 180px;
    width: 100%
}

.image span {
    height: 90px;
    width: 90px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #ccc;
    border: 3px solid #fff;
    z-index: 100
}

.image span img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover
}

.image h3 {
    margin-top: 5px;
    font-weight: 900;
    font-size: 18px;
    z-index: 100;
    color: #fff
}

.image h4 {
    margin-top: -3px;
    font-size: 13px;
    z-index: 100;
    color: #fff
}

.arc {
    display: flex;
    position: relative
}

.arc span {
    height: 600px;
    width: 600px;
    background-image: linear-gradient(to bottom, #B8550F, #626262);
    border-radius: 50%;
    position: absolute;
    right: -135px;
    top: -590px
}

.about {
    padding: 10px 20px
}

.about p:nth-child(1) {
    font-weight: 600
}

.about p:nth-child(2) {
    font-size: 13px;
    padding-right: 90px
}

.social {
    padding-left: 20px;
    position: relative
}

.social i {
    padding: 0px 4px;
    color: #626262
}

.social i:nth-child(1) {
    position: absolute;
    left: -40px;
    top: 4px;
    transition: all 0.5s
}

.social i:nth-child(2) {
    position: absolute;
    left: -40px;
    top: 4px;
    transition: all 0.5s;
    transition-delay: 0.1s
}

.social i:nth-child(3) {
    position: absolute;
    left: -40px;
    top: 4px;
    transition: all 0.5s;
    transition-delay: 0.2s
}

.social i:nth-child(4) {
    position: absolute;
    left: -40px;
    top: 4px;
    transition: all 0.5s;
    transition-delay: 0.3s
}

.card:hover .social i:nth-child(1) {
    left: 20px;
    top: 4px
}

.card:hover .social i:nth-child(2) {
    left: 45px;
    top: 4px
}

.card:hover .social i:nth-child(3) {
    left: 70px;
    top: 4px
}

.card:hover .social i:nth-child(4) {
    left: 96px;
    top: 4px
}

.button {
    padding-left: 20px;
    display: flex;
    position: relative;
    padding-top: 35px
}

.button button:nth-child(1) {
    height: 30px;
    width: 90px;
    margin-right: 10px;
    color: #fff;
    background-color: green;
    font-size: 12px;
    border-radius: 30px;
    border: none;
    transition: all 0.5s;
    cursor: pointer
}

.button button:nth-child(2) {
    height: 30px;
    width: 90px;
    margin-right: 10px;
    color: #4D38F6;
    border-radius: 30px;
    border: 2px solid green;
    font-size: 12px;
    background-color: #fff;
    transition: all 0.5s
}

.button button:nth-child(1):hover {
    background-image: linear-gradient(to right, #B8550F, #626262)
}

.button button:nth-child(2):hover {
    background-color: #ccc;
    color: #000;
    font-weight: 700
}

.profile-info {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center
}

.profile-info h2:nth-child(1) {
    position: absolute;
    top: 230px;
    right: 20px;
    font-size: 30px;
    color: #626262
}

.profile-info span:nth-child(2) {
    position: absolute;
    top: 260px;
    right: 20px;
    font-size: 10px;
    font-weight: bold;
    margin-top: 6px;
    color: #626262
}

.profile-info h2:nth-child(3) {
    position: absolute;
    top: 290px;
    right: 20px;
    font-size: 30px;
    color: #626262
}

.profile-info span:nth-child(4) {
    position: absolute;
    top: 320px;
    right: 20px;
    font-size: 10px;
    font-weight: bold;
    margin-top: 6px;
    color: #626262
}

.profile-info h2:nth-child(5) {
    position: absolute;
    top: 350px;
    right: 20px;
    font-size: 30px;
    color: #626262
}

.profile-info span:nth-child(6) {
    position: absolute;
    top: 380px;
    right: 20px;
    font-size: 10px;
    font-weight: bold;
    margin-top: 6px;
    color: #626262
}

#adoption-btn{
    color: white;
    text-decoration: none;
}
</style>
    <title>Live and let Live</title>
  </head>
  <body>
    
    <div class="container">
        <div class="card">
            <div class="overlay d-none"> <small class="fa fa-close"></small> <img src="https://i.imgur.com/WInwkB8.jpg"> </div>
            <div class="top-div"> <i class="fa fa-bars"></i> <i class="fa fa-envelope-o"></i> </div>
            <div class="image"> <span><img id="userimage" src="{{url('images')}}/{{$animal->image}}"></span>
                <h3>{{$animal->name}}</h3>
                <h4>{{$animal->breed}}</h4>
            </div>
            <div class="arc"> <span></span></div>
            <div class="about">
                <p><u>Additional Info</u></p>
                <p>Since creating that first suit, Iron Man has gone through numerous events significant to his life.</p>
            </div>
            <div class="social"> <i class="fa fa-facebook-square"></i> <i class="fa fa-instagram"></i> <i class="fa fa-google-plus"></i> <i class="fa fa-twitter"></i> </div>
            <div class="button"> <button> <a href="{{route('adopt', ['animal' => $animal->id])}}" id="adoption-btn">Adopt</a></button> </div>
            <div class="profile-info">
                <h2>{{$animal->height}}</h2> <span>Height</span>
                <h2>{{$animal->weight}}</h2> <span>Weight</span>
                <h2>{{$animal->length}}</h2> <span>Length</span>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>