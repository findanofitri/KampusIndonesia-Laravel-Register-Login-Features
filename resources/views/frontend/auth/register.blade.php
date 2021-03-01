@extends(frontend.layout.app)

@section('content')
<!-- MODAL DAFTAR -->
    <div id="daftarAcc" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">

            <!-- MODAL DAFTAR CONTENT -->
            <div class="modal-content modal-content-daftar animate">
                <div class="modal-body">
                    <h3 class="modal-title"><strong>Daftar Sekarang</strong> <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
                    <p class="text-lead">Sudah punya akun ?  <a href="#"><strong>Klik disini untuk masuk</strong></a><br> 
                        <strong>Daftar sekarang juga agar dapat informasi - informasi seputar kampus favorit anda. </strong></p>
                    <form class="daftar-content" action="/action_page.php" method="" onsubmit="return validateForm(this)">
                        <!-- Input Email User -->
                        <div class="form-group row">
                            <input type="email" class="form-control active" name="email user" id="emailUser" placeholder="Alamat Email" required>
                            <span id="blankMsg" style="color:red; font-size:13px; font-weight:bold;"></span>
                        </div>
                        <!-- Create a new password -->
                        <div class="form-group row">
                            <input type="password" class="form-control active" name="pswd user" id="pswd1" placeholder="Password" required>
                            <div class="group">
                                <i id="show-password-user" class="fa fa-eye-slash"></i>
                            </div>
                            <span id="message1" style="color:red; font-size:13px; font-weight:bold;"></span>
                        </div>
                        <!-- Confirm password -->
                        <div class="form-group row">
                            <input type="password" class="form-control active" name="paswd user2" id="pswd2" placeholder="Ketik Ulang Password" required>
                            <div class="group">
                                <i id="show-password-user-ulang" class="fa fa-eye-slash"></i>
                            </div>
                            <span id="message2" style="color:red; font-size:13px; font-weight:bold;"></span>
                        </div>
                        <!-- checkbox confirm -->
                            <div class="form-group form-check row">
                                <input type="checkbox" class="form-check-input" id="agreeCheck" name="agree">
                                <label class="form-check-label" for="agree" id="label-daftarCheckbox"><strong>Dengan membuat akun, Anda telah menyetujui Syarat dan Ketentuan yang berlaku</strong> </label>
                                <div id="agree-chk" style="visibility:hidden; color:red; font-size:10px; font-weight:bold;">*harap tunjukkan bahwa Anda menyetujui Syarat dan Ketentuan yang berlaku</div>
                            </div>
                        <!-- Click to create account -->
                        <center> <input type="submit" class="btn btn-login btn-primary mt-4" id="btnDaftar" name="submit" value="BUAT AKUN"><span id="hasil"></span></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection