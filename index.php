<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olga Le Labo</title>

    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Cousine&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    
</head>
<body>
  
  <header>
      <nav class="navbar navbar-expand-md">
          <div class="container mt-5  ">
              <a href="" class="navbar-brand"><img src="images/logo.png" alt=""></a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav">
              <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span></button>
              <div class="collapse navbar-collapse" id="navbar-nav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item pl-5"><a class="nav-link" href="">Accueil</a></li>
                  <li class="nav-item pl-5"><a class="nav-link" href="">Services</a></li>
                  <li class="nav-item pl-5"><a class="nav-link" href="">Accès</a></li>
                  <li class="nav-item pl-5"><a class="nav-link" href="">Contact</a></li>
                  <li class="nav-item pl-5"><a class="nav-link" href="">Photos</a></li>
              </ul>
              </div>
          </div>
      </nav>
  </header>
<section class="slider">
    <div class="container">
    
        <div id="slideShow" class="carousel-slide" data-ride="carousel" data-interval="3000">
       <div class="transparence"> <h1>Olga Le Labo</h1></div>
        <div class="carousel-iner">
     <div class="carousel-item active">
        <img src="images/coiffeur1.jpg" alt="" class="d-block">
    </div>
    <div class="carousel-item">
        <img src="images/coiffeur2.jpg" alt="" class="d-block">
    </div>
    <div class="carousel-item">
        <img src="images/coiffeur3.jpg" alt="" class="d-block">
    </div>
   
</div>
        </div>
       
    </div>
</section>
<section class="informations">
    <div class="container">
        <div class="row " >
            <div class="col-md infos"  >
                <div class=" d-flex flex-column">
                <div class="carte "  >
                   <div><i class="fas fa-clock"></i></div> 
                    <div><p id="info"></p><p id="infoBis"></p></div>
                    <div><i class="fas fa-angle-down" id="flecheDuBas"></i></div>
                    </div>                    
                    <ul class="horaire "  id="infoSup">
                       <li class="text-center">Lundi : 10h 18 h</li>
                       <li class="text-center">Mardi :  9h 19h</li>
                       <li class="text-center">Mercredi: fermé</li>
                       <li class="text-center">Jeudi :  9h 19h</li>
                       <li class="text-center">Vendredi:9h 19h</li>
                       <li class="text-center">Samedi : 9h 18h</li>
                       <li class="text-center">Dimanche: fermé</li> 
                    </ul>
            </div>
            </div>
            <div class="col-md infos">
                <div class="carte1">
            <div><i class="fas fa-map-marker-alt" id="marker"></i></div>
            <div><p class="rue">35 rue Jean Moulin</p>
            <p class="code">44980 Sainte-Luce-Loire</p>
            </div>
             </div>
              </div>
            <div class="col-md infos"><div class="carte2">
                <div><i class="fas fa-phone-volume"></i></div>
                <p>02 40 50 39 20</p>
            </div>
        </div>
        </div>
    </div>
    <div class="encartGoogleMap" id="map">
    <i class="fas fa-times-circle" id="croix"></i>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6441.146797121254!2d-1.4950233456701572!3d47.25240583465684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ef843148eec9%3A0xbf6bd96219553b1!2s35%20Rue%20Jean%20Moulin%2C%2044980%20Sainte-Luce-sur-Loire!5e0!3m2!1sfr!2sfr!4v1599376527585!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script> 

<script src="js/information.js"></script>
 <script>$('#slideShow').carousel({pause:"null"})</script> 
 <script src="js/calendrier.js"></script>
</body>
</html>