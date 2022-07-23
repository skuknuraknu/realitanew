@extends('layout.layout')
@section('title', 'verifikasi rekat')
@section('content')
  <div class="row mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">VERIFIKASI REKAT</h3>
            </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="tabel-verrekat table table-bordered border mb-0" id="new-edit">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>INDIKATOR<span style="visibility: hidden;" id="under">_</span>KINERJA<span style="visibility: hidden;" id="under">_</span>KEGIATAN</th>
                        <th>Program</th>
                        <th>Rincian<span style="visibility: hidden;">_</span>Kegiatan</th>
                        <th>Rincian Sub Komponen</th>
                        <th>akun</th>
                        <th>verifikasi perencanaan</th>
                        <th>verifikasi<span style="visibility: hidden">_</span>spi</th>
                        <th>tanggapan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($rekat as $data)
                    <tr>
                        <td> {{ $data->id }} </td>
                        <td> {{ $data->indikator_kinerja_kegiatan }} </td>
                        <td> {{ $data->program }} </td>
                        <td> {{ $data->rincian_kegiatan }}</td>
                        <td> {{ $data->rincian_komponen }}</td>
                        <td >{{ $data->akun }}</td>
                       
                        <td>
                            <select name="verifikasi_perencanaan"  style="width:200px" type="text" class="verifikasi_perencanaan bg-dark my-2 text-white d-inline select2 w-auto required">
                                <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                                <option value="Setuju">Setuju</option>
                                <option value="Tolak">Tolak</option>
                            </select>
                            <span id="status_perencanaan">{{ $data->verifikasi_perencanaan }}</span>
                        </td>
                        <td>
                            <select name="verifikasi_spi"  style="width:200px" type="text" class="verifikasi_spi bg-dark my-2 text-white d-inline select2 w-auto required">
                                <option value="SILAHKAN PILIH" selected="selected">Pilih</option>
                                <option value="Setuju">Setuju</option>
                                <option value="Tolak">Tolak</option>
                            </select>
                            <span id="status_spi">{{ $data->verifikasi_spi }}</span>
                        </td>
                        <td class="tanggapan" contenteditable="true"> {{ $data->tanggapan }}</td>
                        <td>  
                            <span class="save_btn"><a href="javascript:void(0)"
                            class="btn btn-lime">SAVE</a></span>
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
    @include('VERIFIKASI.REKAT.css')
@endpush

@push('scripts')
    @include('VERIFIKASI.REKAT.script')
@endpush
