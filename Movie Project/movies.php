<html>
    <head>
        <title>Dashboard</title>
        <link href="/css/bootstrap.css" rel="stylesheet">
         <link href="/css/bootstrap.js" rel="stylesheet">
         <sytle>
        
        </style>
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

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-log-2 d-md-block bg-light  sidebar collapse">

            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <?php if(strcmp($_SESSION['roli'],"Admin")===0){?>

                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <span data-feather="file"></span>Dashboard</a>
                            

                        </li>
                        <li class="nav-item">
                            <a href="movies.php" class="nav-link">
                                <span data-feather="file"></span>Movies</a>
                            

                        </li>


                <?php}?>
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <span data-feather="file"></span>Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <span data-feather="file"></span>Bookings</a>
                        </li>
                </ul>
            </div>
        </nav>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap
    align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Add Movie</h1>
</div>

    <form action="addMovie.php" method="post">
        <div class="form-floating">
        <input type="text" class="floatingInput" class="form-control" placeholder="Movie Name"
        name="movie name" id="movie_name">
        <label for="genre"></label>
        </div>

<div class="form-floating">
        <input type="text" class="floatingInput" class="form-control" placeholder="Genre"
        name="genre" id="genre">
        <label for="genre"></label>
        </div>


<div class="form-floating">
        <input type="number" min="1950" max="2026" step="1" class="floatingInput" class="form-control" placeholder="Release Year"
        name="release_year" id="release year" style="width: 150px;">
        <label for="release_year"></label>
        </div>


<div class="form-floating">
        <input type="number" min="0" max="5" step="0.1" class="floatingInput w-100" class="form-control" placeholder="Rating"
        name="rating" id="rating">
        <label for="rating"></label>
        </div>


<button type="submit" name="submit" ></button>

    </form>

    </main>
    </div>
</div>
</body>
</html>