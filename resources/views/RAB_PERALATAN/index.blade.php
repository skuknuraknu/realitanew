{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'rab peralatan')
@section('content')
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Rab Peralatan</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-rabper table table-bordered border mb-0" id="new-edit">
                    <thead>
                          <tr>
                            <td>Rincian Kegiatan</td>
                            <td>Rincian Komponen</td>
                            <td>Kebutuhan Kegiatan </td>
                            <td>Akun</td>
                            <td>Jenis Belanja</td>
                            <td>Merk</td>
                            <td>Type</td>
                            <td>e-Catalog (url)</td>
                            <td>Status Produk (lokal/impor)</td>
                            <td>Berkefungsian Untuk</td>
                            <td>kuantitas</td>
                            <td>satuan</td>
                            <td>Harga satuan(Rp)</td> 
                            <td>Jumlah Biaya(Rp)</td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('RAB_PERALATAN.css')
@endpush

@push('scripts')
    @include('RAB_PERALATAN.scripts')
@endpush

