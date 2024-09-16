<?php
//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_an_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
//$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  div{
    padding: 10px;font-size:16px;
  }
  .tableview{
    
  }
  table {
    width: 70%;
    border-collapse: collapse;
  }
  table, th, td {
    border: 1px solid black;
  }
  th, td {
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
 }

</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->


<!-- Main[Start] -->
<div>
    <!-- <div class="container jumbotron"> -->
    <table align="center">
        <thead>
            <tr>
                <th>誰が</th>
                <th>いつ迄</th>
                <th>ToDo</th>
                <th>優先度</th>
                <th>登録日時</th>
                <th>更新・削除</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($values as $v){ ?>
            <tr>
                <td><?php echo $v["name"];?></td>
                <td><?php echo $v["deadline"];?></td>
                <td><?php echo $v["naiyo"];?></td>
                <td><?php echo $v["priority"];?></td>
                <td><?php echo $v["indate"];?></td>
                <td><a href="detail.php?id=<?=$v["id"]?>">[修正]</a>  <a href="delete.php?id=<?=$v["id"]?>">[削除🚮]</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


    <!-- </div> -->
</div>
<!-- Main[End] -->


<script>
  //JSON受け取り



</script>
</body>
</html>