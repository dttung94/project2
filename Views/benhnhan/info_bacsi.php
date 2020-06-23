 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Hồ sơ bác sĩ
                           <!--  <small>Cập nhật</small> -->
                        </h1>
                    </div>
                  
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:300px">
                    <div>
                        <section class="card">
                              <figure class="panel meta">
                                <picture>
                                  <img class="avatar" src="Upload/<?=$row['Image']?>" width="300px" height="300"/>
                                
                                </picture>
                                <figcaption>

                                  <h1 class="name">Bác sĩ :<?=$row['DoctorName']!=""?$row['DoctorName']:"* Chưa cập nhật *"?></h1>
                                  <h3 class="title"><?=$row['Field']!=""?$row['Field']:"* Chưa cập nhật *"?></h3>
                                </figcaption>
                              </figure>
                              
                              <div class="panel info">
                                <dl class="skillz">
                                 <dt>Bác sĩ  : <?=$row['Sex']!=""?$row['DoctorName']:"* Chưa cập nhật *"?> </dt>
                                  <dd>100</dd>
                                  <dt>Lĩnh vực  : <?=$row['Field']!=""?$row['Field']:"* Chưa cập nhật *"?> </dt>
                                  <dd>100</dd>
                                  <dt>Số điện thoại : <?=$row['Phone']!=""?$row['Phone']:"* Chưa cập nhật *"?></dt>
                                  <dd>100</dd>
                                
                                  <dt>Giới tính : <?=$row['Sex']!=""?$row['Sex']:"* Chưa cập nhật *"?> </dt>
                                  <dd>100</dd>
                                  <dt>Thông tin thêm : <?=$row['Description']!=""?$row['Description']:"* Chưa cập nhật *"?></dt>
                                  <dd>100</dd>

                                </dl>
                                
                                <ul class="social">
                                  <li><a class="icon-social-twitter" href="https://twitter.com/bigglesrocks">Twitter</a></li>
                                  <li><a class="icon-social-github" href="https://github.com/bigglesrocks">Github</a></li>
                                  <li><a class="icon-social-stack-overflow" href="http://stackoverflow.com/users/664904/biggles">StackOverflow</a></li>
                                  <li><a class="icon-social-dribbble" href="https://dribbble.com/biggles">Dribbble</a></li>
                                </ul>
                                
                              </div>
  
                </section>
                   
          </div>
        </div>
  <script type="text/javascript">
                $('.info dd').each(function() {
                  $(this).css({width: $(this).text()+'%'});
                });
                function ok() {
                          window.location.assign('?controller=benhnhan&action=da-duyet');

                       }       
        </script>