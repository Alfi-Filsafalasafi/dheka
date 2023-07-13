<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faiqotin Naimah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <style>
    @media (min-width: 767px) {
      .carouss{
        width: 100%;
      }
    }
    @media (max-width: 767px) {
      .carouss{
        height:500px;
      }
    }
  </style>

  <body>

    <!---Navbar-->

    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #1F6475 !important">
      <div class="container" >
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo1.png') }}" alt="" width="50" height="50" class="m-2">
          FAIQOTIN NAIMAH
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profil">PROFIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#info">INFO</a>
            </li>
            @if (Route::has('login'))
            @auth
              <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">HOME</a>
              </li>
            @else
              <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link">LOGIN</a>
              </li>
            @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!--endnavbar-->
 <section id="home">

   <!-- carousel -->
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="{{asset('img/f1.jpg')}}" class="carouss" alt="...">
         <div class="carousel-caption d-none d-md-block">
         </div>
       </div>
       <div class="carousel-item">
         <img src="{{asset('img/f2.jpg')}}" class="carouss" alt="...">
         <div class="carousel-caption d-none d-md-block">
         </div>
       </div>
       <div class="carousel-item">
         <img src="{{asset('img/f3.jpg')}}" class="carouss" alt="...">
         <div class="carousel-caption d-none d-md-block">
         </div>
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>
   <!-- end carousel -->
</section>

    <!--about-->
    <section class="about" id="about" style="
    padding-top: 50px;">
      <div class="container">
          <h3 style="text-align: center;">ABOUT</h3>
          <p><strong>Teknik Informatika</strong> merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer 
              secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. 
              Di Jurusan Teknik Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer 
              mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. 
              Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan 
              merancang perangkat lunak.</p>
          <p><strong>Kenapa Harus Memilih Jurusan Teknik Informatika?</strong>
         <br/></p>
         <ol>
          <li>Perkembangan teknologi yang pesat menjadikan prospek kerja lulusan Teknik Informatika yang semakin luas dengan jenis pekerjaan keren, jenjang karier beragam dan bergengsi, tentunya juga gaji yang nggak kacangan. Wow! Menarik kan, Quipperian?</li>
          <li>Di era revolusi industri 4.0 seperti sekarang ini, lulusan Teknik Informatika sangat dibutuhkan oleh instansi pemerintah, BUMN, maupun perusahaan-perusahaan swasta. Perusahaan seperti besar Google juga patut kamu jajal.</li>
          <li>Berbekal keilmuan dan keterampilan yang diperoleh sewaktu kuliah, kamu bisa mendirikan start-up sendiri lho, Quipperian. Sekalian menciptakan lapangan pekerjaan kan?</li>
          <li>Di dunia digital ini, kamu bisa berkreasi dengan bebas untuk mewujudkan ide-idemu.</li>
       </ol>
          <p style="text-align:justify;">
          <div class="row">
            <div class="col-lg-6 pt-2">
            <img class="w-100" src="{{asset('img/fix2.jpg')}}"/>

            </div>
            <div class="col-lg-6 pt-2">
              <p>
            <strong>Dunia perkuliahan</strong>
              Jangan salah ya! Kuliah di jurusan Teknik Informatika bukan sekedar menginstall perangkat lunak di komputer lho! 
              Tapi kamu yang justru akan merancang perangkat lunak itu sendiri. Jadi, selama 4 tahun atau 8 semester 
              kamu akan dibekali dengan ilmu dan keterampilan untuk pengembangan perangkat lunak. 
              Sehari-hari, kamu akan mempelajari bahasa pemrograman hingga kecerdasan buatan dan multimedia. 
              Selain itu, kamu pun akan belajar bagaimana memecahkan berbagai masalah komputasi, seperti mencari informasi dari miliaran dokumen web, 
              memproses jutaan permintaan secara bersamaan, menciptakan sistem keamanan, dan masih banyak lainnya.<br/></p>
            </div>
          </div>
          
      </div>
      
    </section>
    <!--end about-->

   <!--Profil-->
   <section class="profil" id="profil" style="
    padding-top: 100px;">
    <div class="container">
    <h2 style="text-align: center;">PROFIL</h2>
    <div class="row pt-4">
      <div class="col-lg-6">
        <div class="box">
                <h4>Adress</h4>
                <p>Jl. Manunggal No. 61 Tuban, 62381</p>

                <h4>Email</h4>
                <p>informatika@gmail.com</p>


                <h4>Telepon</h4>
                <p>+62 85634217899</p>

        </div>
      </div>
      <div class="col-lg-6">
      <center>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.491611491561!2d112.0806497!3d-6.9057983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0d7dfebf3de71ac!2sUniversitas%20PGRI%20Ronggolawe%20Tuban!5e0!3m2!1sid!2sid!4v1654162132001!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>
      </div>
    </div>
      
      
    </div>
  </section>
  <!--endprofil-->

  <!--info-->
  <section class="info" id="info" style="padding-top: 100px;">

    <div class="container">
    <h2 style="text-align: center;">Info</h2>
    <div class="row justify-content-center">
    

    </div>
  </section>
<!--endinfo-->


  <footer class="bg-dark w-100 text-white" style="height: 150px">
  <center>
    <br>Contact : +62 85634217899</br>
  <br>Email : Informatika@gmail.com</br>
  <br>Alamat : informatika.ac.id</br>
  </center>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

</html>
