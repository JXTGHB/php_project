<?
    $nickname=$_GET['user'];
    include("connectMysql.php");
    if(isset($_POST['action'])&&($_POST['action'] == 'delete')){
        //include("connectMysql.php");
        $sql_query = "DELETE FROM comment WHERE cID=?";
        $stmt = $db_link->prepare($sql_query);
        $stmt->bind_param("i",$_POST['cID']);
        $stmt->execute();
        $stmt->close();
        $db_link->close();
        echo "<script>alert('刪除成功');location.href='comment_homepg_admin.php?user=$nickname';</script>";
    }
    $sql_select ="SELECT cID, classname, pressure, teacher, teach_way, final FROM comment WHERE cID= ?";
    $stmt = $db_link->prepare($sql_select);
    $stmt ->bind_param("i",$_GET['id']);
    $stmt ->execute();
    $stmt ->bind_result($cID, $classname, $pressure, $teacher, $teach_way, $final);
    $stmt -> fetch();
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
            <h1 class="font-weight-bolder text-center">確定刪除此評論？</h1>
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
            <option value="<?echo $classname?>"><?echo $classname?></option>
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
        <input type="radio" name="pressure" value="die" <?if ($pressure=='die') {
            echo "checked";
        }?>> 修完會死
        </label>
        <label>
        <input type="radio" name="pressure" value="halfdie" <?if ($pressure=='halfdie') {
            echo "checked";
        }?>>修完少半條命
        </label>
        <label>
        <input type="radio" name="pressure" value="soso" <?if ($pressure=='soso') {
            echo "checked";
        }?>> 還挺得住
        </label>
        <label>
        <input type="radio" name="pressure" value="easy" <?if ($pressure=='easy') {
            echo "checked";
        }?>> 輕鬆
        </label>
        <label>
        <input type="radio" name="pressure" value="cool" <?if ($pressure=='cool') {
            echo "checked";
        }?>> 老師是菩薩
        </label>
        </div>
    <hr>
    </div>
    <label for="teacher" class="col-sm-2 control-label">老師的大名：</label>
   <div class="col-sm-10">
      <input type="text" class="form-control" name="teacher" value="<?echo $teacher?>">
    </div>
    <hr>
    <div class="text">
    <div class="col-sm">
    <label>教學方式詳述</label>
        <textarea class="form-control" name ="teach_way" rows="3" ><? echo $teach_way ?></textarea>
    </div>
    </div>

   <div class="radio">
    <div class="col-sm-10">
        <label class="radio-inline">整體評價:
        </label>
        <label>
        <input type="radio" name="final" value="die" <?if ($final=='die') {
            echo "checked";
        }?>> 千萬別修
        </label>
        <label>
        <input type="radio" name="final" value="halfdie" <?if ($final=='halfdie') {
            echo "checked";
        }?>> 夠強再修
        </label>
        <label>
        <input type="radio" name="final" value="soso" <?if ($final=='soso') {
            echo "checked";
        }?>> 凡人都可修
        </label>
        <label>
        <input type="radio" name="final" value="easy" <?if ($final=='easy') {
            echo "checked";
        }?>> 學渣也能修
        </label>
        <label>
        <input type="radio" name="final" value="cool" <?if ($final=='cool') {
            echo "checked";
        }?>> 老少咸宜
        </label>
    </div>
    </div>
        <input type="hidden" name="action" value="delete">
      <input type="hidden" name="cID" value="<?echo $cID;?>">
      <button class="btn btn-warning" type="submit">刪除</button>
      
  
</div>
</form>
  </body>
</html>