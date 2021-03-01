<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="#"><img src = "assets/img/frontend/img-componen/logo.png" width="161px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link menu" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fitur</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item menu" href="#">Cari Kampus/Prodi</a>
                    <a class="dropdown-item" href="#">Cari Beasiswa</a>
                    <a class="dropdown-item" href="#">Cari Event</a>
                    <a class="dropdown-item" href="#">Cari Magang</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="#">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="#">Blog</a>
                </li>
            </ul><hr>
            <div id="button-container">
                <button type="button" id="buttonMasuk" data-toggle="modal" data-target="#loginAcc" onclick="document.getElementById('loginAcc').style.display='block'" style="cursor: pointer;">{{ __('Masuk') }}</button>
                <button type="button" id="buttonDaftar" data-toggle="modal" data-target="#daftarAcc" onclick="document.getElementById('daftarAcc').style.display='block'"style="cursor: pointer;">{{ __('Daftar')}}</button>
            </div>
        </div>
    </div>
</nav>
<!-- HEADER END -->