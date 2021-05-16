<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="antialiased">
    <x-header name="student"/>
    @include('info')
      <h1>Student Page</h1>
      <h4>{{$name}}</h4>
      <h4>{{$test}}</h4>

      @for($i=1;$i<=5;$i++)
      <h4>{{$i}}</h4>
      @endfor

      @if($num==1)
      <h4>{{$name}}</h4>
      @elseif($num==2)
      <h4>{{$test}}</h4>
      @else
      <h4>Not Found</h4>
      @endif

      @foreach($list as $value)
      <h4>{{$value}}</h4>
      @endforeach
    </body>
    <script>
         var data = @json($list);
         console.log(data)
    </script>
</html>
