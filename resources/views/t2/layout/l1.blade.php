<!DOCTYPE html>
<html lang="en">
<head>
  <title>navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/styles/style2.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light  static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
              <img src="assets/images/logo 1.png" alt="">
            </a>
        <button id="ana"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse "  id="navbarResponsive" style="text-align: center;" >
              <div class="col-10">
                      <ul class="ul navbar-nav ml-auto pad-list d-flex justify-content-center">

                        <li class="nav-item active-li ">
                          <a class="nav-link active" href="#">Accueil
                                <span class="sr-only">(current)</span>
                              </a>
                        </li>


                        <li class="nav-item as">
                          <a class="nav-link  " href="#">Menu</a>
                        </li>


                        <li class="nav-item as">
                          <a class="nav-link" href="#">Notre histoires</a>
                        </li>


                        <li class="nav-item as">
                          <a class="nav-link" href="#">Contact</a>
                        </li>

                      </ul>
              </div>
        <div class="col-2">
            <ul class="navbar-nav ml-auto ">
                <div class="col-10">
                  <div class="row">
                    <div class="col-2">
                      <li class="nav-item active">
                        <a class="navbar-brand" href="#">
                          <img src="assets/images/Group.png" alt="">
                        </a>
                      </li>
                    </div>
                      <div class="col-2">
                        <li class="nav-item li2">
                          <a class="navbar-brand" href="#">
                            <img src="assets/images/Vector.png" alt="">
                          </a>
                        </li>

                      </div>
                </div>
        </div>
            <div class="col-4">
              <li class="navbar-nav nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  FR
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">FR</a>
                  <a class="dropdown-item" href="#">EN</a>
                  <a class="dropdown-item" href="#">NL</a>
                </div>
              </li>
            </div>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- SLIDER -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner shapee">
      <div class=" content ">
        <div class="v-center d-flex justify-content-center align-items-center">
          <div class="text-center">
             <h2>FRITURE DE POISSON - FRUITS DE MER</h2>
             <h3>restaurant gastronomique</h3>
             <button>Commander</button>

            </div>

        </div>

        </div>
      <div class="carousel-item active">
        <img class="d-block w-100 " src="/assets/images/shutterstock_1482799622 2.png" style="filter: brightness(75%)
        "  alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 " src="/assets/images/shutterstock_1482799622 2.png" style="filter: brightness(75%)
        "  alt="First slide">

      </div>
      <div class="carousel-item" >
        <img class="d-block w-100 " src="/assets/images/shutterstock_1482799622 2.png" style="filter: brightness(75%)
        "  alt="First slide">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100 " src="/assets/images/shutterstock_1482799622 2.png" style="filter: brightness(75%)
        "  alt="First slide">
      </div>
</div>
  </div>

  <!-- icons -->

    <div class="v-center d-flex justify-content-center">
      <div class="abs">
        <a href="">
          <div class="f-icon">
            <svg class="media-icon" width="48" height="52" viewBox="0 0 48 52" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.4375 49.7845V36.8599C18.4375 35.9564 19.3594 35.0345 20.2813 35.0345H27.6563C28.5781 35.0345 29.5 35.9564 29.5 36.8783V49.7845C29.5 50.2735 29.6943 50.7425 30.04 51.0883C30.3858 51.434 30.8548 51.6283 31.3438 51.6283H46.0938C46.5827 51.6283 47.0517 51.434 47.3975 51.0883C47.7433 50.7425 47.9375 50.2735 47.9375 49.7845V23.972C47.9379 23.7298 47.8906 23.4898 47.7982 23.2658C47.7059 23.0418 47.5702 22.8382 47.3991 22.6667L42.4063 17.6775V5.53455C42.4063 5.04555 42.212 4.57659 41.8662 4.23082C41.5205 3.88505 41.0515 3.6908 40.5625 3.6908H36.875C36.386 3.6908 35.917 3.88505 35.5713 4.23082C35.2255 4.57659 35.0313 5.04555 35.0313 5.53455V10.3025L25.2741 0.541671C25.1029 0.369969 24.8994 0.233742 24.6754 0.140793C24.4514 0.0478446 24.2113 0 23.9688 0C23.7262 0 23.4861 0.0478446 23.2621 0.140793C23.0381 0.233742 22.8346 0.369969 22.6634 0.541671L0.538378 22.6667C0.367271 22.8382 0.231652 23.0418 0.139274 23.2658C0.0468956 23.4898 -0.000429777 23.7298 2.94076e-06 23.972V49.7845C2.94076e-06 50.2735 0.194255 50.7425 0.540025 51.0883C0.885795 51.434 1.35476 51.6283 1.84375 51.6283H16.5938C17.0827 51.6283 17.5517 51.434 17.8975 51.0883C18.2433 50.7425 18.4375 50.2735 18.4375 49.7845Z" fill="#E5E5E5"/>
              <g clip-path="url(#clip0)">
              <path d="M22.2688 11.0887V15.5159H21.4688V11.1159C21.4688 11.0098 21.4266 10.9081 21.3516 10.8331C21.2766 10.7581 21.1748 10.7159 21.0688 10.7159C20.9627 10.7159 20.8609 10.7581 20.7859 10.8331C20.7109 10.9081 20.6688 11.0098 20.6688 11.1159V15.5159H19.8688V11.1015C19.8688 10.5867 19.0688 10.6043 19.0688 11.0883V15.5159H18.2688V11.1199C18.2688 10.5747 17.4688 10.5947 17.4688 11.0983V16.8871C17.4688 17.7219 18.2688 18.2723 19.0688 18.2723V28.7159C19.0688 30.3159 21.4688 30.3159 21.4688 28.7159V18.2727C22.2688 18.2727 23.0687 17.6079 23.0687 16.9819V11.1015C23.0687 10.5915 22.2688 10.6111 22.2688 11.0887ZM25.8688 12.3159V22.3159H26.6687V28.7159C26.6687 30.3159 29.4688 30.3159 29.4688 28.7159V12.3159C29.4688 10.3159 25.8688 10.3159 25.8688 12.3159Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0">
              <rect width="20" height="20" fill="white" transform="translate(13.4688 10.3164)"/>
              </clipPath>
              </defs>
              </svg>
              <p style="color:#E5E5E5;font-size: 14px;padding-top: 10px;
      ">sasa</p>
        </div>
        </a>
       <a href="">
        <div class="s-icon">
          <svg class="media-icon" width="48" height="52" viewBox="0 0 60 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M50.2917 5.91667C50.2917 2.6625 47.6292 0 44.375 0H35.5V5.91667H44.375V13.7563L34.08 26.625H23.6667V11.8333H11.8333C5.29542 11.8333 0 17.1288 0 23.6667V32.5417H5.91667C5.91667 37.4525 9.88083 41.4167 14.7917 41.4167C19.7025 41.4167 23.6667 37.4525 23.6667 32.5417H36.92L50.2917 15.8271V5.91667ZM5.91667 26.625V23.6667C5.91667 20.4125 8.57917 17.75 11.8333 17.75H17.75V26.625H5.91667ZM14.7917 35.5C13.1646 35.5 11.8333 34.1688 11.8333 32.5417H17.75C17.75 34.1688 16.4188 35.5 14.7917 35.5Z" fill="#b4370d"/>
            <path d="M8.875 2.95833H23.6667V8.875H8.875V2.95833ZM50.2917 23.6667C45.3808 23.6667 41.4167 27.6308 41.4167 32.5417C41.4167 37.4525 45.3808 41.4167 50.2917 41.4167C55.2025 41.4167 59.1667 37.4525 59.1667 32.5417C59.1667 27.6308 55.2025 23.6667 50.2917 23.6667ZM50.2917 35.5C48.6646 35.5 47.3333 34.1688 47.3333 32.5417C47.3333 30.9146 48.6646 29.5833 50.2917 29.5833C51.9188 29.5833 53.25 30.9146 53.25 32.5417C53.25 34.1688 51.9188 35.5 50.2917 35.5Z" fill="#b4370d"/>
            </svg>
            <p>Livraison</p>

        </div>
      </a>
      </div>
      </div>
    </div>
  @yield('content')


      <footer>

    <div class="container">
      <div class="row justify-content-between footer-font">
        <div class="col-3 pp">
          <img src="/assets/images/logo 1.png" alt="">
        </div>
        <div class="col-3">
          <p class="bold">suivez-nous</p>
          <br>
          <div>
            icons

          </div>
        </div>
        <div class="col-3">
          <p class="bold">contact</p>
          <br>
          <p>Boulevard Maurice Lemonnier 216-218, 1000 Bruxelles</p>
          <br>
          <p>+32 2 540 20 35</p>
        </div>
        <div class="col-3">
          <p class="bold">Heures d’ouverture</p>
          <br>
          <p>Lundi au dimanche</p>
          <p>06h00 - 22h00</p>
        </div>
      </div>
      <hr>
      <p style="text-align: center; color: #b4370d;">  Copyright (c) Devcom-Media
      </p>
    </div>
  </footer>

</body>
