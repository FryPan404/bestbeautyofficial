$(document).ready( function () {
    $('.subdistrict-select2').select2();
});

$('#form_add').on('submit', function(e){
  e.preventDefault();
  SaveData();
});

function SaveData(){
    $('#btn_save').html('Menyimpan...');
    $('#btn_save').attr('disabled', 'disabled');
    var url_data = base_url + 'app/seller/update';
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
                document.location.href=base_url + 'portal/#app/seller';
                // document.location.href=base_url + 'portal/#app/seller/edit';
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



