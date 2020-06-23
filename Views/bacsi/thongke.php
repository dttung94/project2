 


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
   
    <div class="row" style="margin-top: 50px;">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-user-nurse fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Bác sĩ</div>
                        <div><?=$row['DoctorName']==""?"Chưa cập nhật tên":$row['DoctorName']?></div>
                    </div>
                </div>
            </div>
          
                 <a href="?controller=bacsi&action=hoso">
               <div class="panel-footer">
                   <span class="pull-left">Cập nhật hồ sơ</span>
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
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$dangdienra?></div>
                        <div>Đang chờ khám</div>
                    </div>
                </div>
            </div>
            <a href="?controller=bacsi&action=dang-dien-ra">
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
                       <div>Đã khám xong</div>
                   </div>
               </div>
           </div>
           <a href="?controller=bacsi&action=da-kham">
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



