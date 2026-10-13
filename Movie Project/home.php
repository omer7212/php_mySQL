<?php 

include_once('config.php');

$sql="SELECT * FROM movies";
$selectedMovies=$conn->prepare("SELECT * FROM movies");
$selectedMovies->execute();

$movies_data=$selectedMovies->fetchAll();


?>



<html>
    <head>
        <title>Dashboard</title>
        <link href="/css/bootstrap.css" rel="stylesheet">
         <link href="/css/bootstrap.js" rel="stylesheet">
    </head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" >
    <a  class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Welcome to dashboard</a>
    

<button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
aria-label="Toggle Navigation">
<span class="navbar-toggler-icon4"></span></button>
<input type="text" class="form-control form-control-dark w-50" 
placeholder="Search" aria-label="Search">



<div>
    <div class="nav-item text-nowrap">
        <a href="logout.php" class="nav-link px-3">Logout</a>

    </div>
</div>

</header>

<div class="album py-5 hg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($movies_data as $movie){?>
            <div class="col">
            <div class="card shadow-sm">
            <img src="" height="250" >
            <div class="card-body">
                <h4 class="card text"><?php echo $movie['emri_filmit']?></h4>
                <div class="d flex justify content between align items center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-sm btn-outline-secondary">Details</a>
                        <a href="book.php?movie_id=<? echo $movie['id'];?>" class="btn btn-sm btn-outline-secondary">Book</a>
                    </div>
                    <small class="text muted">Release Year: <?php echo $movie['viti_publikmit']?></small>
                    <small class="text muted">Rating: <?php echo $movie['vlersimi']?></small>
                </div>
            </div>
        </div>
       <?php } ?>


        </div>
    </div>
</div>


</body>
</html>