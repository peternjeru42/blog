<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Todo App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav me-3 mb-2 mb-lg-0">
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/todos">Home</a>
        </li>
         </ul>

         <!--link for creating a new todo--->
        
   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/new-todos">Create Todos</a>
        </li>
         </ul>
          
        
     
    
  </div>
</nav>
    <div class="container my-3"> 
    @if (session()->has('success'))
    
  <div class="alert alert-success"> 
  {{session()->get('success')}}
   </div>

    @endif

    @yield("content")
    </div>
   </body>
</html>