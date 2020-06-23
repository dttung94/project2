 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Xác nhận
                            <small>Đã khám</small>
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
                                <label>Bệnh nhân</label>
                                <input value="<?=$row['PatientName']?>" class="form-control" required="" disabled="" />
                            </div>      
                             <div class="form-group">
                                <label>Dấu hiệu bệnh </label>
                                <input value="<?=$row['Comment']?>" class="form-control" required="" disabled=""  />
                            </div>
                            
                              <div class="form-group">
                                <label>Tư vấn</label>
                                <textarea class="form-control" name="tuvan" rows="5"></textarea>
                            </div>
                           <div style="margin-top: 30px;"></div>
                            <button type="submit" name="submit" class="btn btn-default">Xác nhận</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=bacsi&action=dang-dien-ra">Hủy bỏ</a></button>
                        <form>


                    </div>
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 