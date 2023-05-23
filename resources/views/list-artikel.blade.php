<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Single - Serenity Bootstrap Template</title>
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

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
     
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Artikel</a></li>
         
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="card">
            <div class="card-body reply-form">
              <div class="col-lg-12">
                <div class="float-right mb-3">
                  <a href="{{ route('list-artikel.create') }}"><button class="btn btn-primary">Tambah Data</button></a>
                </div>
                <table class="table-bordered table">
                  <thead>
                    <th>Judul Artikel</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>

                    @foreach ($artikel as $item)
                      <tr>
                        <td>{{ $item->judul_artikel }}</td>
                        <td>{{ $item->id_artikel }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{ route('list-artikel.edit', $item->id_artikel) }}"><button class="btn btn-warning"><i class="fas fa-edit fa-sm"></i></button></a>
                            <form action="{{ route('list-artikel.destroy', $item->id_artikel) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash fa-sm"></i></button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>


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