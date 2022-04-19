<!DOCTYPE html>
<html>
<head>
    <title>Hello!</title>
</head>
<body>
    <h1>Сообщение с блога</h1>

    <table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:100%;border-collapse:collapse">
        <tbody>
            @foreach($fields['fields'] as $field)
                <tr>
                    <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">{{ $fields['value'][$loop->index] }}</td>
                    <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $field }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
