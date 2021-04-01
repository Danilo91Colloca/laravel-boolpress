<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NotificaMail</title>
</head>
<body>
    <div class="mail wrapper"
    style="margin: 0 auto;
    border: 1px solid gray;
    width:80%;
    height:100%" >
        <p style="width:95%; padding:10px;">
            In data {{$newPost->updated_at}} è stato creato un nuovo post.
            <br>
            L' autore é: {{$newPost->author->name}} {{$newPost->author->lastname}}
            <br/>
            Title: {{$newPost->post_title}}
            <br/>
            <br/>
            Body:
            <br/>
            {{$newPost->paragraph}}
        </p>
    </div>
</body>
</html>
