<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>邮件发送</title>
        <link href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="./mail.php" method="post" >
            收件者： <input type="text" name="user"><br>
            主题： <input type="text" name="sub"><br>
            内容：<input type="text" name="content"><br>
            <input type="submit" value="发送">
        </form>
    </body>
</html>