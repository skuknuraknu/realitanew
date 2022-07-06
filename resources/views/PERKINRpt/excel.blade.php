<style type="text/css">
	table tr th{
		background-color: gray;
		color: white;
		font-size: 15px;
	}
	table tr td{
		font-size: 10px;
	}
	
</style>
<link href="http://fonts.cdnfonts.com/css/times-new-roman" rel="stylesheet">
    <table id="example" style="" class="mt-4 table table-inverse table-bordered" border="4">
        <thead>
            <tr>
                <td>Satuan Kerja</td>
                <td>Universitas Syiah Kuala</td>
            </tr>  
            <tr>
                <td>Unit Kerja</td>
                <td>Fakultas Matematika dan Ilmu Pengetahuan Alam</td>
            </tr> 
            <tr>
                <td>Tahun</td>
                <td>2023</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
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

<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="{{ asset('assets/js/jquery.rowspanizer.min.js') }}"></script>
<script>
$(document).on('ready', function() {
  $("#example").rowspanizer({vertical_align: 'top'});
});
</script>
