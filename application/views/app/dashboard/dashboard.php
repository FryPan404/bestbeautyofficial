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
                         <li class="breadcrumb-item"><a href="javascript: void(0);"><?= master_title();?></a></li>
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4 float-sm-start">Critical Watch List</h4>
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">
                                    Area
                                </th>
                                <th class="text-center">
                                    Funct Loct
                                </th>
                                <th class="text-center">
                                    Description
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Kiln
                                </td>
                                <td>
                                    TQ.461-KL1
                                </td>
                                <td>
                                    Kiln Hot Spot
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    TQ.462-KL1
                                </td>
                                <td>
                                    Kiln Roller Noise
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Coal Mill
                                </td>
                                <td>
                                    TQ.L61-RM1
                                </td>
                                <td>
                                    Sealing air rusak
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    TQ.L61-WF1
                                </td>
                                <td>
                                    Belt mulai sobek
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Raw Mill
                                </td>
                                <td>
                                    TQ.361-RM1
                                </td>
                                <td>
                                    Roller noise
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    TQ.332-BC1
                                </td>
                                <td>
                                    Belt tergores
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Finish Mill
                                </td>
                                <td>
                                    TQ.561-SR1
                                </td>
                                <td>
                                    Bearing separator temperature tinggi
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    TQ.561-BF1
                                </td>
                                <td>
                                    Emisi mulai tinggi
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4 float-sm-start">Plant Summary</h4>
                        <div class="w-100">
                            <div id="plant_chart" class="apex-charts"></div>
                            <div class="w-100 pb-5"></div>
                            <div class="w-100 mt-5">
                                <h4 align="center">Last Data Update</h4>
                                <p align="center">Friday, June 18, 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="header-title mb-4 float-sm-start">Area Summary</h4>
                            </div>
                            <div class="col-md-6">
                                <table class="table area-summary">
                                    <tr>
                                        <td>Crusher</td>
                                        <td>
                                            <div id="crusher_chart" class="apex-charts"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raw Mill TQ1</td>
                                        <td>
                                            <div id="raw_mill_1_chart" class="apex-charts"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raw Mill TQ2</td>
                                        <td>
                                            <div id="raw_mill_2_chart" class="apex-charts"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cola Mill TQ1</td>
                                        <td>
                                            <div id="coal_mill_1_chart" class="apex-charts"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Coal Mill TQ2</td>
                                        <td>
                                            <div id="coal_mill_2_chart" class="apex-charts"></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table area-summary">
                                    <tr>
                                        <td>Kiln TQ1</td>
                                        <td><div id="kiln_1_chart" class="apex-charts"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Kiln TQ2</td>
                                        <td><div id="kiln_2_chart" class="apex-charts"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Finish Mill TQ1</td>
                                        <td><div id="finish_mill_1_chart" class="apex-charts"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Finish Mill TQ2</td>
                                        <td><div id="finish_mill_2_chart" class="apex-charts"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Packer Palletizer</td>
                                        <td><div id="packer_palletizer" class="apex-charts"></div></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="header-title mb-4 float-sm-start">Number of Critical Machine by Type</h4>
                            </div>
                            <div class="col-md-12">
                                <table class="w-100 area-summary text-center">
                                    <tr>
                                        <td style="background-color:#f8bbd0">
                                             Vertical Mill<br>
                                             3
                                        </td>
                                        <td style="background-color:#d1c4e9">
                                             Kiln<br>
                                             3
                                        </td>
                                        <td style="background-color:#bbdefb">
                                             Clinker Cooler<br>
                                             3
                                        </td>
                                        <td style="background-color:#b2ebf2">
                                             Separator<br>
                                             3
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color:#b2dfdb">
                                             Belt Conveyor<br>
                                             3
                                        </td>
                                        <td style="background-color:#c8e6c9">
                                             Bucket Elevator<br>
                                             3
                                        </td>
                                        <td style="background-color:#dcedc8">
                                             Motor Drive<br>
                                             3
                                        </td>
                                        <td style="background-color:#f0f4c3">
                                             Chain Conveyor<br>
                                             3
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color:#fff9c4">
                                             Palletizer<br>
                                             3
                                        </td>
                                        <td style="background-color:#ffecb3">
                                             Air Slide<br>
                                             3
                                        </td>
                                        <td style="background-color:#ffe0b2">
                                             Lub. System<br>
                                             3
                                        </td>
                                        <td style="background-color:#ffccbc">
                                             Hyd. System<br>
                                             3
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="background-color:#d7ccc8">
                                             Compressor<br>
                                             3
                                        </td>
                                        <td style="background-color:#f5f5f5">
                                             Fan<br>
                                             3
                                        </td>
                                        <td style="background-color:#eceff1">
                                             Bag Filter<br>
                                             3
                                        </td>
                                        <td style="background-color:#ffab91">
                                             Packer<br>
                                             3
                                        </td>
                                    </tr>
                                 </table>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div> <!-- container-fluid -->

<!-- apexcharts -->
<script src="<?= base_url();?>assets/libs/apexcharts/apexcharts.min.js"></script>

<?php foreach($js_file as $js_script):?>
    <script type='text/javascript' src = '<?= base_url('assets/').$js_script;?>'>
<?php endforeach;?>