 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch hẹn
                            <small>Đang chờ khám</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Bệnh nhân</th>
                                <th>SDT</th>   
                                <th>Giới tính</th>                        
                                <th>Dấu hiệu của bệnh</th> 
                                <th>Nhân viên sắp xếp</th> 
                                <th>Thời gian đăng ký khám</th>
                                <th>Thời gian đã khám</th>
                                <th>Tư vấn</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$i?></td>
                                        <td><a href="?controller=bacsi&action=info-benhnhan&id=<?=$row['PatientID']?>"><?=$row['PatientName']?></a></td>
                                         <td><?=$row['Phone']?></td>
                                          <td><?=$row['Sex']?></td>
                                        <td><?=$row['Comment']?></td>          
                                          <td><?=$row['StaffName']?></td>
                                            <td><?=$row['Time2']?></td>
                                            <td><?=date( "h:t:s m/d/Y   ", strtotime($row['Time']))?></td>
                                          <td><?=$row['Note']?></td>
                                       
                                    </tr>
                           <?php $i++;  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
       
