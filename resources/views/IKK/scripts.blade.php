<script type="text/javascript">
// Disarankan ngoding sambil mendengar lagu watashi psikopat ~ 🎵Unravel ♫
	$( document ).ready(function() {
		//Saat tombol save di klik
    	$(document).on('click', ".save_btn", function(e){
    		//Mengambil konten / isi dari setiap cell tabel
            let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
            	/*Mendefinisikan variabel menggunakan `let`
            	variabel - variabel dibawah berbentuk array.
				*/
				let id 						   = setiapBaris[0]
                let kd_ss 					   = setiapBaris[1]
                let sasaran 				   = setiapBaris[2]
                let kd_ikk					   = setiapBaris[3]
                let indikator_kinerja_kegiatan = setiapBaris[4]
                let kd_program 				   = setiapBaris[5]
                let program 				   = setiapBaris[6]
                let kd_keg 				       = setiapBaris[7]
                let rincian_kegiatan 		   = setiapBaris[8]
                //akhir dari pendefinisian variabel

                /*
				Mengirim data yang nantinya akan diproses ke server melalui route `ikk.add` melalui ajax(Disinilah ajax diperlukan)
				`ikk.add` sudah didefinisikan di folder routes/web.php 
				baca lebih lanjut `https://www.maribelajarcoding.com/2019/12/crud-php-ajax-sederhana.html`
                */
	            $.ajax({
	            	/* INSERT | UPDATE | DELETE => POST
	            	   READ       	   			=> GET
	            	   Karena disini mau insert, jadi type nya post
	            	*/
	                type:'POST',
		            url:"{{ route('ikk.add') }}",
		            //Data dibawah asalnya dimulai dari baris 12 di atas
	                data:{
	                	/* Untuk routing post, harus pakai csrf token
	                	baca lebih lanjut `https://medium.com/dotlocal/belajar-laravel-chapter-13-tutorial-csrf-protection-8ce2f82c4ce`
	                	*/
		                "_token": "{{ csrf_token() }}"
		                ,id
		                ,kd_ss
		                ,sasaran
		                ,kd_ikk
		                ,indikator_kinerja_kegiatan
		                ,kd_program
		                ,program
		                ,kd_keg
		                ,rincian_kegiatan
	                },
	                //kalo respon dari server sukses :
                    success:function(data){
                    	alert('Sukses menyimpan data')         
                    },
                    //kalo respon dari server error :
                    error: function (request, status, error) {
                        alert('Error!' + error);
                    }
                });
            })
           
 }); //akhir dari document ready 🤗
</script>