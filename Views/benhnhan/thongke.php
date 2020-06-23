 


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
   
    <div class="row" style="margin-top: 50px;">

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-user-tie fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$info['Username']?></div>
                        <div><?=$info['PatientName']?></div>
                    </div>
                </div>
            </div>
          
                 <a href="?controller=benhnhan&action=hoso">
               <div class="panel-footer">
                   <span class="pull-left">Hồ sơ chi tiết</span>
                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
   
                   <div class="clearfix"></div>
               </div>
           </a>
           
        </div>
    </div>
     <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       <i class="far fa-calendar-alt fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right ">
                        <div class="huge"><?=$chuaxeplich?></div>
                        <div>Lịch hẹn đang chờ sắp xếp</div>
                    </div>
                </div>
            </div>
            <a href="?controller=benhnhan&action=cho-duyet">
                <div class="panel-footer">
                    <span class="pull-left">Chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                      <i class="far fa-calendar-check fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right ">
                        <div class="huge"><?=$daxeplich?></div>
                        <div>Lịch hẹn đang diễn ra</div>
                    </div>
                </div>
            </div>
            <a href="?controller=benhnhan&action=da-duyet">
                <div class="panel-footer">
                    <span class="pull-left">Chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
       <div class="panel panel-yellow">
           <div class="panel-heading">
               <div class="row">
                   <div class="col-xs-3">
                       <i class="fas fa-file-medical-alt fa-5x"></i>
                   </div>
                   <div class="col-xs-9 text-right">
                       <div class="huge"><?=$dakham?></div>
                       <div>Số lần đã khám bệnh</div>
                   </div>
               </div>
           </div>
           <a href="?controller=benhnhan&action=lich-su">
               <div class="panel-footer">
                   <span class="pull-left">Chi tiết</span>
                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
   
                   <div class="clearfix"></div>
               </div>
           </a>
       </div>
   </div> 
   

</div>
</div>
<!-- /.container-fluid -->
</div>



