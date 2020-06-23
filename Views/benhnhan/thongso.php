


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
   
    <div class="row" style="margin-top: 50px;">
     <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-blind fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$tuoi?></div>
                        <div>Tuổi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"> 
                      <i class="fas fa-file-signature fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$row["Heigh"]==""?"Chưa update":$row["Heigh"]?></div>
                        <div>Chiều cao</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
       <div class="panel panel-yellow">
           <div class="panel-heading">
               <div class="row">
                   <div class="col-xs-3">
                       <i class="fas fa-balance-scale fa-5x"></i>
                   </div>
                   <div class="col-xs-9 text-right">
                       <div class="huge"><?=$row["Weigh"]==""?"Chưa update":$row["Weigh"]?></div>
                       <div>Cân nặng</div>
                   </div>
               </div>
           </div>
       </div>
   </div> 
   

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-heartbeat fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$row["Number"]==""?"Chưa update":$row["Number"]?></div>
                        <div>Thông số tiểu đường</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-12 col-md-12" style="margin-top: 50px;">
         <a style="font-size: 20px;" href="?controller=benhnhan&action=edit-thongso">Cập nhật thông số cá nhân</a>
     </div>
</div>
</div>
<!-- /.container-fluid -->
</div>



