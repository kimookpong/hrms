<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Epic :: HR Employee</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css">
<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/plugins/dropify/css/dropify.min.css">

<!-- Core css -->
<link rel="stylesheet" href="../assets/css/main.css"/>
<link rel="stylesheet" href="../assets/css/theme1.css"/>
</head>

<body class="font-montserrat sidebar_dark">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

    <?php include "menu.php";?>
    

    <div class="page">
        <div id="page_top" class="section-body ">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">ฟอร์มสำหรับบันทึกฟังชั่น</h1>                   
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">

                <div class="row">
    
                </div>
            </div>
        </div>
        <div class="section-body  mt-3">
            <div class="container-fluid">
             
            <div class="card">
                            <div class="card-body row">
                            <div class="col-md-3 col-lg-3">
                                             <div class="form-group">
                                            <label class="form-label">โมดูล</label>
                                            <select class="custom-select">
                            <option>เลือกโมดูล</option>
                            <option>โครงสร้างองค์กร</option>
                            <option>อัตรากำลัง</option>
                            <option>สรรหาและคัดเลือก</option>
                            <option>บรรจุและแต่งตั้ง</option>
                            <option>ทะเบียนประวัติ</option>
                            <option>บันทึกเวลาปฏิบัติงานและการลา</option>
                            <option>เงินเดือน</option>
                        </select>
                            </div>  </div>
                            <div class="col-md-3 col-lg-3">
                                             <div class="form-group">
                                            <label class="form-label">ชื่อภาษาไทย</label>
                                    <input type="text" class="form-control" name="example-checkbox2"">
                            </div>  </div>
          
                            <div class="col-md-3 col-lg-3">
                                             <div class="form-group">
                                            <label class="form-label">ชื่อภาษาอังกฤษ</label>
                                            <input type="text" class="form-control" name="example-checkbox2" ">
                            </div>  </div>
          
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">icon</label>
                                            <input type="text" class="form-control" name="example-text-input" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label">Action/Url</label>
                                            <input type="text" class="form-control" name="example-text-input" placeholder="">
                                        </div>
                                    </div>
 </div>
                                    <div class="card-footer text-center">
                                 
                                    <a href="function.php" class="btn btn-primary"><i class="fa fa-save"></i> บันทึกข้อมูล</a>
                                    <a href="function.php" class="btn btn-danger"><i class="fa fa-close"></i> ยกเลิก</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                  
               
            </div>            
        </div>        
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-icon">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>    
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Departments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Employee ID">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email ID">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                        <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Start date *">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Role">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mt-2 mb-3">
                            <input type="file" class="dropify">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Twitter">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Linkedin">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="instagram">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="../assets/bundles/lib.vendor.bundle.js"></script>

<script src="../assets/bundles/counterup.bundle.js"></script>
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/plugins/dropify/js/dropify.min.js"></script>

<script src="../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
<script src="assets/js/form/dropify.js"></script>

<script>
$(function() {
    "use strict";
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    function getRandomValues() {
        // data setup
        var values = new Array(20);

        for (var i = 0; i < values.length; i++) {
            values[i] = [5 + randomVal(), 10 + randomVal(), 15 + randomVal(), 20 + randomVal(), 30 + randomVal(),
                35 + randomVal(), 40 + randomVal(), 45 + randomVal(), 50 + randomVal()
            ];
        }

        return values;
    }    
    function randomVal() {
        return Math.floor(Math.random() * 80);
    }

    // MINI BAR CHART
    var values2 = getRandomValues();    
    var paramsBar = {
        type: 'bar',
        barWidth: 5,
        height: 25,
    };

    $('#mini-bar-chart1').sparkline(values2[0], paramsBar);
    paramsBar.barColor = '#6c757d';
    $('#mini-bar-chart2').sparkline(values2[1], paramsBar);
    paramsBar.barColor = '#6c757d';
    $('#mini-bar-chart3').sparkline(values2[2], paramsBar);
    paramsBar.barColor = '#6c757d';
    $('#mini-bar-chart4').sparkline(values2[3], paramsBar);
    paramsBar.barColor = '#6c757d';
    
});
</script>
</body>
</html>
