<?php foreach($css_file as $css_script):?>
    <link href="<?= base_url('assets/').$css_script;?>" rel="stylesheet" type="text/css" />
<?php endforeach;?>

<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <div class="page-title">
                 <h4><?=$title;?></h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="<?= base_url();?>portal/#dashboard">Home</a></li>
                         <li class="breadcrumb-item active"><?= $title;?></li>
                     </ol>
             </div>
         </div>
         <div class="col-sm-6">
            <div class="float-end d-none d-sm-block">
                <a href="<?= base_url();?>portal/#app/seller/add" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Seller</a>
            </div>
         </div>
     </div>
    </div>
 </div>
 <!-- end page title -->    


<div class="container-fluid">
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4"><?= $title;?></h4>
                        <table class="table table-striped tw-hover" id="user_table">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <!-- <th>
                                        Username
                                    </th> -->
                                    <th>
                                        Level
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Options
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->


<script>
    $(document).delegate("#btn-user-delete", "click", function(){

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
        url: base_url+"/app/seller/delete",
        type: "POST",
        data: {
            id: id
        },
        success: function(data_result) {
          console.log('data '+data_result);
            //return data_result;
            if (data_result=='1') {
                Swal.fire("Deleted!","Your file has been deleted.","success");
                // $('#datatable').DataTable().ajax.reload(null,false);
                LoadData();
            }else{
              Swal.fire("Failed!","Something wrong!","warning");
            }
        }
    });
} else if (result.dismiss === Swal.DismissReason.cancel) {
 
}
});
});
</script>

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'>
<?php endforeach;?>