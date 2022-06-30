<script type="text/javascript">
// Disarankan ngoding sambil mendengar lagu watashi psikopat ~ 🎵Unravel ♫
	$( document ).ready(function() {
		let tabel = $('.tabel-rangka').DataTable();
		//Saat tombol save di klik
    	$(document).on('click', ".save_btn", function(e){
    		//Mengambil konten / isi dari setiap cell tabel
            let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
            	/*Mendefinisikan variabel menggunakan `let`
            	variabel - variabel dibawah berbentuk array.
				*/
				let id		    = setiapBaris[0]
		        let kd_keg		= setiapBaris[1]
		        let nama_keg	= setiapBaris[2]
		        let kd_kro		= setiapBaris[3]
		        let nama_kro	= setiapBaris[4]
		        let kd_ro		= setiapBaris[5]
		        let nama_ro		= setiapBaris[6]
		        let kd_kp		= setiapBaris[7]
		        let nama_kp		= setiapBaris[8]
		        let kd_sk		= setiapBaris[9]
		        let nama_sk		= setiapBaris[10]
		        let kd_ak		= setiapBaris[11]
		        let nama_ak		= setiapBaris[12]
		        let kd_mak		= setiapBaris[13]
                //akhir dari pendefinisian variabel

                /*
				Mengirim data yang nantinya akan diproses ke server melalui route `rangka.add` melalui ajax(Disinilah ajax diperlukan)
				`rangka.add` sudah didefinisikan di folder routes/web.php 
				baca lebih lanjut `https://www.maribelajarcoding.com/2019/12/crud-php-ajax-sederhana.html`
                */
	            $.ajax({
	            	/* INSERT | UPDATE | DELETE => POST
	            	   READ       	   			=> GET
	            	   Karena disini mau insert, jadi type nya post
	            	*/
	                type:'POST',
		            url:" {{ route('rangka.add') }} ",
		            //Data dibawah asalnya dimulai dari baris 12 di atas
	                data:{
	                	/* Untuk routing post, harus pakai csrf token
	                	baca lebih lanjut `https://medium.com/dotlocal/belajar-laravel-chapter-13-tutorial-csrf-protection-8ce2f82c4ce`
	                	*/
		                "_token": "{{ csrf_token() }}"
		                ,id
				        ,kd_keg
				        ,nama_keg
				        ,kd_kro
				        ,nama_kro
				        ,kd_ro
				        ,nama_ro
				        ,kd_kp
				        ,nama_kp
				        ,kd_sk
				        ,nama_sk
				        ,kd_ak
				        ,nama_ak
				        ,kd_mak
	                },
	                //kalo respon dari server sukses :
                    success:function(data){
                    	Swal.fire({
						  icon: 'success',
						  title: 'BERHASIL MENYIMPAN DATA TERSEBUT',
						  showConfirmButton: false,
						  timer: 1200
						})
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

			Swal.fire({
				  title: 'Apakah anda yakin menghapus data ini?',
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'IYA'
				}).then((result) => {
				  if (result.isConfirmed) {
				  	$.ajax({
						/*  INSERT | UPDATE | DELETE => POST
			                READ       	   			 => GET
			            	Karena disini mau DELETE, jadi type nya post
			            */
						type:'POST',
						url:" {{ route('rangka.del') }} ",
						data:{
						 "_token": "{{ csrf_token() }}"
						 ,id
						},
						//kalo respon dari server sukses :
						success:function(data){
							Swal.fire('BERHASIL MENGHAPUS DATA TERSEBUT')
							baris.remove()
						},
		                //kalo respon dari server error :
		                error: function (request, status, error) {
		                	Swal.fire({
							  icon: 'error',
							  title: 'Oops...',
							  text: status + ' | ' + error,
							})
						}
		            }) // End ajax 
				  }
			}) // End of sweetalert2
		}) // End del_btn on-click
		
		// Saat tombol add ditekan
		$(document).on('click', '.add_btn', function(e){
		    let baris = $(this).closest('tr').clone();
		    $.each(baris.find('td'), function(i1,v1){
		    	$(this).html('');
		    	// Mengkosongkan baris awal (Karena baris awal diisi oleh ID)
		    	if ($(this).is(':last-child')) {
		       		$(this).html('<div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span></div><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div>');
		       	}
		    });
		    //Append data ke bawah baris terdekat
		    $(this).closest('tr').after(baris);
		})// End add button

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
    			let data ='<tr> <td></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td><div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span> </div></td></tr>';
    			return data;
			};
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-rangka`
			*/
			$('.tabel-rangka').append(barisBaru())
		})

 }); //akhir dari document ready 🤗
</script>