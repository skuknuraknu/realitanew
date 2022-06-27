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
		            url:" {{ route('ikk.add') }} ",
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
                    	window.location.reload()         
                    },
                    //kalo respon dari server error :
                    error: function (request, status, error) {
                        alert('Error!' + error);
                    }
                })// End ajax 
            })// End save_btn on-click
           
		// Saat tombol hapus ditekan
		$(document).on('click', ".del_btn", function(e){
			// Mengambil data dari baris terdekat dan memecahkannya lalu mengubahnya menjadi bentuk array
			let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
			var baris = $(this).closest('tr')   
				/*Mendefinisikan variabel menggunakan `let`
            	variabel - variabel dibawah berbentuk array.
            	~ Untuk menghapus data cukup mengirimkan id saja ke server ~
				*/
				let id = setiapBaris[0]
				//akhir dari pendefinisian variabel

            /*
			Mengirim data yang nantinya akan diproses ke server melalui route `ikk.del` melalui ajax(Disinilah ajax diperlukan)
			`ikk.del` sudah didefinisikan di folder routes/web.php 
			baca lebih lanjut `https://www.maribelajarcoding.com/2019/12/crud-php-ajax-sederhana.html`
		   */
			$.ajax({
				/*  INSERT | UPDATE | DELETE => POST
	                READ       	   			 => GET
	            	Karena disini mau DELETE, jadi type nya post
	            */
				type:'POST',
				url:" {{ route('ikk.del') }} ",
				data:{
				 "_token": "{{ csrf_token() }}"
				 ,id
				},
				//kalo respon dari server sukses :
				success:function(data){
					alert('Sukses menghapus data')
					baris.remove()
				},
                //kalo respon dari server error :
                error: function (request, status, error) {
                        alert('Error!' + error);
				}
            }) // End ajax 
		}) // End del_btn on-click

		// Saat tombol copy ditekan
		$(document).on('click',".copy_btn", function(e){
			/* Mengambil data dari baris yang paling dekat dengan menggunakan `closest` 
			Lalu baca setiap baris nya dengan `each`... `each` mirip dengan looping data
			*/
		    let baris = $(this).closest('tr').clone();
		    $.each(baris.find('td'), function(i1,v1){
		    	// Mengkosongkan baris awal (Karena baris awal diisi oleh ID)
		    	if ($(this).is(':first-child')) {
		       		$(this).html('');
		       	}
		    });
		    //Append data ke bawah baris terdekat
		    $(this).closest('tr').after(baris);
		})// End copy-btn

		// Fungsi untuk membuat data data berbentuk tr td dari sebuah tabel html
		$(document).on('click', "#btn_addRow", function(e){
			const barisBaru = () => {
    			let data ='<tr> <td></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td><td contenteditable="true"></td> <td contenteditable="true"></td> <td><div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span></div></td> </tr>';
    			return data;
			};
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-ikk`
			*/
			$('.tabel-ikk').append(barisBaru())
		})

 }); //akhir dari document ready 🤗
</script>