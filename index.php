<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
  <fieldset>
    <legend>Todo管理・登録</legend>
     <label>誰が：<input type="text" name="name"></label><br>
     <label>締切：<input type="date" name="deadline"></label><br>
     <label>何を：<textArea name="naiyo" rows="4" cols="40"></textArea></label><br>
     <label>優先度：<select name="priority">
        <option value="低(1週間以内)">低(1週間以内)</option>
        <option value="中(3日以内)">中(3日以内)</option>
        <option value="高(今日中)">高(今日中)</option>
      </select></label><br>
    
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
