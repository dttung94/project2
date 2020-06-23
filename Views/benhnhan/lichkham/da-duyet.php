 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch khám
                            <small>Đã duyệt</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>SDT</th>
                                <th>Ngày khám</th>
                                <th>Mô tả dấu hiệu bệnh</th> 
                                <th>Bác sĩ khám</th>
                                <th>Nhân viên xếp lịch</th>
                               <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                                while ($row2 = $data2->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$i?></td>
                                        <td><?=$row2['Phone']?></td>
                                        <td><?=$row2['Time2']?></td>
                                        <td><?=$row2['Comment']?></td>
                                        <td><a href="?controller=benhnhan&action=info-bacsi&id=<?=$row2['DoctorID']?>"><?=$row2['DoctorName']?></a></td>
                                        <td><?=$row2['StaffName']?></td>
                                           <td class="center"><i class="fas fa-trash-alt fa-fw"></i></i> <a style="cursor: pointer;" onclick="return huy(<?=$row2['RegisterID']?>);">Hủy lịch</a></td>
                                    </tr>
                                   
                           <?php  $i++;  } ?>
                            
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
                window.location.assign('?controller=benhnhan&action=huy-lich&id='+id);
                
              } else {
                
              }
            }); return false;
            }
        </script>