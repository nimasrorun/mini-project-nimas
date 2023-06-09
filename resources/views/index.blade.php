<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Insightful Ink</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h5 class="text-light"><a href="index.html">Insightful Ink</a></h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      @if (Auth::guard('penulis_guard')->check())
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('homepage') }}">Home</a></li>
          <li><a class="active" href="{{ route('list-artikel.index') }}">Artikel</a></li>
        

          <li>
            <form action="{{ route('penulis.logout') }}" method="POST">
              @csrf
            <button class="getstarted" type="submit">Logout</button>
          </form>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      @else
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted" href="{{ route('penulis.login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      @endif
      
    </div>
  </header><!-- End Header -->

  <main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
    <div class="breadcrumb-hero">
      <div class="container">
        <div class="breadcrumb-hero">
          <h2>Artikel Tentang Perkembangan Teknologi Informasi</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <ol>
       
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">


        <div class="row">

          <div class="col-lg-12 entries">
            @foreach ($artikel as $item)
              <article class="entry">

                <div class="entry-img">
                  <img src="{{ asset('img/img_artikel/' . $item->gambar_artikel)  }}" alt="" class="img-fluid">
                </div>
                <div class="entry-meta">
                  <ul>                    
                    <li class="d-flex align-items-center"><i class="fa fa-user"></i> <a href="blog-single.html">User</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <h2 class="entry-title">
                    <a href="">{{ $item->judul_artikel }}</a>
                  </h2>
                  <div class="read-more">
                    <a href="{{ route('detail-artikel.index', $item->id_artikel) }}">Read Article</a>
                  </div>
                </div>
              </article>
            @endforeach

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Insightful Ink</h3>
            <p>Mini Project Workshop Sistem Informasi Website Framework "Tugas membuat aplikasi berbasis web yang menyajikan artikel tentang perkembangan teknologi informasi " </p>
          </div>

         

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Nimas Rorun Nasiroh <br>
              Sumbersari, Jember<br>
             
              <strong>Phone:</strong> 08213456789<br>
              <strong>Email:</strong> nimasr@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

         

        </div>
      </div>
    </div>

   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>