<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <style>
            .font-sans-serif {
                font-family: sans-serif;
            }

            .width-fit-content {
                width:fit-content;
            }
        </style>

    </head>
    <body>
        <div class="container mt-1">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="asterisk">Asterisk Amount <small class="text-danger">*</small></label>
                    <input type="number"  class="form-control" id="asterisk-amount" name="asteriskAmount" placeholder="Only Numbers">
                    <button class="btn btn-primary mt-2" type="submit">Generate</button>
                </div>
            </form>

            @if(strlen($pyramid) > 0)
            <div class="bg-dark text-white width-fit-content font-sans-serif">
                <h4>Result</h4>
                {!!$pyramid!!}
            </div>
            @endif
            </body>
        </div>
</html>
