{{-- Inherit dari file layout.blade.php --}}
@extends('layout.layout')
 {{-- mendefinisikan title dari halaman ini yang asalnya dari 
      file master layout.blade.php pada baris `13` (yield) 
      baca lebih lanjut `https://www.malasngoding.com/sistem-template-blade-laravel/fungsi-yield-pada-laravel` --}}
@section('title', 'PERKIN')
@section('content')
@section('content')
    <div class="row mt-5">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <h3 class="card-title">Perjanjian Kinerja</h3>
                </div>
                <div class="card-body">
               <span class="mb-4">EXPORT :</span> <a href='{{ route("perkinReport.pdf")}}' role="button" id="exportPDF" class="bg-primary rounded-sm px-2 py-2 text-light mb-4"><i class="fe fe-file-text">PDF</i></a>
                {{-- <button id="btn_addRow" class="btn btn-primary mb-4"> Add New Row</button> --}}
                <div class="table-responsive py-4">
                <table class="tabel-perkin table table-bordered border mb-0" id="new-edit">
               
 <thead>
            <tr>
                <th  rowspan="2">Kode SS</th>
                <th  rowspan="2">Sasaran</th>
                <th rowspan="2">Kode IKK</th>
                <th rowspan="2">Indikator Kinerja Kegiatan</th>
                <th rowspan="2">Satuan</th>                
                <th rowspan="2">KK Mendikbud</th>
                <th rowspan="2">KK Menkeu</th>
                <th colspan="4" class="text-center">Target</th>
                <th rowspan="2">Bobot</th>
            </tr>
            <tr>
                <th>TW 1</th>
                <th>TW 2</th>
                <th>TW 3</th>
                <th>TW 4</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ALL as $data)
            <tr>
                <td>{{ $data->kd_ss}}</td>
                <td>{{ $data->sasaran}}</td>
                <td>{{ $data->kd_ikk}}</td>
                <td class="indikator_kinerja_kegiatan"> {{ $data->indikator_kinerja_kegiatan }}</td>
                <td> {{ $data->satuan }}</td>
                <td class="kk_mendikbud"> {{ $data->kk_mendikbud }}</td>
                <td class="kk_menkeu"> {{ $data->kk_menkeu }}</td>
                <td contenteditable="true"> {{ $data->tw_1 }}</td>
                <td contenteditable="true"> {{ $data->tw_2 }}</td>
                <td contenteditable="true"> {{ $data->tw_3 }}</td>
                <td contenteditable="true"> {{ $data->tw_4 }}</td>
                <td contenteditable="true"> {{ $data->bobot }}</td>  
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

@push('yss')
    @include('PERKINRpt.css')
@endpush

@push('scripts')
    @include('PERKINRpt.script')
@endpush