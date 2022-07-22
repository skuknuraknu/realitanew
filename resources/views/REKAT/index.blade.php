 {{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'REKAT')
@section('content')
  <div class="row mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">REKAT</h3>
            </div>
        <div class="card-body">
            <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
            <div class="table-responsive">
            <table class="tabel-rekat table table-bordered border mb-0" id="new-edit">
                <thead>
                    <tr class="tableizer-firstrow">
                        <th>id</th>
                        <th>Kode IKK</th>
                        <th>INDIKATOR<span style="visibility: hidden;" id="under">_</span>KINERJA<span style="visibility: hidden;" id="under">_</span>KEGIATAN</th>
                        <th>Kode Program</th>
                        <th>Program</th>
                        <th>Kode Kegiatan</th>
                        <th>Rincian<span style="visibility: hidden;">_</span>Kegiatan</th>
                        <th>Rincian Sub Komponen</th>
                        <th>akun</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($rekat as $data)
                    <tr id="rekat">
                        <td> {{ $data->id }} </td>
                        <td class="">
                            <select name="kd_ikk" type="text" class="kd_ikk bg-dark my-2 text-white d-inline form-control w-auto required">
                                <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                                @foreach ($ikk as $dataIKK)
                                    <option value="{{ $dataIKK->kd_ikk }}">{{ $dataIKK->kd_ikk }}</option>
                                @endforeach
                            </select>
                            <span class="d-block kd_ikkSPAN"> {{ $data->kd_ikk }} </span>
                        </td>
                        <td class="indikator_kinerja_kegiatan"> {{ $data->indikator_kinerja_kegiatan }} </td>
                        <td >
                            <select name="kd_program" type="text" class="kd_program bg-dark my-2 text-white d-inline form-control w-auto required">
                                <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                            </select>
                            <span class="d-block kd_programSPAN"> {{ $data->kd_program }} </span>
                        </td>
                        <td class="program"> {{ $data->program }} </td>
                        <td>
                            <span class="d-block kd_kegiatanSPAN"> {{ $data->kd_keg }} </span> 
                        </td>
                        <td >
                           <select name="kd_kegiatan"  style="width:200px" type="text" class="kd_kegiatan bg-dark my-2 text-white d-inline select2 w-auto required">
                                <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                            </select>
                            <span class="rincian_kegiatanSPAN"> {{ $data->rincian_kegiatan }} </span> 
                        </td>
                       
                        <td class="sk">      
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                <div class="btn-group mt-2 mb-2">
                                <button type="button" class="px-1 py-1 btn btn-github btn-pill dropdown-toggle" data-bs-toggle="dropdown"> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu  komponen" role="menu">
                                    <li class="dropdown-plus-title">
                                        Pilih
                                    <b class="fa fa-angle-up" aria-hidden="true"></b>
                                    </li> 
                                    @foreach ($rk as $komponen)
                                        <li id="komponen"><a href="javascript:void(0)">{{ $komponen->nama_sk }}</a></li>
                                    @endforeach
                                </ul>
                                </div>
                            </div>
                        </div>
                        <span class="sub_komponenSPAN"> {{ $data->rincian_komponen }} </span> 
                        </td>
                        <td >
                            <select name="akun" type="text" class="akun bg-dark text-white d-inline form-control w-auto required">
                                <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                            </select>
                            <span class="akunSPAN"> {{ $data->akun }} </span>
                        </td>
                        <td>
                            @if($data->verifikasi_perencanaan == "Approved" && $data->verifikasi_spi == "Approved")
                            <span style="color:gold">Di Setejui</span>
                            @else
                            <span style="color:white">Belum Disetujui</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span>
                                <span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span>
                                <span class="copy_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span>
                                <span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span>
                            </div>
                            <button type="button" class="btn_lanjut_rab btn btn-pink btn-block mt-2 btn-sm"><span class="text-black">Lanjutkan ke RAB</span></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>@endsection

{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('REKAT.css')
@endpush

@push('scripts')
    @include('REKAT.script')
@endpush
