<!--
Author: Mr. Hakim Mudor
FileName: notificationList.php
Desc: Notify List
Created:  Tue Mar 16 2021
-->

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>WU HRMS : Walailak University</title>

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
        <div id="header_top" class="header_top">
            <div class="container">
                <div class="hleft">
                    <a class="header-brand" href="#"><i class="fe fe-command brand-logo"></i></a>
                    <!-- <div class="dropdown">
                    <a href="page-search.html" class="nav-link icon"><i class="fa fa-search"></i></a>                    
                    <a href="app-calendar.html"  class="nav-link icon app_inbox"><i class="fa fa-calendar"></i></a>
                    <a href="app-contact.html"  class="nav-link icon xs-hide"><i class="fa fa-id-card-o"></i></a>
                    <a href="app-chat.html"  class="nav-link icon xs-hide"><i class="fa fa-comments-o"></i></a>
                    <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fa fa-folder-o"></i></a>
                </div> -->
                </div>
                <div class="hright">
                    <div class="dropdown">
                        <!--      <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fa fa-paint-brush" data-toggle="tooltip" data-placement="right" title="Themes"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin" data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="../assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a> -->
                        <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php include "menu.php"; ?>

        <div class="page">
            <div id="page_top" class="section-body ">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="left">
                            <h1 class="page-title">Announcement</h1>
                        </div>
                        <div class="right">

    <div class="notification d-flex">

        <div class="dropdown d-flex">
            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success nav-unread"></span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <ul class="list-unstyled feeds_widget">

                    <li>
                        <div class="feeds-left"><i class="fa fa-check"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-danger"><span class="badge badge-success" style="min-height: 8px;display: inline-block;min-width: 5px;box-shadow: 0 0 0 rgb(67 74 84 / 90%);animation: pulse 2s infinite;font-size: 60%;"></span> <a href="notificationDetail.php">ใบลาอนุมัติแล้ว</a> <small class="float-right text-muted">11:05</small></h4>
                            <small>ใบลาพักผ่อน #L0013121 อนุมัติแล้ว</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-danger"><span class="badge badge-success" style="min-height: 8px;display: inline-block;min-width: 5px;box-shadow: 0 0 0 rgb(67 74 84 / 90%);animation: pulse 2s infinite;font-size: 60%;"></span> <a href="notificationDetail.php">มีบุคลากรใหม่ในหน่วยงาน</a> <small class="float-right text-muted">10:45</small></h4>
                            <small>ทำความรู้จัก ต้อนรับน้องใหม่ในหน่วยงานของท่าน</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-link"><a href="notificationDetail.php">การเงินได้รับใบเบิกสวัสฯแล้ว</a> <small class="float-right text-muted">Today</small></h4>
                            <small>อยู่ในขั้นตอนการตรวจสอบความถูกต้อง</small>
                        </div>
                    </li>

                </ul>
                <div class="dropdown-divider"></div>
                <a href="notificationList.php" class="dropdown-item text-center text-muted-dark readall">Read more</a>
            </div>
        </div>
        <div class="dropdown d-flex">
            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"> Asst Prof. Sorndee Rakwalailak</i></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" href="../per/HRMS_1_4_edit_personal_1.php"><i class="dropdown-icon fe fe-user"></i> Edit profile</a> 
                <a class="dropdown-item" href="../cfg/index.php"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>


            <div class="section-body mt-3">
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                           
                        </div>

						<div class="card">
                            <div class="card-header">
                                <h3 class="card-title">General announcement</h3>                               
                            </div>
                            <table class="table card-table mt-2">
                                <tbody>
                                    <tr>
                                        <td class="width45"><span class="avatar avatar-green"><i class="fa fa-newspaper-o"></i></span></td>
                                        <td>
                                            <p class="mb-0"><a href="#">Announcement of Walailak University on Suspension of Classes Due to the Spread of Covid-19</a></p>
                                            <span class="text-muted font-13">Publish date: 12/03/2021 - Viewed : 230 </span>
                                        </td>
                                       
                                    </tr>
                                  
                     
                                </tbody>
                            </table>                        
							<div class="mt-20">
                            <a href="indexnews.php"class="float-right">Read more <i class="fa fa-arrow-circle-o-right"></i></a> 
                        </div>
                        </div>


                    </div>
                </div>    

        </div>
              </div>    
</div>
    </div>    
</div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ข้อมูลพนักงาน</h5>
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