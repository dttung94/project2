


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Login </title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="Public/css/dk.css" rel="stylesheet" type="text/css">
       <script type="text/javascript" src="Public/js/animation.js"></script>
</head>

<body>
    <section>
        <div class="container-fluid" style="padding: 0px; background-color:  rgb(58,67,112);">
            <div class="col-xs-2" style="text-align: center; padding: 12px 0 19px 0; border-right: 1px solid white;"> 
                <img src="Public/img/tim.jpg"  style=" height: 50px; width: 130px;">
            </div>
            <div class="col-xs-6" >
                <a style="color:white;float:left;letter-spacing:0.6px;padding: 12px 10px 10px 20px; ">
                    <b>PHÒNG KHÁM ĐA KHOA KIM CHÍNH</b> <br>
                    <b>Địa chỉ: </b> 24A, Lê Thanh Nghị, Hai Bà Trưng, Hà Nội |
                    <b>Hotline: </b> 024 3570 8800
                </a>
            </div>
            <div class="col-xs-4">
                <form method="POST">
                	<tr>
                    <td>
                        <input type="text" name="username" placeholder="Tên đăng nhập" style="height: 30px; width: 33%; font-size: 15px; padding-left: 5px;"/>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Mật khẩu" style="height: 30px; width: 33%; font-size: 15px; padding-left: 5px;"/>
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Đăng nhập" style="background-color: blue; padding: 5px 10px; border: none; color: #fff"/>
                    </td>
                </tr>
                </form>
                <p style="color: red;"><?php if(isset($_SESSION['thongbao']))echo $_SESSION['thongbao']; unset($_SESSION['thongbao']);?></p>
		
            </div>
        </div>
    </section>
    
    <section>
        <div class="container-fluid" style="background-color: rgb(233,235,238);">
        <h1 style='text-align: center; color: red; margin-top:40px'>WELCOME TO KIM CHÍNH CLINIC</h1>
        <div class="box">

                <form method="POST" >

                    <h3 style='color: blue'>ĐẶT LỊCH KHÁM</h3>
                    
                    <div class="containerform-input">
                         <input type="text" name="ten" placeholder="Tên" required="" /> 
                    </div>

                    <div class="form-input">
                         <input type="text" name="sdt" placeholder="Số điện thoại" required="" minlength="10" maxlength="11" />
                    </div> 

                    <div class="form-input">
                         <input type="text" name="tg" placeholder="Thời gian cụ thể" required="" />
                    </div> 
                    
                    <div class="form-input">
                         <input type="text" name="tt" placeholder="Triệu chứng" required="" />
                    </div>

                    <input type="submit" name="submit2" value="Gửi" class="btn-login"/>
                   
                </form>

            </div>
        </div>
    </section>
</body>
</html>