{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'rab kegiatan')
@section('content')
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Rab Kegiatan</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-rabkeg table table-bordered border mb-0" id="new-edit">
                    <thead>
                       <tr>
                          <th>Rincian Kegiatan</th>
                          <th>Rincian Komponen</th>
                          <th>Kebutuhan Kegiatan</th>
                          <th>Akun</th>
                          <th>Jenis Belanja</th>
                          <th>kuantitas</th>
                          <th>Satuan</th>
                          <th>durasi</th>
                          <th>Satuan</th>
                          <th>kegiatan</th>
                          <th>Satuan</th>
                          <th>Biaya satuan (Rp)</th>
                          <th>Pajak</th>
                          <th>Jumlah Biaya (Rp)</th>
                          <th>PNBP Uniker (Rp)</th>
                          <th>PNBP Univ (Rp)</th>
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
    @include('RAB_KEGIATAN.css')
@endpush

@push('scripts')
    @include('RAB_KEGIATAN.scripts')
@endpush

