 {{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'PERKIN')
@section('content')
    <div class="col-lg-12 col-md-12">
                            <div class="card mt-5">
                                <div class="card-header">
                                    <h3 class="card-title">Penandatanganan</h3>
                                </div>
                                <div class="card-body">
                                    <form >
                                        {{-- 1 --}}
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">Pihak Pertama Tempat Penandatanganan</label>
                                                <input type="text" id="PP_TPT" class="form-control" id="validationDefault01" required>
                                            </div> 
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">Nama Pimpinan (UNIT KERJA)</label>
                                                <input type="text" id="PK_NAMA" class="form-control" id="validationDefault01" required>
                                            </div>
                                        </div>
                                        {{-- 2 --}}
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">Pihak Pertama Tanggal Penandatanganan</label>
                                                <input type="date" id="PP_TGL" class="form-control" id="validationDefault01" required>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">Jabatan Pimpinan (Unit Kerja)</label>
                                                <input type="text" id="PK_JBT" class="form-control" id="validationDefault01" required>
                                            </div>
                                        </div>
                                        {{-- 3 --}}
                                         <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">Nama Pimpinan (Rektor)</label>
                                                <input type="text" id="PP_REKTOR"  class="form-control" id="validationDefault01" required>
                                            </div> 
                                           <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">NIP Pimpinan (Unit Kerja)</label>
                                                <input type="text" id="PK_NIP" class="form-control" id="validationDefault01" required>
                                            </div>
                                        </div>
                                        {{-- 4 --}}
                                         <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">Jabatan Pimpinan (Rektor)</label>
                                                <input type="text" id="PP_JBT" class="form-control" id="validationDefault01" required>
                                            </div> 
                                            
                                        </div>
                                        {{-- 5 --}}
                                          <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationDefault01">NIP Pimpinan (Rektor)</label>
                                                <input type="text" id="PP_NIP" class="form-control" id="validationDefault01" required>
                                            </div> 
                                        </div>
                                        <button class="btn btn-primary btn-block" id="submitBtn" type="submit">SUBMIT</button>
                                         <div class="col-sm-6 col-md-6 col-xl-3">
                                            <a class="modal-effect btn btn-warning-light d-grid mb-3" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#modaldemo8">Newspaper</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            
                       
@endsection


{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('PERKIN.css')
@endpush

@push('scripts')
    @include('PERKIN.scripts')
@endpush

