<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>pictures</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{$task->body}}</li>
        @endforeach
    </ul>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Jersson
 * Date: 16-9-2017
 * Time: 18:05
 */
