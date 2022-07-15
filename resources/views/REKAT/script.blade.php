<script type="text/javascript">
	$(document).ready(function() {
		
		$(".kotak-pdf").hide()	
		$('.tabel-rekat').DataTable({})

		// Lanjut rab ?
		$( document ).on('click', '.btn_lanjut_rab', function(e){
			let akunSPAN = $(this).closest('tr').find('span.akunSPAN').text()
			 	$.ajax({
					type:'post',
					url:" {{ route('rekat.lanjutRab') }} ",
					data:{
					"_token": "{{ csrf_token() }}"
					,akunSPAN
					},
					//kalo respon dari server sukses :
					success:function(data){
						let anchor = document.createElement('a');
						anchor.href = data;
						anchor.target="_blank";
						anchor.click();
						// window.location.href = data
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
		})

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
						url:" {{ route('rekat.del') }} ",
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
							  title: 'GALAT',
							  text: status + ' | ' + error,
							})
						}
		            }) // End ajax 
				  }
			}) // End of sweetalert2
		}) // End del_btn on-click
		
		// Saat tombol add row below ditekan
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
		})// End add row below button

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
    		let data ='';
    			return data;
			};
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-ikk`
			*/
			$('.tabel-rekat').append(barisBaru())
		})
		
		//OnChange select kode IKK
       	$(document).on('change', ".kd_ikk",function(e){
			let kd_ikk = $(this).closest('tr').find('select.kd_ikk').val()
			let kd_ikkSPAN = $(this).closest('tr').find('span.kd_ikkSPAN')
			let indikator = $(this).closest('tr').find('td.indikator_kinerja_kegiatan')
			let kd_program = $(this).closest('tr').find('select.kd_program')
			let program = $(this).closest('tr').find('td.program')
			let kd_kegiatan = $(this).closest('tr').find('select.kd_kegiatan')
			let kegiatan = $(this).closest('tr').find('td.kegiatan')

			if(kd_ikk == "SILAHKAN PILIH"){
				kd_kegiatan.empty()
				let option = new Option("Pilih", "-"); kd_kegiatan.append($(option));
			}
			$.ajax({
				type:'GET',
				url:"{{ route('rekat.get') }}",
				data:{
					"_token": "{{ csrf_token() }}",
					kd_ikk,
				},
                // On Succes request
                success:function(data){
					console.log(data)
					if( data[0][0] == null ) {
						kd_program.empty();
						let option = new Option("Pilih", "-"); kd_program.append($(option));
					}
					// Mengosongkan/mereset td `indikator`, `program` & `kegiatan`
					indikator.text('')
					program.text('');
					kegiatan.text('')
					// Td `indikator kinerja kegiatan` menjadi teks dari server
					kd_ikkSPAN.text(kd_ikk)
					indikator.text(data[0][0].indikator_kinerja_kegiatan)
					// Mengosongkan/mereset dropdown kode program
					kd_program.empty();
					// Menambah option berupa `Pilih` ke dropdown kode program
					let option = new Option("Pilih", "-"); kd_program.append($(option));
					// Looping data kedalam dropdown kode program
					for(let i = 0;i< data.length;i++){
						let option = new Option(data[1][i].kd_pr, data[1][i].kd_pr);
						kd_program.append(option)
	                }
               	} // End onsuccess     
            }) // End ajax
        }) // End OnChange kode ikk
		 
		// OnChange select kode program
		$(document).on('change', ".kd_program",function(e){
			let kd_program = $(this).closest('tr').find('select.kd_program').val()
			let program = $(this).closest('tr').find('td.program')
			let kd_programSPAN = $(this).closest('tr').find('span.kd_programSPAN')
			// let kd_kegiatan = $(this).closest('tr').find('select.kd_kegiatan')
			let kd_kegiatan = $(this).closest('tr').find('.list')
            console.log(kd_kegiatan)
            $.ajax({
				type:'GET',
				url:"{{ route('rekat.getProg') }}",
				data:{
					"_token": "{{ csrf_token() }}",
					kd_program,
				},
				success:function(data){
					console.log(data[0])
					if(kd_program == "Pilih"){
						console.log(kd_program)
					}
					// Mengosongkan/mereset td `program` & `kegiatan`
					program.text('')
					// Td `program` menjadi teks dari server
					kd_programSPAN.text(kd_program)
					program.text(data[1][0].program)
					// Mengosongkan/mereset dropdown kode kegiatan			
					kd_kegiatan.empty();
					// Menambah option berupa `Pilih` ke dropdown kode kegiatan
					// let option = new Option("Pilih", "-"); kd_kegiatan.append($(option));
					for(let i = 0;i< data[0].length;i++){
						kd_kegiatan.append('<li id="kegiatan"><a href="javascript:void(0)">'+ data[0][i].rincian_kegiatan +'</a></li>')
						// let option = new Option(data[0][i].rincian_kegiatan, data[0][i].kd_keg);
						// kd_kegiatan.append(option)
					}
                } // End onsuccess     
            }); // End ajax
        })// end OnChange kode program

  		//	on click list kegiatan
	$(document).on('click',"#kegiatan", function(e){
		let rincian_kegiatan = $(this)[0].innerText
		let kd_kegiatan = $(this).closest('tr').find('span.kd_kegiatanSPAN')
		let rincian_kegiatan_text = $(this).closest('tr').find('span.rincian_kegiatanSPAN')
		console.log(kd_kegiatan)
		console.log(rincian_kegiatan_text[0].innerText)
		rincian_kegiatan_text.text(rincian_kegiatan)
		 $.ajax({
				type:'GET',
				url:"{{ route('rekat.getKodeKegiatan') }}",
				data:{
					"_token": "{{ csrf_token() }}",
					rincian_kegiatan,
                },
				success:function(data){
					console.log(data[0].kd_keg)	
					kd_kegiatan.text(data[0].kd_keg)
				
								
                } // End ON succes  
			}); // END ajax
	})

		//preview
		$(".hapus").click(function(){
			let kotakPDF = $(this).closest('tr').find('.kotak-pdf').val()
			kotakPDF.hide()
			console.log('hapus')
		})

		//download file pdf
		$(".download").click(function(){
        	var filename = $('#fileInput').val();

        	if (filename == "" || filename == null) {
            	alert('Error');
        	}else {
            var file = document.getElementById('fileInput').files[0];      
            var filename = document.getElementById('fileInput').files[0].name;      
            var blob = new Blob([file]);
            var url  = URL.createObjectURL(blob);

            $(this).attr({ 'download': filename, 'href': url});  
            filename = "";
        }
    })   

	//	on click list komponen
	$(document).on('click',"#komponen", function(e){
		let akun = $(this).closest('tr').find('select.akun')  
		let sub_komponen = $(this)[0].innerText
		let sub_komponen_text = $(this).closest('tr').find('span.sub_komponenSPAN')
		sub_komponen_text.text(sub_komponen)
		$.ajax({
				type:'GET',
				url:"{{ route('rekat.getAkun') }}",
				data:{
					"_token": "{{ csrf_token() }}",
					sub_komponen,
                },
				success:function(data){
					console.log(data[0])
					// Mengosongkan/mereset dropdown kode akun
					akun.empty();
					// Menambah option berupa `Pilih` ke dropdown kode kegiatan
					let option = new Option("Pilih", "-"); akun.append($(option));
					// Looping data ke dropdown akun
					for(let i = 0;i< data[0].length;i++){
						let option = new Option(data[0][i].kd_ak, data[0][i].kd_ak);
						akun.append(option)
					} // ~~ End looping
								
                } // End ON succes  
			}); // END ajax
	})
	$(document).on('change', '.akun', function(e){
		let akun = $(this).closest('tr').find('.akun').val()
		let akunSPAN = $(this).closest('tr').find('span.akunSPAN')
		akunSPAN.text(akun)
	})
		// On change select file
		$('#fileInput').on("change", function(e){
			let form = $(this).closest('tr').find('#torFORM')
			console.log(form[0][0].value)
		});

       	// Saat tombol simpan di tekan
        $(document).on('click', ".save_btn",function(e){
			//Mengambil konten / isi dari setiap cell tabel
			let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
			/*Mendefinisikan variabel menggunakan `let`
			variabel - variabel dibawah berbentuk array.
			*/

			let kd_ikkSPAN					= $(this).closest('tr').find('span.kd_ikkSPAN').text()
			let kd_programSPAN				= $(this).closest('tr').find('span.kd_programSPAN').text()
			let kd_kegiatanSPAN				= $(this).closest('tr').find('span.kd_kegiatanSPAN').text()
			let rincian_kegiatanSPAN		= $(this).closest('tr').find('span.rincian_kegiatanSPAN').text()
			let sub_komponenSPAN		    = $(this).closest('tr').find('span.sub_komponenSPAN').text()
			let akunSPAN					= $(this).closest('tr').find('span.akunSPAN').text()
			let torFORM 					= $(this).closest('tr').find('#torFORM')
			let id 							= setiapBaris[0]
			let kd_ikk 					    = $(this).closest('tr').find('select.kd_ikk').val()
			let indikator_kinerja_kegiatan  = setiapBaris[2]
			let kd_program 					= $(this).closest('tr').find('select.kd_program').val()
			let program 					= setiapBaris[4]
			let kd_keg 						= $(this).closest('tr').find('select.kd_kegiatan').val()
			let rincian_kegiatan 			= setiapBaris[6]
			let tor 						= torFORM[0][0].value.replace("C:\\fakepath\\","");
			let rincian_komponen			= $(this).closest('tr').find('span.sub_komponenSPAN')[0].innerText
			
            // Ajax start
            $.ajaxSetup({
				// setup header
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
            // Ajax untuk upload pdf
            $.ajax({
				type: 'POST',
				url: "{{ route('rekat.insertPDF')}}",
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
					 // if(resp == 'ok'){
					 //     $('#uploadForm')[0].reset();
					 //     $('#uploadStatus').html('<p style="color:#28A74B;">File berhasil diupload!</p>');
					 // }else if(resp == 'err'){
					 //     $('#uploadStatus').html('<p style="color:#EA4335;">Silakan pilih file yang valid untuk diupload.</p>');
					 // }
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
            // Validasi 
           $.ajax({
						type:'POST',
						url:"{{ route('rekat.add') }}",
						data:{
							"_token": "{{ csrf_token() }}"
							,id
							,kd_ikkSPAN
							,kd_programSPAN
							,kd_kegiatanSPAN
							,rincian_kegiatanSPAN
							,sub_komponenSPAN
							,akunSPAN
							,kd_ikk
							,indikator_kinerja_kegiatan
							,kd_program
							,program			
							,kd_keg
							,rincian_kegiatan
							,tor
							,rincian_komponen
					    },
					    // on success :
						success:function(data){
							// Swal.fire({
							//       title: data,
							//       confirmButtonText: 'OK',
							//     }).then((result) => {
							//       if (result.isConfirmed) {
							//         location.reload()
							//       }
							//     })
		                    console.log(data)
						},
						// on error :
						error: function (request, status, error) {
							Swal.fire({
								icon: 'error',
								title: 'Mohon mengisi semua kolom'
							})
							console.log(error)
						}
					})  // Akhir ajax insert data
           
  		}) // end on click tombol simpan

       	// Fungsi untuk membuat data data berbentuk tr td dari sebuah tabel html
		$(document).on('click', "#btn_addRow", function(e){
			const barisBaru = () => {
    			let data ='<tr> <td></td> <td class=""><select name="kd_ikk" type="text" class="kd_ikk bg-dark my-2 text-white d-inline form-control w-auto required"> <option value="SILAHKAN PILIH" selected="selected">Pilih</option> @foreach ($ikk as $dataIKK)<option value="{{ $dataIKK->kd_ikk }}">{{ $dataIKK->kd_ikk }}</option>@endforeach</select><span class="d-block kd_ikkSPAN"></span></td><td class="indikator_kinerja_kegiatan"> </td><td ><select name="kd_program" type="text" class="kd_program bg-dark my-2 text-white d-inline form-control w-auto required"><option value="SILAHKAN PILIH" selected="selected">Pilih</option></select><span class="d-block kd_programSPAN"> </span></td><td class="program"></td><td><span class="d-block kd_kegiatanSPAN">  </span> </td><td class="kd_kegiatan"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="btn-group mt-2 mb-2"><button type="button" class="px-1 py-1 btn btn-github btn-pill dropdown-toggle" data-bs-toggle="dropdown"> <span class="caret"></span></button><ul class="dropdown-menu list" role="menu"><li class="dropdown-plus-title">Pilih<b class="fa fa-angle-up" aria-hidden="true"></b></li></ul></div></div></div><span class="rincian_kegiatanSPAN">  </span> </td><td><form id="torFORM" enctype="multipart/form-data"><input type="file" name="file" class="fu" id="fileInput"></form></td><td class="sk">      <div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="btn-group mt-2 mb-2"><button type="button" class="px-1 py-1 btn btn-github btn-pill dropdown-toggle" data-bs-toggle="dropdown"> <span class="caret"></span></button> <ul class="dropdown-menu  komponen" role="menu"><li class="dropdown-plus-title">Pilih<b class="fa fa-angle-up" aria-hidden="true"></b></li> @foreach ($rk as $komponen)<li id="komponen"><a href="javascript:void(0)">{{ $komponen->nama_sk }}</a></li>@endforeach</ul></div></div></div><span class="sub_komponenSPAN"></span> </td><td ><select name="akun" type="text" class="akun bg-dark text-white d-inline form-control w-auto required"><option value="SILAHKAN PILIH" selected="selected">Pilih</option></select> <span class="akunSPAN"></span> </td><td> <div class="btn-group"> <span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span> <span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="copy_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span> <span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span> </div><button type="button" class="btn btn-pink btn-block mt-2 btn-sm"><span class="text-black">Lanjutkan ke RAB</span></button></td></tr>';
    			return data;
			};
			$(".kotak-pdf").hide()	
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-rangka`
			*/
			$('.tabel-rekat').append(barisBaru())
		})

 }); //akhir dari document ready 🤗
</script>