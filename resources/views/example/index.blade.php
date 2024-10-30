<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js', 'resources/js/example.js'],)


</head>

<body class="flex flex-col">
    <div class= "number">
        <table class = "table">
            <tbody class = "table-bordered">
            @foreach($data as $row)
                <tr>
                    @foreach($row as $vol)
                        <td >{{ $vol }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
</body>



