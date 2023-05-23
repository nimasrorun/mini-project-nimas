<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Single - Serenity Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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

  <!-- =======================================================
  * Template Name: Serenity - v4.1.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">Serenity</a></h1>
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

 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      
    </div>
  </div>
  <div class="container">
 
  </div>
</section><!-- End Breadcrumbs -->

  <main id="main">
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ asset('img/img_artikel/' . $artikel->gambar_artikel) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $artikel->judul_artikel }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                </ul>
              </div>

              <div class="entry-content">
                {{ $artikel->isi_artikel }}
              </div>

             

            </article><!-- End blog entry -->
            <div class="blog-comments">

              <h4 class="comments-count"> Comments</h4>

            

            
              <div class="reply-form">
                <form action="{{ route('detail-artikel.post-comment', $artikel->id_artikel) }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="nama" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                   <div class="row">
                    <div class="col form-group">
                      <textarea name="isi_komentar" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

              @foreach ($komentar as $item)
              <div class="reply-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <span>{{ $item->nama }}</span>
                  </div>
                  <div class="col-md-6 form-group">
                    <span>{{ $item->email }}</span>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-lg-12 mb-3">
                    <span>Comments:</span>
                  </div>
                  <div class="col border rounded-3 p-3">
                    {{ $item->isi_komentar }}
                  </div>
                </div>
            </div>
              @endforeach

              

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

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