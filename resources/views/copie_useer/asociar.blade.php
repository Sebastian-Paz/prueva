
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde asociar:</h1>

    <form action="{{route('copie_useer.asociar')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <br>
        <h1>Copias:</h1>
        <select name="copie_id">
            @foreach($copies as $copie)
                <option value="{{ $copie->id }}">{{ $copie->id }} - {{ $copie->nombre }}</option>
            @endforeach
        </select>
        <br>
        <h1>usuarios:</h1>    
        <select name="useer_id">
            @foreach($useers as $useer)
                <option value="{{ $useer->id }}">{{ $useer->id }} - {{ $useer->nombre }}</option>
            @endforeach
        </select>
        <br> <br>
        <button type="submit">asociar:</button>
        </form>
</body>
</html>