<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST TEST</title>
</head>

<body>
    <h1>HASIL REST API</h1>

    <br>
    <table border="2">
        <tr>
            <th>no.</th>
            <th>kelurahan</th>
            <th>kecamatan</th>
            <th>Islam</th>
            <th>Kristen</th>
            <th>khatolik</th>
            <th>hindu</th>
            <th>Buddha</th>
        </tr>
        <tr>
            @foreach ($a as $p)
                <td>{{ $p['id'] }}</td>
                <td>{{ $p['nama_kel'] }}</td>
                <td>{{ $p['kecamatan'] }}</td>
                <td>{{ $p['islam'] }}</td>
                <td>{{ $p['kristen'] }}</td>
                <td>{{ $p['katholik'] }}</td>
                <td>{{ $p['hindu'] }}</td>
                <td>{{ $p['budha'] }}</td>
        </tr>
        @endforeach

        <tr>

        </tr>
    </table>
</body>

</html>
