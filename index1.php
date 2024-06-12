 <?php
  include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/form.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-PARISARAA Dashboard</title>

  <link href="https://fonts.googleapis.com/css?family=Barlow:400,500|Barlow+Condensed:400,500|Barlow+Semi+Condensed:400,400i" rel="stylesheet">
  <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/colors/3.0.0/css/colors.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="color.processed.css">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  
  <style>
    body {
      font-family: 'Barlow', sans-serif;
    }
    
    .hero-main {
      background-image: url('elec.jpg');
      background-size: cover;
    }

    .navbar {
      background-color: rgba(255, 255, 255, 1) !important;
      border-bottom: 5px solid #ed7600;
    }

    .navbar-start {
      font-family: 'Barlow Semi Condensed';
    }

    .hero-main>.hero-body>.container>.columns>.column {
      padding: 2.5rem;
      background: rgba(255, 255, 255, 0.85) !important;
      margin: 2rem 1rem;
    }

    .exp>.column {
      border-left: .5rem solid;
    }

    .navbar-end>a {
      font-weight: 500 !important;
    }

    .subtitle,
    .content,
    .button,
    input,
    textarea,
    ul>li {
      font-family: 'Inter UI', sans-serif;
    }

    .slick-prev:before,
    .slick-next:before {
      color: #001F3F;
    }

    .slick-list>.slick-track {
      margin-left: 0;
    }

    .card {
      margin: 1rem;
    }
    
    .card-content {
      padding: 2rem 3rem 2rem 2rem;
    }
  </style>
</head>

<body id="scrollTop">
  <main>
    <section class="hero hero-main is-fullheight">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <nav class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <a href="index1.php" class="navbar-item orange is-size-3">
                <strong>E-PARISARAA</strong>
              </a>
              <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                <span></span>
              <span></span>
              <span></span>
              </span>
            </div>
            <div id="navbarMenuHeroA" class="navbar-menu has-text-centered">
              <div class="navbar-start navy">
                <a href="laptop.html" class="navbar-item">LAPTOP</a>
                <a href="mobile.html" class="navbar-item">MOBILE</a>
                <a href="camera.html" class="navbar-item">CAMERA</a>
                <a href="keyboard.html" class="navbar-item">KEYBOARD</a>
                <a href="pc.html" class="navbar-item">PC</a>
                <a href="other.html" class="navbar-item">OTHER</a>
                <a href="conf.php" class="navbar-item">CONFIRMED SCHEDULES</a>
                <a href="#contact" class="navbar-item">CONTACT US</a>

              </div>
              <div class="navbar-end">
            <ul>
              <li><a href="schedule.php" class="navbar-item orange">schedule appointment </a></li>
            </ul>
          </li>
    
              </div>
            </div>
          </div>
        </nav>
      </div>
  
      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container">
          <div class="columns">
            <div class="column is-two-thirds">
              <h1 class="title is-spaced is-size-1">
                Electronic Waste Disposal Portal
              </h1>
              <h2 class="subtitle">
                See no e-waste pollution.<br> 
                Envision a clean and green India.
              </h2>
            </div>
          </div>
          <div class="columns exp">
            <div data-aos="fade-right" class="column border--orange">
              <h1 class="title is-spaced is-size-5">
                What is E-waste management?
              </h1>
              <h2 class="subtitle is-size-6">
                Electronic waste, or e-waste, refers to electronic products that have become unwanted, non-working or obsolete, and have essentially reached the end of their useful life.The E waste defined as ‘electrical and electronic equipment, whole or in part
              </h2>
            </div>
            <div data-aos="fade-up" class="column border--aqua">
              <h1 class="title is-spaced is-size-5">
                Ways to minimize your E-waste
              </h1>
              <h2 class="subtitle is-size-6">
                <ul>
                  <li>- Re-evaluate. Do you really need that extra gadget?</li>
                  <li>- Extend the life of your electronic with better care.</li>
                  <li>- Buy EPEAT and Energy Star electronics</li>
                </ul>
              </h2>
            </div>
            <div data-aos="fade-left" class="column border--green">
              <h1 class="title is-spaced is-size-5">
                How it works?
              </h1>
              <h2 class="subtitle is-size-6">
                There are national e-waste policies for e-waste management. These policies help the e-waste collected and recycled. Also, such provisions hold stakeholders responsible for e-waste pollution. In India, there are e-waste management rules 2016 that guide the e-waste management.
              </h2>
            </div>
          </div>
        </div>
      </div>

    </section><hr>
    
     



    

    <section id="contact" class="hero is-medium">
      <div class="hero-body">
        <div class="container">
          <div data-aos="fade-right"><i class="fa fa-envelope fa-5x"></i></div>
          <br>
          <h1 class="title is-spaced is-size-2">
            Contact Us
          </h1>
          <h2 class="subtitle">
            You can contact us by filling out the form below
          </h2>
          <div class="columns">
          <div class="column">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" placeholder="Input name">
              </div>
            </div>
            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-left">
                <input class="input" type="email" placeholder="Input email">
                <span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <label class="checkbox">
                <input type="checkbox">
                  I agree to the <a href="#">terms and conditions</a>
                </label>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <button class="button is-link">Submit</button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="field">
              <label class="label">Message</label>
              <div class="control">
                <textarea class="textarea" placeholder="Textarea"></textarea>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <h1 class="title"> E-PARISARAA Official Website</h1>
        <div class="content navy">
          <div class="columns">
            <div class="column">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea saepe, ad nobis sed recusandae consectetur laborum eveniet voluptatum commodi quisquam a mollitia excepturi quaerat alias voluptatibus vel eum quos natus?</div>
            <div class="column">Veniam dolorem beatae enim et. Error cum nam distinctio quis aspernatur quasi ratione id omnis fugit cumque ipsum impedit, corrupti possimus necessitatibus nisi! Odio illum iusto ullam porro exercitationem eligendi!</div>
            <div class="column">Dignissimos dolorem dicta perspiciatis ipsam, possimus in inventore nostrum mollitia delectus minima. Id nobis provident exercitationem ullam tempora perspiciatis sapiente illum eius voluptatem, eum doloribus sed, laborum, quo omnis consectetur!</div>
          </div>
          <p class="has-text-centered">
            E-PARISARAA Official Website | E-parisaraa © 2022
          </p>
        </div>
      </div>
    </footer>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/sweetalert2"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.adaptive-backgrounds/1.0.3/jquery.adaptive-backgrounds.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script type="text/javascript" src="scripts/index.js"></script>
  
  <script>
    $('.slick').slick({
      //dots: true,
      infinite: true,
      autoplay: true,
      speed: 1200,
      slidesToShow: 3,
      slidesToScroll: 1,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  <script>
    AOS.init();
    $('#operations2 .card').on('click', function() {
      swal('Success!', 'You have successfully joined operation!', 'success');
    });
  </script>

</body>

</html>