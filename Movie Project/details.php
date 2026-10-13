<?php 

include_once('config.php');
$movie_id=$_GET['movie_id'];
$sql="SELECT * FROM movies";
$selectedMovie=$conn->prepare("SELECT * FROM movies WHERE  id=$movie_id");
$selectedMovies->execute();

$movie_data=$selectedMovies->fetch();


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
            <?php foreach($movie_data as $movie){?>
            <div class="col">
            <div class="card shadow-sm">
            <img src="" height="250" >
            <div class="card-body">
                <h4 class="card text"><?php echo $movie['emri_filmit']?></h4>
                <form action="book.php" method="post">
                <div class="form-floating">
                    <input type="text" id="data" placeholder="Date" name="data">
                    <label for="data">Date</label>

                </div>

                <div class="form-floating">
                    <input type="text" id="seat" placeholder="Number of tickets" name="seat">
                    <label for="seat">Seat Number</label>

                </div>
                <div class="form-floating">
                    <input type="number" id="notickets" placeholder="Number of tickets" name="notickets">
                    <label for="noticket">Number of ticekts</label>

                </div>
                        <div class="form-floating">
                            <select name="time" id="time">
                                <option value="12:00">12:00</option>
                                <option value="15:00">15:00</option>
                                <option value="17:00">17:00</option>
                                <option value="20:00">20:00</option>

                            </select>
                        </div>
                        <button type="submit" name="submit" class=""></button>
                </form>
                    
                </div>
            </div>
        </div>
       <?php } ?>


        </div>
    </div>
</div>


</body>
</html>
