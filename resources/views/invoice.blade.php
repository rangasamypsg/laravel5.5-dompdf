<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
        .page-break {
            page-break-after: always;
        }
        </style>         
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <h1>Page 1</h1>
                    <div class="page-break"></div>
                <h1>Page 2</h1>
            </div>
        </div>
    </body>
</html>
