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
                     <h3 class="card-title">Perjanjian Kinerja</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-rekat table table-bordered border mb-0" id="new-edit">
                 <thead>
                          <tr class="tableizer-firstrow">
                             <th>id</th>
                             <th>Kode IKK</th>
                             <th>INDIKATOR KINERJA KEGIATAN</th>
                             <th>Kode Program</th>
                             <th>Program</th>
                             <th>Kode Kegiatan</th>
                             <th>Rincian Kegiatan</th>
                             <th>TOR</th>
                             <th>Kode Rincian Komponen</th>
                             <th>Rincian Komponen</th>
                             <th>akun</th>
                             <th>Aksi</th>
                          </tr>
                       </thead>
                       <tbody>
                        @foreach($rekat as $data)
                          <tr>
                             <td> {{ $data->id }} </td>
                             <td class="">
                                    <select name="kd_ikk" type="text" class="kd_ikk d-inline form-control w-auto required">
                                        <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                                        @foreach ($ikk as $dataIKK)
                                            <option value="{{ $dataIKK->kd_ikk }}">{{ $dataIKK->kd_ikk }}</option>
                                        @endforeach
                                    </select>
                             </td>
                             <td class="indikator_kinerja_kegiatan"> {{ $data->indikator_kinerja_kegiatan }} </td>
                             <td >
                                    <select name="kd_program" type="text" class="kd_program d-inline form-control w-auto required">
                                        <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                                    </select>
                             </td>
                             <td></td>
                             <td class="kd_keg"> {{ $data->kd_keg }} </td>
                             <td class="rincian_kegiatan"> {{ $data->rincian_kegiatan}} </td>
                             <td class="TOR"> {{ $data->TOR}} </td>
                             <td class="kd_rk"> {{ $data->kd_rk}} </td>
                             <td class="rincian_komponen"> {{ $data->rincian_komponen}} </td>
                             <td class="akun"> {{ $data->akun}} </td>
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
@endsection

{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('REKAT.css')
@endpush

@push('scripts')
    @include('REKAT.script')
@endpush
