<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/upi.png">
    <title>Website FPEB UPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="csss/web.css">
    
    <style>
 #home {
            background: url('img/ruang.jpg') no-repeat center center fixed;
            height: 85vh;
            position: relative;
            width: 100%;
            background-size: cover;
        }
      </style>
    
  </head>
  <body>
    @include('partials.navbar')
    <header class="header">
        <div class="container container-nav">
            <div class="site-title">
                <h1>Laboratorim Komputer</h1>
               <br> <p class="subtitle">Upaya meningkatkan suasana akademik yang lebih baik menjadi salah satu prioritas FPEB yang masuk dalam rencana strategis,termasuk meningkatkan kualitas dan kuantitas fasilitas pendukung kegiatan akademik </p>
               <p class="subtitle">FPEB telah difasilitasi dengan ruang kuliah dengan fasilitas yang lengkap</p>
               <p class="subtitle"> tersebar di tiga gedung yaitu LABKOM FPEB-A, LABKOM FPEB-B, dan LABKOM FPEB-C.  </p>
               <p class="subtitle">Setiap ruang kuliah dilengkapi dengan komputer yang terkoneksi dengan jaringan internet dan proyektor in-fokus. </p>
            </div>
            <main>
        <div id="home">
            <div class="overlay">
                <div class="landing-text">
                   <strong> <p>info lebih lanjutnya</p></strong>
                    <h3>click disini</h3>
                    <hr id="hr-main">
                    
                    <a href="ruang" class="button btn-hire">tryopeningit</a>
                </div>
            </div>
        </div>
    </main>
            
        </div>
    </header>
    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>