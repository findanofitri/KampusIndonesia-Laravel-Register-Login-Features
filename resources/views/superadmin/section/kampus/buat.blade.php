@extends('superadmin.layout.app')

@section('content')
    <div class="container">                            
        <div class="container input-kampus-jurusan mt-3" id="all">
            <div class="row mb-3">
                <div class="col-md-9 themed-grid-col">
                    <div class="pb-3">
                        <h3>Buat Informasi Kampus/Jurusan</h3><hr>
                    </div>

                    <form action="" method="">
                        <div class="row">
                        <div class="col-md-6 themed-grid-col">
                            <label for="namaKampus" class="form-label font-weight-bold">Nama Kampus</label>
                            <input type="text" class="form-control" name="nama-kampus" id="namaKampus">
                        </div>

                        <div class="col-md-6 themed-grid-col" id="geser4">
                            <label for="rangkingNasional" class="form-label font-weight-bold">Rangking Nasional</label>
                            <input type="text" class="form-control" name="rangking-nasional" id="rangkingNasional">
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 themed-grid-col" id="up">
                            <label for="akreditasiKampus" class="form-label font-weight-bold">Akreditasi</label>
                            <input type="text" class="form-control" name="akreditasi-kampus" id="akreditasiKampus">
                        </div>

                        <div class="geser col-md-6 themed-grid-col" id="up">
                            <label for="rangkingInternasional" class="form-label font-weight-bold">Rangking Internasional</label>
                            <input type="text" class="form-control" name="rangking-internasional" id="rangkingInternasional">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6 themed-grid-col" id="up">
                            <div class="pb-3 mt-2">
                            <label for="statusKampus" class="form-label font-weight-bold">Status</label>
                            <input type="text" class="form-control" name="status-kampus" id="statusKampus"> 
                            </div>
                            <div class="row">
                            <div class="col-md-12 themed-grid-col">
                                <label for="jenisKampus" class="form-label font-weight-bold">Jenis</label>
                                <input type="text" class="form-control" name="jenis-kampus" id="jenisKampus">
                            </div>
                            </div>
                        </div>
                        <div class="geser col-md-6 themed-grid-col" id="up">
                            <label for="visimisiKampus" class="form-label font-weight-bold">Visi Misi</label>
                            <textarea class="form-control "name="visi-misi-kampus" id="visimisiKampus" cols="" rows="5"></textarea>
                        </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 themed-grid-col" id="geser5">
                            <label for="alamatKampus" class="form-label font-weight-bold">Alamat</label>
                            <textarea class="form-control" name="alamat-kampus" id="alamatKampus" cols="" rows="5"></textarea>
                            </div>
                            <div class="col-md-6 themed-grid-col" id="geser">
                                <div class="mb-3">
                                <label for="formFile" class="form-label font-weight-bold">Upload Logo</label>
                                <input class="" type="file" id="formFile">
                                </div>
                                <div class="row">
                                <div class="col-md-12 themed-grid-col">
                                    <label for="formFile" class="form-label font-weight-bold">Upload Background</label>
                                    <input class="" type="file" id="formFile">
                                </div>
                                </div>                      
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label for="" class="font-weight-bold">Tentang Universitas</label>
                            <textarea name="deskripsi-univeristas" id="deskripsiUniversitas" class="ckeditor" cols="30" rows="10"></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 themed-grid-col">
                            <label for="formFile" class="form-label font-weight-bold">Upload Galeri</label><br>                  
                            <input class="" type="file" id="formFile">
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="col-md-4 themed-grid-col " id="geser2">
                    <div class="accordion" id="accordionKampus">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Publish
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionkampus">
                            <div class="accordion-body">
                                <a href="#" class="btn btn-light" style="background: #F7F7F7;
                                border: 2px solid #CACACA; box-sizing: border-box; margin-left:10px;"><span>Save Draft</span> </a>
                                <a href="#" class="btn btn-light" id="view"><span>Preview</span></a><br><br>
                                <p><img src="assets/dashicons_post-status.png" alt=""> <span>Status: Draft </span><a href="#">Edit</a></p>
                                <p><img src="assets/dashicons_visibility.png" alt=""> <span>Visibility: Public </span> <a href="#">Edit</a></p>
                                <p><img src="assets/ic_baseline-date-range.png" alt=""> <span>Publish: Immediately</span>  <a href="#"> Edit</a></p>                                      
                            </div>
                                <div class="form-group row" id="bgtrash">                        
                                    <a href="#" class="btn btn-md" id="trash"><img src="assets/clarity_trash-solid.png" alt=""> Move to Trash</a>
                                    <input class="btn btn-primary" id="publish" value="Publish" type="submit">
                                </div>                                        
                            </div>                
                            <div class="kotak"><br></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 themed-grid-col " id="geser3">
                    <div class="accordion" id="accordionKampus">              
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Categories
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionKampus">
                                <div class="accordion-body">
                                    <div class="row">
                                        <a href="#allCategories" id="buttonCategories" class="btn col-sm-6"><span>All Categories</span></a>
                                        <a href="#mostUsed" id="buttonmUsed" class="btn col-sm-4"><span>Most Used</span></a>
                                    </div>
                                    <div id="allCategories">
                                        <div class="form-group form-check row">
                                            <input type="checkbox" class="form-check-input" id="formcheck-kampus">
                                            <label class="form-check-label" for="formcheck-kampus">Negeri</label>
                                        </div> 
                                        <div class="form-group form-check row">
                                            <input type="checkbox" class="form-check-input" id="formcheck-kampus">
                                            <label class="form-check-label" for="formcheck-kampus">Swasta</label>
                                        </div>
                                        <div class="form-group form-check row">
                                            <input type="checkbox" class="form-check-input" id="formcheck-kampus">
                                            <label class="form-check-label" for="formcheck-kampus">Akreditasi A</label>
                                        </div>
                                        <div class="form-group form-check row">
                                            <input type="checkbox" class="form-check-input" id="formcheck-kampus">
                                            <label class="form-check-label" for="formcheck-kampus">Akreditasi B</label>
                                        </div>
                                        <div class="form-group form-check row">
                                            <input type="checkbox" class="form-check-input" id="formcheck-kampus">
                                            <label class="form-check-label" for="formcheck-kampus">Akreditasi C</label>
                                        </div>
                                        <div class="form-group form-check row">
                                            <input type="checkbox" class="form-check-input" id="formcheck-kampus">
                                            <label class="form-check-label" for="formcheck-kampus">S1</label>
                                        </div>
                                    </div>
                                    <div id="mostUsed">
                                    </div>
                                    <br>
                                    <a href="#">+ Add New Categories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection
@push('js-script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>  
@endpush