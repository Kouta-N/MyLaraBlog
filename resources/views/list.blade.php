<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ブログリスト</title>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>content</th>
        <th>date</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($blogs as $blog)
    <tr>
        <th>{{ $blog->id }}</th>
        <th>{{ $blog->content }}</th>
        <th>{{ $blog->updated_at }}</th>
        <th><button>編集</button></th>
        <th><button>削除</button></th>
    </tr>
    @endforeach
</table>
</body>
</html>
