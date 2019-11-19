<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="No page can go online without having an eye catching cover to keep your visitors in the page.">
    <meta name="keywords" content="cover, header, block, html code">

    <title>Carl Robinson Jr</title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2823f235a8.js" crossorigin="anonymous"></script>
   
   
  </head>

  <body class="demo-header">
     <!-- Main Content -->
    <main class="main-content">
      <!-- Header -->
      <header class="header text-white h-fullscreen text-center text-lg-left pb-8" style="background-image: url(/img/welcome.jpeg);" data-overlay="8">
        <div class="container">

          <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">

              <h1 class="display-3 fw-500">Carl Robinson Jr.</h1> 
              <h3>Is <span class="text-success" data-typing="a Full-Stack Web Developer., Self motivated., a Quick learner., a Team player., Analytical., Detail Oriented., Organized., a Father!"></span></h3>
            </div>

            <div class="col-12 align-self-end text-center mt-6">
              <a class="scroll-down-1 scroll-down-white" href="#about"><span></span></a>
            </div>

          </div>

        </div>
      </header>
      <!-- END Header -->

      <section class="section bg-gray overflow-hidden">
        <div class="container">
          <div class="row">

            <div class="col-md-6 align-self-center text-center text-md-left">
              <h2 id='about'>About Me</h2><br>
              <p>Full-Stack Web Developer combining creativity with strong research and analysis skills from an extensive background in banking and finance. Earned a certificate in Full Stack Development from the University of Central Florida, with expanded knowledge with JavaScript, CSS, React.js, PHP, HTML, and web design. I stay calm in fast-paced situations and rely on logic to persevere when code isn't working how I planned. I adapt quickly and communicate effectively; this strength came in handy more often than not when coding in teams. Using HTML & CSS libraries (ie: Bootstrap) created a portfolio page including javascript applications, applications using Ajax requests, Firebase databases, and PHP. </p>
                            
            </div>

            <div class="col-md-5 mx-auto text-center mt-8 mt-md-0">
              <img src="{{url('public/img/DSC_0903.jpg')}}" alt="..." data-aos="fade-up" style = 'border-radius: 50%'>
            </div>

          </div>
        </div>
      </section>

      <section class="section bg-gray">
        <div class="container">
          <header class="section-header">
            <h2>Portfolio</h2>            
          </header>


          <div class="row gap-y">

            <div class="col-md-6">
              <a class="card p-5 shadow-3 hover-shadow-6 text-default" href="http://urbanconnection.herokuapp.com/" target='_blank'>
                <img src="{{url('/img/uc.png')}}" alt="">
                <h5 class="fw-500 my-4">Urban Connection</h5>
                <p class="mb-0">A social networking app for urban communities to connect with urban business. Users would be able to leave a post about their favorite locations.</p>
              </a>
            </div>

            <div class="col-md-6">
              <a class="card p-5 shadow-3 hover-shadow-6 text-default" href="https://dbworld.herokuapp.com/" target='_blank'>
                <img src="/img/gamerz.png" alt="">
                <h5 class="fw-500 my-4">gAmerZ Index</h5>
                <p class="mb-0">Game sharing app you can add video games you own to your library and choose to trade or share games among other people. Using MySQL with sequelize I created a games table with an imported list of information on 16,000 games.</p>
              </a>
            </div>

            <div class="col-md-6">
              <a class="card p-5 shadow-3 hover-shadow-6 text-default" href="https://secure-lowlands-42403.herokuapp.com/" target='_blank'>
                  <img src="/img/slickdeals.png" alt="">
                <h5 class="fw-500 my-4">Cee Slickdeals</h5>
                <p class="mb-0">Using Slickdeals site. I scrape their site and created my own. User is able to scrape current deals and leave comment on deals.</p>
              </a>
            </div>

            <div class="col-md-6">
              <a class="card p-5 shadow-3 hover-shadow-6 text-default" href="https://mateusandre1.github.io/My-Vacation-Optimizer/" target='_blank'>
              <img src="/img/MVC.png" alt="">
                <h5 class="fw-500 my-4">My Vacation Optimizer</h5>
                <p class="mb-0">With My Vacation Optimizer you will be able to first (and most importantly) find out if the weather will be to your liking. From there you can take a small tour through a video of the location, or call one of the local tour guides for questions. Finally you can plan out the entire vacation right on our app!</p>
              </a>
            </div>

          </div>


        </div>
      </section>


    </main><!-- /.main-content -->




    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>>

  </body>
  <!-- Footer -->
  <footer class="footer">
        <div class="container text-center">

          <div class="social social-sm social-bg-brand social-cycling">
            <a class="social-linkedin" href="https://www.linkedin.com/in/carl-robinson-jr-40398068/"><i class="fab fa-linkedin"></i></a>
            <a class="social-facebook" href="https://github.com/Ceedamann"><i class="fab fa-github"></i></a>
            <a class="social-git" href="mailto:carlrobinsonjr@gmail.com"><i class="fas fa-envelope-square"></i></a>
          </div>

          <br>

          <p class="small">Copyright © 2019 , All rights reserved.</p>

        </div>
      </footer><!-- /.footer -->
</html>
