<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!-- my CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<title>Warna Balon Website</title>

<body id="home" class="scrollspy">

  <!-- navbar -->

  <div class="navbar-fixed">

    <nav class="blue darken-1">

      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">WARNA BALON</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About Us</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>

        </div>

      </div>

    </nav>

  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#about">About Us</a></li>
    <li><a href="#clients">Clients</a></li>
    <li><a href="services">Services</a></li>
    <li><a href="portfolio">Portolio</a></li>
    <li><a href="contact">Contact Us</a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/1.jpg">
        <div class="caption center-align">
          <h3>Warna Balon.</h3>
          <h5 class="light grey-text text-lighten-3">Mewarnai Kebutuhan anda</h5>
        </div>
      </li>

      <li>
        <img src="img/slider/2.jpg">
        <div class="caption right-align">
          <h3>Warna Balon.</h3>
          <h5 class="light grey-text text-lighten-3">Mewarnai Kebutuhan anda</h5>
        </div>
      </li>

      <li>
        <img src="img/slider/3.jpg">
        <div class="caption left-align">
          <h3>Warna Balon.</h3>
          <h5 class="light grey-text text-lighten-3">Mewarnai Kebutuhan anda</h5>
        </div>
      </li>

    </ul>
  </div>

  <!-- About Us -->
  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3">About Us</h3>
        <div class="col m6 light">
          <h5>We Are Professionals</h5>
          <p>We provide you with the best service about baloon advertising. We have alot of experienced handling big events. And we delivered our service anywhere in Indonesia. Dont hesitate to contact us and ask a question, we will kindly will helped you.</p>
        </div>
        <div class="col m6 light">
          <p>QUALITY</p>
          <div class="progress">
            <div class="determinate blue" style="width: 90%"></div>
          </div>
        </div>

        <div class="col m6 light">
          <p>SERVICES</p>
          <div class="progress">
            <div class="determinate blue" style="width: 90%"></div>
          </div>
        </div>

        <div class="col m6 light">
          <p>PRICES</p>
          <div class="progress">
            <div class="determinate blue" style="width: 90%"></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Clients -->
  <div id="clients" class="parallax-container scrollspy">
    <div class="parallax"><img src="img/slider/5.jpg"></div>

    <div class="container clients">
      <h3 class="center light white-text">Our Clients</h3>
      <div class="row">
        <div class="col m3 s12 center">
          <img src="img/clients/1.png">
        </div>
        <div class="col m3 s12 center">
          <img src="img/clients/yamaha.png">
        </div>
        <div class="col m3 s12 center">
          <img src="img/clients/gojek.png">
        </div>
        <div class="col m3 s12 center">
          <img src="img/clients/grab.png">
        </div>
      </div>
    </div>
  </div>

  <!-- services -->
  <section id="services" class="services grey text-lighten-3 scrollspy">
    <div class="container">

      <div class="row">
        <h3 class="light center grey-text text-darken-3">Our Services</h3>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">lightbulb_outline</i>
            <h5>Balon Promosi</h5>
          </div>
        </div>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">battery_charging_full</i>
            <h5>Balon Tepuk</h5>
          </div>
        </div>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">casino</i>
            <h5>Balon Dekorasi</h5>
          </div>
        </div>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">location_on</i>
            <h5>Balon Udara</h5>
          </div>
        </div>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">looks</i>
            <h5>Balon Gapura</h5>
          </div>
        </div>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">accessibility</i>
            <h5>Sky Dancer</h5>
          </div>
        </div>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">brightness_high</i>
            <h5>Balon LED</h5>
          </div>
        </div>

        <div class="col m3 s12">
          <div class="card-panel center">
            <i class="material-icons medium">flight_takeoff</i>
            <h5>Balon Zeppelin</h5>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- portfolio -->

  <section id="portfolio" class="portfolio scrollspy"></section>
  <div class="container">
    <h3 class="light center grey-text text-darken-3">Portfolio</h3>

    <div class="row">

      <div class="col m3 s12">
        <img src="img/portfolio/1.jpg" class="responsive-img materialboxed" data-caption="Foto kolase balon">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/2.jpg" class="responsive-img materialboxed" data-caption="Balon gate">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/3.jpg" class="responsive-img materialboxed" data-caption="Balon model botol oli yamalube">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/4.jpg" class="responsive-img materialboxed" data-caption="Balon tepuk event BRI">
      </div>

    </div>

    <div class="row">

      <div class="col m3 s12">
        <img src="img/portfolio/9.jpg" class="responsive-img materialboxed" data-caption="Balon udara grab">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/10.jpg" class="responsive-img materialboxed" data-caption="Balon Dekorasi HUT RI 73th">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/1.jpg" class="responsive-img materialboxed" data-caption="Foto Kolase">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/12.jpg" class="responsive-img materialboxed" data-caption="Balon model milo">
      </div>

    </div>


    <div class="row">

      <div class="col m3 s12">
        <img src="img/portfolio/5.jpg" class="responsive-img materialboxed" data-caption="Balon Dekorasi">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/6.jpg" class="responsive-img materialboxed" data-caption="Balon Udara Shcneider">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/7.jpg" class="responsive-img materialboxed" data-caption="Balon LED">
      </div>

      <div class="col m3 s12">
        <img src="img/portfolio/8.jpg" class="responsive-img materialboxed" data-caption="Balon udara bank BRI">
      </div>


    </div>
  </div>

</section>

<!-- contact us -->

<section id="contact" class="contact grey lighten-3 scrollspy">
  <div class="container">
    <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel blue darken-1 center white-text">
          <i class="material-icons">phone</i>
          <h5>Contact Us On</h5>
          <!-- <p><a href="https://wa.me/6285232904156?text=Isi Pesan">Chat Via WhatsApp</a></p> -->
          <a href="https://api.whatsapp.com/send?phone=62818677028&text=Hallo%20Warna%20Balon"><img src="img/watsapp.png"></a>
        </div>
        <ul class="collection with-header">
          <li class="collection-header"><h4>Our Office</h4></li>
          <li class="collection-item">Warna Balon</li>
          <li class="collection-item">Jl. Pelangi III No.162</li>
          <li class="collection-item">Ciledug, Banten</li>
        </ul>
      </div>
      
      <div class="col m7 s12">
        <form method="post" action="{{ url('/submit')}}">
          {{ csrf_field() }}
          <div class="card-panel">
            <h5>Please Fill Out This Form</h5>
            <div class="input-field">
              <input type="text" name="name" id="name" required class="validate">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" name="phone" id="phone">
              <label for="phone">Phone</label>
            </div>
            <div class="input-field">
              <textarea name="message" id="message" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
            <button type="submit" class="btn" blue darken-1>Send</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

<!-- footer -->
<footer class="light blue darken-1 white-text center">
  <p class="flow-text">Web Warna Balon. Copyright 2019</p>
</footer>


<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);

  const slider = document.querySelectorAll('.slider');
  M.Slider.init(slider, {
    indicators: false,
    height: 500,
    transition: 600,
    interval: 4000
  });

  const parallax = document.querySelectorAll('.parallax');
  M.Parallax.init(parallax);

  const materialbox = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialbox);

  const scroll = document.querySelectorAll('.scrollspy');
  M.ScrollSpy.init(scroll, {
    scrollOffset: 33
  });


</script>
</body>

</html>