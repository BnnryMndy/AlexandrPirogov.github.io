<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="Form">
        <form action="./../Scripts/CreatePost.php" method="post">
            <div>
                <input placeholder="Write a title..." type="text" name="title" required>
            </div>
            <div>
                <textarea placeholder="Write a text..." type="text" name="text" cols="100" rows="100" required></textarea>
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>