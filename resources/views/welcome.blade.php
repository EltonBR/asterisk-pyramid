<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="css/boostrap.min.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

    </head>
    <body>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="">
        <input type="numeric" id="asterisk-ammount" placeholder="Asterisk Amount">
        <button type="submit">Gerar</button>
    </form>
    <div id="pyramid-container">


    </div>
    </body>
</html>
