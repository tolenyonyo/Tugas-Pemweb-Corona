<?php
    $url = file_get_contents('https://api.kawalcorona.com/indonesia');
    $data = json_decode($url , true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TGCovidInformation</title>
    <!-- bootstrap 4.5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#"><i class="fa fa-fw fa-home"></i>TGCovidInformation<span class="sr-only">(current)</span></a>
    </div>
</nav>

    <div class="container mt-5">
        <div class="row ">
        <div class="col-md-12 text-center">
            <div class="alert alert-primary" role="alert">
                <strong>UPDATE DATA VIRUS CORONA-19 INDONESIA </strong>
            </div>
        </div>
                <div class="col-md-3">
                    <div class="card badge-primary p-3 mb-5 shadow rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center"><i class="fa fa-frown-open"></i> Positif</h4>
                            <p class="card-text text-white  text-center"><?=$data[0]['positif'];?></p>    
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card badge-success p-3 mb-5 shadow rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center"><i class="fa fa-grin"></i> Sembuh</h4>
                            <p class="card-text text-white  text-center"><?=$data[0]['sembuh'];?></p>    
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card badge-warning p-3 mb-5 shadow rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center"><i class="fa fa-grin"></i> Dirawat</h4>
                            <p class="card-text text-white  text-center"><?=$data[0]['dirawat'];?></p>    
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card badge-danger p-3 mb-5 shadow rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center"><i class="fa fa-frown-open"></i> Meninggal</h4>
                            <p class="card-text text-white  text-center"><?=$data[0]['meninggal'];?></p>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="media-body">
                <h3 class="mt-0 ">Tentang Covid-19</h3>
                <img src="image/corona.png" class="mr-3" alt="..." style="width: 250px">
                <p class="text-justify">Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, seperti flu. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).
                    Virus ini menular melalui percikan dahak (droplet) dari saluran pernapasan, misalnya ketika berada di ruang tertutup yang ramai dengan sirkulasi udara yang kurang baik atau kontak langsung dengan droplet.</p>
            </div>

            <div class="media-body">
                <h3 class="mt-0 ">Gejala Covid</h3>
                <img src="image/gejala.png" class="mr-3" alt="..." style="width: 250px" >
                <p class="text-justify">Beberapa gejala yang timbul akibat Covid-19 :</p>
                <ul class="text-justify">
                    <li>Demam.</li>
                    <li>Batuk Kering.</li>
                    <li>Hilangnya Indera Penciuman & Perasa.</li>
                    <li>Rasa Tidak Nyaman Dan Nyeri.</li>
                    <li>Kesulitan Bernafas atau Sesak Nafas.</li>
                    <li>Nyeri Dada atau Rasa Tertekan Pada Dada</li>
                </ul>
            </div>

            <div class="media-body">
                <h3 class="mt-0 ">Pencegahan</h3>
                <img src="image/pencegahan.png" class="mr-3" alt="..." style="width: 250px" >
                <p class="text-justify">Untuk Mencegah penyebaran COVID-19,beberapa cara yang dapat dilakukan :</p>
                <ul class="text-justify">
                    <li>Cuci tangan Anda secara rutin. Gunakan sabun dan air, atau cairan pembersih tangan berbahan alkohol.</li>
                    <li>Selalu jaga jarak aman dengan orang yang batuk atau bersin.</li>
                    <li>Kenakan masker jika pembatasan fisik tidak dimungkinkan.</li>
                    <li>Jangan sentuh mata, hidung, atau mulut Anda.</li>
                    <li>Jangan keluar rumah jika merasa tidak enak badan.</li>
                    <li>Jika demam, batuk, atau kesulitan bernapas, segera cari bantuan medis.</li>
                </ul>
            </div>
        </div>
    </div>
        <div class="card-footer bg-dark border-success text-center text-white"> 
            &copy; 2021, Pemrograman Web Willya Ramadhan - Geovanni Adam Hidayat
        </div>
</div>
</body>
</html>


