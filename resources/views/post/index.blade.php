@extends('layout.main')
@section('judul')
    halaman Post
@endsection
@section('contain')
    <h1>CRUD TEST POST</h1>

    <a href="/post/create"><button> Tambah</button></a>
    <br>
    <table class="table table-bordered">
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
@endsection
