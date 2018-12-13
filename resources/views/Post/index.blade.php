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
         <div class="container">
			 <div class="row">
				<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
				<table>
					<tr>
						<th>Title</th>
						<th>Body</th>
					</tr>
					@foreach ($posts as $post)
					<tr>
						<td>{{ $post->title }}</td>
						<td>{{ $post->body }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
    </body>
</html>
