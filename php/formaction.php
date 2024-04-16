<?php
// データベース接続情報
$servername = "localhost"; // データベースホスト名
$username = "root"; // データベースユーザー名
$password = "root"; // データベースパスワード
$dbname = "portforio_help"; // データベース名

// データベースに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続を確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// フォームからのデータを受け取る
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQLインジェクションを防ぐためにデータをエスケープする
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$message = mysqli_real_escape_string($conn, $message);

// データベースに挿入するクエリを作成
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

// クエリを実行し、挿入が成功したかどうかを確認
if ($conn->query($sql) === TRUE) {
    echo "Thank you for contacting us! This page will be redirected to the top page in 5 seconds.";
    header('refresh:5; url=../index.html');
    exit; // リダイレクト後にスクリプトの実行を終了する
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// データベース接続を閉じる
$conn->close();
?>
