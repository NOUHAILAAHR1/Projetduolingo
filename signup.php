<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

        :root {
            --green: #77f07d;
            --black: #130f40;
            --light-color: #666;
            --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            --border: .2rem solid rgba(0, 0, 0, .1);
            --outline: .1rem solid rgba(0, 0, 0, .1);
            --outline-hover: .2rem solid var(--black);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: all .2s linear;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 7rem;
        }

        body {
            background: #eee;
        }

        section {
            padding: 2rem 9%;
        }

        .heading {
            text-align: center;
            padding: 2rem 0;
            padding-bottom: 3rem;
            font-size: 3.5rem;
            color: var(--black);
        }

        .heading span {
            font-weight: bold;
            color: green;
        }

        .btn {
            margin-top: 1rem;
            display: inline-block;
            padding: .8rem 3rem;
            font-size: 1.7rem;
            border-radius: .5rem;
            border: .2rem solid var(--black);
            color: var(--black);
            cursor: pointer;
            background: none;
        }

        .btn:hover {
            background: var(--green);
            color: #fff;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem 9%;
            background: #fff;
            box-shadow: var(--box-shadow);
        }

        header img {
            width: 140px;
            height: 110px;
            border-radius: 20px;
        }

        header h1 {
            margin-left: -170px;

        }


        .header .navbar a {
            font-size: 1.7rem;
            margin: 0 1rem;
            color: var(--black);
        }

        .header .navbar a:hover {
            color: var(--green);
        }

        .header .icons div {
            height: 4.5rem;
            width: 4.5rem;
            line-height: 4.5rem;
            border-radius: .5rem;
            background: #eee;
            color: var(--black);
            font-size: 2rem;
            margin-left: .3rem;
            cursor: pointer;
            text-align: center;
        }

        .header .icons div:hover {
            background: var(--green);
            color: #fff;
        }

        #menu-btn {
            display: none;
        }

        .header .search-form {
            position: absolute;
            top: 110%;
            right: -110%;
            width: 50rem;
            height: 5rem;
            background: #fff;
            border-radius: .5rem;
            overflow: hidden;
            display: flex;
            align-items: center;
            box-shadow: var(--box-shadow);
        }

        .header .search-form.active {
            right: 2rem;
            transition: .4s linear;
        }

        .header .search-form input {
            height: 100%;
            width: 100%;
            background: none;
            text-transform: none;
            font-size: 1.6rem;
            color: var(--black);
            padding: 0 1.5rem;
        }

        .header .search-form label {
            font-size: 2.2rem;
            padding-right: 1.5rem;
            color: var(--black);
            cursor: pointer;
        }

        .header .search-form label:hover {
            color: var(--green);
        }

        .footer {
            background: #fff;
        }

        .footer img {
            height: -10px;
            width: 100px;
        }

        .footer .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap: 1.5rem;
        }

        .footer .box-container .box h3 {
            font-size: 2.5rem;
            color: var(--black);
            padding: 1rem 0;
        }

        .footer .box-container .box h3 i {
            color: var(--green);
        }

        .footer .box-container .box .links {
            display: block;
            font-size: 1.5rem;
            color: var(--light-color);
            padding: 1rem 0;
        }

        .footer .box-container .box .links i {
            color: var(--green);
            padding-right: .5rem;
        }

        .footer .box-container .box .links:hover i {
            padding-right: 2rem;
        }


        .footer .box-container .box p {
            line-height: 1.8;
            font-size: 1.5rem;
            color: var(--light-color);
            padding: 1rem 0;
        }

        .footer .box-container .box .share a {
            height: 4rem;
            width: 4rem;
            line-height: 4rem;
            border-radius: .5rem;
            font-size: 2rem;
            color: var(--black);
            margin-right: .2rem;
            background: #eee;
            text-align: center;
        }

        .footer .box-container .box .share a:hover {
            background: var(--green);
            color: #fff;
        }

        .footer .box-container .box .email {
            width: 100%;
            margin: .7rem 0;
            padding: 1rem;
            border-radius: .5rem;
            background: #eee;
            font-size: 1.6rem;
            color: var(--black);
            text-transform: none;
        }

        @media (max-width:768px) {

            #menu-btn {
                display: inline-block;
            }

            .header .search-form {
                width: 90%;
            }

            .header .navbar {
                position: absolute;
                top: 110%;
                right: -110%;
                width: 30rem;
                box-shadow: var(--box-shadow);
                border-radius: .5rem;
                background: #fff;
            }

            .header .navbar.active {
                right: 2rem;
                transition: .4s linear;
            }

            .header .navbar a {
                font-size: 2rem;
                margin: 2rem 2.5rem;
                display: block;
            }

        }

        @media (max-width:450px) {

            html {
                font-size: 50%;
            }

            .heading {
                font-size: 2.5rem;
            }

            .footer {
                text-align: center;
            }

            .footer .box-container .box .payment-img {
                margin: 2rem auto;
            }
        }

        .contenu .form {
            background: #fff;

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: left;
            font-size: 26px;
            margin-bottom: 350px;
        }

        input {
            background-color: #eee;
            border: 2px solid green;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            border-radius: 10px;
        }

        label {
            font-size: 20px;
            color: rgb(1, 26, 4);
        }

        .container {

            border-radius: 10px;
            position: relative;
            width: 500;
            max-width: 100%;
            min-height: 600%;
        }


        button {
            border-radius: 20px;
            border: 1px solid green;
            background-color: green;
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        button:hover {
            font-size: 18px;
        }

        .lien {
            font-size: 14px;
            color: rgb(1, 26, 4);
        }

        .lien:hover {
            font-size: 18px;
            color: green;
            font-weight: bold;
            font-style: italic;
        }

        .contenu {
            background: #fff;
        }

        .contenu .heading {
            margin: auto;
            margin-top: 150px;
            margin-bottom: 20px;
           
        }
    </style>

</head>

<body>
    <?php
    if (isset($_GET["msg"])) {
        extract($_GET);
        switch ($msg) {
            case "err_nom":
                echo "<div><script>alert('empty name')</script></div>";
                break;
            case "err_prenom":
                echo "<div><script>alert('empty Last name ')</script> </div>";
                break;
            case "err_email":
                echo "<div><script>alert('empty email ')</script> </div>";
                break;
            case "err_nomU":
                echo "<div><script>alert('empty username')</script>  </div>";
                break;
            case "err_mdp":
                echo "<div ><script>alert(' empty Password')</script> </div>";
                break;
            case "err_repasse":
                echo "<div><script>alert('empty confirm Password')</script> </div>";
                break;
        }
    }

    ?>

<header class="header">

<img calss="logo" src="../Projetduolingo/img/logoo-removebg-preview.png">
<h1>duolingo</h1>

<nav class="navbar">
    <a href="home.php">Acceuil</a>
    <a href="./aboutDuo.html">A propos de duolingo</a>
    <a href="signin.php">login </a>
    <a href="dd.php">Achat </a>
    <a href="reclamation.php">Contact </a>

</nav>

<div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>
</div>

<form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</form>
</header>

    <div class="contenu">

        <form class="form" method="POST">
            <fildset>
                <h1 class="heading"><span> creer un compte </span> </h1>

                <div class="container">
                    <div>
                        <label for="exampleInputPassword1">prenom :</label>
                        <input type="text" name="nom" id="exampleInputPassword1">
                    </div>
                    <div>
                        <label for="exampleInputPassword1">nom :</label>
                        <input type="text" name="prenom" id="exampleInputPassword1">
                    </div>
                    <div>
                        <label for="exampleInputPassword1">Email :</label>
                        <input type="text" name="email" id="exampleInputPassword1">
                    </div>

                    <div>
                        <label for="exampleInputPassword1">nom d'utilisateur :</label>
                        <input type="text" name="nomU" id="exampleInputPassword1">
                    </div>

                    <div>
                        <label for="exampleInputEmail1">mot de pass : </label>
                        <input type="password" name="mdp" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div>
                        <label for="exampleInputPassword1">confirm mot de pass :</label>
                        <input type="password" name="repasse" id="exampleInputPassword1">
                    </div>

                    <br>
                    <div>
                        <button type="submit" name="inscription">creer</button>
                    </div>
                </div>

            </fildset>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        if (!isset($nom) || empty($nom)) {
            header("Location:signup.php");
        } else {
            if (!isset($prenom) || empty($prenom)) {
                header("Location:signup.php");
            } else {
                if (!isset($email) || empty($email)) {
                    header("Location:signup.php");
                } else {
                    if (!isset($nomU) || empty($nomU)) {
                        header("Location:signup.php");
                    } else {
                        if (!isset($repasse) || empty($repasse)) {
                            header("Location:signup.php");
                        } else {
                            if (!isset($mdp) || empty($mdp)) {
                                header("Location:signup.php");
                            } else {
                                    $nom = htmlspecialchars($nom);
                                    $prenom = htmlspecialchars($prenom);
                                    $email = htmlspecialchars($email);
                                    $nomU = htmlspecialchars($nomU);
                                    //$mdp = hash("sha256",$mdp);
                                    include("bdConnecte.php");
                                    try {
                                        $req = $bd->prepare("INSERT INTO inscription(nom,prenom,email,NomUtilisateur,Motdepasse) VALUES (:n,:p,:e,:u,:m)");
                                        $req->execute([
                                            "n" => $nom,
                                            "p" => $prenom,
                                            "e" => $email,
                                            "u" => $nomU,
                                            "m" => $mdp
                                        ]);
                                        //header("Location:signin.php");
                                    } catch (PDOException $e) {
                                        die("Erreur d'inserrtion :" . $e->getMessage());
                                    }
                                
                            }
                        }
                    }
                }
            }
        }
    }

    ?>

<section class="footer">

<div class="box-container">

    <div class="box">
        <img class="img2" src="../Projetduolingo/img/logo.PNG" />
        <p> Duolingo: Apprendre des langues. Les utilisateurs peuvent accéder à des ressources qui sont des leçons passionnantes écrites
             suivant les langues supportées par l'application</p>
        <div class="share">
            <a href="https://www.facebook.com/duolingo/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/duolingo" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/duolingo/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/duolingo" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +120-456-7890 </a>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +120-222-3333 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> doulingo@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i>tetouan, morocco - 400104 </a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="./home.php" class="links"> <i class="fas fa-arrow-right"></i> Acceuil </a>
        <a href="./aboutDuo.html" class="links"> <i class="fas fa-arrow-right"></i> a propos de duolingo </a>
        <a href="dd.php" class="links"> <i class="fas fa-arrow-right"></i> Achat </a>
        <a href="reclamation.php" class="links"> <i class="fas fa-arrow-right"></i> contact </a>





    </div>



</section>



    </section>
    <script>
        let searchForm = document.querySelector('.search-form');

        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }


        let navbar = document.querySelector('.navbar');

        document.querySelector('#menu-btn').onclick = () => {
            navbar.classList.toggle('active');
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
        }

        window.onscroll = () => {
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }
    </script>
</body>

</html>