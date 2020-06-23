 


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
                        <div class="huge">Nhân viên</div>
                        <div><?=$row['StaffName']==""?"Chưa update":$row['StaffName']?></div>
                    </div>
                </div>
            </div>
          
                 <a href="?controller=nhanvien&action=hoso">
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
                        <div class="huge"><?=$choduyet?></div>
                        <div>Đang chờ xếp lịch</div>
                    </div>
                </div>
            </div>
            <a href="?controller=nhanvien&action=cho-duyet">
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
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$dangdienra?></div>
                        <div>Lịch đang diễn ra</div>
                    </div>
                </div>
            </div>
            <a href="?controller=nhanvien&action=dang-dien-ra">
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
           <a href="?controller=nhanvien&action=da-kham">
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



