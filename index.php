	
<?php 
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/web_aoIT/website-aothun-main/');
}
 ?>


<html lang="en">


<head>


    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="">


    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">


    <meta name="generator" content="Hugo 0.79.0">


    <title>Login Admin</title>

    <!-- Bootstrap core CSS -->


    <link href="<?php echo BASE_URL ?>assets/admin/css/bootstrap.min.css" rel="stylesheet"


          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <!-- Favicons -->


    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/admin/login.css">


    <meta name="theme-color" content="#7952b3">





    <style>

    	



        .bd-placeholder-img {


            font-size: 1.125rem;


            text-anchor: middle;


            -webkit-user-select: none;


            -moz-user-select: none;


            user-select: none;


        }

        @media (min-width: 768px) {


            .bd-placeholder-img-lg {


                font-size: 3.5rem;


            }


        }


    </style>



    <!-- Custom styles for this template -->


    <link href="<?php echo BASE_URL ?>assets/admin/css/signin.css" rel="stylesheet">


</head>


<body class="text-center">


<main class="form-signin">


    <form>


        <img class="mb-4" src="<?php echo BASE_URL ?>assets/admin/img/bootstrap-logo.svg" alt="" width="72" height="57">


        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>


        <label for="inputEmail" class="visually-hidden">Email address</label>


        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>


        <label for="inputPassword" class="visually-hidden">Password</label>


        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>


        <div class="checkbox mb-3">


            <label>


                <input type="checkbox" value="remember-me"> Remember me


            </label>


        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>


        <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>


    </form>


</main>








</body>


</html>