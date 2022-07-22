{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'rab gedung') 
@section('content')
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Rab Gedung</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-gdg table table-bordered border mb-0" id="new-edit">
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
                        <th>Aksi</th>
                       </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                    @foreach( $rabgdg as $data)
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
                        <td> <form id="form_sertifikat" enctype="multipart/form-data">
                                <input type="file" name="fileSertifikat" id="fileSertifikat">
                             </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="sertif_name"></span></div>
                            <label id="LABELsertif">{{ $data->sertifikat }} </label>
                        </td>
                        {{-- ====> simak bmn --}}
                        <td> <form id="form_bmn" enctype="multipart/form-data">
                                <input type="file" name="file_bmn" id="file_bmn">
                             </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="bmn_name"></span></div>
                            <label id="LABELbmn">{{ $data->simak_BMN }}</label>
                        </td>
                        {{-- ====> pupr --}}
                        <td> <form id="form_pupr" enctype="multipart/form-data">
                            <input type="file" name="file_pupr" id="file_pupr">
                         </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="pupr_name"></span></div>
                        <label id="LABELpupr">{{ $data->PUPR }}</label></td>
                         {{-- ====> imb --}}
                        <td> <form id="form_imb" enctype="multipart/form-data">
                            <input type="file" name="file_imb" id="file_imb">
                         </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="imb_name"></span></div>
                        <label id="LABELimb">{{ $data->dokumen_IMB }}</label></td>
                         {{-- ====> amdal --}}
                        <td> <form id="form_amdal" enctype="multipart/form-data">
                            <input type="file" name="file_amdal" id="file_amdal">
                         </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="amdla_name"></span></div>
                        <label id="LABELamdal">{{ $data->dokumen_AMDAL }} </label></td>
                        {{-- ====> rks --}}
                        <td> <form id="form_rks" enctype="multipart/form-data">
                            <input type="file" name="file_rks" id="file_rks">
                         </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="rks_name"></span></div>
                        <label id="LABELrks"> {{ $data->dokumen_RKS}} </label></td>
                        <td contenteditable="true"> {{ $data->DED_AWAL }}</td>
                        <td contenteditable="true"> {{ $data->DED_REVIEW}}</td>
                        <td contenteditable="true"> {{ $data->nilai_perencanaan}}</td>
                        <td contenteditable="true"> {{ $data->nilai_struktur }}</td>
                        <td contenteditable="true"> {{ $data->nilai_me  }}</td>
                        <td contenteditable="true"> {{ $data->nilai_landscape  }}</td>
                        <td contenteditable="true"> {{ $data->nilai_pengawasan  }}</td>
                        {{-- ====> proposal project --}}
                        <td> <form id="form_proposal" enctype="multipart/form-data">
                            <input type="file" name="file_proposal" id="file_proposal">
                        </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="proposal_name"></span></div>
                        <label id="LABELproposal">{{ $data->proposal_project}} </label></td>
                        {{-- ====> rab detail --}}
                        <td> <form id="form_rab" enctype="multipart/form-data">
                            <input type="file" name="file_rab" id="file_rab">
                        </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="rab_name"></span></div>
                        <label id="LABELrab"> {{ $data->rab_detail }} </label></td>
                        {{-- ====> perencanaan gambar --}}
                        <td> <form id="form_perencanaan" enctype="multipart/form-data">
                            <input type="file" name="file_perencanaan" id="file_perencanaan">
                        </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="perencanaan_name"></span></div>
                        <label id="LABELperencanaan"> {{ $data->perencanaan_gambar }}</label></td>
                        <td contenteditable="true"> {{ $data->jumlah_nilai }}</td>
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
    @include('RAB_GEDUNG.css')
@endpush

@push('scripts')
    @include('RAB_GEDUNG.scripts')
@endpush

