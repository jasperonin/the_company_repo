<?php
session_start();
include "functions/dashboard-functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog: Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main-style.css">
</head>

<body>
    <header>
        <?php include "admin-menu.php"; ?>
        <div class="container-fluid bg-danger bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fas fa-user-cog me-3"></i>Dashboard</h2>
        </div>
    </header>
    <div class="container-fluid bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary d-block" href="add-post.php"><i class="fas fa-plus-circle me-2"></i>Add Post</a>
                </div>
                <div class="col">
                    <a class="btn btn-success d-block" href="categories.php"><i class="fas fa-folder-plus me-2"></i>Add Category</a>
                </div>
                <div class="col">
                    <a class="btn btn-warning d-block" href="users.php"><i class="fas fa-user-plus me-2"></i>Add User</a>
                </div>
            </div>
        </div>
    </div>

    <main class="container">
        <h3 class="h4 text-muted fw-bold text-uppercase">All Posts</h3>
        <div class="row">
            <div class="col-9">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <th>#</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>CATEGORY</th>
                        <th>DATE POSTED</th>
                        <th></th>
                    </thead>
                    <tbody>
                    <?php
                        displayAllPosts();
                    ?>
                    </tbody>
                </table>
            </div> 
            <nav class="col-3">
                <div class="card bg-primary mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Posts</h3>
                        <p class="fs-4"><i class="fas fa-pencil-alt"></i> <?= countPosts($_SESSION['account_id']); ?></p>
                        <a href="posts.php" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>
                
                <div class="card bg-success mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Categories</h3>
                        <p class="fs-4"><i class="far fa-folder-open"></i> <?= countCategories();?></p>
                        <a href="categories.php" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>

                <div class="card bg-warning border-5">
                    <div class="card-body text-center text-white">
                        <h3>Users</h3>
                        <p class="fs-4"><i class="fas fa-users"></i> <?= countUsers();?></p>
                        <a href="users.php" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>
            </nav>
        </div>
    </main>
</body>

</html>