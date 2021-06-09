<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
    
    <title>@yield('title')</title>

    
    
        
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
  </head>
  
  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">SHORE INNOVATION</h3>
          <nav class="nav nav-masthead justify-content-center">
            
            <a class="nav-link" href="#"></a>
          </nav>
        </div>
        <style>
          .formulario{
            border-radius: 20px;
          }

        </style>
        
      </header>
       
      <main class="flex-shrink-0 ">
        <div class="container">
          <h1 class="mt-5">@yield('content')</h1>
          
      </main>   
      
      {{----}}
      

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="text-white">Laravel Framework <a href="https://getbootstrap.com/"></a> <a href="https://twitter.com/mdo"></a></p>
        </div>
      </footer>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
