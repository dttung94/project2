 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header"><?=$ten?>
                            <small>Thêm</small>
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
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tài khoản</label>
                                <input class="form-control" name="user" minlength="3" maxlength="20" placeholder="Tài khoản" required="" />
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" minlength="3" maxlength="20" name="pass" placeholder="Mật khẩu" required="" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="pass2" placeholder="Nhập lại mật khẩu"  required=""/>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>


                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->