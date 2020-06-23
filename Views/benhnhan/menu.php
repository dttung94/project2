 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?controller=index"><img style="margin-left: 30px;" src="Public/img/logo.png" width="50px"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class=" mt-2 rounded-circle" src="Upload/<?=$_SESSION['img']?>" width="40px" height="40px" style=";border-radius: 50%;">  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      
                           <li><a href="?controller=benhnhan&action=hoso"><i class="fa fa-user fa-fw"></i> Hồ sơ</a>
                        <li><a href="?controller=logout"><i class="fas fa-sign-out-alt fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form" style="    margin-top: 5px;">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fas fa-home fa-fw"></i></i> Trang chủ</a>
                        </li>
                     
                         <li>
                            <a href="#"><i class="fas fa-book-medical fa-fw"></i> Lịch khám<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="?controller=benhnhan&action=dat-lich">Đặt lịch  </a>
                                </li>
                                <li>
                                    <a href="?controller=benhnhan&action=cho-duyet">Đang chờ duyệt</a>
                                </li>
                                <li>
                                    <a href="?controller=benhnhan&action=da-duyet">Đang diễn ra</a>
                                </li>
                                  
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                             <a href="?controller=benhnhan&action=lich-su"><i class="fas fa-file-medical-alt fa-fw"></i> Lịch sử khám bệnh </a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                         
                           <li>
                             <a href="?controller=benhnhan&action=thongso"><i class="fas fa-chart-bar fa-fw"></i> Thông số </a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
