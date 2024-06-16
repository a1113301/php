<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>報名結果</title>
</head>
<body>
    <h1>你的報名資訊如下：</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['sName']);
        $major = htmlspecialchars($_POST['sMajor']);
        $number = htmlspecialchars($_POST['sNumber']);
        $date = htmlspecialchars($_POST['sDate']);
        $time = htmlspecialchars($_POST['sTime']);
        $gender = htmlspecialchars($_POST['sGender']);
        $city = htmlspecialchars($_POST['sCity']);
        $email = htmlspecialchars($_POST['sEmail']);
        $join = htmlspecialchars($_POST['sJoin']);
        $comment = htmlspecialchars($_POST['sComment']);

        echo "<p><strong>姓名:</strong> $name</p>";
        echo "<p><strong>系所:</strong> $major</p>";
        echo "<p><strong>學號:</strong> $number</p>";
        echo "<p><strong>出生年月日:</strong> $date</p>";
        echo "<p><strong>時間:</strong> $time</p>";
        echo "<p><strong>性別:</strong> $gender</p>";
        echo "<p><strong>家鄉:</strong> $city</p>";
        echo "<p><strong>電子郵件:</strong> $email</p>";
        echo "<p><strong>報名資訊:</strong> $join</p>";
        echo "<p><strong>意見欄:</strong> $comment</p>";
    } else {
        echo "<p>沒有收到表單提交的資料。</p>";
    }
    ?>
</body>
</html>
