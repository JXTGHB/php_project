<?
    $level='member';
    if(isset($_POST['action'])&&($_POST['action'] == 'register')){
      if (($_POST['password'] == $_POST['password_check'])) {
        include("connectMysql.php");
        $sql_query = "INSERT INTO admin(nickname,account,password,level) VALUES(?,?,?,?)";
        $stmt = $db_link->prepare($sql_query);
        $stmt->bind_param("ssss",$_POST['nickname'],$_POST['account'],$_POST['password'],$level);
        if($stmt->execute()){
            $stmt->close();
            $db_link->close();
            echo "<script>alert('新增成功');location.href='login.php';</script>";
        }
        else
        {
            die("新增失敗");
        }
      }
      else{
        echo "<script>alert('密碼輸入錯誤');location.href='register.php';</script>";
      }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background: LemonChiffon;
        }
        * {
            font-family:"微軟正黑體";
        }
        .container {
            background: skyblue;
        }
        img.sex {
            width:25px;
        }
        span {
            font-size: 10px;
        }
        img.smIcon {
            border: 0;
            width: 16px;
        }
    </style>
</head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <div class="container border border-secondary rounded">
	<div class="row">
		<div class="col-sm">
			<h1 class="font-weight-bolder text-center">註冊頁面</h1>
		</div>
	</div>
  <div class="col-sm text-right" style="padding: 12px 15px">
        <a class="btn btn-success" href="comment_homepg_viewer.php" role="button">回到主頁</a>
    </div>

<form class="form-horizontal" method="POST" action="">
  <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">暱稱</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="nickname">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
    <label for="inputEmail3" class="col-sm-2 control-label">帳號</label>
    
      <input type="text" class="form-control" name="account">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
    <label for="inputPassword3" class="col-sm-2 control-label">密碼
    </label>
    
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
    <label for="inputPassword3" class="col-sm-2 control-label">請再次輸入密碼
    </label>
    
      <input type="password" class="form-control" name="password_check" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox">看過規定了吧?
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="hidden" name="action" value="register">
      <button class="btn btn-success" type="submit">註冊</button>
    </div>
  </div>
</form>
</body>
    
</html>