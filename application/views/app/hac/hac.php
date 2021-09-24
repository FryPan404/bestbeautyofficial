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
                         <li class="breadcrumb-item active"><?= $title;?></li>
                     </ol>
             </div>
         </div>
         <div class="col-sm-6">
            <div class="float-end d-none d-sm-block">
                <a href="<?= base_url();?>#app/hac/add" class="btn btn-success"><i class="fas fa-plus"></i> Add HAC</a>
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
                        <table class="table table-striped tw-hover" id="hac_table">
                            <thead>
                                <tr>
                                    <th width="1">
                                        No
                                    </th>
                                    <th>
                                        HAC
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th class="text-center" width="1">
                                        Options
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        1
                                    </td>
                                    <td>
                                        TQ.671-PA1
                                    </td>
                                    <td>
                                        Palletizer Line 1
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <a href="<?= base_url();?>#app/hac/detail/1" class="btn btn-primary btn-sm waves-effect waves-light datatable-edit">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="<?= base_url();?>#app/hac/edit/1" class="btn btn-warning btn-sm waves-effect waves-light datatable-edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-link="" data-id="39" class="btn btn-danger btn-sm waves-effect waves-light datatable-delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td>
                                        TQ.671-PA1
                                    </td>
                                    <td>
                                        Palletizer Line 1
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <a href="<?= base_url();?>#app/hac/detail/1" class="btn btn-primary btn-sm waves-effect waves-light datatable-edit">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="<?= base_url();?>#app/hac/edit/1" class="btn btn-warning btn-sm waves-effect waves-light datatable-edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-link="" data-id="39" class="btn btn-danger btn-sm waves-effect waves-light datatable-delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'>
<?php endforeach;?>