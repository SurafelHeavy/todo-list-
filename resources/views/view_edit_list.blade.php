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
            table, form{
                background: white !important;
                margin-top: 50px;
                padding: 20px;
            }
        </style>
    </head>
   <body class="antialiased">
    
    <div class="container text-center">
        <div class="text-right">
          <a href="create" class="btn btn-success">Create New List</a>
        </div>
        <form action="../update_list/{{ $todo_arr->id }}">
            <input type="text" name="name" value="{{ $todo_arr->name }}" class="form-control" >
            <input type="submit" class="btn btn-success" value="Edit">
        </form>
</div>
    </body>
</html>
