<script type="text/javascript">
	$(document).ready(function() {
		$('.tabel-rabper ').DataTable({
			"ordering" : false
		});
		// Saat tombol simpan di tekan
        $(document).on('click', ".save_btn",function(e){
			//Mengambil konten / isi dari setiap cell tabel
			let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
	
			// let torFORM 					= $(this).closest('tr').find('#torFORM')
			let id 							= setiapBaris[0]
			let rincian_kegiatan			= setiapBaris[1]
			let rincian_komponen			= setiapBaris[2]
			let akun						= setiapBaris[3]
			let kebutuhan_kegiatan			= setiapBaris[4]
			let jenis_belanja				= setiapBaris[5]
			let merk						= setiapBaris[6]
			let type						= setiapBaris[7]
			let status_produk				= setiapBaris[9]
			let berkefungsian				= setiapBaris[10]
			let kuantitas					= setiapBaris[11]
			let satuan						= setiapBaris[12]
			let harga_satuan				= setiapBaris[13]
			let jumlah_biaya				= setiapBaris[14]
		    // -- E-CATALOG
			let form_catalog 				= $(this).closest('tr').find('#form_catalog')
            let catalog						= form_catalog[0][0].value.replace("C:\\fakepath\\","");
            let label_catalog				= $(this).closest('tr').find('label#LABELcatalog').text()
            // E-CATALOG--

            // Ajax start
            $.ajaxSetup({
				// setup header
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
            type: 'POST',
			url: "{{ route('rabper.pdf')}}",
	        data: new FormData(form_catalog[0]),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                console.log("Loading ... ")
            },
            success: function(data){
               console.log(data)
            },
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
        	}) // Ajax upload --

            $.ajax({
				type:'POST',
				url:"/RabPeralatan/add",
				data:{
					"_token": "{{ csrf_token() }}"
					,id
					,rincian_kegiatan
					,rincian_komponen
					,akun
					,kebutuhan_kegiatan
					,jenis_belanja
					,merk
					,type
					,catalog
					,label_catalog
					,status_produk
					,berkefungsian
					,kuantitas
					,satuan
					,harga_satuan
					,jumlah_biaya			
				},
				success:function(data){
					console.log(data)
				},
				error: function (request, status, error) {
					Swal.fire({
						icon: 'error',
						title: 'Mohon mengisi semua kolom'
					})
					console.log(error)
				}
			})  // Akhir ajax insert data
  		}) // end on click tombol simpan
		$( document ).on('change', '#file_catalog', function(e){
			// ====> file dokumen file catalog
            let labelimb 	 			= $(this).closest('tr').find('span#catalog_name')
			let form_catalog			= $(this).closest('tr').find('#form_catalog')
            let catalog		    		= form_catalog[0][0].value.replace("C:\\fakepath\\","");

			labelimb.text(catalog)
		})

		$(document).on('click', ".del_btn", function(e){
			let setiapBaris  =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
			var baris 		 = $(this).closest('tr')
			let labelcatalog = $(this).closest('tr').find('label#LABELcatalog').text()
			let id = setiapBaris[0]

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
						url:" {{ route('rabper.del') }} ",
						data:{
						 "_token": "{{ csrf_token() }}"
						 ,id
						 ,labelcatalog
						},
						//kalo respon dari server sukses :
						success:function(data){
							console.log(data)
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
			}) // Sweetalert --
		}) // Delete button --

		$( document ).on('click', "#btn_addRow", function(e){
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-rangka`
			*/
			$('.tabel-rabper').append(' <tr><td> </td>   <td contenteditable="true"> </td><td contenteditable="true"></td><td contenteditable="true"> </td><td contenteditable="true"> </td><td contenteditable="true"> </td><td contenteditable="true"> </td><td contenteditable="true"></td><td contenteditable="true"><form id="form_catalog" enctype="multipart/form-data"><input type="file" name="file_catalog" id="file_catalog"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="catalog_name"></span></div><label id="LABELcatalog">  </label> </td><td contenteditable="true"></td><td contenteditable="true"> </td><td contenteditable="true"> </td><td contenteditable="true"> </td><td contenteditable="true"></td><td contenteditable="true"> </td> <td><div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="copy_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div></td></tr>')
		})

			// Saat tombol tambah baris below ditekan
			$(document).on('click', '.add_btn', function(e){
		    let baris = $(this).closest('tr').clone();
		    $.each(baris.find('td'), function(i1,v1){
		    	$(this).html('');
		    	// Mengkosongkan baris awal (Karena baris awal diisi oleh ID)
		    	if( $( this ).is(':nth-child(9)')) {
		    		$( this ).html('<form id="form_catalog" enctype="multipart/form-data"><input type="file" name="file_catalog" id="file_catalog"> </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="catalog_name"></span></div><label id="LABELcatalog">  </label>')
		    	}
		    	if ($(this).is(':last-child')) {
		       		$(this).html('<div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span></div><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div> ');
		       	}
		    });
		    //Append data ke bawah baris terdekat
		    $(this).closest('tr').after(baris);
		})// End add row below button
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
				if( $( this ).is(':nth-child(9)')) {
		    		$( this ).html('<form id="form_catalog" enctype="multipart/form-data"><input type="file" name="file_catalog" id="file_catalog"> </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="catalog_name"></span></div><label id="LABELcatalog">  </label>')
		    	}
		    	if ($(this).is(':last-child')) {
		       		$(this).html('<div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span></div><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div> ');
		       	}
		    	
		    });
		    //Append data ke bawah baris terdekat
		    $(this).closest('tr').after(baris);
		})// End copy-btn 
 }); //akhir dari document ready 🤗
</script>