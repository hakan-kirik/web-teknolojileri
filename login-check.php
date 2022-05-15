<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript -->
    <script src ="script.js" ></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Great+Vibes&family=Nova+Square&display=swap" rel="stylesheet">

    <!-- Ikon Kutuphanesi -->
    <script src="https://kit.fontawesome.com/65aba994e2.js" crossorigin="anonymous"></script>
</head>

<title>B201210370</title>

<body>

    <!-- Menü Kısmı Başlangıç-->

    <nav class="navbar navbar-expand-lg fixed-top kapsayici">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <img width="150" src="img/logo.png" height="100"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-angle-double-down mob"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-5" aria-current="page" href="index.html">Anasayfa</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="memleketim.html">Memleketim</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link active  text-white">
                            <i class="fas fa-sign-in-alt"></i>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <br><br><br>
    <!-- Menü Kısmı Bitiş-->
    <br><br><br>
    <br><br><br>
    <header>

        <section class="p-5 text-center yazifont">
            <div class="container">

                <h2 class="mb-5 font-weight-bold">GİRİŞ EKRANI SONUCU</h2>
                <hr class="ayrac"><i class="fas fa-key ikon"></i>
            </div>
        </section>
    </header>
      <div class="yazifont">
                

                 <?php 

                    include("kullanicilar.php");
                  

                    if (($_POST["email"] == $username) and ($_POST["password"] == $password))
                    {
                    $_SESSION["login"] = "true";
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;

                    $kullaniciAdi=substr($username, 0, strrpos($username,"@")); 

                    echo('<h1>Sisteme Giriş Başarılı</h1> <br>'.'<h3> HOŞGELDİNİZ Sayın </h3> "'. "<h2> $kullaniciAdi </h2>". '" <h3> Sisteme Giriş Başardınız </h3>');

                    }

                    else 
                    {
                        echo '<h1>Başarısız Giriş</h1> <br>'. '<h3>Kullancı Adı veya Şifre Yanlış Girdiniz</h3> <br>';
                        echo "<h3>Lütfen kontrol edip tekrar deneyin</h3>";
                        header("Refresh: 1; url=login.html");
                    }

               ?>
                              <a href="/login.html">
    <input type="button" class="btn btn-dark" value="Giriş Ekranına Geri Dön">
</a>

<a href="/index.html">
    <input type="button" class="btn btn-dark" value="Ana Sayfaya Geri Dön">
</a>


            </div>

        </div>
        <br><br><br>
        <br><br><br>
    <!-- Footer başlangıç-->
    <div class="light text-center footer">
        <p class="align-middle p-3 mb-0">
            <span>Tüm Hakları Saklıdır &copy; | 2022</span><br>
            <span>Designed by <b>HAKAN KIRIK</b></span>
        </p>
    </div>
    <!-- Footer bitiş-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</body>

</html>