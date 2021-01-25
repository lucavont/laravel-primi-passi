<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <div class="spotify">
        <a href="#"><img src="img/Spotify_icon-icons.com_67077.svg" alt=""></a>
    </div>
    <div id="root">
        <ul>
            @foreach ($data['response'] as $cd)
            <li>
            <h3>{{ $cd['title'] }}</h3> <br>{{ $cd['author'] }}<br>{{ $cd['year'] }}<br> <img src="{{ $cd['poster'] }}" alt="">
            </li>
            @endforeach    
        </ul>
        {{-- <label for="cars">Seleziona un genere:</label>

        <select name="cars" id="cars">
            <option value="tutti">Tutti</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="metal">Metal</option>
            <option value="jazz">Jazz</option>
        </select> --}}
    </div>

</body>

</html>