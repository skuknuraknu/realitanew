 {{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'KKM')
@section('content')
    {{-- Tabel Kontrak kinerja Kegiatan --}}
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Kontrak Kinerja Kegiatan</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-kkm table table-bordered border mb-0" id="new-edit">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>KODE IKK</th>
                            <th>INDIKATOR KINERJA KEGIATAN</th>
                            <th>KK MENDIKBUD</th>
                            <th>KK MENKEU</th>
                            <th>SATUAN</th>
                            <th>BOBOT</th>
                            <th>AKSI</th>    
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                        @foreach($allKKM as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>
                                    <select name="kd_ikk" type="text" class="kd_ikk bg-dark text-white d-inline form-control w-auto required">
                                    <option value="SILAHKAN PILIH" selected="true">Pilih</option>
                                    @foreach ($ikk as $dataIKK)
                                        <option value="{{ $dataIKK->kd_ikk }}">{{ $dataIKK->kd_ikk }}</option>
                                    @endforeach
                                </select>
                                <p class="text-center">{{ $data->kd_ikk }}</p>
                                </td>
                                <td class="indikator_kinerja_kegiatan" contenteditable="false"> {{$data->indikator_kinerja_kegiatan}}</td>
                                <td contenteditable="true"> {{ $data->kk_mendikbud }}</td>
                                <td contenteditable="true"> {{ $data->kk_menkeu }}</td>
                                <td contenteditable="true"> {{ $data->satuan }}</td>
                                <td contenteditable="true"> {{ $data->bobot }}</td>
                                
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
 {{-- Akhir Kontrak Kontrak kinerja Kegiatan --}}
    <div class="modal fade" id="modaldemo8 getCodeModal">
            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Terima kasih</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" id="getCode">
                        <h6>Data sudah tersimpan</h6>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('KKM.css')
@endpush

@push('scripts')
    @include('KKM.scripts')
@endpush

