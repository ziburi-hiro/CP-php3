<?php
//1. POSTデータ取得
$name = $_POST["name"];
$deadline = $_POST["deadline"];
$naiyo = $_POST["naiyo"];
$priority = $_POST["priority"];


//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$sql = "INSERT INTO gs_an_table(name,deadline,naiyo,priority,indate)VALUES(:name,:deadline,:naiyo,:priority,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyo', $naiyo, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':priority', $priority, PDO::PARAM_STR); 
$status = $stmt->execute();


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("index.php");
}

