 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân viên
                            <small>Sắp xếp lịch</small>
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
                                <label>Tên bệnh nhân</label>
                                <input value="<?=$row['PatientName']?>" class="form-control" required="" disabled="" />
                            </div>      
                             <div class="form-group">
                                <label>Dấu hiệu bệnh </label>
                                <input value="<?=$row['Comment']?>" class="form-control" required="" disabled=""  />
                            </div>
                              <div class="form-group">
                                <label>Thời gian đăng ký khám </label>
                                <input value="<?=$row['Time1']?>" class="form-control"  placeholder="Số điện thoại" disabled=""   /> 
                            </div>
                            <div class="form-group text-centrer">
                               <br> <h2 > Xếp lịch </h2><br>

                                

                            </div>
                             <div class="form-group">
                                <label>Bác sĩ khám</label>
                               <select class="form-control" name="mabs">
                                     <?php foreach ($bacsi as $row2) {?>
                                    <option value="<?=$row2['DoctorID']?>"><?=$row2['DoctorName']?></option>
                                  
                                    <?php } ?>

                                </select>
                            </div>
                          
                              <div class="form-group">
                                <label>Ngày gặp bắc sĩ </label>
                                <input type="date" value="<?=$row['Time1']?>" class="form-control" name="ngay" placeholder=""   />
                            </div>
                             <div class="form-group">
                                <label>Giờ gặp bắc sĩ </label>
                                <input type="number" min="0" max="23" class="form-control" name="gio" required="" placeholder="vd : 13,..."   />
                            </div>
                           <div style="margin-top: 30px;"></div>
                            <button type="submit" name="submit" class="btn btn-default">Cập nhật</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=nhanvien&action=cho-duyet">Hủy bỏ</a></button>
                        <form>


                    </div>
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 