<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="mt-5 container">
<div class="text-center">
        <img src="{{ asset('assets/img/uskkk.jpg')}}" width="150" class="mb-1"><br>
<span class="text-center" style="font-size: 14px; font-weight: bold;">PERJANJIAN KINERJA <br> ANTARA <br> UNIVERSITAS SYIAH KUALA <br>DENGAN<br> PIMPINAN UNIT KERJA</span>
</div>
<table id="example" class="mt-4 table table-inverse table-bordered" border="2">
 <thead>
                        <tr>
<td  rowspan="2">Kode SS</td>
<td  rowspan="2">Sasaran</td>

 <th rowspan="2">KODE IKK</th>
                            <th rowspan="2">INDIKATOR KINERJA KEGIATAN</th>
<th rowspan="2">KK MENDIKBUD</th>
                            <th rowspan="2">KK MENKEU</th>
                            <td colspan="4" class="text-center">Target</td>
                            <th rowspan="2">BOBOT</th>

</tr>
<tr>
<td>TW 1</td>
<td>TW 2</td>
<td>TW 3</td>
<td>TW 4</td>
</tr>
                    </thead>
                    <tbody>
                        {{-- Melakukan proses looping data yang dikirimin dari IKK Controller,
                             untuk menampilkan data ke tabel disini menggunakan foreach 
                             bisa juga pakai for(bla; bla; bla;), tapi lebih mudah pakai foreach 🤗
                        --}}
                        @foreach($ALL as $data)
                            <tr >
                                <td>{{ $data->kd_ss}}</td>
                                <td>{{ $data->sasaran}}</td>
                                 <td>{{ $data->kd_ikk}}</td>
                                <td class="indikator_kinerja_kegiatan"> {{ $data->indikator_kinerja_kegiatan }}</td>
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
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="{{ asset('assets/js/jquery.rowspanizer.min.js') }}"></script>
<script>
$(document).on('ready', function() {
  $("#example").rowspanizer({vertical_align: 'middle'});
});
</script>
</script>

{{-- `https://stackoverflow.com/questions/44674255/how-to-use-directive-push-in-blade-template-laravel` --}}
@include('PERKINRpt.css')
@include('PERKINRpt.script')


