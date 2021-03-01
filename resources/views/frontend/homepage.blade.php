@extends('frontend/layout/app')

@section('title', 'Website Kampus Indonesia')

@section('content')
<div id="first_section">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-xs-12">
        <div class="caption_panel">
          <h1>Bingung Cari Informasi <br> Seputar Kuliah ?</h1>
          <h2>Cari Disini Aja!</h2>
          <p>Dapatkan informasi seputar dunia perkuliahan secara<br>
          terupdate dari kami melalui aplikasi kampus indonesia</p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="image-panel">
          <img id ="gambar-container" src="assets/img/frontend/img-componen/ilustrasi-container.png" width="473px">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div id="search-container">
          <input type="search" id="search-box" placeholder="Informasi Seputar Perkuliahan / Cari Kampus">
          <!-- <button type="button">
            <img src="assets/icon_search.png">
          </button> -->
          </div>
      </div>
    </div>
  </div>
</div>

      <div id="container-info">
        <div class="container-info-item">
          <img src="assets/img/frontend/img-componen/school 1.png">
        </div>

        <div class="container-info-item">
          <h6>1045</h6>
          <p>Jumlah Kampus <br>yang Terdata Saat Ini</p>
        </div>

        <div class="container-info-item">
          <img src="assets/img/frontend/img-componen/school 2.png" id="sekolah2">
        </div>

        <div class="container-info-item">
          <h6>113</h6>
          <p>Jumlah Kampus yang <br>Sudah Terdaftar di Pintara</p>
        </div>
        
      </div>
 
      <img id = "illustrasi1" src="assets/img/frontend/img-componen/elipse1.png" width="202px" height="32px">
      <img id = "illutrasi2" src="assets/img/frontend/img-componen/elipse1.png" width="178px" height="32px">
      <img id = "illustrasi3" src="assets/img/frontend/img-componen/Ellipse 51.png" width="124px" height="124px">

@endsection