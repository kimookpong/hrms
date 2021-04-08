<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>WU HRMS : timeworkplan_position</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="../assets/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-multiselect/bootstrap-multiselect.css">

    <!-- Core css -->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme1.css" />
</head>

<body class="font-montserrat sidebar_dark">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">



        <?php include "menu.php"; ?>

        <div class="page">
            <div id="page_top" class="section-body ">
                <div class="container-fluid">
                    <div class="section-body">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="nav nav-tabs page-header-tab">
                                    <li class="nav-item"><a class="nav-link active" id="Payroll-tab" data-toggle="tab" href="#Payroll-Salary">เพิ่ม Admin ประจำหน่วยงาน</a></li>
                                </ul>
                                <!--  <div class="header-action">
                        <a type="button" class="btn btn-primary" href="function_form.php">Add</a>
                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="section-body mt-3">
                        <div class="container-fluid">
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="Payroll-Salary" role="tabpanel">
                                    <div class="row clearfix">
                                        <!--   <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <h6>รูปแบบการทำงานนอกเวลา</h6>
                                    <h1 class="pt-3"><span class="counter">3</span></h1>
                                    <span><span class="text-danger mr-2"> รายการ</span>
                                    </div>
                                </div>
                            </div>    
                       <div class="col-lg-3 col-md-4">    
                                <div class="card">
                                    <div class="card-body">
                                    <h6>ตำแหน่งที่มีกะเวลาแล้ว</h6>
                                    <h1 class="pt-3"><span class="counter">26</span></h1>
                                    <span><span class="text-danger mr-2"> รายการ</span>
                                    </div>
                                </div>
                                </div>    
                            <div class="col-lg-3 col-md-4">        
                                <div class="card">
                                    <div class="card-body">
                                    <h6>ตำแหน่งที่ไม่มีกะเวลาแล้ว</h6>
                                    <h1 class="pt-3"><span class="counter">1</span></h1>
                                    <span><span class="text-danger mr-2"> รายการ <a  href="HRMS_admin_timeworkplan_position_form.php">(กดเพื่อจับคู่ตำแหน่งของกะเวลา) </a></span>
                                    </div>
                                </div>
                            </div>
                               -->
                                    </div>


                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title"></h3>
                                            <div class="card-options">
                                                <form>

                                                    <div class="input-group">


                                                        <select class="custom-select">
                                                            <option>เลือกประเภท</option>
                                                            <option>หน่วยงาน</option>
                                                            <option>สำนัก</option>
                                                            <option>ศูนย์</option>

                                                        </select>


                                                        <span class="input-group-btn ml-2"><button class="btn btn-icon" type="submit"><span class="fe fe-search"></span></button></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 20px;">#</th>
                                                            <th class="w200">หน่วยงาน</th>
                                                            <th class="w200">Admin ประจำหน่วยงาน</th>
                                                            <th class="w200">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span>01</span></td>
                                                            <td>สำนักผู้บริหาร</td>
                                                            <td>- นาย มานิต จิตต์ประไพย<br> เจ้าหน้าวิเคราะห์ระบบงานคอมพิวเตอร์ <button type="button" class="btn btn-danger btn-xs"> ลบ </button> <br>
                                                                - นาย ฮากิม มูดอ<br> เจ้าหน้าวิเคราะห์ระบบงานคอมพิวเตอร์ <button type="button" class="btn btn-danger"> ลบ </button>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่ม</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>02</span></td>
                                                            <td>ส่วนอำนวยการและสารบรรณ</td>
                                                            <td>....................</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่ม</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>03</span></td>
                                                            <td>ส่วนการเงินและบัญชี</td>
                                                            <td>.................... </td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่ม</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>04</span></td>
                                                            <td>ส่วนพัสดุ</td>
                                                            <td>....................</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่ม</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>05</span></td>
                                                            <td>สำนักวิชาการจัดการ</td>
                                                            <td>....................</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่ม</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination mb-0 justify-content-end">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <script src="../assets/bundles/lib.vendor.bundle.js"></script>

                    <script src="../assets/bundles/counterup.bundle.js"></script>
                    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
                    <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
                    <script src="../assets/plugins/dropify/js/dropify.min.js"></script>
                    <script src="../assets/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>

                    <script src="../assets/js/core.js"></script>
                    <script src="assets/js/page/dialogs.js"></script>
                    <script src="assets/js/form/dropify.js"></script>

                    <script>
                        $('#multiselect3-all').multiselect({});
                    </script>

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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">กำหนด Admin ประจำหน่วยงาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>หน่วยงาน</label>
                            <input type="text" class="form-control" value="สำนักผู้บริหาร" readonly>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            ชื่อ-สกุล
                            <select class="custom-select">
                                <option>นายมานิต จิตต์ประไพย(เจ้าหน้าที่วิเคราะห์ระบบงานคอมพิวเตอร์)</option>

                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


<script src="../assets/bundles/lib.vendor.bundle.js"></script>

<script src="../assets/bundles/counterup.bundle.js"></script>
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/plugins/dropify/js/dropify.min.js"></script>
<script src="../assets/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<script src="../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
<script src="assets/js/form/dropify.js"></script>

<script>
    $('#multiselect3-all').multiselect({});
</script>

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