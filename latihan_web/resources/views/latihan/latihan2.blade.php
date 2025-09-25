<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('app.name', 'laravel') }}
    </title>
</head>
<body>
    <a href="{{ url('/') }}"> Home </a> |
    <a href="{{ url('/latihan') }}"> Latihan </a> |
    <a href="{{ url('/latihan_dua') }}"> Latihan 2 </a> |
    <a href="http://www.matanauniversity.ac.id/"> Website Matana </a> |
    <p>
        This is latihan 2
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Cedric</td>
                <td>20245520008</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jere</td>
                <td>20245520007</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Valen</td>
                <td>20245520001</td>
            </tr>
        </table>
    </p>

</body>
</html>