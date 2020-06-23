 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bệnh nhân
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tài khoản</th>
                         
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                 <th>SDT</th>
                                <th>Email</th>
                                 <th>Tiền sử bệnh án</th>
                            
                                <th>Thao tác</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$row['PatientID']?></td>
                                        <td><?=$row['Username']?></td>
                                    
                                         <td><?=$row['PatientName']?></td>
                                        <td><?=$row['Image']?></td>
                                        <td><?=$row['Sex']?></td>
                                         <td><?=$row['Birthday']?></td>
                                         <td><?=$row['Phone']?></td>
                                           <td><?=$row['Email']?></td>
                                         <td><?=$row['Disease']?></td>
                                       <td class="center"> <i class="fas fa-wrench fa-fw"></i><a href="?controller=nhanvien&action=edit-benhnhan&id=<?=$row['UserID']?>"> Sửa</a></td>
                                        
                                    </tr>
                           <?php  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

