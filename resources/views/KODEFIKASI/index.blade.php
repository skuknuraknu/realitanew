 {{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'KODEFIKASI JENIS BELANJA')
@section('content')
    {{-- Tabel Kontrak kinerja Kegiatan --}}
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">KODEFIKASI JENIS BELANJA</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-kodefikasi table table-bordered border mb-0" id="new-edit">
                    <thead>
                        <tr>
                        <td>ID</td>  
                        <td>#1</td>  
                        <td>kodefikasi I</td>
                        <td>#2</td>
                        <td>kodefikasi II </td>
                        <td>#3</td>
                        <td>Kodefikasi III</td>
                        <td>#4</td>
                        <td>Kodefikasi IV</td>
                        <td>#5</td>
                        <td>Kodefikasi V</td> 
                        <td>Akun</td> 
                        <td>Jenis Belanja</td> 
                        <td>Jenis<span style="visibility:hidden;">_</span>Rab</td> 
                        <td>Aksi</td> 
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                        @foreach($kodefikasi as $data)
                        <tr>
                        <td>{{ $data->id}}</td>
                        <td>{{ $data->A1}}</td>  
                        <td>{{ $data->kodefikasi_1}}</td>
                        <td>{{ $data->A2}}</td>
                        <td>{{ $data->kodefikasi_2}} </td>
                        <td>{{ $data->A3}}</td>
                        <td>{{ $data->kodefikasi_3}}</td>
                        <td>{{ $data->A4}}</td>
                        <td>{{ $data->kodefikasi_4}}</td>
                        <td>{{ $data->A5}}</td>
                        <td>{{ $data->kodefikasi_5}}</td> 
                        <td class="kd_ak">{{ $data->akun}}</td> 
                        <td class="kd_ak">{{ $data->jenis_belanja}}</td> 
                        <td>
                            <select class="form-control bg-dark text-white jenis-rab">
                                <option value="-" selected disabled>Pilih</option>
                                <option value="RAB_KEGIATAN">RAB KEGIATAN</option>
                                <option value="RAB_PERALATAN">RAB PERALATAN</option>
                                <option value="RAB_GEDUNG">RAB GEDUNG</option>
                            </select>
                            <span class="jenisRABSPAN">{{ $data->jenis_rab }} </span>
                        </td> 
                        <td>
                             <div class="btn-group">
                                    <span class="del_btn"><i role="button"
                                    class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span>
                                    <span class="save_btn"><i role="button"
                                    class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span>

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
    @include('KODEFIKASI.css')
@endpush

@push('scripts')
    @include('KODEFIKASI.scripts')
@endpush

