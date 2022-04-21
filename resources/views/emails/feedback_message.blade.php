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
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">First name</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['first_name'] }}</td>
            </tr>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">Last name</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['last_name'] }}</td>
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
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">How can we help you?</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['message'] }}</td>
            </tr>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">Expected budget</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['budget'] }}</td>
            </tr>
            <tr>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:40%;background-color:#ecf0f1;text-align:right;padding:10px;border:solid 1px #d4d8da;font-weight:bold">How did you hear about us?</td>
                <td style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;width:80%;background-color:#f9f9f9;padding:10px;border:solid 1px #d4d8da">{{ $fields['source'] }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
