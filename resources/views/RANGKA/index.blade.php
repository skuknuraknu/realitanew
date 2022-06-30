 {{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'RANGKA')
@section('content')
    {{-- Tabel Kontrak kinerja Kegiatan --}}
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">RANCANGAN ANGGARAN</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-rangka table table-bordered border mb-0" id="new-edit">
                    <thead>
                        <tr>
                            <th>id</th>  
                            <th>kd_keg</th>  
                            <th>nama_keg</th>    
                            <th>kd_kro</th>  
                            <th>nama_kro</th>    
                            <th>kd_ro</th>   
                            <th>nama_ro</th> 
                            <th>kd_kp</th>   
                            <th>nama_kp</th> 
                            <th>kd_sk</th>   
                            <th>nama_sk</th> 
                            <th>kd_ak</th>   
                            <th>nama_ak</th> 
                            <th>kd_mak</th>
                            <th>AKSI</th>    
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                        @foreach($allRANGKA as $data)
                            <tr>
                                <td contenteditable="true"> {{ $data->id }}</td>  
                                <td contenteditable="true"> {{ $data->kd_keg }}</td>  
                                <td contenteditable="true"> {{ $data->nama_keg }}</td>    
                                <td contenteditable="true"> {{ $data->kd_kro }}</td>  
                                <td contenteditable="true"> {{ $data->nama_kro }}</td>    
                                <td contenteditable="true"> {{ $data->kd_ro }}</td>   
                                <td contenteditable="true"> {{ $data->nama_ro }}</td> 
                                <td contenteditable="true"> {{ $data->kd_kp }}</td>   
                                <td contenteditable="true"> {{ $data->nama_kp }}</td> 
                                <td contenteditable="true"> {{ $data->kd_sk }}</td>   
                                <td contenteditable="true"> {{ $data->nama_sk }}</td> 
                                <td contenteditable="true"> {{ $data->kd_ak }}</td>   
                                <td contenteditable="true"> {{ $data->nama_ak }}</td> 
                                <td contenteditable="true"> {{ $data->kd_mak }}</td>
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
 {{-- Akhir Kontrak Kontrak kinerja Kegiatan --}}
@endsection

{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@push('yss')
    @include('RANGKA.css')
@endpush

@push('scripts')
    @include('RANGKA.scripts')
@endpush

