<?php
$dsn = 'mysql:dbname=page;host=localhost;charset=utf8mb4';
$user = 'root';
$password = 'root';
try {
    // MySQLに接続
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->query('SET NAMES utf8');
    
    

    // フォームデータを取得
    $name = ($_POST['name']);
    $mail = ($_POST['mail']);
    $contents = ($_POST['contents']);
    
    
    // 名前フィールドが空でないことを確認
    if (empty($name)|| empty($mail) || empty($contents)) {
        throw new Exception('Fill all contents');
    }

    // SQLクエリを準備
    $sql = "INSERT INTO `hoge2` (`name`, `mail`, `contents`) VALUES (:name, :mail, :contents)";
    $stmt = $dbh->prepare($sql);

    // バインドパラメータを設定してクエリを実行
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':contents', $contents);
    $stmt->execute();

    header('Location:../appriciate.html');

} catch (Exception $e) {
    error_log('Error:'. $e->getMessage());
    echo 'エラー！やり直してください！'. $e->getMessage() ;
}

    





$dbh = null;
?>
