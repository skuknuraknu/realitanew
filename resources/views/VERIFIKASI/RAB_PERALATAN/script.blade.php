<script type="text/javascript">
$(document).ready(function() {
	$('.tabel-verkeg ').DataTable({
			"ordering" : false
		});
	// -- Tombol tambah
	$(document).on('click',".save_btn", function(e){
		let setiapBaris 				=  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
		let id 							= setiapBaris[0]
		let verifikasi_perencanaan		= $(this).closest('tr').find('select.verifikasi_perencanaan').val()
		let verifikasi_spi				= $(this).closest('tr').find('select.verifikasi_spi').val()
		let tanggapan					= setiapBaris[17]
		$.ajax({
	        type:'POST',
		    url:" {{ route('vRabPer.add') }} ",
	        data:{
		    	"_token": "{{ csrf_token() }}"
				,id
        		,verifikasi_perencanaan
         		,verifikasi_spi
		 		,tanggapan	                
			},
            success:function(data){
                    	// Swal.fire({
						//   icon: 'success',
						//   title: 'BERHASIL MENYIMPAN DATA TERSEBUT',
						//   showConfirmButton: false,
						//   timer: 1200
						// })
                    	// window.location.reload()        
                console.log(data) 
            },
            error: function (request, status, error) {
                Swal.fire({
					icon: 'error',
					title: 'GALAT',
					showConfirmButton: false,
					timer: 1200
				})
            }
        })// Ajax --
	})	// Tombol tambah --
	// -- VERIFIKASI PERENCANAAN
	$(document).on('click',"#ver_perencanaan", function(e){
		let me = this; 
		let status = $(me).closest('li').text()
		let div_id = $(this).closest('tr').find('#status_perencanaan')
		div_id.text(status)
	})// VERIFIKASI PERENCANAAN --
	// -- VERIFIKASI SPI 
	$(document).on('click',"#ver_spi", function(e){
		let me = this; 
		let status = $(me).closest('li').text()
		let div_id = $(this).closest('tr').find('#status_spi')
		div_id.text(status)
	})// VERIFIKASI SPI --
})
</script>