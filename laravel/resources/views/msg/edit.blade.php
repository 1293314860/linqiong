<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>laravel 修改留言</h1>
<form action="" method="post"  enctype="multipart/form-data">
    {{csrf_field()}}
    <p>
        标题:<input type="text" name="title" value="{{$msg->title}}">
    </p>
    <p>
        内容:<textarea name="content" id="" cols="30" rows="10">{{$msg->content}}</textarea>
    </p>
    <input type="submit" value="提交">
</form>
</body>
</html>
