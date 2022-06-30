{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'PERKIN')
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
                <table class="tabel-perkin table table-bordered border mb-0" id="new-edit">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>KODE IKK</th>
                            <th>INDIKATOR KINERJA KEGIATAN</th>
                            <th>KK MENDIKBUD</th>
                            <th>KK MENKEU</th>
                            <th>SATUAN</th>
                            <th>TW I</th>
                            <th>TW II</th>
                            <th>TW III</th>
                            <th>TW IV</th>
                            <th>BOBOT</th>
                            <th>AKSI</th>    
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                        @foreach($allPERKIN as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                 <td>
                                    <select name="kd_ikk" type="text" class="kd_ikk d-inline form-control w-auto required">
                                        <option value="SILAHKAN PILIH" selected="true">Pilih</option>
                                        @foreach ($kkm as $dataIKK)
                                            <option value="{{ $dataIKK->kd_ikk }}">{{ $dataIKK->kd_ikk }}</option>
                                        @endforeach
                                    </select>
                                <p class="text-center ikk">{{ $data->kd_ikk }}</p>
                                </td>
                                <td class="indikator_kinerja_kegiatan"> {{ $data->indikator_kinerja_kegiatan }}</td>
                                <td class="kk_mendikbud"> {{ $data->kk_mendikbud }}</td>
                                <td class="kk_menkeu"> {{ $data->kk_menkeu }}</td>
                                <td class="satuan"> {{ $data->satuan }}</td>
                                <td contenteditable="true"> {{ $data->tw_1 }}</td>
                                <td contenteditable="true"> {{ $data->tw_2 }}</td>
                                <td contenteditable="true"> {{ $data->tw_3 }}</td>
                                <td contenteditable="true"> {{ $data->tw_4 }}</td>
                                <td class="bobot"> {{ $data->bobot }}</td>
                                
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
    @include('PERKIN.css')
@endpush

@push('scripts')
    @include('PERKIN.scripts')
@endpush

