<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    


<h1 class='text-center mt-3'>Registration form</h1>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <form action="code.php" method="post">
                <input type="text" placeholder="Enter your name" class="form-control mt-3" name="name">

                <input type="email" placeholder="Enter your email" class="form-control mt-3" name="email">

                <input type="password" placeholder="Enter your password" class="form-control mt-3" name="pass">

                <input type="text" placeholder="Enter your address" class="form-control mt-3" name="address">

                <button class="btn btn-dark mt-3" name="register">Register</button>
            </form>

        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js"></script>
</body>
</html>