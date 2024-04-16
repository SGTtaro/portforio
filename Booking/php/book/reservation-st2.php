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
    
    
    // print('接続に成功しました');
    
    // フォームデータを取得
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $mail = htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8');
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES, 'UTF-8');
    
    /*
    print($_POST['name']);
    print($_POST['mail']);
    print($_POST['number']);
    print($_POST['date']);
    print('HELLO WORLD');
    print('内容を取得しました');*/
    
    // SQLクエリを準備
    $sql = "INSERT INTO `st2` (`name`, `mail`, `number`, `dates`) VALUES (:name, :mail, :number, :dates)";
    $stmt = $dbh->prepare($sql);

    // バインドパラメータを設定してクエリを実行
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':number', $number);
    $stmt->bindParam(':dates', $date);
    $stmt->execute();

    header('Location:../../appriciate.html');

}catch (Exception $e) {
        error_log('Error:'. $e->getMessage());
        echo 'エラーが発生しました。やり直してください。';
        echo 'エラーメッセージ: ' . $e->getMessage(); // エラーメッセージを出力
    }
    

$dbh = null;
?>
