@extends('layout.layout')
@section('title', 'verifikasi rab kegiatan')
@section('content')
  <div class="row mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">VERIFIKASI RAB KEGIATAN</h3>
            </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="tabel-verkeg table table-bordered border mb-0" id="new-edit">
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
                          <th>verifikasi tim</th>
                          <th>verifikasi pimpinan</th>
                          <th>tanggapan</th>
                          <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($rabkeg as $data)
                    <tr>
                        <td> {{ $data->id }} </td>
                        <td> {{ $data->rincian_kegiatan }}</td>
                        <td> {{ $data->rincian_komponen }}</td>
                        <td> {{ $data->akun }} </td>
                        <td>{{ $data->kebutuhan_kegiatan}}</td>
                        <td>{{ $data->jenis_belanja}}</td>
                        <td>{{ $data->kuantitas}}</td>
                        <td>{{ $data->satuan_kuantitas}}</td>
                        <td>{{ $data->durasi}}</td>
                        <td>{{ $data->satuan_durasi}}</td>
                        <td>{{ $data->kegiatan}}</td>
                        <td>{{ $data->satuan_kegiatan}}</td>
                        <td>{{ $data->biaya_satuan}}</td>
                        <td>{{ $data->pajak}}</td>
                        <td>{{ $data->jumlah_biaya}}</td>
                        <td>{{ $data->PNBP_Uniker}}</td>
                        <td>{{ $data->PNBP_Univ}}</td>
                        <td>{{ $data->tor }} </td>
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
    @include('VERIFIKASI.RAB_KEGIATAN.css')
@endpush

@push('scripts')
    @include('VERIFIKASI.RAB_KEGIATAN.script')
@endpush
