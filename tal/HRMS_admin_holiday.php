<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>WU HRMS : Walailak University</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css">
<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/plugins/dropify/css/dropify.min.css">
<link rel="stylesheet" href="../assets/plugins/bootstrap-multiselect/bootstrap-multiselect.css">

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

    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-opensans">
                            <span class="custom-control-label">Open Sans Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat" checked="">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-roboto">
                            <span class="custom-control-label">Robot Google Font</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                    <div class="custom-controls-stacked arrow_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-a">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-c" checked="">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                    <div class="custom-controls-stacked list_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar" checked="">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group">
                    <label class="d-block">Storage <span class="float-right">77%</span></label>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Default Theme</p>
                        <a href="../main/index.html"><img src="../assets/images/themes/default.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Night Mode Theme</p>
                        <a href="../dark/index.html"><img src="../assets/images/themes/dark.png" class="img-fluid" /></a>
                    </li>                    
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="../rtl/index.html"><img src="../assets/images/themes/rtl.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Theme Version2</p>
                        <a href="../theme2/index.html"><img src="../assets/images/themes/theme2.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Theme Version3</p>
                        <a href="../theme3/index.html"><img src="../assets/images/themes/theme3.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Theme Version4</p>
                        <a href="../theme4/index.html"><img src="../assets/images/themes/theme4.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Horizontal Version</p>
                        <a href="../horizontal/index.html"><img src="../assets/images/themes/horizontal.png" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="user_div">
        <h5 class="brand-name mb-4">Epic HR<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img class="avatar avatar-xl mr-3" src="../assets/images/sm/avatar1.jpg" alt="avatar">
                    <div class="media-body">
                        <h5 class="m-0">Sara Hopkins</h5>
                        <p class="text-muted mb-0">Webdeveloper</p>
                        <ul class="social-links list-inline mb-0 mt-2">
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Statistics</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>                                
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <label class="mb-0">Balance</label>
                            <h4 class="font-30 font-weight-bold">$545</h4>
                        </div>
                        <div class="col-6 pb-3">
                            <label class="mb-0">Growth</label>
                            <h4 class="font-30 font-weight-bold">27%</h4>
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="d-block">Total Income<span class="float-right">77%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Friends</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>                                
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">                
                <ul class="right_chat list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Donald Gardner</span>
                                    <span class="message">Designer, Blogger</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Wendy Keen</span>
                                    <span class="message">Java Developer</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Matt Rosales</span>
                                    <span class="message">CEO, Epic Theme</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>                      
                </ul>
            </div>
        </div>
        <div class="card b-none">
            <ul class="list-group">
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-blue"><i class="fa fa-credit-card"></i> </div>
                    <div class="ml-3">
                        <div>+$29 New sale</div>
                        <a href="javascript:void(0)">Admin Template</a>
                        <div class="text-muted font-12">5 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-pink"><i class="fa fa-upload"></i> </div>
                    <div class="ml-3">
                        <div>Project Update</div>
                        <a href="javascript:void(0)">New HTML page</a>
                        <div class="text-muted font-12">10 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-teal"><i class="fa fa-file-word-o"></i> </div>
                    <div class="ml-3">
                        <div>You edited the file</div>
                        <a href="javascript:void(0)">reposrt.doc</a>
                        <div class="text-muted font-12">11 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-cyan"><i class="fa fa-user"></i> </div>
                    <div class="ml-3">
                        <div>New user</div>
                        <a href="javascript:void(0)">Puffin web - view</a>
                        <div class="text-muted font-12">17 min ago</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
	<?php include "menu.php";?>

    <div class="page">
        <div id="page_top" class="section-body ">
            <div class="container-fluid">
                    <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="Payroll-tab" data-toggle="tab" href="#Payroll-Salary">ตั้งค่ากำหนดวันหยุดประจำปี</a></li>
                    </ul>
                    <div class="header-action">
                        <a type="button" class="btn btn-primary" href="HRMS_admin_holiday_form.php"><i class="fe fe-plus mr-2"></i>Add</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="Payroll-Salary" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <h6>วันหยุดทั้งหมดของปีงบประมาณนี้</h6>
                                    <h1 class="pt-3"><span class="counter">111</span></h1>
                                    <span><span class="text-danger mr-2"> 9</span> วันในเดือนนี้</span>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <h6>วันหยุดประจำสัปดาห์</h6>
                                    <h1 class="pt-3"><span class="counter">56</span></h1>
                                    <span><span class="text-danger mr-2"> 8</span> วันในเดือนนี้</span>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <h6>วันหยุดตามประเพณี</h6>
                                    <h1 class="pt-3"><span class="counter">18</span></h1>
                                    <span><span class="text-danger mr-2"> 2</span> วันในเดือนนี้</span>
                                    </div>
                                </div>
                            </div>
                        	      <div class="col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <h6>วันหยุดกรณีพิเศษ</h6>
                                    <h1 class="pt-3"><span class="counter">4</span></h1>
                                    <span><span class="text-danger mr-2"> 0</span> วันในเดือนนี้</span>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <div class="card-options">
                                    <form>
                                        <div class="input-group">  
                                        
                        <select class="custom-select">
                            <option>ประเภทวันหยุด</option>
                            <option>วันหยุดประจำสัปดาห์</option>
                            <option>วันหยุดตามประเพณี</option>
                            <option>วันหยุดกรณีพิเศษ</option>
                        </select>
                                           <select class="custom-select">
                            <option>ปีงบประมาณ</option>
                            <option>2564</option>
                            <option>2565</option>
                        </select>
                                            <span class="input-group-btn ml-2"><button class="btn btn-icon" type="submit"><span class="fe fe-search"></span></button></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-vcenter text-nowrap">
                                        <thead>
                                            <tr> 
                                                <th style="width: 20px;">#</th>
                                                <th class="w60">ปีงบประมาณ</th>
                                                <th>วันที่</th>
                                                <th class="w200">วัน</th>
                                                <th class="w60">ประเภทวันหยุด</th>
                                                <th class="w200">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span>01</span></td>
                                                <td>2564	</td>
                                                <td>วันศุกร์ที่ 1 มกราคม 2564	</td>
                                                <td><div class="ml-1"><a href="javascript:void(0);" title="">วันขึ้นปีใหม่</a><p class="mb-0">New year's day</p> </div></td>
                                                <td><span class="tag tag-success ">วันหยุดตามประเพณี</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-icon" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
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
                    <div class="tab-pane fade" id="Payroll-Payslip" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-4">
                                    <div class="mr-3">
                                        <img class="rounded" src="../assets/images/xs/avatar4.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="content">
                                            <span><strong>Order ID: </strong> C09</span>
                                            <p class="h5">John Smith <small class="float-right badge badge-primary">Jun 15, 2019</small></p>
                                            <p>795 Folsom Ave, Suite 546 San Francisco, CA 54656</p>
                                        </div>
                                        <nav class="d-flex text-muted">
                                            <a href="javascript:void(0);" class="icon mr-3"><i class="icon-envelope text-info"></i></a>
                                            <a href="javascript:void(0);" class="icon mr-3"><i class="icon-printer"></i></a>
                                        </nav>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-vcenter text-nowrap">
                                        <thead class="dark-mode">
                                            <tr>
                                                <th class="w60">#</th>
                                                <th></th>
                                                <th class="w100">Earnings</th>
                                                <th class="w100">Deductions</th>
                                                <th class="w100 text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>
                                                    <span>Basic Salary</span>
                                                </td>
                                                <td>$1,500</td>
                                                <td>-</td>
                                                <td class="text-right">$380</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>
                                                    <span>House Rent Allowance (H.R.A.)</span>
                                                </td>
                                                <td>$62</td>
                                                <td>-</td>
                                                <td class="text-right">$250</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>
                                                    <span>Tax Deducted at Source (T.D.S.)</span>
                                                </td>
                                                <td>-</td>
                                                <td>$80</td>
                                                <td class="text-right">$120</td>
                                            </tr>                                                
                                            <tr>
                                                <td>04</td>
                                                <td>
                                                    <span>C/Bank Loan</span>
                                                </td>
                                                <td>-</td>
                                                <td>$120</td>
                                                <td class="text-right">$120</td>
                                            </tr>                                                
                                            <tr>
                                                <td>05</td>
                                                <td>
                                                    <span>Other Allowance</span>
                                                </td>
                                                <td>$121</td>
                                                <td>-</td>
                                                <td class="text-right">$120</td>
                                            </tr>                                                
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2"><span><strong>Note:</strong> Ipsum is simply dummy text of the printing and typesetting industry.</span></td>
                                                <td>$1683</td>
                                                <td>$200</td>
                                                <td class="text-right">
                                                    <strong class="text-success">$1483.00</strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button class="btn btn-info float-right"><i class="icon-printer"></i> Print</button>
                                </div>
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
$('#multiselect3-all').multiselect({
});
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
