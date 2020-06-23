 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Bệnh nhân
                            <small>Tạo tài khoản mới</small>
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
                                <label>Tên</label>
                                <input value="<?=$row['patien_name']?>" class="form-control" name="user" disabled="" />
                            </div>
                            
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input value="<?=$row['phone']?>" class="form-control" name="ten"  required="" disabled />
                            </div>
                             
                             <div class="form-group text-centrer">
                               <br> <h2 > Tạo tài khoản </h2><br>


                            </div>
                             <div class="form-group">
                                <label>Tài khoản</label>
                                <input type="text" class="form-control" name="user" placeholder="Tài khoản" required=""  />
                            </div>
                             <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="pass" placeholder="Mật khẩu" required=""  />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="pass2" placeholder="Mật khẩu" required=""  />
                            </div>
                           <div style="margin-top: 30px;"></div>
                            <button type="submit" name="submit" class="btn btn-default">Cập nhật</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=admin&action=list-user">Hủy bỏ</a></button>
                        <form>


                    </div>
             
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 