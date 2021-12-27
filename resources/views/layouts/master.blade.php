<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
    <style>
      body{
        font-family: 'Open Sans Condensed', sans-serif;

      }
      #footeraboutus{
        display: inline-block;
      }
      #footeraboutus p{
        width: 80%;
        margin-left:50px;
        text-align: justify;
      }

      #footeraboutus h5{
        margin: auto;
        margin-bottom: 20px;
      }
      .contact-lst{
        width: 40%;
        margin: auto;
        text-align: justify;
      }

      .contact-lst{
        margin-right: 200px;
      }

      #ft-cont p{
        color: white;
      }
      #ft-abt{
        color: white;
      }

      #ft-abt p{
        color: white;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pets(N)</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inventory">Inventory</a>
              </li>
              <li class="nav-item">

                <a class="nav-link" href="request">Help Page</a>
              </li>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <div>
        @yield('content')
    </div>

   <!-- Footer -->
<footer class="page-footer font-small blue pt-4 bg-dark">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3" id="footeraboutus">

        <!-- Content -->
        <div id="ft-abt" ><h5 class="text-uppercase" >About Us</h5>
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente harum sed veniam voluptatem deleniti earum mollitia saepe quo. Quo cupiditate, dicta iure unde quas vero omnis dignissimos temporibus mollitia rem alias, officia dolorum laboriosam totam ex placeat necessitatibus, sint consequuntur itaque. Adipisci asperiores natus ipsum quam dolores, nostrum similique praesentium?</p>
        </div>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <div class="contact-lst" id="ft-cont">
          <h4 style="color: white">Our Info</h4>
          <p>Bhaktapur Duwakot</p>
          <br>
          <p>9863181155</p>
          </ul>
        </div>
     
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white">Contact US </h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com/puja.khadka.5688">Facbook 1</a>
          </li>
          <li>
            <a href="#!">Twitter 2</a>
          </li>
          <li>
            <a href="#!">Instagram 3</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    Live and Let Live
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
  </body>
</html>