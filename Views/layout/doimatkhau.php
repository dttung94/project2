 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header"><?=$row['Username']?>
                            <small>Đổi mật khẩu</small>
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
                                <label>Tài khoản</label>
                                <input value="<?=$row['Username']?>" class="form-control" name="user" placeholder="Tài khoản" required="" disabled="" />
                            </div>
                            
                           <div class="form-group none"  >
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control input" minlength="3" name="pass" placeholder="Nhập mật khẩu mới"   />
                            </div>
                           <div class="form-group none" >
                                <label>Nhập lại mật khẩu</label>
                                <input  type="password" class=form-control input" minlength="3" name="pass2" placeholder="Nhập lại mật khẩu mới" />
                            </div>
                             
                           <div style="margin-top: 30px;"></div>
                            <button type="submit" name="submit" class="btn btn-default">Cập nhật</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=index">Hủy bỏ</a></button>
                        <form>


                    </div>
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 