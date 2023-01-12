<?php
session_start();
require_once('funcs.php');
loginCheck();
if( !isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] != session_id()) {
    exit('LOGIN ERROR');
} else{
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();

}

require_once('funcs.php');

$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM school');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($stmt);
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $r["id"] . '">';
        $view .= h($r['id']) . " " . h($r['name']) . " " . h($r['e_school']) . " " . h($r['j_school']) . " " . h($r['h_school']);
        $view .= '</a>';
        $view .= "　";
        $view .= '<a class="btn btn-danger" href="delete.php?id=' . $r['id'] . '">';
        $view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
        $view .= '</a>';
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>出身わかる君</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録</a>
                    <a class="navbar-brand" href="search.php">データ検索</a>
                </div>
            </div>
        </nav>
    </header>
    <div>
        <div class="container jumbotron"><?= $view ?></div>
    </div>

</body>

</html>
