<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="/tasks/{{$task->id}}">
                    {{$task->body}}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html
<?php
/**
 * Created by PhpStorm.
 * User: Jersson
 * Date: 18-9-2017
 * Time: 16:29
 */