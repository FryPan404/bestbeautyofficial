 function rupiah(angka){
   var reverse = angka.toString().split('').reverse().join(''),
   ribuan = reverse.match(/\d{1,3}/g);
   ribuan = ribuan.join('.').split('').reverse().join('');
   return ribuan+',00';
 }

function tgl_indo(string) {
  bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];
 
    tanggal = string.split("-")[2];
    bulan = string.split("-")[1];
    tahun = string.split("-")[0];
 
    return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun;
}

//custom
$(document).delegate(".datatable-delete", "click", function(){
    var url = $(this).attr('data-link');
    var id = $(this).attr('data-id');
    Swal.fire({
		title:"Are you sure?",
		text:"You will not be able to recover this data!",
		icon:"warning",
		showCancelButton:!0,
		confirmButtonColor:"#f14e4e",
		cancelButtonColor:"#1cbb8c",
		confirmButtonText:"Yes, delete it!"
	}).then((result) => {
	  if (result.isConfirmed) {
	    $.ajax({
            url: url,
            type: "POST",
            data: {
                id: id
            },
            success: function(data_result) {
              console.log('data '+data_result);
                //return data_result;
                if (data_result=='1') {
                    Swal.fire("Deleted!","Your file has been deleted.","success");
                    $('#datatable').DataTable().ajax.reload(null,false);
                }else{
                  Swal.fire("Failed!","Something wrong!","warning");
                }
            }
        });
	  } else if (result.dismiss === Swal.DismissReason.cancel) {
	    // swalWithBootstrapButtons.fire(
	    //   'Cancelled',
	    //   'Your imaginary file is safe :)',
	    //   'error'
	    // )
	  }
	});
});

$(document).delegate(".btn-back", "click", function(){
  window.history.back();
});

$('.btn-refresh').on('click', function(){
  location.reload();
});

$(document).delegate(".btn-refresh", "click", function(){
  location.reload();
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}