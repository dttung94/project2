 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Cập nhật thông số cá nhân
                            <!-- //<small>Sửa</small> -->
                        </h1>
                    </div>
                  
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                          <div class="con-lg-12">
                            <?php if(isset($_SESSION['thongbao1'])){ echo "<div class='alert alert-danger'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Thông báo! </strong>$_SESSION[thongbao1]!
    </div>"; unset($_SESSION['thongbao1']);};
    ?>                      
             <?php if(isset($_SESSION['thongbao2'])){ echo "<div class='alert alert-success'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Thông báo! </strong>$_SESSION[thongbao2]!
    </div>"; unset($_SESSION['thongbao2']);};
    ?>                      
                    </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Chiều cao</label>
                                <input value="<?=$row['Heigh']?>" class="form-control" name="chieucao" placeholder="vd: 1m52,..."   />
                            </div>
                            
                            <div class="form-group">
                                <label>Cân nặng</label>
                                <input value="<?=$row['Weigh']?>" class="form-control" name="cannang" placeholder="vd: 55kg"   />
                            </div>
                             
                             
                           
                            
                             <div class="form-group">
                                <label>Thông số tiểu đường </label>
                                <input type="text" value="<?=$row['Number']?>" class="form-control" name="thongso" placeholder="vd : 555"  />
                            </div>
                             
                           <div style="margin-top: 30px;"></div>
                            <button type="submit" name="submit" class="btn btn-default">Cập nhật</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=benhnhan&action=thongso">Hủy bỏ</a></button>
                        <form>


                    </div>
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 