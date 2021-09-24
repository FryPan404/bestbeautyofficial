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
                         <li class="breadcrumb-item"><a href="<?= base_url();?>#dashboard">Home</a></li>
                         <li class="breadcrumb-item"><a href="<?= base_url();?>#app/hac">HAC List</a></li>
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
                                <h5>Input Form</h5>
                              </div>
                              <div class="col-md-12">
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">HAC</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Manufacturer</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Rpm</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">KW</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-md-2">Capacity</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" required class="form-control">
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-12 text-right">
                                <a href="javascript:void(0)" class="btn btn-default btn-back"><i class="fas fa-arrow-left"></i> Cancel</a>
                                <a href="javascript:void(0)" class="btn btn-primary" id="btn_save"><i class="fas fa-save"></i> Save</a>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
</div> <!-- container-fluid -->

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'>
<?php endforeach;?>