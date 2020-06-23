 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân viên
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>Tên</th> 
                                <th>Ảnh</th>   
                                <th>Giới tính</th>                        
                                <th>SDT</th> 
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$row['StaffID']?></td>
                                        <td><?=$row['Username']?></td>
                                        <td><?php for ($i=0; $i <strlen($row['Password']); $i++) { 
                                           echo "*";
                                        } ?></td>
                                         <td><?=$row['StaffName']?></td>
                                    <td><?=$row['Image']?></td>
                                        <td><?=$row['Sex']?></td>          
                                          <td><?=$row['Phone']?></td>
                                       <td class="center"> <i class="fas fa-wrench fa-fw"></i><a href="?controller=admin&action=edit-nhanvien&id=<?=$row['UserID']?>"> Sửa</a></td>
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i></i> <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="?controller=admin&action=xoa-user&role=nhanvien&id=<?=$row['UserID']?>">Xóa</a></td>
                                    </tr>
                           <?php  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

