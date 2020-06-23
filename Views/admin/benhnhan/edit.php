 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Bệnh nhân
                            <small>Sửa</small>
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
                            
                            <div class="form-group">
                                <label>Tên</label>
                                <input value="<?=$row['PatientName']?>" class="form-control" name="ten" placeholder="Tên" required=""  />
                            </div>
                             
                             <div class="form-group">
                                <label>Giới tính</label><br>
                                <label class="radio-inline">
                                    <input <?php if($row['Sex']!='Nữ') echo "checked"; ?>  name="gioitinh" value="Nam"  type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input <?php if($row['Sex']=='Nữ') echo "checked"; ?> name="gioitinh" value="Nữ" type="radio">Nữ
                                </label>
                            </div>
                           
                            
                             <div class="form-group">
                                <label>Ngày sinh </label>
                                <input type="date" value="<?=$row['Birthday']?>" class="form-control" name="ngaysinh" placeholder="Lĩnh vực" required=""  />
                            </div>
                              <div class="form-group">
                                <label>Email</label>
                                <input value="<?=$row['Email']?>" class="form-control" name="email" placeholder="Email"   />
                            </div>
                              <div class="form-group">
                                <label>Số điện thoại</label>
                               <input value="<?=$row['Phone']?>" class="form-control" name="sdt" placeholder="Số điện thoại"   />
                            </div>
                             <div class="form-group">
                                <label>Tiền sử bệnh án </label>
                                <textarea class="form-control" name="benhan"><?=$row['Disease']?></textarea> 
                            </div>
                              <div class="form-group">
                                <label>Ảnh</label>
                                <br>
                                <img src="Upload/<?=$row['Image']?>" width="100%" style="margin: 20px 0px; max-width: 700px;max-height: 500px;">
                              <input  class="" type="file" name="img">
                            </div>
                             
                           <div style="margin-top: 30px;"></div>
                            <button type="submit" name="submit" class="btn btn-default">Cập nhật</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=admin&action=list-user">Hủy bỏ</a></button>
                        <form>


                    </div>
                    <div class="col-lg-4" style=""><a style="font-size: 17px;" href="?controller=admin&action=changepass&id=<?=$row['UserID']?>"><u>Đổi mật khẩu</u></a></div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 