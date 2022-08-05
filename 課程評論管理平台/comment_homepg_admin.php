<?

    include("connectMysql.php");
    $pageRow_records = 5;
    $num_pages = 1;
    if (isset($_GET['pages'])) {
        $num_pages = $_GET['pages'];
    }
    $a='程式設計一';
    
    $startRow_records = ($num_pages-1)*$pageRow_records;//記錄這一頁從哪項開始
    $query_comment = "SELECT * FROM comment ORDER BY cID DESC";
    if(isset($_GET['classnm']))
    {   if($_GET['classnm']=='程式設計一')
            $query_comment = "SELECT * FROM comment WHERE classname='程式設計一' ORDER BY cID DESC";
        else if($_GET['classnm']=='程式設計二')
            $query_comment = "SELECT * FROM comment WHERE classname='程式設計二' ORDER BY cID DESC";
        else if($_GET['classnm']=='離散數學')
            $query_comment = "SELECT * FROM comment WHERE classname='離散數學' ORDER BY cID DESC";
        else if($_GET['classnm']=='資料結構')
            $query_comment = "SELECT * FROM comment WHERE classname='資料結構' ORDER BY cID DESC";
        else if($_GET['classnm']=='資料通訊概論')
            $query_comment = "SELECT * FROM comment WHERE classname='資料通訊概論' ORDER BY cID DESC";
        else if($_GET['classnm']=='線性代數')
            $query_comment = "SELECT * FROM comment WHERE classname='線性代數' ORDER BY cID DESC";
        else if($_GET['classnm']=='數位系統概論')
            $query_comment = "SELECT * FROM comment WHERE classname='數位系統概論' ORDER BY cID DESC";
        else if($_GET['classnm']=='電子電路')
            $query_comment = "SELECT * FROM comment WHERE classname='電子電路' ORDER BY cID DESC";
        else if($_GET['classnm']=='機率與統計')
            $query_comment = "SELECT * FROM comment WHERE classname='機率與統計' ORDER BY cID DESC";
        else if($_GET['classnm']=='資訊概論')
            $query_comment = "SELECT * FROM comment WHERE classname='資訊概論' ORDER BY cID DESC";
        else if($_GET['classnm']=='資料庫系統')
            $query_comment = "SELECT * FROM comment WHERE classname='資料庫系統' ORDER BY cID DESC";
        else if($_GET['classnm']=='作業系統概論')
            $query_comment = "SELECT * FROM comment WHERE classname='作業系統概論' ORDER BY cID DESC";
        else if($_GET['classnm']=='演算法概論')
            $query_comment = "SELECT * FROM comment WHERE classname='演算法概論' ORDER BY cID DESC";
        else if($_GET['classnm']=='組合語言與計算機組織')
            $query_comment = "SELECT * FROM comment WHERE classname='組合語言與計算機組織' ORDER BY cID DESC";

    }
    $query_limit_comment = $query_comment." LIMIT {$startRow_records}, {$pageRow_records}";
    $comment = $db_link->query($query_limit_comment);
    $all_comment = $db_link->query($query_comment);
    $total_records = $all_comment -> num_rows;
    $total_pages = ceil($total_records/$pageRow_records);
    $db_link->close();
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
    <div class="container border border-secondary rounded">
        <div class="row">
            <div class="col-sm">
                <h1 class="font-weight-bolder text-center">課程評論網</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h3 class="font-weight-bolder text-left">Hi!<?echo $_GET['user'];?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm text-center" style="padding: 10px 10px">
                <p>欲觀看課程
                    <select onchange="javascript:location.href=this.value;">
                    <option value="">請選擇</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "程式設計一"?>">程式設計一</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "程式設計二"?>">程式設計二</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "離散數學"?>">離散數學</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "資料結構"?>">資料結構</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "資料通訊概論"?>">資料通訊概論</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "線性代數"?>">線性代數</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "數位系統概論"?>">數位系統概論</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "電子電路"?>">電子電路</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "機率與統計"?>">機率與統計</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "資訊概論"?>">資訊概論</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "資料庫系統"?>">資料庫系統</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "作業系統概論"?>">作業系統概論</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "演算法概論"?>">演算法概論</option>
                    <option value="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo "組合語言與計算機組織"?>">組合語言與計算機組織</option>
        </select>
                </p>
                
            </div>
            <div class="col-sm text-right" style="padding: 12px 15px">
            <a class="btn btn-warning" href="add_final.php?user=<?echo $_GET['user'];?>" role="button">新增評論</a>
            <a class="btn btn-success" href="login.php" role="button">登出</a>
            <!--<a class="btn btn-success" href="register.php" role="button">註冊帳號</a>-->
                <!--<a class="btn btn-outline-danger" href="login.php" role="button">登入管理不建議</a>-->
            </div>
        </div>
        <?php while($row_comment = $comment->fetch_assoc()){?>
                    <div class="row">
                        <div class="col-sm">
                            <div class="card border-primary mb-3">
                                <div class="card-header">
                                    <span class="badge badge-pill badge-secondary"><?echo $row_comment["classname"]; ?></span>
                                    <div class="col-sm text-right">
                                    <a href="update_comment.php?user=<?echo $_GET['user'];?>&id=<?php echo $row_comment['cID'];?>">修改</a>
                                    <a href="delete_comment.php?user=<?echo $_GET['user'];?>&id=<?php echo $row_comment['cID'];?>">刪除</a>
                                </div>
                                </div>
                                <div class="card-body text-secondary">
                                    <h3 class="card-title text-dark font-weight-bold">
                                        授課教師：<?echo $row_comment["teacher"];?>
                                    </h3>
                                    <h5 class="card-title text-dark font-weight-bold">
                                        壓力指數：<?
                                        if($row_comment["pressure"]=="die") echo '修完會死';
                                        if($row_comment["pressure"]=="halfdie") echo '修完會少半條命';
                                        if($row_comment["pressure"]=="soso") echo '還挺得住';
                                        if($row_comment["pressure"]=="easy") echo '輕鬆過關啦';
                                        if($row_comment["pressure"]=="cool") echo '老師根本濟世活佛';
                                        ?>
                                    </h5>
                                    
                                    <h5 class="card-title text-dark font-weight-bold">
                                        教學方式詳述
                                    </h5>
                                    <p class="card-text">
                                        <?echo nl2br($row_comment["teach_way"]);?>
                                    </p>
                                    <h5 class="card-title text-dark font-weight-bold">
                                        整體評價：
                                        <?
                                        if($row_comment["final"]=="die") echo '千萬別修';
                                        if($row_comment["final"]=="halfdie") echo '夠強再修';
                                        if($row_comment["final"]=="soso") echo '凡人都可修';
                                        if($row_comment["final"]=="easy") echo '學渣也能修';
                                        if($row_comment["final"]=="cool") echo '老少咸宜';
                                        ?>
                                    </h5>
                                    
                                </div>
                                <div class="card-footer text-right">
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                <? }?>
        
        <div class="row">
            <div class="col-sm-2">資料筆數：<?echo $total_records;?></div>
            <div class="col-sm-10">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?if(isset($_GET['classnm'])){?>
                        <li class="page-item <?if($num_pages==1) echo 'disabled'?>"><a class="page-link" href="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo $_GET['classnm']?>&pages=<?echo $num_pages-1;?>">Previous</a></li>
                        <?}?>
                        <?if(isset($_GET['classnm'])==false){?>
                            <li class="page-item <?if($num_pages==1) echo 'disabled'?>"><a class="page-link" href="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&pages=<?echo $num_pages-1;?>">Previous</a></li>
                        <?}?>
                        <!--<li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                        <?
                            for($i=1;$i<=$total_pages;$i++)
                            {
                                $str="";
                                if($num_pages == $i){
                                    $str = '<li class="page-item disabled">';
                                } else {
                                    $str = '<li class="page-item">';
                                }
                                $str .= "<a class='page-link' href='comment_homepg_admin.php?pages={$i}'>{$i}</a></li>";
                                echo $str;
                            }
                        ?>
                        <?if($total_pages>1&&(isset($_GET['classnm'])==false)){?>
                        <li class="page-item"><a class="page-link" href="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&pages=<?echo $num_pages+1;?>">Next</a>
                        </li>
                        <?}?>
                        <?if($total_pages>1&&isset($_GET['classnm'])){?>
                        <li class="page-item"><a class="page-link" href="comment_homepg_admin.php?user=<?echo $_GET['user'];?>&classnm=<?echo $_GET['classnm']?>&pages=<?echo $num_pages+1;?>">Next</a>
                        </li>
                        <?}?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>