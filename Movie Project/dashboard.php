<?php 
session_start();
include_once("config.php")

if(empty($_SESSION['username'])){
    header("Location: login.php");
}
$user=$_POST['user']??null;

$sql="SELECT * FROM users";
$selectUsers=$conn->prepare($sql);
$selectUsers->execute();


$users=$selectUsers->fetchAll();

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
<h1 class="h2">Dashboard</h1>
</div>


<?php if(strcmp($_SESSION['roli'],"Admin")===0){?>
        <h2>Users</h2>
        <div class="table-responsive">

            <table class="table table-striped table-sm">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Emri</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roli</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            <tbody>
                <?php foreach($users as $oneUser){ ?>
                <tr>
                <td><?php echo $oneUser['id']?></td>
                <td><?php echo $oneUser['emri']?></td>
                <td><?php echo $oneUser['username']?></td>
                <td><?php echo $oneUser['email']?></td>
                <td><?php echo $oneUser['roli']?></td>
                <td><a href="editUser.php?id=<?=$oneUser['id'];?>">Edit</a>
                <a href="deleteUser.php?id=<?=$oneUser['id'];?>">Delete</a></td>
                </tr>

               <?php } ?>           
             </tbody>
            </table>
        </div>
<?php}else{} ?>


</main>



    </div>
</div>


</body>
<script crossorigin="anonymous" defer src="./js/bootsrap.js"></script>
<script src="./js/script.js"></script>
</html>