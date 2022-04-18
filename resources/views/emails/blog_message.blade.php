<!DOCTYPE html>
<html>
<head>
    <title>Hello!</title>
</head>
<body>
    <h1>Сообщение с блога</h1>
    <ul>
        @foreach($fields['fields'] as $field)
            <li>{{ $fields['value'][$loop->index] }} - {{ $field }}</li>
        @endforeach
    </ul>
</body>
</html>
