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
                                      <div class="row">
                                        <div class="col-md-6">
                                                  <p style="text-decoration:underline">Pihak Pertama</p> 
                                      <table class="table table-bordered border mb-0" id="new-edit">
                                            <tr>
                                            <td class="head">Tempat Penandatangan </td>
                                            <td class="PP_TPT" contenteditable="true"></td>
                                        </tr>
                                        <tr>
                                               <td class="head indikator_kinerja_kegiatan">Tanggal Penandatangan </td>
                                                <td class="PP_TGL" contenteditable="true"></td>
                                        </tr>
                                        <tr>
                                               <td class=" head">Nama Pimpinan (Rektor) </td>
                                                <td class="PP_NAMA" contenteditable="true"></td>
                                        </tr>
                                        <tr>
                                               <td class="head">Jabatan Pimpinan (Rektor) </td>
                                                <td class="PP_JBT" contenteditable="true"></td>
                                        </tr>
                                        <tr>
                                               <td class="head">NIP (Rektor) </td>
                                                <td class="PP_NIP" contenteditable="true"></td>
                                        </tr>
                                      </table>
                                        </div>  

                                        <div class="col-md-6">
                                                  <p style="text-decoration:underline">Pihak Kedua</p> 
                                                    <table class="table table-bordered border mb-0" id="new-edit">
                                                   <tr>
                                            <td class="head">Nama Pimpinan (Unit Kerja) </td>
                                            <td class="PK_NAMA" contenteditable="true"></td>
                                        </tr>
                                        <tr>
                                               <td class="head">Jabatan Pimpinan (Unit Kerja) </td>
                                                <td class="PK_JBT" contenteditable="true"></td>
                                        </tr>
                                        <tr>
                                               <td class=" head">NIP (Unit Kerja) </td>
                                                <td class="PK_NIP" contenteditable="true"></td>
                                        </tr>                                            
                                       </table>
                                        <button class="btn btn-primary btn-block mt-5 w-full">SIMPAN & LANJUTKAN</button>
                                        </div>
                                      </div>
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

