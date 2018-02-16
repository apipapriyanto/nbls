<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Babastudio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- App css -->
  {{--  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />  --}}

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <script src="assets/js/modernizr.min.js"></script>

</head>


<body>


  <!-- Navigation Bar-->
  <header id="topnav">
    <div class="topbar-main">
      <div class="container">

        <nav class="navbar navbar-expand-md navbar-dark">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="">
                      <img src="assets/images/nbls-logo.png" alt="" height="30" class="logo-lg">
                      <img src="assets/images/nbls-logo.png" alt="" height="34" class="logo-sm">
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Cara Penggunaan <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Kursus
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </li>
               <li class="nav-item">
                 <div class="input-group">

                   <input type="text" class="form-control" placeholder="search">
                     <span class="input-group-btn">
                              <button class="btn btn-default form-control" type="button"><i class="fa fa-search"></i></button>
                      </span>
                 </div>
               </li>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown notification-list">
                      <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                              <i class="md-shopping-cart noti-icon"></i>
                                                              <span class="badge badge-pink noti-icon-badge">4</span>
                                                          </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                          <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                          <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                          <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                          <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                                                  View All
                                                              </a>

                      </div>
                    </li>

                <li class="nav-item dropdown notification-list">
                      <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                                                                      <i class="md-email noti-icon"></i>
                                                                                                                      <span class="badge badge-pink noti-icon-badge">4</span>
                                                                                                                  </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                          <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                          <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                          <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                          <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                                                                                                          View All
                                                                                                                      </a>

                      </div>
                    </li>

                <li class="nav-item dropdown notification-list">
                      <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                                                                      <i class="md-notifications noti-icon"></i>
                                                                                                                      <span class="badge badge-pink noti-icon-badge">4</span>
                                                                                                                  </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                          <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                          <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                          <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                          <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                                                                                                          View All
                                                                                                                      </a>

                      </div>
                    </li>

                <li class="nav-item dropdown notification-list item-right">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                                        </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                                            </a>

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                                            </a>

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                                            </a>

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                                            </a>

                    </div>
                  </li>
              </ul>
              <!-- end menu-extras -->
            </ul>
          </div>
        </nav>



        <div class="clearfix"></div>

      </div>
      <!-- end container -->
    </div>
    <!-- end topbar-main -->

  </header>
  <!-- End Navigation Bar-->

  <div class="wrapper">
        <div class="container">
            <div class="row">
            {{--  content kanan  --}}
            <div class="col-md-4 col-lg-3">
                    <div class="profile-detail card-box">
                      <div>
                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt="profile-image">
                              <h5 class="text-primary">BEGINER</h5>
                              <h4>Andy Kennedy</h4>
                              <h6 class="text-muted">Pro Elite WebMaster</h6>
                              <hr>
                      </div>
          
                    <!-- </div>
          
                    <div class="card-box"> -->
                      
      
                      <div id="accordion1" class="">
                          <div class="container">
                            <div class="">
                                  <div class="panel-heading">
                                    <h6 class="panel-title" style="padding: 0;">
                                      <a class="collapsed " href="#dashboard" data-toggle="collapse" data-parent="#accordion1">
      
                                          <h4 class=" header-title text-left"> <i class="text-primary fa fa-tachometer"></i> <b class="text-muted">My Dashboard</b></h4>
                                          <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                                      </a>
      
                                    </h6>
                                  </div>
                              <div id="dashboard" class="panel-collapse collapse text-left" style="height: 0px;">
                                <span>isinya</span>
                            </div>
                          </div>
      
                          <div class="">
                                <div class="panel-heading">
                                  <h6 class="panel-title" style="padding: 0;">
                                    <a class="collapsed  " href="#course" data-toggle="collapse" data-parent="#accordion1">
      
                                      <h4 class=" header-title text-left"> <i class="fa fa-book text-primary"></i> <b class="text-muted">Course</b></h4>
                                        <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                                    </a>
      
                                  </h6>
                                </div>
                            <div id="course" class="panel-collapse collapse" style="height: 0px;">
      
                              <div class="timeline-content">
                                <div class="timeline-2">
                                  <div class="time-item">
                                      <div class="item-info">
                                          <div class="text-primary"><small>My Course</small></div>
                                      </div>
                                  </div>
      
                                  <div class="time-item">
                                      <div class="item-info">
                                          <div class="text-primary"><small>My Performance</small></div>
                                      </div>
                                  </div>
      
                                  <div class="time-item">
                                      <div class="item-info">
                                          <div class="text-primary"><small>Ujian</small> </div>
                                      </div>
                                  </div>
      
                                  <div class="time-item">
                                      <div class="item-info">
                                          <div class="text-primary"><small>E-Certificate</small></div>
                                      </div>
                                  </div>
      
                                </div>
                              </div>
      
                              </div>
                          </div>
      
                        <div class="">
                              <div class="panel-heading">
                                <h6 class="panel-title" style="padding: 0;">
                                  <a class="collapsed " href="#hasil" data-toggle="collapse" data-parent="#accordion1">
      
                                      <h4 class=" header-title text-left"> <i class="fa fa-certificate text-primary"></i> <b class="text-muted">Hasil Karya</b></h4>
                                      <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                                  </a>
      
                                </h6>
                              </div>
                          <div id="hasil" class="panel-collapse collapse text-left" style="height: 0px;">
                            <span>isinya</span>
                        </div>
                      </div>
      
                      <div class="">
                            <div class="panel-heading">
                              <h6 class="panel-title" style="padding: 0;">
                                <a class="collapsed " href="#order" data-toggle="collapse" data-parent="#accordion1">
      
                                    <h4 class=" header-title text-left"> <i class="fa fa-undo text-primary"></i> <b class="text-muted">Order History</b></h4>
                                    <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                                </a>
      
                              </h6>
                              </div>
                          <div id="order" class="panel-collapse collapse text-left" style="height: 0px;">
                          <span>isinya</span>
                        </div>
                      </div>
      
                      <div class="">
                            <div class="panel-heading">
                              <h6 class="panel-title" style="padding: 0;">
                                <a class="collapsed " href="#point" data-toggle="collapse" data-parent="#accordion1">
      
                                    <h4 class=" header-title text-left"> <i class="fa fa-credit-card text-primary"></i> <b class="text-muted">Tukar Point</b></h4>
                                    <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                                </a>
      
                              </h6>
                            </div>
                        <div id="point" class="panel-collapse collapse text-left" style="height: 0px;">
                            <span>isinya</span>
                      </div>
                    </div>
      
                      <div class="">
                            <div class="panel-heading">
                              <h6 class="panel-title" style="padding: 0;">
                                <a class="collapsed " href="#badge" data-toggle="collapse" data-parent="#accordion1">
      
                                    <h4 class=" header-title text-left"> <i class="fa fa-cog text-primary"></i> <b class="text-muted">My Badge</b></h4>
                                    <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                                </a>
      
                              </h6>
                            </div>
                        <div id="badge" class="panel-collapse collapse text-left" style="height: 0px;">
                              <span>isinya</span>
                      </div>
                    </div>
      
                    <div class="">
                          <div class="panel-heading">
                            <h6 class="panel-title" style="padding: 0;">
                              <a class="collapsed " href="#event" data-toggle="collapse" data-parent="#accordion1">
      
                                  <h4 class=" header-title text-left"> <i class="fa fa-calendar text-primary"></i> <b class="text-muted">Event</b></h4>
                                  <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                              </a>
      
                            </h6>
                          </div>
                      <div id="event" class="panel-collapse collapse text-left" style="height: 0px;">
                      <span>isinya</span>
                    </div>
                  </div>
      
                  <div class="">
                        <div class="panel-heading">
                          <h6 class="panel-title" style="padding: 0;">
                            <a class="collapsed " href="#booking" data-toggle="collapse" data-parent="#accordion1">
      
                                <h4 class=" header-title text-left"> <i class="fa fa-list-ul text-primary"></i> <b class="text-muted">Booking</b></h4>
                                <!-- <span class="media-meta pull-right text-primary mt-2"> <i class="fa fa-chevron-right"></i> </span> -->
                            </a>
      
                          </h6>
                        </div>
                    <div id="booking" class="panel-collapse collapse text-left" style="height: 0px;">
                          <span>isinya</span>
                    </div>
                  </div>
                </div>      <!-- end container -->
              </div>
                              <hr>
      
             </div>
             </div>
            {{--  end content kanan  --}}

            {{--  content tengah  --}}
                <div class="col-md-6">
                    @yield('content_tengah')
                </div>
            {{--  end content tengah  --}}


            {{--  content kiri  --}}
                <div class="col-md-4 col-lg-3">
                        <!-- point -->
                              <div class="card-box">
                                <h2 class="m-t-0 m-b-20 header-title"><b>Point Saya <span class="text-muted">(154)</span></b></h2>
                                <hr>
                    
                    
                                  <!-- <div class="row"> -->
                                    <a class="row" href="#">
                                        <div class="col-md-4">
                                          <div class=""><img src="assets/images/brand/TOSCA.png" class="w-75" alt="point-saya"></div>
                                        </div>
                    
                                        <div class="col-md-6 p-l-0 p-r-0">
                                              <strong><p class="text-primary m-0">BEGINER</p></strong>
                                            <div class="progress mt-2">
                                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                      </a>
                                    <!-- </div> -->
                    
                              </div>
                        <!-- end point -->
                    
                    
                        <!-- peringkat -->
                            <div class="card-box m-t-0">
                                    <h2 class="m-t-0 m-b-20 header-title"><b>Peringkat</b></h2>
                                <hr>
                                    <div class="dropdown text-muted">
                                        <a class="" href="#pilih1" data-toggle="collapse" aria-expanded="false" data-parent="#accordion1">
                                        Minggu ini
                                        <i class="ion-chevron-down"></i>
                                        </a>
                                            bulan ini
                                        <hr>
            
            
                                        <div id="pilih1" class="panel-collapse collapse show">
                                        <!-- daftar nama -->
                                            <div class="row pt-1">
                                                <div class="col-md-1 p-0">
                                                    1
                                                </div>
                                                <div class="col-md-3 p-0">
                                                    <img src="assets/images/users/avatar-1.jpg" class="thumb-md" alt="friend">
                                                </div>
                                                <div class="col-md-6 p-0">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <small class="p-0">Vanesia</small>
                                                        <br>
                                                        <small>update in Ags 24</small>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-2 p-0">
                                                <!-- <i class=""></i> -->
                                                    <img src="assets/images/brand/HIJAU.png" class="w-50 img-fluid" alt="point-saya">
                                                    <small>12345</small>
                                                </div>
                                            </div>
                                        <!-- end daftar nama -->
            
                                         <!-- daftar nama -->
                                            <div class="row pt-1">
                                                <div class="col-md-1 p-0">
                                                    2
                                                </div>
                                                <div class="col-md-3 p-0">
                                                    <img src="assets/images/users/avatar-1.jpg" class="thumb-md" alt="friend">
                                                </div>
                                                <div class="col-md-6 p-0">
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                        <small class="p-0">Vanesia</small>
                                                        <br>
                                                        <small>update in Ags 24</small>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 p-0">
                                                        <!-- <i class=""></i> -->
                                                        <img src="assets/images/brand/ORANGE.png" class="w-50" alt="point-saya">
                                                        <small>12345</small>
                                                </div>
                                            </div>
                                         <!-- end daftar nama -->
            
                                        <!-- daftar nama -->
                                                <div class="row pt-1">
                                                <div class="col-md-1 p-0">
                                                    3
                                                    </div>
                                                <div class="col-md-3 p-0">
                                                    <img src="assets/images/users/avatar-1.jpg" class="thumb-md" alt="friend">
                                                </div>
                                                <div class="col-md-6 p-0">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <small class="p-0">Vanesia</small>
                                                        <br>
                                                        <small>update in Ags 24</small>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2 p-0">
                                                    <!-- <i class=""></i> -->
                                                    <img src="assets/images/brand/BLUE.png" class="w-50" alt="point-saya">
                                                    <small>12345</small>
                                                 </div>
                                            </div>
                                        <!-- end daftar nama -->
        
                                        <!-- daftar nama -->
                                            <div class="row pt-1">
                                                <div class="col-md-1 p-0">
                                                    4
                                                </div>
                                                <div class="col-md-3 p-0">
                                                    <img src="assets/images/users/avatar-1.jpg" class="thumb-md" alt="friend">
                                                </div>
                                                <div class="col-md-6 p-0">
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                        <small class="p-0">Vanesia</small>
                                                        <br>
                                                        <small>update in Ags 24</small>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 p-0">
                                                    <!-- <i class=""></i> -->
                                                    <img src="assets/images/brand/MERAH.png" class="w-50" alt="point-saya">
                                                    <small>12345</small>
                                                </div>
                                            </div>
                                        <!-- end daftar nama -->
                                        </div>
            
            
                                    </div>
            
            
                                </div>
                    
                          <!-- end peringkta -->
                    
                              <div class="card">
                                <div class="card-body">
                                  <h2 class="header-title"><b>Up Coming Event</b></h2>
                                </div>
                                  <ul class="sortable-list taskList list-unstyled" id="completed">
                                      <li class="task-warning m-0" id="task14">
                                          <div class="row">
                                            <div class="col-md-3">
                                              23
                                            </div>
                                            <div class="col-md-9">
                                              <small class="text-muted">Design Komunikasi Visual with inst, Nino Wibowo</small>
                                            </div>
                                          </div>
                                      </li>
                                      <li class="task-success m-0" id="task15">
                                        <div class="row">
                                          <div class="col-md-3">
                                            34
                                          </div>
                                          <div class="col-md-9">
                                            <small class="text-muted">Design Komunikasi Visual with inst, Nino Wibowo</small>
                                          </div>
                                        </div>
                                      </li>
                    
                                      <li class="task-secondary m-0" id="task15">
                                        <div class="row">
                                          <div class="col-md-3">
                                            34
                                          </div>
                                          <div class="col-md-9">
                                            <small class="text-muted">Design Komunikasi Visual with inst, Nino Wibowo</small>
                                          </div>
                                        </div>
                                      </li>
                                  </ul>
                    
                                  <div class="card-body text-center">
                                    <button class="btn btn-primary">ADD EVENT</button>
                                  </div>
                    
                              </div>
                    
                            </div>
            {{--  end content kiri  --}}

            </div>
        </div>
    </div>

<!-- Footer -->
<footer class="footer fixed-bottom bg-dark mt-50">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h5 class="text-white">NBLS</h5>
              <img src="assets/images/nbls-logo.png" class="img-responsive" alt="">
              <br>
              <p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <span class="fa fa-phone mt-1 text-muted">  021 121392 2424</span><br>
              <span class="fa fa-envelope mt-1 text-muted">  admin@babastudio.com</span>
    
            </div>
    
            <div class="col-md-3">
              <h5 class="text-white">LINK MAP</h5>
              <ul>
                <li class="mt-2"><a href="/">Beranda</a></li>
                <li class="mt-2"><a href="/">Tentang Kami</a></li>
                <li class="mt-2"><a href="/">Cara Pengunaan</a></li>
                <li class="mt-2"><a href="/">Kursus</a></li>
                <li class="mt-2"><a href="/">Persyaratan Pengguna</a></li>
                <li class="mt-2"><a href="/">Kebijakan Privasi</a></li>
                <li class="mt-2"><a href="/">Blog</a></li>
              </ul>
            </div>
    
            <div class="col-md-3">
              <h5 class="text-white">GET NEWSLETTER</h5>
              <p>Above the law sunny days sweeping the clouds away lateful trip where.</p>
              <!-- <input type="text" name="" class="form-control" value="" placeholder="Your email address"><button class="btn btn-primary"><span class="fa fa-send"></span></button> -->
              <div class="input-group">
    
                <input type="text" class="form-control">
                <span class="input-group-btn">
                            <button class="btn btn-default form-control" type="button"><i class="fa fa-send"></i></button>
                          </span>
              </div>
    
              <p>
                Your information are safe with us.
              </p>
              <button type="button" class="btn btn-facebook waves-effect waves-light">
                            <i class="fa fa-facebook"></i>
                        </button>
    
              <button type="button" class="btn btn-twitter waves-effect waves-light">
                            <i class="fa fa-twitter"></i>
                        </button>
    
              <button type="button" class="btn btn-danger waves-effect waves-light">
                            <i class="fa fa-google-plus"></i>
                        </button>
    
    
            </div>
            <div class="col-md-3">
              <h5 class="text-white">OUR INSTRUCTOR</h5>
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
              <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-responsive m-1" width="70px" height="70">
            </div>
          </div>
        </div>
        <!-- End Of container -->
    
        <hr>
        <div class="container">
          <div class="row">
            <p>Copyright 2019. NBLS Hybirrd Learning All Right Reserverd.</p>
          </div>
        </div>
      </footer>
      <!-- End Footer -->
    
    
      <!-- jQuery  -->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <!-- Popper for Bootstrap -->
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/waves.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>    
      <!-- App js -->
      <script src="{{ asset('assets/js/jquery.core.js') }}"></script>  
      <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
    </body>
    
    </html>
    