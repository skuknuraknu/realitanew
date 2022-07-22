{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'rab peralatan')
@section('content')
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Rab Peralatan</h3>
                </div>
                <div class="card-body">
                <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button>
                <div class="table-responsive">
                <table class="tabel-rabper table table-bordered border mb-0" >
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
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($RABPER as $data)
                        <tr>
                        <td> {{ $data->id }} </td>
                        <td contenteditable="true"> {{ $data->rincian_kegiatan }}</td>
                        <td contenteditable="true"> {{ $data->rincian_komponen }}</td>
                        <td contenteditable="true"> {{ $data->akun }}</td>
                        <td contenteditable="true"> {{ $data->kebutuhan_kegiatan }}</td>
                        <td contenteditable="true"> {{ $data->jenis_belanja }}</td>
                        <td contenteditable="true"> {{ $data->merk }}</td>
                        <td contenteditable="true"> {{ $data->type }}</td>
                        <td >
                            <form id="form_catalog" enctype="multipart/form-data">
                                <input type="file" name="file_catalog" id="file_catalog">
                            </form> 
                            <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="catalog_name"></span></div>
                            <label id="LABELcatalog"> {{ $data->eCatalog }} </label>
                        </td>
                        <td contenteditable="true"> {{ $data->status_produk }}</td>
                        <td contenteditable="true"> {{ $data->berkefungsian }}</td>
                        <td contenteditable="true"> {{ $data->kuantitas }}</td>
                        <td contenteditable="true"> {{ $data->satuan }}</td>
                        <td contenteditable="true"> {{ $data->harga_satuan }}</td>
                        <td contenteditable="true"> {{ $data->jumlah_biaya }}</td>
                        <td>
                            @if( $data->verifikasi_tim == "Setuju" && $data->verifikasi_pimpinan == "Setuju")
                            <span style="color:yellow">Disetejui</span>
                            @else
                            <span>Belum Disetejui</span>
                            @endif
                        </td>
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
    @include('RAB_PERALATAN.css')
@endpush

@push('scripts')
    @include('RAB_PERALATAN.scripts')
@endpush

