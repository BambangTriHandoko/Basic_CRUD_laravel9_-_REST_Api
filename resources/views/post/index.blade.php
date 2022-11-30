<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST TEST</title>
</head>

<body>
    <h1>CRUD TEST POST</h1>

    <a href="/post/create"><button> Tambah</button></a>
    <br>
    <table border="2">
        <tr>
            <th>no.</th>
            <th>judul</th>
            <th>user_id</th>
            <th>isi</th>
            <th>tgl create</th>
            <th>tgl update</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            @foreach ($post as $p)
                <td>{{ $p->id }}</td>
                <td>{{ $p->judul }}</td>
                <td>{{ $p->user_id }}</td>
                <td>{{ $p->isi }}</td>
                <td>{{ $p->created_at }}</td>
                <td>{{ $p->updated_at }}</td>
                <td><a href="/post/{{ $p->id }}/edit"><button>Ubah</button> </a> </td>
                <td>
                    <form action="/post/{{ $p->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
        </tr>
        @endforeach

        <tr>

        </tr>
    </table>
</body>

</html>
