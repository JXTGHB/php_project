<?
    //$level='member';
    
    session_start();
    /*if (isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"]!="")) {
      if ($_SESSION["memberLevel"]=="member") {
        header("Location: comment_homepg_member.php");
      }
      else{
        header("Location: comment_homepg_admin.php");
      }
    }*/
    if (isset($_POST["action"]) && isset($_POST["account"])&& isset($_POST["password"])){
      require_once("connectMysql.php");
      $query = "SELECT nickname, account, password, level FROM admin WHERE account=?";
      $stmt=$db_link->prepare($query);
      $stmt->bind_param("s",$_POST["account"]);
      $stmt->execute();
      $stmt->bind_result($nickname,$account, $password, $level);
      $stmt->fetch();
      $stmt->close();
      echo $password;
      echo $_POST["password"];
      if($_POST["password"]==$password){
      //$_SESSION["loginMember"]=$account;
      //$_SESSION["memberLevel"]=$level;
        if ($level=="member") {
          echo "<script>alert('歡迎回來 $nickname');location.href='comment_homepg_member.php?user=$nickname';</script>";
        }
        else{
          echo "<script>alert('系統管理員已登入');location.href='comment_homepg_admin.php?user=$nickname';</script>";
        }
    }
    else
    {
      echo "登入失敗";
    }
    $db_link->close();
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
            <h1 class="font-weight-bolder text-center">登入頁面</h1>
        </div>
    </div>

<form class="form-horizontal" method="POST" action="">
  <div class="col-sm text-right" style="padding: 12px 15px">
        <a class="btn btn-warning" href="comment_homepg_viewer.php" role="button">回到主頁</a>
        <!--<button class="btn btn-warning" href="comment_homepg_member.php">回到主頁</button>-->
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
    <div class="col-sm-offset-2 col-sm-10">
      <input type="hidden" name="action" value="login">
      <button class="btn btn-success" type="submit">登入</button>
    </div>
  </div>
</form>
</body>
    
</html>