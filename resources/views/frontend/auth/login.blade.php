@extends(frontend.layout.app)

@section('content')
<!-- MODAL Login -->
<div id="loginAcc" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" id="modal-login-box">

        <!-- MODAL LOGIN CONTENT -->
            <div class="modal-content animate">
                <div class="modal-body modal-login">
                    <div class="login-form-header">
                        <h3 class="modal-title"><strong>Selamat Datang Kembali !</strong> <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
                        <p id="ql">Belum punya akun ?  <a href=""><strong>Klik disini untuk daftar</strong> </a></p> 
                    </div>
                    <form class="socmed-login" action="" method="">
                        <!-- Login socmed -->
                        <div class="form-group row">
                            <div class="col-md-6">
                                <a href="#" class="btn socmed-btn google-btn" id="btn-google"><img src="assets/img/frontend/img-componen/google-logo.png" style="width:18px; height:18px;">   Masuk dengan Google</a>
                            </div>
                            <div class="col-md-6 .ml-auto">
                                <a href="#" class="btn socmed-btn facebook-btn" id="btn-facebook"><img src="assets/img/frontend/img-componen/facebook_logos.png" style="width:28.5px; height:28.5px;">   Masuk dengan Facebook</a>
                            </div>
                        </div>
                        <div class="separator">
                            <center><span class="separator-text">Atau</span></center> 
                        </div>
                    </form>
                    <form class="login-content" action="/loginPost" method="POST" id="login-form">
                        <!-- input email user -->
                        <div class="form-group row">
                            <input type="email" class="form-control active" name="uemail" id="email" placeholder="Alamat Email" required>
                        </div>
                        <!-- input password user -->
                        <div class="form-group row">
                            <input type="password" class="form-control active" name="psw" id="password" placeholder="Password" required>
                            <div class="group">
                                <i id="show-password" class="fa fa-eye-slash"></i>
                            </div>
                        </div>
                        <div class="form-group form-check row">
                            <input type="checkbox" checked="checked"class="form-check-input" id="loginCheckbox">
                            <label class="form-check-label col-sm-9" for="loginCheckbox" id="label-loginCheckbox"><strong> Biarkan saya tetap masuk</strong></label>
                            <a href="" class="lupaPassword col-sm-3"><span><strong> Lupa Password ?</strong></span> </a>
                        </div>
                        <center> <input type="submit" class="btn btn-login btn-primary mt-3" id="btn-login" name="login login-submit" value="MASUK">{{ __('MASUK') }}</center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL LOGIN -->

@endsection
