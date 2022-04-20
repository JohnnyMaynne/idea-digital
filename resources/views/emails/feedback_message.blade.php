<!DOCTYPE html>
<html>
<head>
    <title>Hello!</title>
</head>
<body>
    <h1>Сообщение с сайта</h1>

    <table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:100%;border-collapse:collapse">
        <tbody>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">Name</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['name'] }}</td>
            </tr>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">Email</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['email'] }}</td>
            </tr>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">Phone</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['phone'] }}</td>
            </tr>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">Company</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['company'] }}</td>
            </tr>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">Message</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['message'] }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
