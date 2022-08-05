<?
    $nickname=$_GET['user'];
    if(isset($_POST['action'])&&($_POST['action'] == 'add')){
        include("connectMysql.php");
        $sql_query = "INSERT INTO comment(classname, pressure, teacher, teach_way, final) VALUES(?,?,?,?,?)";
        $stmt = $db_link->prepare($sql_query);
        $stmt->bind_param("sssss",$_POST['classname'],$_POST['pressure'],$_POST['teacher'],$_POST['teach_way'],$_POST['final']);
        if($stmt->execute()){
            $stmt->close();
            if($nickname!='administrator')
                echo "<script>alert('發佈成功');location.href='comment_homepg_member.php?user=$nickname';</script>";
            else
                echo "<script>alert('發佈成功');location.href='comment_homepg_admin.php?user=$nickname';</script>";
        }
        else{
            die("新增失敗");
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
<form class="form-horizontal" method="POST" action="">
<div class="container border border-secondary rounded">
    <div class="col-sm text-right" style="padding: 12px 15px">
        <?if($_GET['user']=='administrator'){?>
                <a class="btn btn-success" href="comment_homepg_admin.php?user=<?echo $_GET['user']?>" role="button">回到主頁</a>
            <?}?>
        <?if($_GET['user']!='administrator'){?>
            <a class="btn btn-success" href="comment_homepg_member.php?user=<?echo $_GET['user']?>" role="button">回到主頁</a>
            <?}?>
        
    </div>
	<div class="row">
		<div class="col-sm">
			<h1 class="font-weight-bolder text-center">發表評論囉！</h1>
		</div>
	</div>
    <div class="form-group">
        <!--<label class="col-sm-5 control-label">欲評論課程</label>
        <div class="form-group">
        <input type="text" class="form-control" name="classname">
        </div>-->
        <div class="col-sm">
        <label>欲評論課程：</label>
        
        <select class="form-control" name="classname">
            <option value="">--請選擇課程--</option>
            <option value="程式設計一">程式設計一</option>
            <option value="程式設計二">程式設計二</option>
            <option value="離散數學">離散數學</option>
            <option value="資料結構">資料結構</option>
            <option value="資料通訊概論">資料通訊概論</option>
            <option value="線性代數">線性代數</option>
            <option value="數位系統概論">數位系統概論</option>
            <option value="電子電路">電子電路</option>
            <option value="機率與統計">機率與統計</option>
            <option value="資訊概論">資訊概論</option>
            <option value="資料庫系統">資料庫系統</option>
            <option value="作業系統概論">作業系統概論</option>
            <option value="演算法概論">演算法概論</option>
            <option value="組合語言與計算機組織">組合語言與計算機組織</option>
        </select>
        </div>
    </div>
    <div class="radio">
        <div class="col-sm">
        <label class="radio-inline">壓力指數: 
        </label>
        <label>
        <input type="radio" name="pressure" value="die"> 修完會死
        </label>
        <label>
        <input type="radio" name="pressure" value="halfdie">修完少半條命
        </label>
        <label>
        <input type="radio" name="pressure" value="soso"> 還挺得住
        </label>
        <label>
        <input type="radio" name="pressure" value="easy"> 輕鬆
        </label>
        <label>
        <input type="radio" name="pressure" value="cool"> 老師是菩薩
        </label>
        </div>
    <hr>
    </div>
    <label for="teacher" class="col-sm-2 control-label">老師的大名：</label>
   <div class="col-sm-10">
      <input type="text" class="form-control" name="teacher">
    </div>
    <hr>
    <div class="text">
    <div class="col-sm">
    <label>教學方式詳述</label>
        <textarea class="form-control" name ="teach_way" rows="3"></textarea>
    </div>
    </div>

   <div class="radio">
    <div class="col-sm-10">
        <label class="radio-inline">整體評價:
        </label>
        <label>
        <input type="radio" name="final" value="die"> 千萬別修
        </label>
        <label>
        <input type="radio" name="final" value="halfdie"> 夠強再修
        </label>
        <label>
        <input type="radio" name="final" value="soso"> 凡人都可修
        </label>
        <label>
        <input type="radio" name="final" value="easy"> 學渣也能修
        </label>
        <label>
        <input type="radio" name="final" value="cool"> 老少咸宜
        </label>
    </div>
    </div>
      <button class="btn btn-warning" type="submit">提交</button>
      <input type="hidden" name="action" value="add">
  
</div>
</form>
  </body>
</html>