<html >
  <head>
  </head>
  <body>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('savedata')}}" method="post">
     {{ csrf_field() }}
     <input type="text" name="quote">
     <input type="submit" value="submit">
    </form>
  </body>
</html>
