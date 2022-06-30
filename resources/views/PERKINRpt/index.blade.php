<div class="container">
<h1>jQuery rowspanizer.js Plugin Demo</h1>
<button class="btn btn-primary" id="action">Auto Rowspan</button>
<table id="example" class="table table-inverse table-bordered">
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
  </tr>
  <tr>
    <td>SS_1</td>
    <td>IKU_1.1</td>
    <td>IKU_1.1.1</td>
  </tr>
  <tr>
    <td>SS_1</td>
    <td>IKU_1.1</td>
    <td>IKU_1.1.2</td>
  </tr>
  <tr>
    <td>SS_2</td>
    <td>IKU_1.2</td>
    <td>IKU_1.2.2</td>
  </tr>
 <tr>
    <td>SS_2</td>
    <td>IKU_1.2.1</td>
    <td>IKU_1.2.2</td>
  </tr>
  <tr>
    <td>SS_2</td>
    <td>IKU_1.2.1</td>
    <td>IKU_1.2.1.3</td>
  </tr>
  
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


