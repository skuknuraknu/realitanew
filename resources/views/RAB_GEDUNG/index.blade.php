{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'rab gedung')
@section('content')
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Rab Gedung</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-gdg table table-bordered border mb-0" id="new-edit">
                    <thead>
                       <tr>
                        <td>Rincian Kegiatan</td>
                        <td>Rincian Komponen</td>
                        <td>Kebutuhan Kegiatan </td>
                        <td>Akun</td>
                        <td>Jenis Belanja</td>
                        <td>Alamat lokasi Gedung</td>
                        <td>Latitude/ Longitude</td>
                        <td>Luas Bangunan Gedung (dalam meter persegi)</td>
                        <td>Jumlah Gedung</td>
                        <td>Jumlah Lantai</td>
                        <td>Ruang Kuliah (dalam ruang)</td>
                        <td>Ruang Laboratorium/Workshop/Bengkel (dalam ruang)</td>
                        <td>Ruang Kantor/Management/Penunjang (dalam ruang)</td>
                        <td>lainnya (dalam ruang)</td>
                        <td>Kesesuaian Gedung dengan Master Plan Kawasan</td>
                        <td>Sertifikat</td>
                        <td>SIMAK BMN (url)</td>
                        <td>dokumen analisis kementerian PUPR (url)</td>
                        <td>dokumen IMB  (url)</td>
                        <td>Dokumen AMDAL/Ijin Lingkungan (url)</td>
                        <td>Dokumen RKS  (url)</td>
                        <td>DED AWAL</td>
                        <td>DED Review Terakhir</td>
                        <td>Nilai Perencanaan (Rp.)</td>
                        <td>Nilai Struktur (Rp.)</td>
                        <td>Nilai ME (Rp.)</td>
                        <td>Nilai Lanscape (Rp.)</td>
                        <td>Nilai Pengawasan (Rp.)</td>
                        <td>Proposal Project/KAK</td>
                        <td>RAB Detail (excel)</td>
                        <td>Perencanaan Gambar (pdf)</td>
                        <td>Jumlah Nilai (Rp)</td>
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
    @include('RAB_GEDUNG.css')
@endpush

@push('scripts')
    @include('RAB_GEDUNG.scripts')
@endpush

