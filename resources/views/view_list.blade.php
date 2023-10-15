<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            body{
                background: black !important;
            }
            table{
                background: white !important;
                margin-top: 50px;
            }
        </style>
    </head>
   <body class="antialiased">
    
    <div class="container">
        <div class="text-right">
          <a href="create" class="btn btn-success">Create New List</a>
        </div>
   <table class="table">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>created at</td>
        <td>Action</td>
    </tr>
    @foreach ($todo_arr as $td)
      <tr>
        <td> {{ $td->id }}</td>
        <td> {{ $td->name }}</td>
        <td> {{ $td->created_at }}</td>
        <td><a href="delete/{{ $td->id }}">Delete</a> | <a href="edit/{{ $td->id }}">Edit</a></td>
      </tr>
       @endforeach
   </table>
</div>
    </body>
</html>
