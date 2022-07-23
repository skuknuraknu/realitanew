{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
{{-- mendefinisikan title dari halaman ini yang asalnya dari
      file master layout.blade.php pada baris `13` (yield)
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'VERIFIKASI PERKIN')
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Verifikasi Perjanjian Kinerja</h3>
                </div>
                <div class="card-body">
                    {{-- <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button> --}}
                    <div class="table-responsive">
                        <table class="tabel-perkin table table-bordered border mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kode IK</th>
                                    <th>Indikator<span style="visibility: hidden;">_</span>kinerja<span
                                            style="visibility:hidden;">_</span>kegiatan</th>
                                    <th>KK MENDIKBUD</th>
                                    <th>KK MENKEU</th>
                                    <th>TW 1</th>
                                    <th>TW 2</th>
                                    <th>TW 3</th>
                                    <th>TW 4</th>
                                    <th>Jumlah Target</th>
                                    <th>Bobot</th>
                                    <th>Verifikasi Perencanaan</th>
                                    <th>Verifikasi<span style="visibility: hidden;" id="under">_</span>SPI</th>
                                    <th>tanggapan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗 --}}
                                @foreach ($perkinVer as $data)
                                <tr>
                                        <td>{{ $data->id }}</td>
                                        <td class="kd_ikk">{{ $data->kd_ikk }}</td>
                                        <td class="indikator_kinerja_kegiatan"> {{ $data->indikator_kinerja_kegiatan }}
                                        </td>
                                        <td class="kk_mendikbud"> {{ $data->kk_mendikbud }}</td>
                                        <td class="kk_menkeu"> {{ $data->kk_menkeu }}</td>
                                        <td id="tw_1"> {{ $data->tw_1 }}</td>
                                        <td id="tw_2"> {{ $data->tw_2 }}</td>
                                        <td id="tw_3"> {{ $data->tw_3 }}</td>
                                        <td id="tw_4"> {{ $data->tw_4 }}</td>
                                        <td class="jumlah_bobot">
                                            {{ (int) $data->tw_1 + (int) $data->tw_2 + (int) $data->tw_3 + (int) $data->tw_4 }}
                                        </td>
                                        <td class="bobot"> {{ $data->bobot }}</td>
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

                                            <div class="btn-group">
                                                {{-- <span class="del_btn"><i role="button"
                                        class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span> --}}
                                                {{-- <span class="save_btn"><i role="button"
                                        class="bg-info px-2 mx-1 py-2 text-light">SAVE</i></span> --}}
                                                {{-- <span class="copy_btn"><i role="button"
                                        class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span>
                                        <span class="add_btn"><i role="button"
                                        class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span> --}}
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
    @include('VERIFIKASI.PERKIN.css')
@endpush

@push('scripts')
    @include('VERIFIKASI.PERKIN.script')
@endpush
