 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch sử đã khám bệnh
                           
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên bệnh nhân</th>
                                <th>Mã bệnh nhân</th>
                                <th>Mô tả dấu hiệu bệnh</th> 
                                <th>Bác sĩ khám</th>
                                <th>Mã số bác sĩ</th>
                                 <th>Ngày khám xong</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                                while ($row = $data2->fetch_assoc()) { ?>
                                   
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$i?></td>
                                         <th><?=$row['PatientName']?></th>
                                         <th><?=$row['PatientID']?></th>
                                        <td><?=$row['Comment']?></td>
                                        <td><?=$row['DoctorName']?></td>
                                        <td><?=$row['DoctorID']?></td>
                                        <td><?=date( " m/d/Y h:t:s  ", strtotime($row['Time']))?></td>
                                      
                                         
                                    </tr>
                                   
                           <?php  $i++;  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

 