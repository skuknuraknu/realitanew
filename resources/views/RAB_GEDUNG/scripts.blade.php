<script type="text/javascript">
        $(document).ready(function() {
            $('.tabel-rabgdg ').DataTable({
                "ordering" : false
        });
		
        $( document ).on('click', '.save_btn', function(e){
			const insertDoc = ( route, formdata, filename ) => {
			$.ajax({
				type: 'POST',
				url: route,
				data: new FormData(formdata),
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
       			 }) // Ajax sertifikat upload --
			}
            let setiapBaris 	   =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
            let id 				   = setiapBaris[0]
			let rincian_kegiatan   = setiapBaris[1]
			let rincian_komponen   = setiapBaris[2]
			let akun			   = setiapBaris[3]
			let kebutuhan_kegiatan = setiapBaris[4]
			let jenis_belanja      = setiapBaris[5]
			let alamat_gedung      = setiapBaris[6]
			let latlong            = setiapBaris[7]
			let luas_bangunan      = setiapBaris[8]
			let jumlah_gedung      = setiapBaris[9]
			let jumlah_lantai      = setiapBaris[10]
			let ruang_kuliah       = setiapBaris[11]
			let ruang_lab          = setiapBaris[12]
			let ruang_kantor       = setiapBaris[13]
			let lainnya	           = setiapBaris[14]
			let kesesuaian_gedung  = setiapBaris[15]
			let ded_awal           = setiapBaris[22]
			let ded_review         = setiapBaris[23]
			let nilai_perencanaan  = setiapBaris[24]
			let nilai_struktur     = setiapBaris[25]
			let nilai_me           = setiapBaris[26]
			let nilai_landscape    = setiapBaris[27]
			let nilai_pengawasan   = setiapBaris[28]
			let jumlah_nilai       = setiapBaris[32]
            // -- SERTIFIKAT
            let form_sertif 			= $(this).closest('tr').find('#form_sertifikat')
            let sertifikat				= form_sertif[0][0].value.replace("C:\\fakepath\\","");
            let label_sertifikat		= $(this).closest('tr').find('label#LABELsertif').text()
            // SERTIFIKAT --
            // -- SIMAK BMN
            let form_bmn 				= $(this).closest('tr').find('#form_bmn')
            let simak_bmn				= form_bmn[0][0].value.replace("C:\\fakepath\\","");
            let label_bmn				= $(this).closest('tr').find('label#LABELbmn').text()
            // SIMAK BMN --
            // -- PUPR
            let form_pupr 				= $(this).closest('tr').find('#form_pupr')
            let pupr        			= form_pupr[0][0].value.replace("C:\\fakepath\\","");
            let label_pupr				= $(this).closest('tr').find('label#LABELpupr').text()
            // PUPR --
            // -- DOKUMEN IMB
            let form_imb 				= $(this).closest('tr').find('#form_imb')
            let imb     				= form_imb[0][0].value.replace("C:\\fakepath\\","");
            let label_imb				= $(this).closest('tr').find('label#LABELimb').text()
            // DOKUMEN IMB --
            // -- DOKUMEN AMDAL
            let form_amdal 				= $(this).closest('tr').find('#form_amdal')
            let amdal       				= form_amdal[0][0].value.replace("C:\\fakepath\\","");
            let label_amdal				= $(this).closest('tr').find('label#LABELamdal').text()
            // DOKUMEN AMDAL --
            // -- DOKUMEN RKS
            let form_rks 				= $(this).closest('tr').find('#form_rks')
            let rks     				= form_rks[0][0].value.replace("C:\\fakepath\\","");
            let label_rks				= $(this).closest('tr').find('label#LABELrks').text()
            // DOKUMEN RKS --
            // -- DOKUMEN PROPOSAL PROJECT
            let form_proposal 				= $(this).closest('tr').find('#form_proposal')
            let proposal        			= form_proposal[0][0].value.replace("C:\\fakepath\\","");
            let label_proposal				= $(this).closest('tr').find('label#LABELproposal').text()
            // DOKUMEN PROPOSAL PROJECT --
            // -- DOKUMEN RAB
            let form_rab 				= $(this).closest('tr').find('#form_rab')
            let rab     				= form_rab[0][0].value.replace("C:\\fakepath\\","");
            let label_rab				= $(this).closest('tr').find('label#LABELrab').text()
            // DOKUMEN RAB --
            // -- DOKUMEN PERENCANAAN GAMBAR
            let form_perencanaan 		= $(this).closest('tr').find('#form_perencanaan')
            let perencanaan     		= form_perencanaan[0][0].value.replace("C:\\fakepath\\","");
            let label_perencanaan		= $(this).closest('tr').find('label#LABELperencanaan').text()
            // DOKUMEN PERENCANAAN GAMBAR --
          
            $.ajaxSetup({
                // setup header
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            insertDoc('{{ route('rabgdg.sertifikat') }}', form_sertif[0])
            insertDoc('{{ route('rabgdg.upload_bmn') }}', form_bmn[0])
            insertDoc('{{ route('rabgdg.pupr') }}', form_pupr[0])
            insertDoc('{{ route('rabgdg.imb') }}', form_imb[0])
            insertDoc('{{ route('rabgdg.amdal') }}', form_amdal[0])
            insertDoc('{{ route('rabgdg.rks') }}', form_rks[0])
            insertDoc('{{ route('rabgdg.proposal') }}', form_proposal[0])
            insertDoc('{{ route('rabgdg.rab') }}', form_rab[0])
            insertDoc('{{ route('rabgdg.perencanaan') }}', form_perencanaan[0])
    
            $.ajax({
                type:'POST',
                url:" {{ route('rabgdg.add') }} ",
                data:{
                    "_token": "{{ csrf_token() }}"
                    ,id
                    ,rincian_kegiatan
                    ,rincian_komponen
                    ,akun
                    ,kebutuhan_kegiatan
                    ,jenis_belanja
                    ,alamat_gedung
                    ,latlong
                    ,luas_bangunan
                    ,jumlah_gedung
                    ,jumlah_lantai
                    ,ruang_kuliah
                    ,ruang_lab
                    ,ruang_kantor
                    ,lainnya
                    ,kesesuaian_gedung
                    ,ded_awal
                    ,ded_review
                    ,nilai_perencanaan
                    ,nilai_struktur
                    ,nilai_me
                    ,nilai_landscape
                    ,nilai_pengawasan
                    ,jumlah_nilai
                    ,sertifikat
                    ,label_sertifikat
                    ,simak_bmn
                    ,label_bmn
                    ,pupr
                    ,label_pupr
                    ,imb
                    ,label_imb
                    ,amdal
                    ,label_amdal
                    ,rks
                    ,label_rks
                    ,proposal
                    ,label_proposal
                    ,rab
                    ,label_rab
                    ,perencanaan
                    ,label_perencanaan
                },
                success:function(data){
                    console.log(data)
                // Swal.fire({
                        //   position: 'top-end',
                        //   title: "SUKSES MENYIMPAN DATA",
                        //   showConfirmButton: false,
                        //   timer: 2000
                        // })
                         // window.location.reload()        
                },
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
         // -- Copy btn
	$(document).on('click',".copy_btn", function(e){
		let baris = $(this).closest('tr').clone();
		$.each(baris.find('td'), function(i1,v1){
		    if ($(this).is(':first-child')) {
		       	$(this).html('');
		    }
		    if( $( this ).is(':nth-child(17)')) {
		    	$( this ).html('<form id="form_sertifikat" enctype="multipart/form-data"><input type="file" name="fileSertifikat" id="fileSertifikat"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="sertif_name"></span></div><label id="LABELsertif"> </label>')
		    }
		    if( $( this ).is(':nth-child(18)')) {
		    	$( this ).html(' <form id="form_bmn" enctype="multipart/form-data"><input type="file" name="file_bmn" id="file_bmn"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="bmn_name"></span></div><label id="LABELbmn"></label>')
		    }
		    if( $( this ).is(':nth-child(19)')) {
		    	$( this ).html(' <form id="form_pupr" enctype="multipart/form-data"><input type="file" name="file_pupr" id="file_pupr"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="pupr_name"></span></div><label id="LABELpupr"></label>')
		    }
		    if( $( this ).is(':nth-child(20)')) {
		    	$( this ).html('<form id="form_imb" enctype="multipart/form-data"><input type="file" name="file_imb" id="file_imb"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="imb_name"></span></div><label id="LABELimb"></label>')
		    }
		    if( $( this ).is(':nth-child(20)')) {
		    	$( this ).html('<form id="form_imb" enctype="multipart/form-data"><input type="file" name="file_imb" id="file_imb"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="imb_name"></span></div><label id="LABELimb"></label>')
		    }
		    if( $( this ).is(':nth-child(21)')) {
		    	$( this ).html('<form id="form_amdal" enctype="multipart/form-data"><input type="file" name="file_amdal" id="file_amdal"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="amdla_name"></span></div><label id="LABELamdal"> </label>')
		    }
		    if( $( this ).is(':nth-child(22)')) {
		    	$( this ).html('<form id="form_rks" enctype="multipart/form-data"><input type="file" name="file_rks" id="file_rks"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="rks_name"></span></div><label id="LABELrks"></label>')
		    }
		    if( $( this ).is(':nth-child(30)')) {
		    	$( this ).html('<form id="form_proposal" enctype="multipart/form-data"><input type="file" name="file_proposal" id="file_proposal"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="proposal_name"></span></div><label id="LABELproposal"> </label>')
		    }
		    if( $( this ).is(':nth-child(31)')) {
		    	$( this ).html(' <form id="form_rab" enctype="multipart/form-data"><input type="file" name="file_rab" id="file_rab"> </form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="rab_name"></span></div><label id="LABELrab"></label><')
		    }
		    if( $( this ).is(':nth-child(32)')) {
		    	$( this ).html('<form id="form_perencanaan" enctype="multipart/form-data"><input type="file" name="file_perencanaan" id="file_perencanaan"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="perencanaan_name"></span></div><label id="LABELperencanaan"></label>')
		    }
		    if ($(this).is(':last-child')) {
		       	$(this).html('<div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="new_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span></div><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div> ');
		    }
		});
		$(this).closest('tr').after(baris);
	})// Copy btn --
        $( document ).on('change', "#fileSertifikat, #file_bmn, #file_pupr, #file_imb, #file_amdal, #file_rks, #file_proposal, #file_rab, #file_perencanaan", function(e){
			
            let labelsertif 			= $(this).closest('tr').find('span#sertif_name')
			let form_sertif 			= $(this).closest('tr').find('#form_sertifikat')
            let sertifikat				= form_sertif[0][0].value.replace("C:\\fakepath\\","");
			// ====> file bmn
            let labelbmn 	 			= $(this).closest('tr').find('span#bmn_name')
			let form_bmn				= $(this).closest('tr').find('#form_bmn')
            let simak_sbmn				= form_bmn[0][0].value.replace("C:\\fakepath\\","");
            // ====> file pupr
            let labelpupr 	 			= $(this).closest('tr').find('span#pupr_name')
			let form_pupr				= $(this).closest('tr').find('#form_pupr')
            let pupr				    = form_pupr[0][0].value.replace("C:\\fakepath\\","");
            // ====> file dokumen imb
            let labelimb 	 			= $(this).closest('tr').find('span#imb_name')
			let form_imb				= $(this).closest('tr').find('#form_imb')
            let imb		    		    = form_imb[0][0].value.replace("C:\\fakepath\\","");
            // ====> file dokumen amdal
            let labelamdal 	 			= $(this).closest('tr').find('span#amdla_name')
			let form_amdal				= $(this).closest('tr').find('#form_amdal')
            let amdal		    		= form_amdal[0][0].value.replace("C:\\fakepath\\","");
            // ====> file dokumen rks
            let labelrks 	 			= $(this).closest('tr').find('span#rks_name')
			let form_rks				= $(this).closest('tr').find('#form_rks')
            let rks		    		    = form_rks[0][0].value.replace("C:\\fakepath\\","");
            // ====> file dokumen proposal
            let labelproposal 	 			= $(this).closest('tr').find('span#proposal_name')
			let form_proposal				= $(this).closest('tr').find('#form_proposal')
            let proposal		    		= form_proposal[0][0].value.replace("C:\\fakepath\\","");
            // ====> file dokumen rab
            let labelrab 	 			= $(this).closest('tr').find('span#rab_name')
			let form_rab				= $(this).closest('tr').find('#form_rab')
            let rab		    		    = form_rab[0][0].value.replace("C:\\fakepath\\","");
            // ====> file dokumen perencanaan
            let labelperencanaan 	 			= $(this).closest('tr').find('span#perencanaan_name')
			let form_perencanaan				= $(this).closest('tr').find('#form_perencanaan')
            let perencanaan		    		    = form_perencanaan[0][0].value.replace("C:\\fakepath\\","");

			labelsertif.text(sertifikat)
			labelbmn.text(simak_sbmn)
            labelpupr.text(pupr)
            labelimb.text(imb)
            labelamdal.text(amdal)
            labelrks.text(rks)
            labelproposal.text(proposal)
            labelrab.text(rab)
            labelperencanaan.text(perencanaan)
			console.log("on change")
    })
    $( document ).on('click', '#btn_addRow', (e) => {
        $('.tabel-gdg').append(' <tr> <td></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td> <form id="form_sertifikat" enctype="multipart/form-data"><input type="file" name="fileSertifikat" id="fileSertifikat"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="sertif_name"></span></div><label id="LABELsertif"></label></td> <td><form id="form_bmn" enctype="multipart/form-data"><input type="file" name="file_bmn" id="file_bmn"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="bmn_name"></span></div><label id="LABELbmn"></label></td> <td><form id="form_pupr" enctype="multipart/form-data"><input type="file" name="file_pupr" id="file_pupr"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="pupr_name"></span></div><label id="LABELpupr"></label></td> <td> <form id="form_imb" enctype="multipart/form-data"><input type="file" name="file_imb" id="file_imb"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="imb_name"></span></div><label id="LABELimb"></label></td> <td><form id="form_amdal" enctype="multipart/form-data"><input type="file" name="file_amdal" id="file_amdal"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="amdla_name"></span></div><label id="LABELamdal"> </label></td> <td><form id="form_rks" enctype="multipart/form-data"><input type="file" name="file_rks" id="file_rks"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="rks_name"></span></div><label id="LABELrks"> </label></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td><form id="form_proposal" enctype="multipart/form-data"><input type="file" name="file_proposal" id="file_proposal"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="proposal_name"></span></div><label id="LABELproposal"></label></td> <td><form id="form_rab" enctype="multipart/form-data"><input type="file" name="file_rab" id="file_rab"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="rab_name"></span></div><label id="LABELrab"> </label></td> <td> <form id="form_perencanaan" enctype="multipart/form-data"><input type="file" name="file_perencanaan" id="file_perencanaan"></form> <div class="wrap-text"><i class="mdi mdi-file-pdf fs-10 p-1"></i><span class="mt-1 fs-8" id="perencanaan_name"></span></div><label id="LABELperencanaan"></label></td> <td contenteditable="true"></td> <td><div class="btn-group"><span class="del_btn"><i role="button" class="bg-danger px-2 mx-1 py-2 fa-solid fe fe-trash-2"></i></span><span class="save_btn"><i role="button" class="bg-info px-2 mx-1 py-2 fa-solid fe fe-check-circle"></i></span><span class="copy_btn"><i role="button" class="bg-success px-2 mx-1 py-2 fa-solid fe fe-copy"></i></span><span class="add_btn"><i role="button" class="bg-warning px-2 mx-1 py-2 fa-solid fe fe-plus"></i></span></div></td></tr>')
    })
	$( document ).on('click', ".del_btn", function(e){
        let setiapBaris =  $(this).closest('tr')[0].innerText.split("\t").slice(0, -1)
        let baris = $(this).closest('tr')   
        let id = setiapBaris[0]
            // -- SERTIFIKAT
            let form_sertif 			= $(this).closest('tr').find('#form_sertifikat')
            let sertifikat				= form_sertif[0][0].value.replace("C:\\fakepath\\","");
            let label_sertifikat		= $(this).closest('tr').find('label#LABELsertif').text()
            // SERTIFIKAT --
            // -- SIMAK BMN
            let form_bmn 				= $(this).closest('tr').find('#form_bmn')
            let simak_bmn				= form_bmn[0][0].value.replace("C:\\fakepath\\","");
            let label_bmn				= $(this).closest('tr').find('label#LABELbmn').text()
            // SIMAK BMN --
            // -- PUPR
            let form_pupr 				= $(this).closest('tr').find('#form_pupr')
            let pupr        			= form_pupr[0][0].value.replace("C:\\fakepath\\","");
            let label_pupr				= $(this).closest('tr').find('label#LABELpupr').text()
            // PUPR --
            // -- DOKUMEN IMB
            let form_imb 				= $(this).closest('tr').find('#form_imb')
            let imb     				= form_imb[0][0].value.replace("C:\\fakepath\\","");
            let label_imb				= $(this).closest('tr').find('label#LABELimb').text()
            // DOKUMEN IMB --
            // -- DOKUMEN AMDAL
            let form_amdal 				= $(this).closest('tr').find('#form_amdal')
            let amdal       				= form_amdal[0][0].value.replace("C:\\fakepath\\","");
            let label_amdal				= $(this).closest('tr').find('label#LABELamdal').text()
            // DOKUMEN AMDAL --
            // -- DOKUMEN RKS
            let form_rks 				= $(this).closest('tr').find('#form_rks')
            let rks     				= form_rks[0][0].value.replace("C:\\fakepath\\","");
            let label_rks				= $(this).closest('tr').find('label#LABELrks').text()
            // DOKUMEN RKS --
            // -- DOKUMEN PROPOSAL PROJECT
            let form_proposal 				= $(this).closest('tr').find('#form_proposal')
            let proposal        			= form_proposal[0][0].value.replace("C:\\fakepath\\","");
            let label_proposal				= $(this).closest('tr').find('label#LABELproposal').text()
            // DOKUMEN PROPOSAL PROJECT --
            // -- DOKUMEN RAB
            let form_rab 				= $(this).closest('tr').find('#form_rab')
            let rab     				= form_rab[0][0].value.replace("C:\\fakepath\\","");
            let label_rab				= $(this).closest('tr').find('label#LABELrab').text()
            // DOKUMEN RAB --
            // -- DOKUMEN PERENCANAAN GAMBAR
            let form_perencanaan 		= $(this).closest('tr').find('#form_perencanaan')
            let perencanaan     		= form_perencanaan[0][0].value.replace("C:\\fakepath\\","");
            let label_perencanaan		= $(this).closest('tr').find('label#LABELperencanaan').text()
            // DOKUMEN PERENCANAAN GAMBAR --
        
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
                    type:'POST',
                    url:" {{ route('rabgdg.del') }} ",
                    data:{
                        "_token": "{{ csrf_token() }}"
                        ,id
                        ,label_sertifikat
                        ,label_bmn
                        ,label_pupr
                        ,label_imb
                        ,label_amdal
                        ,label_rks
                        ,label_proposal
                        ,label_rab
                        ,label_perencanaan
					},
                    success:function(data){
                        console.log(data)
                        // Swal.fire('BERHASIL MENGHAPUS DATA TERSEBUT')
                        // baris.remove()
                    },
                    error: function (request, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'GALAT',
                            text: status + ' | ' + error,
                        })
                    }
                })} // End ajax --
            }) // End of sweetalert2 --
    }) // End del_btn on-click --
    
     }); //akhir dari document ready 🤗
    </script>