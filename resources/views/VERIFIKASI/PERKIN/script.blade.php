<script type="text/javascript">
// Disarankan ngoding sambil mendengar lagu watashi psikopat ~ 🎵Unravel ♫
	$(document).ready(function() {
		let bs = $('.tabel-perkin').dataTable();

		// Saat tombol ver drop ditekan
		$(document).on('click',"#ver_perencanaan", function(e){
			var me = this; 
			var status = $(me).closest('li').text()
			var div_id = $(this).closest('tr').find('#status_perencanaan')
			div_id.text(status)
		})// End copy-btn	

		// Saat tombol ver dop ditekan
		$(document).on('click',"#ver_spi", function(e){
			var me = this; 
			var status = $(me).closest('li').text()
			var div_id = $(this).closest('tr').find('#status_spi')
			div_id.text(status)
		})// End copy-btn

		//Saat tombol save di klik
    	$(document).on('click', ".save_btn", function(e){
    		//Mengambil konten / isi dari setiap cell tabel
            let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
            	/*Mendefinisikan variabel menggunakan `let`
            	variabel - variabel dibawah berbentuk array.
				*/
				let id 							= setiapBaris[0]
				let kd_ikk 					    = setiapBaris[1]
				let indikator_kinerja_kegiatan  = setiapBaris[2]
				let kk_mendikbud				= setiapBaris[3]
				let kk_menkeu 					= setiapBaris[4]
				let bobot						= setiapBaris[10]
				let tw_1 						= setiapBaris[5]
        		let tw_2 						= setiapBaris[6]
        		let tw_3  						= setiapBaris[7] 
        		let tw_4 						= setiapBaris[8] 
        		let jumlah_bobot				= setiapBaris[9]
        		let tanggapan				    = setiapBaris[13]
        		let verifikasi_perencanaan		= $(this).closest('tr').find('#status_perencanaan').text()
        		let verifikasi_spi				= $(this).closest('tr').find('#status_spi').text()
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
		            url:" {{ route('verPerkin.add') }} ",
		            //Data dibawah asalnya dimulai dari baris 12 di atas
	                data:{
	                	/* Untuk routing post, harus pakai csrf token
	                	baca lebih lanjut `https://medium.com/dotlocal/belajar-laravel-chapter-13-tutorial-csrf-protection-8ce2f82c4ce`
	                	*/
		                "_token": "{{ csrf_token() }}"
				 		,kd_ikk
				 		,indikator_kinerja_kegiatan
				 		,kk_mendikbud
				 		,kk_menkeu	
						,bobot
				 		,tw_1 
        		 		,tw_2
        		 		,tw_3 
        		 		,tw_4
        		 		,jumlah_bobot
        		 		,verifikasi_perencanaan
        		 		,verifikasi_spi
        		 		,tanggapan
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
                    	// console.log(data) 
                    },
                    //kalo respon dari server error :
                    error: function (request, status, error) {
                        alert('Error!' + error);
                        console.log(error)
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
						url:" {{ route('perkin.del') }} ",
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
    		let data ='<tr> <td></td><td class="kd_ikk">{{ $data->kd_ikk }}</td>  <td class="indikator_kinerja_kegiatan" contenteditable="false"></td> <td class="kk_mendikbud"></td><td class="kk_menkeu"></td><td id="tw_1"></td><td id="tw_2"></td><td id="tw_3"></td><td id="tw_4"></td><td class="jumlah_bobot"></td><td class="bobot"></td><td class="verifikasi_perencanaan"> <select name="verifikasi_perencanaan" type="text" class="verifikasi_perencanaan d-inline form-control w-auto required bg-white text-dark"><option value="null" disable selected="selected">Pilih</option><option value="SETUJUI">SETUJUI</option><option value="TOLAK">TOLAK</option></select></td><td class="verifikasi_spi">  <select name="verifikasi_spi" type="text" class="verifikasi_spi d-inline form-control w-auto required  bg-white text-dark"><option value="null" disable selected="selected">Pilih</option><option value="SETUJUI">SETUJUI</option><option value="TOLAK">TOLAK</option></select></td><td><div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span> </div></td></tr>';
    			return data;
			};
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-ikk`
			*/
			$('.tabel-perkin').append(barisBaru())
		})

		 //ONCHANGE SELECT IK
        $(document).on('change', ".kd_ikk",function(e){
                    let kd_ikk = $(this).closest('tr').find('select').val()
                    let indikator = $(this).closest('tr').find('td.indikator_kinerja_kegiatan')
                    let kk_mendikbud = $(this).closest('tr').find('td.kk_mendikbud')
                    let kk_menkeu = $(this).closest('tr').find('td.kk_menkeu')
                    let tw_1 = $(this).closest('tr').find('td#tw_1')
                    let tw_2 = $(this).closest('tr').find('td#tw_2')
                    let tw_3 = $(this).closest('tr').find('td#tw_3')
                    let tw_4 = $(this).closest('tr').find('td#tw_4')
                    let bobot = $(this).closest('tr').find('td.bobot')
                    let jumlah_bobot = $(this).closest('tr').find('td.jumlah_bobot')
                     $.ajax({
                           type:'GET',
                           url:"{{ route('verPerkin.get') }}",
                           data:{
                             "_token": "{{ csrf_token() }}",
                            kd_ikk,
                            },
                           success:function(data){
                            console.log(data[0][0])
							if(data[0][0] == null){
								indikator.text('')
	                            kk_mendikbud.text('')
	                            kk_menkeu.text('')
	                            satuan.text('')
	                            bobot.text('')
							}
							indikator.text(data[0][0].indikator_kinerja_kegiatan)
                            kk_mendikbud.text(data[0][0].kk_mendikbud)
                            kk_menkeu.text(data[0][0].kk_menkeu)
                            tw_1.text(data[0][0].tw_1)
                            tw_2.text(data[0][0].tw_2)
                            tw_3.text(data[0][0].tw_3)
                            tw_4.text(data[0][0].tw_4)
                            bobot.text(data[0][0].bobot)
                            jumlah_bobot.text(data[0][0].jumlah_bobot)
                           }
                        });
                 })



 }); //akhir dari document ready 🤗
</script>