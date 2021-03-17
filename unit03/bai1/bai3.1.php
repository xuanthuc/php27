<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="post.php" method="POST" role="form">
            <legend>THÔNG TIN SINH VIÊN</legend>
            
            <div class="form-group">
                <label for="">Mã sinh viên: </label>
                <input type="text" class="form-control" id="" placeholder="Nhập MaSV" name="MaSV">
            </div>
            
            <div class="form-group">
                <label for="">Họ tên: </label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ tên" name="name">
            </div>  
            <div class="form-group">
                <label for="">Số điện thoại: </label>
                <input type="text" class="form-control" id="" placeholder="Nhập SDT" name="phone">
            </div> 
            <div class="form-group">
                <label for="">Email: </label>
                <input type="mail" class="form-control" id="" placeholder="Nhập mail" name="mail">
            </div> 
            <div class="form-group">
                <label for="">Giới tính: </label><br>
                <input type="radio" value="Nam" name="gender">Nam <br>
                <input type="radio" value="Nữ" name="gender">Nữ <br>
            </div>
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>