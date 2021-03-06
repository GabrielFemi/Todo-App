<!DOCTYPE html>
<head>
    <title>Todolist App</title>
    <link rel = "stylesheet" href = "/css/app.css">
</head>
<body>
        @include('inc.navbar')

    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
    
    <footer id = "footer" class="text-center">
        <strong><p>Copyright &copy; 2020 Todolist App developed by <a target = "_blank" href="https://github.com/GabielFemi">Gabriel Akinyosoye</a></p></strong>
    </footer>


</body>
<script>
   
        $(document).ready(function(){
         $('.delete_form').on('submit', function(){
          if(confirm("Are you sure you want to delete it?"))
          {
           return true;
          }
          else
          {
           return false;
          }
         });
        });
        
        </script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>