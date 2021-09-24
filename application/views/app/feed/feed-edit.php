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
                         <li class="breadcrumb-item"><a href="<?= base_url();?>#dashboard">Home</a></li>
                         <li class="breadcrumb-item"><a href="<?= base_url();?>#app/feed">Feed</a></li>
                         <li class="breadcrumb-item active"><?= $title;?></li>
                     </ol>
             </div>
         </div>
         <div class="col-sm-6">
            <div class="float-end d-none d-sm-block">
                <!-- <a href="" class="btn btn-success">Add Widget</a> -->
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
                        <form method="POST" action="" id="form_add">
                            <div class="row">
                              <div class="col-md-12">
                                <h5>Input Form</h5>
                              </div>
                              <div class="mb-3 col-md-4">
                                <label class="form-label">Report Date</label>
                                <input type="date" required class="form-control" name="report_date">
                              </div>
                              <div class="mb-3 col-md-4">
                                <label class="form-label">QR Code</label>
                                <input type="text" class="form-control" required name="qr_code">
                              </div>
                              <div class="mb-3 col-md-4">
                                <label class="form-label">HAC</label>
                                <input type="text" name="hac" required class="form-control">
                              </div>
                              <div class="mb-3 col-md-12">
                                <label class="form-label">Finding</label>
                                <textarea class="form-control" rows="4" name="finding"></textarea>
                              </div>
                              <div class="mb-3 col-md-12">
                                <label class="form-label">Remark</label>
                                <textarea class="form-control" rows="3" name="remark"></textarea>
                              </div>
                              <div class="mb-3 col-md-3">
                                <label class="form-label">Severity Level</label>
                                <select class="form-control" name="severity_level" required>
                                    <option value="">Select Severity</option>
                                    <option value="">Severity Level 1</option>
                                    <option value="">Severity Level 2</option>
                                    <option value="">Severity Level 3</option>
                                    <option value="">Severity Level 4</option>
                                </select>
                              </div>
                              <div class="mb-3 col-md-3">
                                <label class="form-label">Report Status</label>
                                <select class="form-control" name="status" required>
                                    <option value="">Open</option>
                                    <option value="">Monitoring</option>
                                    <option value="">Close</option>
                                </select>
                              </div>
                              <div class="col-md-12 text-right">
                                <a href="javascript:void(0)" class="btn btn-default btn-back"><i class="fas fa-arrow-left"></i> Cancel</a>
                                <a href="javascript:void(0)" class="btn btn-primary" id="btn_save"><i class="fas fa-save"></i> Save Changes</a>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'>
<?php endforeach;?>