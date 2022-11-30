<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATAt</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create POST</title>
    </head>

    <body>

        <form action="/post/{{ $post->id }}" method="POST">
            @method('put')
            @csrf
            <input type="text" name="judul" placeholder="judul" value="{{ $post->judul }}">
            <br><br>
            <input type="text" name="user_id" placeholder="id" value=" {{ $post->user_id }}">
            <br><br>
            <textarea name="isi" placeholder="isi" rows="10">{{ $post->isi }}</textarea> <br><br>
            <input type="submit" name="submit" value="save">
        </form>
    </body>

    </html>

</body>

</html>
