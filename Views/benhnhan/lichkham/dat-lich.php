 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Đặt lịch khám
                           <!--  <small>Cập nhật</small> -->
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
                                <label>Số điện thoại</label>
                                <input value="<?=$row['Phone']?>" class="form-control" name="sdt" placeholder="Số điện thoại" required=""  />
                            </div>
                            
                            <div class="form-group">
                                <label>Ngày khám</label>
                                <input id="date" type="date" class="form-control" name="date"  required=""  />
                            </div>
                             
                            
                           
                            <div class="form-group">
                                <label>Mô tả dấu hiệu bệnh</label>
                                <textarea  class="form-control" name="mota"  placeholder="vd: Đau bụng liên tục ,..." required="" rows="5"></textarea> 
                            </div>
                            
                           <div style="margin-top: 30px;"></div>
                            <button type="submit" name="submit" class="btn btn-default" onclick="return check();">Gửi</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=index">Hủy bỏ</a></button>
                        <form>


                    </div>
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script type="text/javascript">
            function check() {
               var date1= document.getElementById("date").value;
               var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();

                today = yyyy + '-' + mm + '-' + dd;
                
               if(date1<today){
                   swal("Thông báo!", "Vui lòng chọn ngày từ hôm nay trở đi ");
                     return false;
               }else{
                    return true;
               }
            }
        </script>
        <!-- /#page-wrapper -->
                 