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
                        <h4 class="header-title mb-4"><?= $title;?></h4>
                        <div class="text-nowrap w-100 mb-3" style="overflow-x: auto;">
                            <a target="_blank" href="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                            <img class="feed-detail-img" src="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                            </a>
                            <a target="_blank" href="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                                <img class="feed-detail-img" src="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                            </a>
                            <a target="_blank" href="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                                <img class="feed-detail-img" src="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                            </a>
                            <a target="_blank" href="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                                <img class="feed-detail-img" src="https://app.cbmtuban.com/uploads/MyM0_202108090721012.jpg">
                            </a>
                        </div>
                        <table class="table table-striped">
                            <tr>
                                <td>
                                    <b>HAC</b>
                                </td>
                                <td>
                                    TQ.461-KR1
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Date</b>
                                </td>
                                <td>
                                    2021-08-09
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Finding</b>
                                </td>
                                <td>
                                    Hentakan efek tyre scratch di bed plate roller utara. Feed 262 t/h, speed 3,4 rpm. After manual grinding tyre Downhill : bedplate turun 1,7 mm vertical spindle downhill diganjal kawat las 3,2 (sudah gepeng)mm
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Remark</b>
                                </td>
                                <td>
                                    Rekomendasi : - monitoring - rencanakan machining/bubut tyre
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Status</b>
                                </td>
                                <td>
                                    Open
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <b>Reported by:</b>
                                </td>
                                <td>
                                    Medianto
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <b>Reviewed by:</b>
                                </td>
                                <td>
                                    Not Yet
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <b>Last updated:</b>
                                </td>
                                <td>
                                    2021-08-09
                                </td>
                            </tr>
                        </table>
                        <div class="w-100 text-right mt-3">
                            <a href="javascript:void(0)" class="btn btn-default waves-effect waves-light btn-back">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                            <a href="#" class="btn btn-warning waves-effect waves-light">
                                <i class="fas fa-edit"></i> Edit Feed
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'>
<?php endforeach;?>