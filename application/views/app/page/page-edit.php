<?php foreach($css_file as $css_script):?>
    <link href="<?= base_url('assets/').$css_script;?>" rel="stylesheet" type="text/css" />
<?php endforeach;?>


<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-md-6">
             <div class="page-title">
                 <h4><?=$title;?></h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="<?= base_url();?>portal/#dashboard">Home</a></li>
                         <li class="breadcrumb-item"><a href="<?= base_url();?>portal/#app/page">Page list</a></li>
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
                                    <label class="form-label col-md-2">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" value="<?php echo $data[0]->title ?>" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Content</label>
                                    <div class="col-md-10">
                                    <textarea name="summernote" id="summernote" cols="3" rows="10" required class="form-control"><?php echo $data[0]->content ?></textarea>
                                    </div>

                                    <input type="hidden" readonly id="user_id" name="user_id" value="<?php echo $data[0]->id ?>" class="form-control">
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

<!--tinymce js-->
<script src="<?= base_url();?>assets/libs/tinymce/tinymce.min.js"></script>

<!-- init js -->
<script src="<?= base_url();?>assets/js/pages/form-editor.init.js"></script>


<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'></script>
<?php endforeach;?>