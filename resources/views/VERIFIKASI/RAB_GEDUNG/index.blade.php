@extends('layout.layout')
@section('title', 'verifikasi rab gedung')
@section('content')
  <div class="row mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">VERIFIKASI RAB GEDUNG</h3>
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
                        <th>Alamat lokasi Gedung</th>
                        <th>Latitude/ Longitude</th>
                        <th>Luas Bangunan Gedung (dalam meter persegi)</th>
                        <th>Jumlah Gedung</th>
                        <th>Jumlah Lantai</th>
                        <th>Ruang Kuliah (dalam ruang)</th>
                        <th>Ruang Laboratorium/Workshop/Bengkel (dalam ruang)</th>
                        <th>Ruang Kantor/Management/Penunjang (dalam ruang)</th>
                        <th>lainnya (dalam ruang)</th>
                        <th>Kesesuaian Gedung dengan Master Plan Kawasan</th>
                        <th>Sertifikat</th>
                        <th>SIMAK BMN (url)</th>
                        <th>dokumen analisis kementerian PUPR (url)</th>
                        <th>dokumen IMB  (url)</th>
                        <th>Dokumen AMDAL/Ijin Lingkungan (url)</th>
                        <th>Dokumen RKS  (url)</th>
                        <th>DED AWAL</th>
                        <th>DED Review Terakhir</th>
                        <th>Nilai Perencanaan (Rp.)</th>
                        <th>Nilai Struktur (Rp.)</th>
                        <th>Nilai ME (Rp.)</th>
                        <th>Nilai Lanscape (Rp.)</th>
                        <th>Nilai Pengawasan (Rp.)</th>
                        <th>Proposal Project/KAK</th>
                        <th>RAB Detail (excel)</th>
                        <th>Perencanaan Gambar (pdf)</th>
                        <th>Jumlah Nilai (Rp)</th>
                        <th>Verifikasi tim</th>
                        <th>Verifikasi pimpinan</th>
                        <th>tanggapan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($rabgdg as $data)
                    <tr>
                        <td> {{ $data->id }}</td>
                        <td contenteditable="true"> {{ $data->rincian_kegiatan }}</td>
                        <td contenteditable="true"> {{ $data->rincian_komponen }}</td>
                        <td contenteditable="true"> {{ $data->akun }}</td>
                        <td contenteditable="true"> {{ $data->kebutuhan_kegiatan  }}</td>
                        <td contenteditable="true"> {{ $data->jenis_belanja }}</td>
                        <td contenteditable="true"> {{ $data->alamat}}</td>
                        <td contenteditable="true"> {{ $data->latlong }}</td>
                        <td contenteditable="true"> {{ $data->luas_bangunan }}</td>
                        <td contenteditable="true"> {{ $data->jumlah_gedung }}</td>
                        <td contenteditable="true"> {{ $data->jumlah_lantai }}</td>
                        <td contenteditable="true"> {{ $data->ruang_kuliah }}</td>
                        <td contenteditable="true"> {{ $data->ruang_lab }}</td>
                        <td contenteditable="true"> {{ $data->ruang_kantor }}</td>
                        <td contenteditable="true"> {{ $data->lainnya }}</td>
                        <td contenteditable="true"> {{ $data->kesesuaian_gedung }}</td>
                        {{-- ====> sertifikat --}}
                        <td> </td>
                        {{-- ====> simak bmn --}}
                        <td> </td>
                        {{-- ====> pupr --}}
                        <td></td>
                         {{-- ====> imb --}}
                        <td> </td>
                         {{-- ====> amdal --}}
                        <td> </td>
                        {{-- ====> rks --}}
                        <td>
                            {{-- <object data="{{ asset('uploads/Rab_Gedung/RKS/'.$data->dokumen_RKS) }}" type="application/pdf">
                            <div>No online PDF viewer installed</div>
                        </object> --}}
                     </td>
                        <td contenteditable="true"> {{ $data->DED_AWAL }}</td>
                        <td contenteditable="true"> {{ $data->DED_REVIEW}}</td>
                        <td contenteditable="true"> {{ $data->nilai_perencanaan}}</td>
                        <td contenteditable="true"> {{ $data->nilai_struktur }}</td>
                        <td contenteditable="true"> {{ $data->nilai_me  }}</td>
                        <td contenteditable="true"> {{ $data->nilai_landscape  }}</td>
                        <td contenteditable="true"> {{ $data->nilai_pengawasan  }}</td>
                        {{-- ====> proposal project --}}
                        <td> </td>
                        {{-- ====> rab detail --}}
                        <td> </td>
                        {{-- ====> perencanaan gambar --}}
                        <td> </div>
                        <label id="LABELperencanaan"> {{ $data->perencanaan_gambar }}</label></td>
                        <td contenteditable="true"> {{ $data->jumlah_nilai }}</td>
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
    @include('VERIFIKASI.RAB_GEDUNG.css')
@endpush

@push('scripts')

<script src="{{ asset('assets/js/pdfobject.js') }}"></script>
    @include('VERIFIKASI.RAB_GEDUNG.script')
@endpush
