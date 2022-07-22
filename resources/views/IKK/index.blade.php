 {{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'IKK')
@section('content')
    {{-- Tabel indikator kinerja --}}
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Indikator Kinerja Kegiatan</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-ikk table table-bordered border mb-0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Kode SS</th>
                            <th>Sasaran</th>
                            <th>Kode IKK</th>
                            <th>Indikator Kinerja Kegiatan</th>
                            <th>Kode Pro</th>
                            <th>Program</th>
                            <th>Kode Keg</th>
                            <th>Rincian Kegiatan</th>
                            <th>AKSI</th>    
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                        @foreach($allIKK as $data)
                            <tr>
                                <td contenteditable="true">{{ $data->id }}</td>
                                <td contenteditable="true">{{ $data->kd_ss }}</td>
                                <td contenteditable="true">{{ $data->sasaran }}</td>
                                <td contenteditable="true">{{ $data->kd_ikk }}</td>
                                <td contenteditable="true">{{ $data->indikator_kinerja_kegiatan}}</td>
                                <td contenteditable="true">{{ $data->kd_pr }}</td>
                                <td contenteditable="true">{{ $data->program }}</td>
                                <td contenteditable="true">{{ $data->kd_keg }}</td>
                                <td contenteditable="true">{{ $data->rincian_kegiatan }}</td>
                                <td>
                                    <div class="btn-group">
                                        <span class="del_btn"><i role="button"
                                        class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span>
                                        <span class="save_btn"><i role="button"
                                        class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span>
                                        <span class="copy_btn"><i role="button"
                                        class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span>
                                        <span class="add_btn"><i role="button"
                                        class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 {{-- Akhir Tabel indikator kinerja --}}

@endsection

{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('IKK.css')
@endpush

@push('scripts')
    @include('IKK.scripts')
@endpush