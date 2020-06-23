 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đăng ký khám
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên</th>
                                  <th>Số điện thoại</th>
                                <th>Thời gian</th>
                                <th>Triệu chứng</th>
                               
                                <th>Chấp nhận</th>
                                <th>Hủy bỏ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$i?></td>
                                        <td><?=$row['patien_name']?></td>
                                       
                                         <td><?=$row['phone']?></td>
                                        <td><?=$row['time']?></td>
                                        <td><?=$row['comment']?></td>
                                        
                                       <td class="center"> <i class="fas fa-check fa-fw"></i><a href="?controller=admin&action=chap-nhan&id=<?=$row['tempID']?>"> Chấp nhận</a></td>
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i> <a style="cursor: pointer"; onclick="huy(<?=$row['tempID']?>)" >Hủy bỏ</a></td>
                                    </tr>
                           <?php $i++; } ?>
                            
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
                        window.location.assign('?controller=admin&action=delete-lichkham&id='+id);
                        
                      } else {
                        
                      }
                    }); return false;
                }
            </script>