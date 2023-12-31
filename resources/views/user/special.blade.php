<!doctype html>
<html lang="en">

<head>
  <title>ShellFish | Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

@include('user.component.header');

</head>

<body>
  <header class="">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <div class="ms-auto">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}" aria-current="page">Home <span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/destination') }}">Destinations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/special') }}">Special Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/transportation') }}">Transportation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link badge text-bg-orange m-2 p-2"
                  href="{{url('/booking')}}">Book</a>
              </li>
              <!-- Language -->
              <!-- <div class="nav-item dropdown">
                      <select class="nav-link dropdown-toggle" id="">
                        <div class="dropdown-menu">
                          <option value="en" class="dropdown-item" style="background: #00000050 0.1; color: black;">EN</option>
                          <option value="id" class="dropdown-item" style="background: #00000050 0.1; color: black;">ID</option>
                        </div>
                      </select>
                    </div>  -->
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="main special">
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="mt-6 mb-6">
                    <div class="d-flex flex-wrap">
                      @foreach ($data as $item)
                          <div class="p-3 rounded"><img src="{{ asset('storage/'.$item->picture) }}" class="img-fluid" style="width: 24rem;" alt="..."></div>
                      @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://api.whatsapp.com/send/?phone=%2B6282129293099&text&type=phone_number&app_absent=0" class="float"
        target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
      </a>
  </header>


    <footer class="footer-transport fixed-bottom p-2 bg-dark text-center">
        <div class="container-fluid text-white">
            <ul>
                <li><i class="bi bi-telephone"></i><a href="https://www.instagram.com/shellfish.balitour/"
                        target="_blank"> +62 821-2929-3099</a></li>
                <li><i class="bi bi-instagram"></i><a href="https://www.instagram.com/shellfish.balitour/"
                        target="_blank"> shellfish.balitour</a></li>
                <li><i class="bi bi-envelope-fill"></i> <a href="mailto:shellfish.cs@gmail.com"
                        target="_blank">shellfish.cs@gmail.com</a></li>
            </ul>
        </div>
    </footer>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="{{asset('user/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('user/js/jquery.bundle.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('user/js/jquery.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('user/js/script.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->



</body>

</html>