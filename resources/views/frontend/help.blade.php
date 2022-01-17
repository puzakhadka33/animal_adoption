@extends('layouts.front')
@section('temp')
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Live and let Live</title>
    <style>
        body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

.form-group{
    margin-bottom: 15px;
}
#contactfrm-btn{
        padding: 10px 30px;
        color: white;
        border: 2px solid rgb(28, 121, 197);
        border-radius: 12px;
        background-color: rgb(28, 121, 197);
        font-weight: bold;
        position: absolute;
        left: 530px;
        top: 750px;
      }

      .map-locate{
          position: absolute;
          top: 460px;
          left: 790px;
           /* border-radius: 12px; */
          /* border: 2px solid rgb(94, 94, 94);
          box-shadow: 5px 5px rgb(94, 94, 94);  */
          width: 450px;
          margin-top: 20px;
      }
      #org-drop{

      }

    </style>
  </head>
  <body>
    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <form method="post" action="{{route('message.store')}}" enctype="multipart/form-data">
            @csrf
            <h3>Send Distress Message</h3>


            <div class="form-group">
                <label for="">Select an Organization</label>
                <select name="organization_id" id="" class="form-control" required>
                  <option value="">Select an Organization</option>
                  @foreach($organization as $org)
                    <option value="{{$org->id}}">{{$org->user->name}}</option>
                  @endforeach
                </select>
              </div>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="location" class="form-control" placeholder="Location of the animal" value="" />
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="lat" class="form-control" placeholder="lat" value="" id="lat"/>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="lng" class="form-control" placeholder="lng" value="" id="lng"/>
                    </div>
                    
                </div>
                {{-- <div class="col-md-6"> --}}
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Your Message *" style="width: 50%; height: 150px;"></textarea>
                    </div>
                {{-- </div> --}}
                <div class="map-locate">
                    <h5>Ping the location of animal</h5>
                    <div id="map" style="height:255px; width: 400px;" class="my-3"></div>
                </div>
                
                
</div>

<script>
    let map;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 27.700769, lng: 85.300140 },
            zoom: 15,
            scrollwheel: true,
        });

        const uluru = { lat:27.700769, lng: 85.300140 };
        let marker = new google.maps.Marker({
            position: uluru,
            map: map,
            draggable: true
        });

        google.maps.event.addListener(marker,'position_changed',
            function (){
                let lat = marker.position.lat()
                let lng = marker.position.lng()
                $('#lat').val(lat)
                $('#lng').val(lng)
            })

        google.maps.event.addListener(map,'click',
        function (event){
            pos = event.latLng
            marker.setPosition(pos)
        })
    }
</script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWQJ0mG1aHDgQyXwUkIH8-0EMP2MTRqJg&callback=initMap"
                        type="text/javascript"></script>
</div>
<button type="submit" id="contactfrm-btn"> Send</button>
        </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>


                
    
  </body>
</html>
@endsection

