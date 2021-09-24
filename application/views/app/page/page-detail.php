<?php foreach($css_file as $css_script):?>
    <link href="<?= base_url('assets/').$css_script;?>" rel="stylesheet" type="text/css" />
<?php endforeach;?>

<style>
    .image{
        width: 20%;
        height: 20%;
    }
</style>

<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <div class="page-title">
                 <h4><?=$title;?></h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="<?= base_url();?>portal/#home">Home</a></li>
                         <li class="breadcrumb-item"><a href="<?= base_url();?>portal/#app/page">Page list</a></li>
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
                            <a target="_blank" href="">
                            <img class="feed-detail-img" src="">
                            </a>
                        </div>
                        <table class="table table-striped" >
                            <tr>
                                <td>
                                    <b>Picture</b>
                                </td>
                                <td>
                                    <img class="img-thumbnail image" src="<?php echo base_url('uploads/').$data[0]->image ?>" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">
                                    <b>Title</b>
                                </td>
                                <td>
                                    <?php echo $data[0]->title ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Content</b>
                                </td>
                                <td>
                                    <?php echo $data[0]->content ?>
                                </td>
                            </tr>                            
                        </table>
                        <!-- <div class="w-100 text-right mt-3">
                            <a href="javascript:void(0)" class="btn btn-default waves-effect waves-light btn-back">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                            <a href="#" class="btn btn-warning waves-effect waves-light">
                                <i class="fas fa-edit"></i> Edit Feed
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'>
<?php endforeach;?>