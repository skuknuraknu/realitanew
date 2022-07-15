<script type="text/javascript">
	$( document ).ready(function() {
		let tabel = $('.tabel-kodefikasi').DataTable({
			 "ordering": false,
			 "pageLength": 5
		});
	$( document ).on('change', '.jenis-rab', function(e){
		let jenis_rab_text = $(this).closest('tr').find('span.jenisRABSPAN')
		let jenis_rab = $(this).closest('tr').find('select.jenis-rab').val()

		console.log(jenis_rab_text.text(jenis_rab))
		console.log(jenis_rab)

	})

	$( document ).on('click', '.save_btn', function(e){
		//Mengambil konten / isi dari setiap cell tabel
            let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
            	/*Mendefinisikan variabel menggunakan `let`
            	variabel - variabel dibawah berbentuk array.
				*/
			let id 						   = setiapBaris[0]
			let akun 					   = setiapBaris[11]
			let jenisBELANJA 			   = setiapBaris[12]
			let jenisRAB			       = $(this).closest('tr').find('.jenisRABSPAN').text()
			  $.ajax({
	            	/* INSERT | UPDATE | DELETE => POST
	            	   READ       	   			=> GET
	            	   Karena disini mau insert, jadi type nya post
	            	*/
	                type:'POST',
		            url:" {{ route('kodefikasi.add') }} ",
		            //Data dibawah asalnya dimulai dari baris 12 di atas
	                data:{
	                	/* Untuk routing post, harus pakai csrf token
	                	baca lebih lanjut `https://medium.com/dotlocal/belajar-laravel-chapter-13-tutorial-csrf-protection-8ce2f82c4ce`
	                	*/
		                "_token": "{{ csrf_token() }}"
		                ,id
		                ,akun
		                ,jenisBELANJA
		               	,jenisRAB
	                },
	                //kalo respon dari server sukses :
                    success:function(data){
					// Swal.fire({
					//   position: 'top-end',
					//   title: "SUKSES MENYIMPAN DATA",
					//   showConfirmButton: false,
					//   timer: 2000
					// })
     //                window.location.reload()        
                    },
                    //kalo respon dari server error :
                    error: function (request, status, error) {
                    Swal.fire({
					  position: 'top-end',
					  icon: 'error',
					  title: error,
					  showConfirmButton: false,
					  timer: 2000
					})
                    }
                })// End ajax 
	})
 }); //akhir dari document ready 🤗
</script>