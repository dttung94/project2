 


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
   
    <div class="row" style="margin-top: 50px;">
     <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-user-cog fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$admin?></div>
                        <div>Số lượng admin</div>
                    </div>
                </div>
            </div>
            <a href="?controller=admin&action=list-admin">
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
                       <i class="fas fa-user-tie fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$nhanvien?></div>
                        <div>Số lượng nhân viên</div>
                    </div>
                </div>
            </div>
            <a href="?controller=admin&action=list-nhanvien">
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
                       <i class="fas fa-user-nurse fa-5x"></i>
                   </div>
                   <div class="col-xs-9 text-right">
                       <div class="huge"><?=$bacsi?></div>
                       <div>Số lượng bác sĩ</div>
                   </div>
               </div>
           </div>
           <a href="?controller=admin&action=list-bacsi">
               <div class="panel-footer">
                   <span class="pull-left">Chi tiết</span>
                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
   
                   <div class="clearfix"></div>
               </div>
           </a>
       </div>
   </div> 
   

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-user-injured fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$benhnhan?></div>
                        <div>Số lượng bệnh nhân</div>
                    </div>
                </div>
            </div>
            <a href="?controller=admin&action=list-benhnhan">
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



