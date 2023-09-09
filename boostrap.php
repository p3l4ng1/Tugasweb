<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <link rel="staylesheet"href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
<link rel="stylesheet"href="http://cdn.jsdelivr.net/npm/bootstrap-icons.css">

  </head>

 <style>
  .bordered {
  border: solid;
}

 .contoh { 
  height: 50px;
 background-color: skyblue;
}
</style>

  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
 <div class="container-fluid">
   
    <a class="navbar-brand" href="#">
<img src="http://3.bp.blogspot.com/-DzF7JCf9V3E/UprIcX62aDI/AAAAAAAAACY/Xhhh2kG5Acc/s1600/logo+rpl.jpg" width="50"> 
XI PPLG 4
</a> <buton class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>
<style>


.banner {

    height: 60vh;
   background: url('img/8.jpg');
   background-size: cover;
   background-position: center;
}
   .banner-contain {
   height: 100%;
   display: flex;
   align-items:center;
}
   .carousel-contain{
    background-color:#212529;
    height:300px;
}

</style>

<body>

<!--banner-->
<div class="container-fluid banner">

<div class="container banner-contain col-ig-6">

<div class="text-white">
<div class="text-center">
<p class="fs-1">SELAMAT DATANG DI CRM</p>
<p class="text-white">          setiap gigitan adalah sebuah kenangan manis yang takkan terlupakan.dapatkan sekarang hanya di toko kami</p>
 <button type="button" class="btn btn-outline-light mt-3" data-bs-toggle="modal" data-bs-target="#myModal">reservasi</button>
  </div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulir Reservasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form>
          <div class="mb-3">
           <label for="nama" class="form-label">Nama</label>
<input type="text" class="form-control" id="nama">
      </div>
      <div class="mb-3">
      <label for="handphone" class="form-label">No.Handphone</label>
<input type="number" id="handphone" class="form-control">
<div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal Reservasi</label>
<input type="date" id="tanggal" class="form-control">
</div>
<div class="mb-3">
      <label for="jam" class="form-label">jam</label>
<input type="time" id="jam" class="form-control">
</div>
<div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah orang</label>
<input type="number" id="jumlah" class="form-control">
</div>
</div>
</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>
</nav>

<body>


<!--banner-->

</div>
<div class="container py-5">
<h2 class="text-center mb-4">kenapa harus belanja di CRM?
</h2>
  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        karena murah
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
   
    Di CRM harga memang bersahabat dengan kantong><
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        fresh from oven
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        di angkat langsung dari oven sehingga produk tersebut masih fresh dan enak untuk di nikmati 
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        jaminan uang kembali
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Jika ada keliruan atau ketidakpuasan yang anda nikmati, anda bisa menerima uang nya kembali
  </div>
</div>
 </div>
 </div>
</div>

</div>
<div class="container-fluid py-5 bg-dark text-light">

<div class="container-center">

<h2 class="text-center mb-4">produk terbaik kami</h2>
</div>
<div id="carouselExample">
<div class="carousel slide">
<div id="carouselExampleIndicators" class="carousel slide"> <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/9.jpg" class="d-block w-100" alt="..."> 
<div class="carousel-caption d- d-md-block"> 
<h5>Produk 1</h5> 
<p>some representative place holder content for the slide</p>
 </div>
 </div>

    <div class="carousel-item">
      <img src="img/11.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block"> 
<h5>Produk 2</h5> 
<p>lorem ipsum dolor,sit amet contestetur adipisicing elit impedit, maxime tenetur dolore dignissimos quaerat rerum vitae vero dolorem recusandae exer citatinonem</p>
 </div>
    </div>
    <div class="carousel-item">
   
   <img src="img/12.jpg " class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block"> 

<h5>Produk 3</h5> 
<p>lorem ipsum, dolor sit amet adipisicing elit, enim labore eqqque corporis, deserunt et sunt facilis maxime culpa dolorem modi</p>
 </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
</div>
</div>

<!--boostrap image-->

<div class="container-fluid py-5">

<div class="container-center">

<h2 class="text-center mb-4">produk terlaris</h2>
 <div class="col-lg-6 col-md-6 d-block mx-auto mt-6" style="width:600px">


<img src="img/13.jpg" class="img-fluid">
</div>
</div>
</div>




</div>

<!--end of boostrap image-->

<!--blockquate-->

<div class="container-fluid py-5 bg-dark text-light">

<div class="container-center">

<h2 class="text-center mb-4">apa kata costumer kami</h2>
<div class="col-12 mb-4">
<figure>
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote">
  <figcaption class="blockquote-footer">
    Captain tsubasa<i>kapten bola</i>

  </figcaption>
</figure>


<div class="col-12 mb-4">
<figure class="text-end">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote">
  <figcaption class="blockquote-footer">
    Captain tsubasa <i>kapten bola</i>

  </figcaption>
</figure>

<div class="col-12 mb-4">
<figure>
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote">
  <figcaption class="blockquote-footer">
    Captain tsubasa<i>kapten bola</i>

  </figcaption>
</figure>


<div class="col-12 mb-4">
<figure class="text-end">
 <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote">
  <figcaption class="blockquote-footer">
    Captain tsubasa<i>kapten bola</i>

  </figcaption>
</figure>
</div>
  </div>
</div>
</div>
</div>
</div>

<!--end of blockquote-->


<!--card-->

<div class="contaner-fluid py-5">


<div class="container-center">

<h2 class="text-center mb-3">produk kami</h2>
<div class="col-12">
<div class="row">
<div class="col-lg-3 col-md-4 mb-3">

<div class="list-group">
  <a class="list-group-item d-flex justify-content-between align-items-center ">
sate ayam

<span class="badge bg-primary rounded-pill">2</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
Opor Ayam
<span class="badge bg-primary rounded-pill">7</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
Ayam kecap
<span class="badge bg-primary rounded-pill">5</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
rendang
<span class="badge bg-primary rounded-pill">10</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
Soto Ayam
<span class="badge bg-primary rounded-pill">3</span>
</a>
</div>
</div>

<div class="col-lg-9 col-md-8">

 <div class="col-lg-6 col-md-12 d-block mx-outo mt-6" style="width:600px">

<div class="row">
<div class="col-lg-4 col-md-6 mb-3 col-sm-6">
  <img src="img/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sate ayam</h5>
    <p class="card-text">Sate ayam adalah makanan khas Indonesia. Sate Ayam dibuat dari daging ayam. Pada umumnya sate ayam dimasak dengan cara dipanggang dengan menggunakan arang dan disajikan dengan pilihan bumbu kacang atau bumbu kecap.</p>
    <button class="btn btn-primary dropdown-toggle"data-bs-toggle="dropdown">Lihat</button>
<ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
<li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Beli</a></li>
    
  </ul>
  </div>
</div>

<div class="col-lg-4 mb-3 col-md-6 col-sm-6">
  <img src="img/11.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Opor Ayam</h5>
    <p class="card-text">Opor ayam sebenarnya adalah ayam rebus yang diberi bumbu kental dari santan yang ditambah berbagai bumbu seperti serai, kencur, dan sebagainya.</p>
    <a href="#" class="btn btn-primary ">Lihat</a>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
  <img src="img/13.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ayam kecap</h5>
    <p class="card-text">Ayam kecap atau ayam masak kicap adalah sebuah hidangan ayam Jawa yang dibumbui atau disiram kecap manis (bahasa Melayu: kicap lemak manis) yang lazim ditemukan di Indonesia dan Malaysia dan Singapura.</p>
    <a href="#" class="btn btn-primary">Lihat</a>
  </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
  <img src="img/12.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rendang </h5>
    <p class="card-text">Rendang adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan. </p>
    <a href="#" class="btn btn-primary">Lihat</a>
  </div>
</div>
</div>
<div class="col-lg-4 mb-3 col-md-6 col-sm-6">
  <img src="img/10.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Soto ayam</h5>
    <p class="card-text"> Soto ayam adalah makanan khas Indonesia yang berupa sejenis sup ayam dengan kuah yang berwarna kekuningan. Warna kuning ini dikarenakan oleh kunyit yang digunakan sebagai bumbu. Soto ayam banyak ditemukan di daerah-daerah di Indonesia dan Singapura.</p>
    <a href="#" class="btn btn-primary ">Lihat</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--table-->
<div class="contaner-fluid py-5">
<div class="container-center">
<h2 class="text-center mb-5">
Customer Beruntung minggu ini <a tabindex="0" data-bs-trigger="focus" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="informasi" data-bs-content="Pengundian dilakukan setiap hari jum'at jam 17:00">
  ?
</a>

</h2>
<div class="table-responsive">
<table class="table table-hover table-striped ">
<thead>
<tr>
<th>#</th>
<th>Nama</th>
<th>No.Handphone</th>
<th>Tanggal Pembelian</th>
<th>No.struk</th>
<th>No.Undian</th>
<th>Hadiah<th>
</tr>
<thead>
<tbody>
<tr>
<th>1</th>
<td>Marx</td>
<td>0813 4567xxxx</td>
<td>12 juni 2023</td>
<td>0193211</td>
<td>021</td>
<td>1 Rendang</td>
</tr>
<tr>
<th>2</th>
<td>jacob</td>
<td>0813 4565xxxx</td>
<td>11 juni 2023</td>
<td>01932244</td>
<td>023</td>
<td>1 Opor Ayam</td>
</tr>
<tr>
<th>3</th>
<td>jojo</td>
<td>0813 4511xxxx</td>
<td>16 juni 2023</td>
<td>01932112</td>
<td>011</td>
<td>1 Balado Ayam </td>
</tr>
<tr>
<th>4</th>
<td>joen</td>
<td>0813 4561xxxx</td>
<td>12 juni 2023</td>
<td>019311211</td>
<td>026</td>
<td>1 Gulai Ayam</td>
</tr>
<tr>
<th>5</th>
<td>Estes</td>
<td>0813 4515xxxx</td>
<td>16 juni 2023</td>
<td>01232211</td>
<td>042</td>
<td>1 Soto Ayam </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="contaner-fluid py-5 bg-dark text-light">
<div class="container-center">
<h2 class="text-center mb-4">Hubungi Kami</h2> 
<div class="offset-2 col-8">
 <div class="alert alert-success alert-dismissible mb-4" id="myAlert"> 
<i class="bi bi-check2-square"></i> Formulir Berhasil Dikirim. klik <a href="http://google.com" class="alert-link">di sini</a> untuk melihat
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
</div> 
<from> 
<div class="mb-3"> 
<div class="row">
<div class="col-6">
<label for="namadepan">Nama Depan</label>
<input type="text" id="namadepan" class="form-control" autocomplete="off">
</div>
<div class="col-6">
<label for="namabelakang">Nama Belakang</label>
<input type="text" id="namabelakang" class="form-control" autocomplete="off">
</div>
</div>
</div> 

<div class="mb-3">
<label for="username">Userame
</label>
<div class="input-group">
<input type="text" class="form-control">
<span class="input-group-text">@</span>
<input type="text" class="form-control">
<span class="input-group-text">.com</span>
</div>
</div>

<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input type="email" id="email" class="form-control" autocomplete="off">
<label>*email anda tidak akan kami sebarluaskan</label>
</div>

<div class="mb-3">
<label for="tingkaturgensi" class="form-label">Tingkat Urgensi</label>
<select class="form-select" id="tingkaturgensi">
<option value="penting">Penting
</option>
<option value="normal">Normal
</option>
<option value="tidakpenting">Tidak Penting
</option>
</select>
</div>

<div class="mb-3 form-check">
<input type="radio" class="form-check-input" id="komplain" name="kategori">
<label for="komplain" class="form-check-label">Komplain
</label>
</div>

<div class="mb-3 form-check">
<input type="radio" class="form-check-input" id="saran" name="kategori">
<label for="saran" class="form-check-label">Saran
</label>
</div>

<div class="mb-3">
<label for="deskripsi" class="form-label">Deskripsi</label>
<textarea id="deskripsi" class="form-control" clos="30" rows="10"></textarea>
</div>

<div class="mb-3">
<button type="button" id="btnKirim" onclick="simpanform()" class="btn btn-primary w-100">Kirim</button>
<button type="button" id="btnLoading" class="btn-primary w-100 mt-2" disabled>
<div class="spinner-border spinner-border-sm" role="status">
<span class="visually-hidden">Loading...</span></div> 
</button>
</div> 
</from> 
</div>  
</div>
</div>
     <!--end of table-->


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

var myAlert = document.getElementById('myAlert');

myAlert.style.display = 'none' 

function myFunction(){
myAlert.style.display = 'block'
}
 
var btnKirim = document.getElementById('btnKirim');var btnLoading = document.getElementById('btnLoading');

btnLoading.style.display = 'none';

function startProses(){
btnKirim.style.display = 'none';
btnLoading.style.display = 'block';
}

function endProses(){
btnLoading.style.display = 'none';
btnKirim.style.display = 'block';
}

function simpanForm(){
startProses();

 setTimeout(function(){
  endProses(); myFunction() },3000;
}
</script>
 
 </body>

</html>