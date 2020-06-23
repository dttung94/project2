 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch hẹn
                            <small>Đang diễn ra</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên bệnh nhân</th>
                                
                                <th>SDT</th>   
                                <th>Giới tính</th>                        
                                <th>Dấu hiệu của bệnh</th> 
                                <th>Nhân viên sắp xếp</th> 
                                  <th>Bác sĩ khám</th>
                                <th>Thời gian khám</th> 
                              
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$i?></td>
                                        <td><?=$row['PatientName']?></td>
                                         <td><?=$row['Phone']?></td>
                                          <td><?=$row['Sex']?></td>
                                        <td><?=$row['Comment']?></td>          
                                          <td><?=$row['StaffName']?></td>
                                            <td><?=$row['DoctorName']?></td>
                                            <td><?=$row['Time2']?></td>
                                      
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i></i> <a onclick="huy(<?=$row['ArrangeID']?>)" style="cursor: pointer;">Xếp lại</a></td>
                                    </tr>
                           <?php $i++;  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
         <script type="text/javascript">
                function huy(id) {
                  swal({
              title: "Cảnh báo",
              text: "Bạn có chắc chắn muốn xếp lại lịch hẹn ?",
              icon: "warning",
              buttons: true,
                              dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                        window.location.assign('?controller=nhanvien&action=xep-lai&id='+id);
                        
                      } else {
                        
                      }
                    }); return false;
                }
            </script>
