<?php
mb_internal_encoding("UTF-8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");

 ?>
<!doctype HTML>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>掲示板</title>
  <link rel="stylesheet" type = "text/css" href="style.css">
</head>

<body>
  <div class ="site-box">
      <img src = "4eachblog_logo.jpg"  class = "logojpg" />

      <div class = "list">
          <a>トップ</a>　<a>プロフィール</a>　<a>4eachについて</a>
          <a>登録フォーム</a>　<a>問い合わせ</a>　<a>その他</a>
      </div>

      <main>
        <div class = "left">
          <h3>プログラミングに役立つ書籍</h3>

          <div class = "FORM">
            <h5>入力フォーム</h5>
            <form method = "post" action = "insert.php">
              <label>ハンドルネーム</lebel><br>
              <input type = "text" name = "handlename" class = "formbox"><br>
              <label>タイトル</lebel><br>
              <input type = "text" name = "title" class = "formbox"><br>
              <label>コメント</lebel><br>
              <textarea name = "comments"> </textarea><br>
              <input type = "submit" value = "投稿する" class = "submit">
            </form>
          </div>

          <div class = "MID">
            <?php
            while($row = $stmt->fetch()){
              echo "<div class = 'kiji'>";
              echo "<h4>".$row['title']."</h4>";
              echo $row['comments'];
              echo "<p>"."posted by".$row['handlename']."</p>";
              echo "</div>";
            }
             ?>
          </div>
        </div>

        <dic class = "right">
          <h4>人気の記事</h4>
          <p>PHPオススメ本</p><p>PHP MyAdminの使い方</p><p>今人気のエディタ Top5</p><p>HTMLの基礎</p>
          <h4>オススメリンク</h4>
          <p>インターノウス株式会社</p><p>XAMPPのダウンロード</p><p>Eclipseのダウンロード</p><p>Bracketsのダウンロード</p>
          <h4>カテゴリ</h4>
          <p>HTML</p><p>PHP</p><p>MySQL</p><p>JavaScript</p>
        </div>
      </main>
      <footer>
        <p>copyright © internous | 4each blog the which provides A to Z about programming.</p>
      </footer>
  </div>


</body>
</html>
