@extends('layout.layout')
@section('title', 'verifikasi rab peralatan')
@section('content')
  <div class="row mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">VERIFIKASI RAB PERALATAN</h3>
            </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="tabel-verper table table-bordered border mb-0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Rincian Kegiatan</th>
                        <th>Rincian Komponen</th>
                        <th>Akun</th>
                        <th>Kebutuhan Kegiatan </th>
                        <th>Jenis Belanja</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>e-Catalog (url)</th>
                        <th>Status Produk (lokal/impor)</th>
                        <th>Berkefungsian Untuk</th>
                        <th>kuantitas</th>
                        <th>satuan</th>
                        <th>Harga satuan(Rp)</th> 
                        <th>Jumlah Biaya(Rp)</th>
                        <th>verifikasi tim</th>
                        <th>verifikasi pimpinan</th>
                        <th>tanggapan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($rabper as $data)
                    <tr>
                        <td> {{ $data->id }} </td>
                        <td contenteditable="true"> {{ $data->rincian_kegiatan }}</td>
                        <td contenteditable="true"> {{ $data->rincian_komponen }}</td>
                        <td contenteditable="true"> {{ $data->akun }}</td>
                        <td contenteditable="true"> {{ $data->kebutuhan_kegiatan }}</td>
                        <td contenteditable="true"> {{ $data->jenis_belanja }}</td>
                        <td contenteditable="true"> {{ $data->merk }}</td>
                        <td contenteditable="true"> {{ $data->type }}</td>
                        <td > <label id="LABELcatalog"> {{ $data->eCatalog }} </label></td>
                        <td contenteditable="true"> {{ $data->status_produk }}</td>
                        <td contenteditable="true"> {{ $data->berkefungsian }}</td>
                        <td contenteditable="true"> {{ $data->kuantitas }}</td>
                        <td contenteditable="true"> {{ $data->satuan }}</td>
                        <td contenteditable="true"> {{ $data->harga_satuan }}</td>
                        <td contenteditable="true"> {{ $data->jumlah_biaya }}</td>
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
    @include('VERIFIKASI.RAB_PERALATAN.css')
@endpush

@push('scripts')
    @include('VERIFIKASI.RAB_PERALATAN.script')
@endpush
