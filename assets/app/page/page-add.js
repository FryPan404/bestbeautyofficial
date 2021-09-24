$(document).ready(function() {
    $('#summernote').summernote();

    
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
});


$('#form_add').on('submit', function(e){
  e.preventDefault();
  SaveData();
});

function SaveData(){
    $('#btn_save').html('Menyimpan...');
    $('#btn_save').attr('disabled', 'disabled');
    var url_data = base_url + 'app/page/save';
    $.ajax({
        url: url_data,
        type: "POST",
        data: $('#form_add').serialize(),
        success: function(data_result) {
          console.log('data '+data_result);
          if (data_result=='1') {
            Swal.fire(
                  'Sukses!',
                  'Data berhasil disimpan!',
                  'success'
            ).then(function() {
                document.location.href=base_url + 'portal/#app/page';
                document.location.href=base_url + 'portal/#app/page/add';
            });
          }else if(data_result=='2'){
            var id_number = parseInt($("input[name='id_number']").val()) + 1;
            $("input[name='id_number']").val('000000'.slice(id_number.toString().length)+id_number);
            Swal.fire("Gagal!", "Nomor ID ada yang sama! Silahkan tekan tombol simpan sekali lagi!", "warning");
          }else if(data_result=='3'){
            Swal.fire("Gagal!", "Nomor telpon telah digunakan!", "warning");
          }else if(data_result=='4'){
            Swal.fire("Gagal!", "Email telah digunakan untuk mendaftar!", "warning");
          }else{
            Swal.fire("Gagal!", "Something wrong!", "warning");
          }
          $('#btn_save').html('Simpan');
          $('#btn_save').attr('disabled', false);
        },
        error: function (request, status, error) {
            Swal.fire("Gagal!", "Something wrong!", "warning");
            $('#btn_save').html('Simpan');
        	  $('#btn_save').attr('disabled', false);
        }
    });
}

