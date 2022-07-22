<script type="text/javascript">
// Disarankan ngoding sambil mendengar lagu watashi psikopat ~ 🎵Unravel ♫
	$(document).ready(function() {
		$('.tabel-rabkeg ').DataTable({
			"ordering" : false
		});
	
	$( document ).on('click', '.save_btn', function(e){
		//Mengambil konten / isi dari setiap cell tabel
        let setiapBaris 		=  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
        let id 	= setiapBaris[0]
        let rincian_kegiatan 	= setiapBaris[1]
        let rincian_komponen 	= setiapBaris[2]
        let akun 				= setiapBaris[3]
        let kebutuhan_kegiatan	= setiapBaris[4]
        let jenis_belanja	    = setiapBaris[5]
        let kuantitas			= setiapBaris[6]
        let satuan_kuantitas    = setiapBaris[7]
        let durasi    			= setiapBaris[8]
        let satuan_durasi  		= setiapBaris[9]
        let kegiatan    		= setiapBaris[10]
        let satuan_kegiatan    	= setiapBaris[11]
        let biaya_satuan	    = setiapBaris[12]
        let pajak		        = setiapBaris[13]
        let jumlah_biaya        = setiapBaris[14]
        let PNBP_UNIKER         = setiapBaris[15]
        let PNBP_UNIV           = setiapBaris[16]
        let torFORM 			= $(this).closest('tr').find('#TorForm')
		let tor 				= torFORM[0][0].value.replace("C:\\fakepath\\","");
		let labeltor			= $(this).closest('tr').find('label#torlabel').text()

		$.ajaxSetup({
			// setup header
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

        $.ajax({
            type: 'POST',
			url: "{{ route('rabkeg.pdf')}}",
	        data: new FormData(torFORM[0]),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                console.log("Loading ... ")
            },
            // ON SUCCESS :
            success: function(data){
               console.log(data)
            },
            // ON ERROR :
            error: function (request, status, error) {
                if( error == 'Content Too Large' ){
                    Swal.fire({
                        icon: 'error',
				        title: "Ukuran file terlalu besar!. Tidak lebih dari 300Kb"
                    })
                }
                console.log(error)
                return false;
            }
        }) // END Ajax pdf upload
		$.ajax({
			type:'POST',
			url:" {{ route('rabkeg.add') }} ",
			data:{
			"_token": "{{ csrf_token() }}"
			,id
			,rincian_kegiatan
			,rincian_komponen
			,akun
			,kebutuhan_kegiatan
			,jenis_belanja
			,kuantitas
			,satuan_kuantitas
			,durasi
			,satuan_durasi
			,kegiatan
			,satuan_kegiatan
			,biaya_satuan
			,pajak
			,jumlah_biaya
			,PNBP_UNIKER
			,PNBP_UNIV
			,tor
			,labeltor
	        },
			//kalo respon dari server sukses :
			success:function(data){
				console.log(data)
				// error handler 
				if(data[0].msg == "Mohon mengisi semua kolom"){
					Swal.fire({
					  position: 'top-end',
					  title: data[0].msg,
					  showConfirmButton: false,
					  timer: 1500
					})
				}
			// Swal.fire({
					//   position: 'top-end',
					//   title: "SUKSES MENYIMPAN DATA",
					//   showConfirmButton: false,
					//   timer: 2000
					// })
     				// window.location.reload()        
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
	}) // akhir save
		
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
						url:" {{ route('rabkeg.del') }} ",
						data:{
						 "_token": "{{ csrf_token() }}"
						 ,id
						},
						//kalo respon dari server sukses :
						success:function(data){
							console.log(data)
							Swal.fire('BERHASIL MENGHAPUS DATA TERSEBUT')
							baris.remove()
						},
		                //kalo respon dari server error :
		                error: function (request, status, error) {
		                	Swal.fire({
							  icon: 'error',
							  title: 'GALAT',
							  text: status + ' | ' + error,
							})
						}
		            }) // End ajax 
				  }
			}) // End of sweetalert2
		}) // End del_btn on-click

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
		      	if( $( this ).is(':nth-child(18)')) {
		    		$( this ).html(' <form id="TorForm"><input type="file" name="file" class="file" id="file"></form>')
		    	}
		    	if ($(this).is(':last-child')) {
		       		$(this).html('<div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span></div><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div> ');
		       	}
		    	
		    });
		    //Append data ke bawah baris terdekat
		    $(this).closest('tr').after(baris);
		})// End copy-btn 

		// Fungsi untuk membuat data data berbentuk tr td dari sebuah tabel html
		$( document ).on('click', "#btn_addRow", function(e){
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-rangka`
			*/
			$('.tabel-rabkeg').append(' <tr><td> </td> <td contenteditable="true"> </td> <td contenteditable="true"> </td> <td contenteditable="true"> </td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td> <td> <form id="TorForm"><input type="file" name="file" class="file" id="file"></form></td> <td><div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="copy_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div></td></tr>')
		})

		// Saat tombol tambah baris below ditekan
		$(document).on('click', '.add_btn', function(e){
		    let baris = $(this).closest('tr').clone();
		    $.each(baris.find('td'), function(i1,v1){
		    	$(this).html('');
		    	// Mengkosongkan baris awal (Karena baris awal diisi oleh ID)
		    	if( $( this ).is(':nth-child(18)')) {
		    		$( this ).html(' <form id="TorForm"><input type="file" name="file" class="file" id="file"></form>')
		    	}
		    	if ($(this).is(':last-child')) {
		       		$(this).html('<div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span></div><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div> ');
		       	}
		    });
		    //Append data ke bawah baris terdekat
		    $(this).closest('tr').after(baris);
		})// End add row below button

		

 }); //akhir dari document ready 🤗
</script>