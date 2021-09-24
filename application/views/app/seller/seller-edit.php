<?php foreach($css_file as $css_script):?>
    <link href="<?= base_url('assets/').$css_script;?>" rel="stylesheet" type="text/css" />
<?php endforeach;?>

<style type="text/css">
    .tw-image-preview{
		height: 200px;
		width: 200px;
		object-fit: cover;
	}

	.image-preview-container{
		position: relative;
	}

	.btn-delete-image{
		position: absolute;
		right: 10px;
		top: 10px;
	}

	@media only screen and (max-width: 990px) {
		.tw-image-preview{
			width: 100%;
			height: 200px;
		}

		.image-preview-container{
			width: 50%;
		}
	}
</style>

<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-md-6">
             <div class="page-title">
                 <h4><?=$title;?></h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="<?= base_url();?>portal/#dashboard">Home</a></li>
                         <li class="breadcrumb-item"><a href="<?= base_url();?>portal/#app/seller">Data Seller</a></li>
                         <li class="breadcrumb-item active"><?= $title;?></li>
                     </ol>
             </div>
         </div>
         <div class="col-md-6">
            <div class="float-end d-none d-md-block">
                <!-- <a href="" class="btn btn-success">Add Widget</a> -->
            </div>
         </div>
     </div>
    </div>
 </div>
 <!-- end page title -->    


<div class="container-fluid">
    <div class="page-content-wrapper">

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="" id="form_add">
                            <div class="row">
                              <div class="col-md-12">
                                <h5 class="mb-4">Data Seller</h5>
                              </div>
                              <div class="col-md-12">
                              <div class="row mb-3">
                                    <label class="form-label col-md-2">Gambar</label>
                                    <div class="col-md-4">
                                         <a href="javascript:void(0)" data-id="file" class="btn btn-primary w-100 btn-select-image" style="width: auto !important;">Choose Images</a>
                                         <div style='height: 0px;width: 0px; overflow:hidden;'>
                                            <input class="select-image" data-id="" id="file" type="file" accept=".jpg, .png, .jpeg" onchange="" multiple />
                                         </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div id="image_container" class="w-100">
                                    <?php $number=0;?>
                                <?php foreach ($image as $sub_i): ?>
                                  <?php $number ++;?>
                                  <div class="image-preview-container d-inline-block p-1" id="image_preview_container_<?= $number;?>">
                                    <a href="javascript:void(0)" data-id="<?= $number;?>" class="btn-delete-image btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                    <input type="hidden" name="image_name[]" value="<?= $sub_i['image'];?>">
                                    <img class="tw-image-preview" src="<?= base_url('uploads/').$sub_i['image'];?>">
                                  </div>
                                <?php endforeach ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Nomor ID Anggota</label>
                                    <div class="col-md-10">
                                        <input type="text" readonly name="id_number" value="<?= $data[0]->id_number ?>" required class="form-control" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Nama Lengkap</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" value="<?= $data[0]->name ?>" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" name="email" value="<?= $data[0]->email ?>" required readonly required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">No Telepon</label>
                                    <div class="col-md-10">
                                        <input type="text" name="phone" value="<?= $data[0]->phone ?>" readonly required required class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                                    <label class="form-label col-md-2">Negara</label>
                                    <div class="col-md-4">
                                        <select class="select2 subdistrict-select2 form-control" name="country">
                                            <option disabled selected value="">Pilih Kode Negara</option>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </select>
                                    </div>
                                    <label class="form-label col-md-2">Provinsi</label>
                                    <div class="col-md-4">
                                        <select class="select2 subdistrict-select2 form-control" name="province" id="province">
                                            <option disabled selected ><?= $data[0]->province_name ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Kabupaten</label>
                                    <div class="col-md-4">
                                        <select class="select2 subdistrict-select2 form-control" name="district" id="district">
                                            <option disabled selected value=""><?= $data[0]->district_name ?></option>
                                        </select>
                                    </div>
                                    <label class="form-label col-md-2">Kecamatan</label>
                                    <div class="col-md-4">
                                        <select required class="select2 subdistrict-select2 form-control" name="sub_district" id="sub_district">
                                            <option disabled selected value=""><?= $data[0]->sub_district_name ?></option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Alamat</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" required rows="4" name="address"><?= $data[0]->address ?></textarea>
                                    </div>
                                </div>
                                
                              </div>
                              <div class="col-md-8">
                                <h5 class="mb-4 mt-4">Sosila Media</h5>
                                  <div class="mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" value="<?= $data[0]->facebook ?>" aria-describedby="emailHelp" placeholder="Masukan url facebook seller" name="facebook">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value="<?= $data[0]->instagram ?>" aria-describedby="emailHelp" placeholder="Masukan url instagram seller" name="instagram">
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <h5 class="mb-4 mt-4">Bio Seller</h5>
                                  <div class="mb-3">
                                    <label class="form-label">Biografi / Catatan </label>
                                    <textarea class="form-control"  name="bio" rows="5"><?= $data[0]->bio ?></textarea>
                                  </div>
                                  <!-- hidden -->
                                    <input type="hidden" class="form-control" value="<?= $data[0]->province_name ?>" id="province_name" name="province_name">
                                    <input type="hidden" class="form-control" value="<?= $data[0]->district_name ?>" id="district_name" name="district_name">
                                    <input type="hidden" class="form-control" value="<?= $data[0]->sub_district_name ?>" id="sub_district_name" name="sub_district_name">

                                    <input type="hidden" value="<?= $data[0]->id ?>" name="user_id" id="user_id">
                              </div>
                              
                              <div class="col-md-12 text-right">
                                <a href="javascript:void(0)" class="btn btn-default btn-back"><i class="fas fa-arrow-left"></i> Batal</a>
                                <button type="submit" id="btn_save" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
</div> <!-- container-fluid -->

<script>
    $(document).ready(function(){
        $.ajax({
          url: base_url+"/app/seller/province",
          method: 'GET',
          success: function(data) {
              var sub_data = data.rajaongkir;
              var status_code = sub_data.status.code;
              var result_data = sub_data.results;
              var result_data_length = result_data.length;
              for (let i = 0; i < result_data_length; i++){
                  var province = result_data[i].province;
                  var province_code = result_data[i].province_id;
                  $('#province').append('<option value="'+result_data[i].province_id+'">'+result_data[i].province+'</option>');
                  
                }
          }
      });

      
    });


    $('#province').change(function(){
        var select = document.getElementById('province');
        var value = select.options[select.selectedIndex].value;
        var text = select.options[select.selectedIndex].text;
        $('#province_name').val(text);
        $('#province_id').val(value);

        $('#district').select2("trigger", "select", {
            data:{id : '', text:''}
        }); //->untuk mengosongkan select
        $('#sub_district').select2("trigger", "select", {
            data:{id : '', text:''}
        }); //->untuk mengosongkan select
        $('#sub_district').html('<option disabled selected value="">Pilih Kecamatan</option>');
        $('#district').html('<option disabled selected value="">Loading Kabupaten</option>'); //->untuk mereplace looping select yg sebelumnya
        $.ajax({
            url: base_url+"app/seller/district/"+value,
            method: 'POST',
            dataType: "json",
            success: function(data){
                $('#district').html('<option disabled selected value="">Pilih Kabupaten</option>');
                
                // $('#sub_district').html('<option disabled selected value="">Pilih Kecamatan</option>');
                var sub_data = data.rajaongkir.results;
                var data_length = sub_data.length;
                for (let i = 0; i < data_length; i++){
                $('#district').append('<option value="'+sub_data[i].city_id+'">'+sub_data[i].type+' '+ sub_data[i].city_name+'</option>');
                }
            }
        });
      });

      $('#district').change(function(){
        var select = document.getElementById('district');
        var value = select.options[select.selectedIndex].value;
        var text = select.options[select.selectedIndex].text;
        $('#district_name').val(text);
        $('#district_id').val(value);
        $('#sub_district').select2("trigger", "select", {
            data:{id : '', text:''}
        }); //->untuk mengosongkan select
        $('#sub_district').html('<option disabled selected value="">Loading Kecamatan</option>'); //->untuk mereplace looping select yg sebelumnya

        $.ajax({
            url: base_url+"app/seller/sub_district/"+value,
            method: 'POST',
            dataType: "json",
            success: function(data){
                // console.log(data);
                $('#sub_district').html('<option disabled selected value="">Pilih Kecamatan</option>');
                var sub_data = data.rajaongkir.results;
                var data_length = sub_data.length;
                for (let i = 0; i < data_length; i++){
                $('#sub_district').append('<option value="'+sub_data[i].subdistrict_id+'">'+ sub_data[i].subdistrict_name+'</option>');
                }
            }
        });
      });

      $('#sub_district').change(function(){
        var select = document.getElementById('sub_district');
        var value = select.options[select.selectedIndex].value;
        var text = select.options[select.selectedIndex].text;
        $('#sub_district_name').val(text);
        $('#sub_district_id').val(value);
      });



$("#preview_gambar").change(function(){
   bacaGambar(this);
});

$('.btn-select-image').on('click', function(){
  var data_id = $(this).attr('data-id');
  getFile(data_id);
});

function getFile(el){
  my_el=el.replace("file", "");
  document.getElementById(el).click();
};

$('.select-image').change(function () {
    var this_element = this;
    var element = $(this);
    var data_id = element.attr('data-id');
    var number=0;
    //console.log(this_element.files);
    const extracted_file = this_element.files[0];
    var image_name = extracted_file.name;
    var size = extracted_file.size;
    var extension = image_name.replace(/^.*\./, '');
    //console.log(extension+'\r\n');
    if (extension=='jpg' || extension=='JPG' || extension=='png' || extension=='PNG' || extension=='jpeg' || extension=='JPEG') {
      $.each(this_element.files, function (i, v) {
        var reader = new FileReader();
        reader.onload = function (e) {
          var img = new Image();
          img.src = e.target.result;

          img.onload = function () {
              //for tumbnail
              var canvas2 = document.createElement("canvas");

              // RESIZE THE IMAGES ONE BY ONE
              if (size>=340000) {
                if (img.width>=700) {
                  var new_width2=img.width/3;
                  if (new_width2<=699) {
                    new_width2 = 700;
                  }
                  img.height = (img.height * new_width2) / img.width;
                  img.width = new_width2;
                }else{
                  img.height = img.height;
                  img.width = img.width;
                }
              }else{
                img.height = img.height;
                img.width = img.width;
              }
              

              var ctx2 = canvas2.getContext("2d");
              ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
              canvas2.width = img.width;
              canvas2.height = img.height;
              ctx2.drawImage(img, 0, 0, canvas2.width, canvas2.height);

              var dataURL_preview = '';
              if (size>=340000) {
                var dataURL_preview = canvas2.toDataURL("image/jpeg",0.5);
              }else{
                var dataURL_preview = canvas2.toDataURL("image/jpeg",0.8);
              }
              
              number ++;
            //   console.log('image: '+dataURL_preview+'\r\n');
              $('#image_container').html('<div class="image-preview-container d-inline-block " id="image_preview_container_'+number+'">\
                <a href="javascript:void(0)" data-id="'+number+'" class="btn-delete-image btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>\
                <input type="hidden" name="image_data[]" value="'+dataURL_preview+'">\
                <img class="tw-image-preview" src="'+dataURL_preview+'">\
                </div>');
          }
        };
        reader.readAsDataURL(this);
      });
    }
  });
  $("div").delegate(".btn-delete-image", "click", function(){
  var id = $(this).attr('data-id');
  $('#image_preview_container_'+id).remove();
});

// function UpdateData(){
//     $('#btn_save').html('Saving...');
//     $('#btn_save').attr('disabled', 'disabled');
//     var url_data = base_url+'app/upload/upload_image';
//     $.ajax({
//         url: url_data,
//         type: "POST",
//         data: $('#form_add').serialize(),
//         success: function(data_result) {
//           // console.log('data '+data_result);
//           if (data_result=='1') {
//             Swal.fire(
//                   'Success!',
//                   'Data has been saved!',
//                   'success'
//             ).then(function() {
//                 window.history.back();
//             });
//           }else{
//             Swal.fire("Failed!", "Something wrong!", "warning");
//           }
//           $('#btn_save').html('Save');
//           $('#btn_save').attr('disabled', false);
//         },
//         error: function (request, status, error) {
//           Swal.fire("Failed!", "Something wrong!", "warning");
//           $('#btn_save').html('Save');
//           $('#btn_save').attr('disabled', false);
//         }
//     });
// }

// $('#btn_save').on('click', function(e){
// 	e.preventDefault();
// 	UpdateData();
// });

</script>

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'></script>
<?php endforeach;?>