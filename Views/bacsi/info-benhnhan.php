 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Hồ sơ bệnh nhân
                           <!--  <small>Cập nhật</small> -->
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-4">
                               <img class="avatar" height="320px;" src="Upload/<?=$row['Image']?>"  style="max-height:450px; "/>
                       </div>
                        <div class="col-lg-8 form-info">
                               <div class="info">
                                 <table class="text-left" width="80%" style="margin-left: 30px;">
                                 <tr>
                                   <td class="th">Tên bệnh nhân :</td>
                                    <td><?=$row['PatientName']!=""?$row['PatientName']:"* Chưa cập nhật *"?></td>
                                 </tr>
                                 <tr>
                                    <td class="th">Mã bệnh nhân :</td>
                                    <td><?=$row['PatientID']!=""?$row['PatientID']:"* Chưa cập nhật *"?></td>
                                 </tr>
                                 <tr>
                                    <td class="th">Giới tính : </td>
                                    <td><?=$row['Sex']!=""?$row['Sex']:"* Chưa cập nhật *"?></td>
                                 </tr>
                                 <tr>
                                    <td class="th">Ngày sinh :</td>
                                    <td><?=$row['Birthday']!=""?date("d-m-Y", strtotime($row['Birthday'])):"* Chưa cập nhật *"?></td>
                                 </tr>
                                 <tr>
                                    <td class="th">Số điện thoại :</td>
                                    <td><?=$row['Phone']!=""?$row['Phone']:"* Chưa cập nhật *"?></td>
                                 </tr>
                                 <tr>
                                    <td class="th">Email :</td>
                                    <td><?=$row['Email']!=""?$row['Email']:"* Chưa cập nhật *"?></td>
                                 </tr>
                                 <tr>
                                    <td class="th">Tiền sử bệnh án :</td>
                                    <td><?=$row['Disease']!=""?$row['Disease']:"* Chưa từng có bệnh án *"?></td>
                                 </tr>
                               </table>
                               </div>
                       </div>
                    </div>
                    <!-- /.col-lg-12 -->
                     <div class="col-lg-12">
                        <h3 class="tt">
                           Thông số bệnh nhân
                        </h3>
                    </div>
                      <div class="col-lg-12">
                          <table class="table table-striped">
                             <tr>
                              <th>STT</th>
                              <th>Chiều cao</th>
                              <th>Cân nặng</th>
                              <th>Thông số tiểu đường </th>
                              <th>Thời gian cập nhật</th>
                             </tr>
                              <?php 
                              $i=1;
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                       <td><?=$i?></td>
                                        <td><?=$row['Heigh']==""?"---":$row['Heigh']?></td>
                                         <td><?=$row['Weigh']==""?"---":$row['Weigh']?></td>
                                          <td><?=$row['Number']==""?"---":$row['Number']?></td>
                                      
                                         <td><?=date( " m/d/Y h:t:s  ", strtotime($row['time']))?></td>
                                        
                                      
                                        
                                    </tr>
                           <?php $i++; } ?>
                          </table>
                    </div>
          </div>
        </div>
  <script type="text/javascript">
                $('.info dd').each(function() {
                  $(tdis).css({widtd: $(tdis).text()+'%'});
                });
                function ok() {
                          window.location.assign('?controller=benhnhan&action=da-duyet');

                       }       
        </script>