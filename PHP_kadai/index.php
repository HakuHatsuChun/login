<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>出身わかる君</title>
</head>
<header>
    出身わかる君
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="search.php">データ検索</a></div>
            </div>
        </nav>
</header>

<body>
<form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>プロフィール入力</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>出身小学校<input type="text" name="e_school"></label><br>
                <label>出身中学校<input type="text" name="j_school"></label><br>
                <label>出身高校<input type="text" name="h_school"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>
</html>