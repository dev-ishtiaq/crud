<?php
require("dbcon.php");
require("crud.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="script.js" defer></script>
</head>
<body>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
Edit Modal
</button> -->
<!-- ========= nav bar =========== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand mx-5" href="#"><img height="50px" src="proxy_form.png" alt="proxy_form.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact</a>
            </li>
            
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/crud/index.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="slEdit" id ="slEdit">
                        <div class="mb-3">
                            <label  class="form-label">Title</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit" >
                        </div>
                        <div class="mb-3">            
                            <label  class="form-label">Description</label>
                            <textarea class="form-control" name="commEdit" id="commEdit" cols="30" rows="3" ></textarea>
                        </div>
                    </div>
                
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>
    
    <div class="container pb-0 mt-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                if($insert) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congratulations!</strong> Your data inserted successfully!.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
                if($update) {
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Congratulations!</strong> Your data updated successfully!.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
                if($delete) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Congratulations!</strong> Your data deleted successfully!.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
                ?>
                <form action="/crud/index.php" method="POST">
                    <div class="mb-3">
                        <h2>Add a Task</h2>
                        <label  class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">            
                        <label  class="form-label">Description</label>
                        <textarea class="form-control" name="comm" id="comm" cols="30" rows="3"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-5">Submit</button>
                </form> 
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="container pt-0 mt-0">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Title</th>
                            <th scope="col">Comment</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `crud`";
                        $result = mysqli_query($con, $sql);
                        $sl = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $sl += 1;
                            echo "<tr>
                                    <th scope='row'>". $sl . "</th>
                                    <td>". $row['title'] . "</td>
                                    <td>". $row['comm'] . "</td>
                                    <td class='text-center'>
                                        <button class='edit btn btn-sm btn-primary m-1 px-3' id=".$row['sl'].">Edit</button>
                                        <button class='delete btn btn-sm btn-danger m-1' id=d".$row['sl'].">Delete</button>
                                    </td>
                                </tr>";                            
                        }
                        ?>                         
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.7.0.js"
integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</body>
</html>