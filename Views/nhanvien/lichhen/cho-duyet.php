 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch hẹn 
                            <small>Đang chờ sắp xếp</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên bệnh nhân</th>
                                <th>Ảnh</th>
                                <th>Ngày sinh</th>
                               
                                <th>SDT</th>   
                                <th>Giới tính</th>                        
                                <th>Dấu hiệu của bệnh</th> 
                                <th>Tiền sử bệnh án</th> 
                                <th>Thời gian đăng kí khám</th> 
                                <th>Chấp nhận</th> 
                                <th>Hủy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$i?></td>
                                        <td><?=$row['PatientName']?></td>
                                         <td><img style="width: 70px;height: 70px;" src="Upload/<?=$row['Image']?>"></td>
                                       
                                        <td><?=$row['Birthday']=="0000-00-00"?" ":date("d-m-Y", strtotime($row['Birthday']))?></td>
                                         <td><?=$row['Phone']?></td>
                                          <td><?=$row['Sex']?></td>
                                        <td><?=$row['Comment']?></td>          
                                          <td><?=$row['Disease']?></td>
                                       <!--       <td><?=date("d-m-Y", strtotime($row['Time1']))?></td> -->
                                              <td><?=$row['Time1']?></td>
                                       <td class="center"> <i class="fas fa-wrench fa-fw"></i><a href="?controller=nhanvien&action=chap-nhan&id=<?=$row['RegisterID']?>"> Chấp nhận</a></td>
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i></i> <a onclick="huy(<?=$row['RegisterID']?>)" style="cursor: pointer;">Hủy lịch</a></td>
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
              text: "Bạn có chắc chắn muốn hủy lịch hẹn ?",
              icon: "warning",
              buttons: true,
                              dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                        window.location.assign('?controller=nhanvien&action=huy-lich&id='+id);
                        
                      } else {
                        
                      }
                    }); return false;
                }
            </script>
