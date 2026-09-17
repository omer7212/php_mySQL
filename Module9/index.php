<?php
     include_once("config.php");

     $sql="SELECT * FROM users";

     $getUsers=$conn->prepare($sql);
     $getUsers->execute();
     $users=$getUsers->fetchAll();
?>

<html>
    <head>
         <title>All Users</title>
         <style>
            table,td,th{
                border: 1px solid black;
                border-collapse: collapse;
            }
            td,th{
                padding: 10px 20px;
            }
         </style>
    </head>

    <body>
        <table>
            <thead>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Age</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                foreach($users as $person){
                    ?>
                    <tr>
                        <td><?= $person['id'] ?></td>
                        <td><?= $person['username'] ?></td>
                        <td><?= $person['password'] ?></td>
                        <td><?= $person['age'] ?></td>   
                        <td>
                            <button><a href="delete.php?id=<?= $person['id'] ?>">Delete</a></button>               
                            <button><a href="edit.php?id=<?= $person['id'] ?>">Edit</a></button>
                        </td>               
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="./form.html">Add User</a>
    </body>