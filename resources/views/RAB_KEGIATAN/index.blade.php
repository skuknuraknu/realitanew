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
                          <th>Id</th>
                          <th>Rincian Kegiatan</th>
                          <th>Rincian Komponen</th>
                          <th>Akun</th>
                          <th>Kebutuhan Kegiatan</th>
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
                          <th>Upload Tor</th>
                          <th>Aksi</th>
                       </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                        @foreach($semua as $data)
                        <tr>
                            <td> {{ $data->id }} </td>
                            <td contenteditable="true"> {{ $data->rincian_kegiatan }}</td>
                            <td contenteditable="true"> {{ $data->rincian_komponen }}</td>
                            <td contenteditable="true"> {{ $data->akun }} </td>
                            <td contenteditable="true">{{ $data->kebutuhan_kegiatan}}</td>
                            <td contenteditable="true">{{ $data->jenis_belanja}}</td>
                            <td contenteditable="true">{{ $data->kuantitas}}</td>
                            <td contenteditable="true">{{ $data->satuan_kuantitas}}</td>
                            <td contenteditable="true">{{ $data->durasi}}</td>
                            <td contenteditable="true">{{ $data->satuan_durasi}}</td>
                            <td contenteditable="true">{{ $data->kegiatan}}</td>
                            <td contenteditable="true">{{ $data->satuan_kegiatan}}</td>
                            <td contenteditable="true">{{ $data->biaya_satuan}}</td>
                            <td contenteditable="true">{{ $data->pajak}}</td>
                            <td contenteditable="true">{{ $data->jumlah_biaya}}</td>
                            <td contenteditable="true">{{ $data->PNBP_Uniker}}</td>
                            <td contenteditable="true">{{ $data->PNBP_Univ}}</td>
                            <td>
                                <form id="TorForm">
                                    <input type="file" name="file" class="file" id="file">
                                    <label id="torlabel"> {{ $data->tor }}</label>
                                </form>
                            </td>
                            <td>
                                <div class="btn-group">
                                <span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span>
                                <span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span>
                                <span class="copy_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span>
                                <span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span>
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
@endsection


{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('RAB_KEGIATAN.css')
@endpush

@push('scripts')
    @include('RAB_KEGIATAN.scripts')
@endpush

