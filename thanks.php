<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    	<meta http-equiv="Content-type" content= "text/html; charset=UTF-8">
    	<title>PHP基礎</title>
    </head>
    <body>
    	<?php
            //$dsn = 'mysql:dbname=phpkiso;host=localhost';
            //$user = 'root';
            //$password = '';

            $dsn = 'mysql:dbname=LAA0685922-onelinebbs ;host=mysql105.phy.lolipop.lan';
            $user = 'LAA0685922';
            $password = 'nexseed1204';
            
            $dbh = new PDO($dsn, $user, $password);
            $dbh->query('SET NAMES utf8');

            $nickname = $_POST['nickname'];
            $email = $_POST['email'];
            $goiken = $_POST['goiken'];

            echo $nickname;
            echo '様<br />';
            echo 'ご意見ありがとうございました<br />';
            echo '頂いたご意見『';
            echo $goiken;
            echo '』<br />';
            echo $email;
            echo 'にメールを送りましたのでご確認ください。';

            $sql = 'INSERT INTO `survey`(`nickname`,`email`,`goiken`) VALUES ("'.$nickname.'","'.$email.'","'.$goiken.'")';
            $stmt = $dbh->prepare($sql);
            //insert分を実行
            $stmt-> execute();

            //データベースから切断
            $dbh = null;
        ?>
    </body>