<?php
session_start();

include 'functions/category-functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog: Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main-style.css">
</head>

<body>
    <header>
        <?php include 'admin-menu.php';?>
        <div class="container-fluid bg-success bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fas fa-folder me-3"></i>Category</h2>
        </div>
    </header>

    <main class="container">
        <div class="w-50 mx-auto">
            <form method="post">
                <div class="row">
                    <div class="col text-end">
                        <label for="category-name" class="mt-2">Add Category</label>
                    </div>
                    <div class="col ps-0">
                        <input type="text" name="category_name" id="category-name" class="form-control" required autofocus>
                    </div>
                    <div class="col px-0">
                        <button type="submit" name="add" class="btn btn-success text-uppercase fw-bold">Add</button>
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST['add'])){
                addCategory();
            }
            ?>
        </div>
        
        <table class="table table-striped table-hover w-50 mx-auto text-center mt-5">
            <thead class="table-dark text-uppercase">
                <th>Category ID</th>
                <th>Category Name</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                displayCategories();
                ?>
            </tbody>
        </table>
        
    </main>
</body>

</html>