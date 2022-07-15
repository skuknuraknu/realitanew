<script type="text/javascript">
	$( document ).ready(function() {
		let tabel = $('.tabel-kkm').DataTable({
			 "ordering": false
		});
		//Saat tombol save di klik
    	$(document).on('click', ".save_btn", function(e){
    		//Mengambil konten / isi dari setiap cell tabel
            let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
            	/*Mendefinisikan variabel menggunakan `let`
            	variabel - variabel dibawah berbentuk array.
				*/
				let id 							= setiapBaris[0]
        		let kd_ikk 						= $(this).closest('tr').find('select.kd_ikk').val()
        		let indikator_kinerja_kegiatan  = setiapBaris[2] 
        		let kk_mendikbud 				= setiapBaris[3]   
        		let kk_menkeu 					= setiapBaris[4]  
        		let satuan 						= setiapBaris[5] 
        		let bobot 						= setiapBaris[6]
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
		            url:" {{ route('kkm.add') }} ",
		            //Data dibawah asalnya dimulai dari baris 12 di atas
	                data:{
	                	/* Untuk routing post, harus pakai csrf token
	                	baca lebih lanjut `https://medium.com/dotlocal/belajar-laravel-chapter-13-tutorial-csrf-protection-8ce2f82c4ce`
	                	*/
		                "_token": "{{ csrf_token() }}"
		                ,id
		                ,kd_ikk
        				,indikator_kinerja_kegiatan 
        				,kk_mendikbud
        				,kk_menkeu
        				,satuan	 
        				,bobot
	                },
	                //kalo respon dari server sukses :
                    success:function(data){
					Swal.fire({
					  position: 'top-end',
					  title: data,
					  showConfirmButton: false,
					  timer: 2000
					})
                    window.location.reload()        
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
						url:" {{ route('kkm.del') }} ",
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
		    	if($(this).is(':nth-child(2)')){
		    		$(this).html('<select name="kd_ikk" type="text" class="kd_ikk bg-dark text-white d-inline form-control w-auto required"><option value="SILAHKAN PILIH" selected="true">Pilih</option> @foreach ($ikk as $dataIKK) <option value="{{ $dataIKK->kd_ikk }}">{{ $dataIKK->kd_ikk }}</option>@endforeach</select>')
		    	}
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
    			let data ='<tr> <td></td> <td><select name="kd_ikk" type="text" class="kd_ikk bg-dark text-white d-inline form-control w-auto required"><option value="SILAHKAN PILIH" selected="true">Pilih</option>@foreach ($ikk as $dataIKK)<option value="{{ $dataIKK->kd_ikk }}">{{ $dataIKK->kd_ikk }}</option>@endforeach</select></td>  <td class="indikator_kinerja_kegiatan" contenteditable="false"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td><td><div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span> </div></td></tr>';
    			return data;
			};
			/* Append data baris ke kolom yg paling bawah
			Yaitu tabel dengan id `tabel-ikk`
			*/
			$('.tabel-kkm').append(barisBaru())
		})

		 //ONCHANGE SELECT IK
        let option = new Option("Pilih", "-"); $('.kode_prog').append($(option));
        $(document).on('change', ".kd_ikk",function(e){
                    let kd_ikk = $(this).closest('tr').find('select').val()
                    let indikator = $(this).closest('tr').find('td.indikator_kinerja_kegiatan')
                     $.ajax({
                           type:'GET',
                           url:"{{ route('kkm.get') }}",
                           data:{
                             "_token": "{{ csrf_token() }}",
                            kd_ikk,
                            },
                           success:function(data){
                            console.log(data[0][0])
                            indikator.text(data[0][0].indikator_kinerja_kegiatan)
                            
                           }
                        });
                 })






 }); //akhir dari document ready 🤗
</script>