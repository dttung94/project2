 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch sử khám bệnh
                           
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Mô tả dấu hiệu bệnh</th> 
                                <th>Bác sĩ khám</th>
                                <th>Tư vấn của bác sĩ</th>
                                 <th>Ngày khám xong</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                                while ($row = $data2->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$i?></td>
                                        <td><?=$row['Comment']?></td>
                                        <td><a href="?controller=benhnhan&action=info-bacsi&id=<?=$row['DoctorID']?>"><?=$row['DoctorName']?></a></td>
                                        <td><?=$row['Note']?></td>
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

 