
<link href="http://fonts.cdnfonts.com/css/times-new-roman" rel="stylesheet">
<style type="text/css">
table {
  font-size: 14px;
    border-collapse: collapse;
}
table th{
background-color: rgba(208,206,206,255);
}
img{
}
</style>
<style type="text/css">
.container-fluid{
    margin:38px;
}
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
    table th{
        text-align: center;
        font-size: 14px;
    }
    table thead{
        background-color: rgba(208,206,206,255);

    }
    table thead tr th{
        vertical-align: middle;
        color: black;
    }
      table tbody tr td{
        font-size: 12px;
        padding: 5px;
        vertical-align: top;
        color: black;
    }
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  font-weight: bold;
  float: left;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

.left {
  width: 70%;
}

.right {
  width: 30%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>



<div id="print" class="container-fluid" style="font-family: Times New Roman;">
    <div style="text-align: center;">
        <img src="{{ asset('assets/img/uskkk.jpg')}}" width="150" style="margin-bottom: 8px;"><br>
        <span class="text-center" style="font-size: 14px; font-weight: bold;">PERJANJIAN KINERJA <br> ANTARA <br> UNIVERSITAS SYIAH KUALA <br>DENGAN<br> PIMPINAN UNIT KERJA</span>
    </div>
    {{-- title --}}
    <div style="padding-top: 30px">
        <pre style="font-weight: bold;font-family: Times New Roman; font-size: 16px;">
Satuan Kerja            Universitas Syiah Kuala
Unit Kerja                Fakultas Matematika & Ilmu Pengetahuan Alam
Tahun                       2023</pre>
    </div>
    {{-- title --}}
    <table id="example" style="" class="mt-4 table table-inverse table-bordered" border="4">
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
                <td style="vertical-align: top;">{{ $data->sasaran}}</td>
                <td>{{ $data->kd_ikk}}</td>
                <td class="indikator_kinerja_kegiatan"> {{ $data->indikator_kinerja_kegiatan }}</td>
                <td> {{ $data->satuan }}</td>
                <td class="kk_menkeu"> {{ $data->kk_mendikbud }}</td>
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

    <div class="row">
      <div class="column left">
          <br>
                <span>{{ $pp['0']->PP_JBT }}</span><br><br><br><br><br><br>
                <span>{{ $pp['0']->PP_REKTOR }}</span><br>
                <span>{{ $pp['0']->PP_NIP }}</span>
      </div>
      <div class="column right">
          <span>{{  $pp['0']->PP_TPT }}, {{ $pp['0']->PP_TGL }}</span><br>
                <span>{{ $pp['0']->PK_JBT }}</span><br><br><br><br><br><br>
                <span>{{ $pp['0']->PK_NAMA }}</span><br>
                <span>{{ $pp['0']->PK_NIP }}</span>
      </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="{{ asset('assets/js/jquery.rowspanizer.min.js') }}"></script>
<script>
$(document).on('ready', function() {
  $("#example").rowspanizer({vertical_align: 'top'});
});
</script>
{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@include('PERKINRpt.css')
@include('PERKINRpt.script')

