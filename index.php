<html>
    
    <head>
        <title>Learn PHP</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class= "bg-gray-700 p-4">

        <div class="container mx-auto p-4 bg-gray-200">

      
      
      
      <?php 

# IMPORT APPS

// import config.php
include('apps/config.php');

// import function.php
include('apps/function.php');

# IMPORT VIEWS

// import create.php
if(isset($_GET['p']) AND $_GET['p'] == 'create'){

    require_once 'views/create.php';
}

// import read.php
elseif(isset($_GET['p']) AND $_GET['p'] == 'read'){

    require_once 'views/read.php';
}

// import update.php
elseif(isset($_GET['p']) AND $_GET['p'] == 'update'){
   
    require_once 'views/update.php';
}

// import delete.php
elseif(isset($_GET['p']) AND $_GET['p'] == 'delete'){

    require_once 'views/delete.php';
}

// import 404.php
else{
    echo "<h1>Oops! eror 404 </h1> Halaman yang kam cari trada.";
}

?>


        </div>


   
        
    </body>
</html>



