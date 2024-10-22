<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>duolingo projet</title>
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
            background: var(--green);
            color: #fff;
            display: inline-block;
            padding: .5rem 3rem;
            clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
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

       


        .header .login-form {
            position: absolute;
            top: 110%;
            right: -110%;
            width: 35rem;
            box-shadow: var(--box-shadow);
            padding: 2rem;
            border-radius: .5rem;
            background: #fff;
            text-align: center;
        }

        .header .login-form.active {
            right: 2rem;
            transition: .4s linear;
        }

        .header .login-form h3 {
            font-size: 2.5rem;
            text-transform: uppercase;
            color: var(--black);
        }

        .header .login-form .box {
            width: 100%;
            margin: .7rem 0;
            background: #eee;
            border-radius: .5rem;
            padding: 1rem;
            font-size: 1.6rem;
            color: var(--black);
            text-transform: none;
        }

        .header .login-form p {
            font-size: 1.4rem;
            padding: .5rem 0;
            color: var(--light-color);
        }

        .header .login-form p a {
            color: var(--green);
            text-decoration: underline;
        }

        .home {
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(../image/banner-bg.webp) repeat;
            background-position: center;
            background-size: cover;
            padding-top: 17rem;
            padding-bottom: 10rem;
        }

        .content video {
            margin-top: -30px;
            width: 1400px;
            height: -200px;
            margin-left: 30px;
        }

        .content #p1 {
            font-size: 24px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-top: 40px;
            margin-right: 80px;
            justify-content: center;
            align-items: center;
            margin-left: 120px;

            line-height: 30px;
            color: rgb(102, 102, 102);
        }







        .features .heading {
            margin-top: -100px;



        }

        .features .heading a {
            text-decoration: none;
            color: rgb(255, 254, 254)
        }





        
.review .review-slider{
    padding:1rem;
}

.review .review-slider .box{
    background: #fff;
    border-radius: .5rem;
    text-align: center;
    padding:3rem 2rem;
    outline-offset: -1rem;
    outline: var(--outline);
    box-shadow: var(--box-shadow);
    transition: .2s linear;
}

.review .review-slider .box:hover{
    outline:var(--outline-hover);
    outline-offset: 0rem;
}

.review .review-slider .box img{
    height:10rem;
    width:10rem;
    border-radius: 50%;
}

.review .review-slider .box p{
    padding:1rem 0;
    line-height: 1.8;
    color:var(--light-color);
    font-size: 1.5rem;
}

.review .review-slider .box h3{
    padding-bottom: .5rem;
    color:var(--black);
    font-size: 2.2rem;
}

.review .review-slider .box .stars i{
    color:var(--green);
    font-size: 1.7rem;
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
















        /* media queries  */

        @media (max-width:991px) {

            html {
                font-size: 55%;
            }

            .header {
                padding: 2rem;
            }

            section {
                padding: 2rem;
            }

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
    </style>

</head>

<body>
    <!--header-->

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

    <!--main-->

    <section class="home" id="home">

        <div class="content">
            <video src="../Projetduolingo/img/mockrocket-export.mp4" autoplay controls loop></video>
            <p>
            <h2 id='p1'>Une application d'apprentissage des langues que les experts et les journaux réputés apprécient beaucoup est
                 Duolingo : Apprendre des langues. Les utilisateurs peuvent accéder à des ressources qui sont des leçons passionnantes écrites
                 suivant les langues prises en charge par l'application. De plus, apprendre une langue étrangère
                 la langue devient pleinement efficace lorsqu'il existe diverses méthodes d'apprentissage, des exercices,
                 et les types de pratique des compétences. Il s'agit donc d'une plateforme parfaitement adaptée à un large
                 spectateurs.
            </h2>

            </p>
        </div>

    </section>


    
    <section class="features" id="features">

        <h1 class="heading"> Voir<span><a href="http://localhost/Projetduolingo/aboutDuo.html">plus</a></span> </h1>



    </section>



    <section class="review" id="review">



        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../Projetduolingo/img/pr1.PNG" alt="">
                    <p>J'aime vraiment cette application, je l'utilise maintenant depuis plus de 80 jours. Je n'aime vraiment pas la carte de la dernière mise à jour je la trouve moins lisible pour choisir ses révisions.</p>
                    <h3>Lia Stivani
                    </h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Projetduolingo/img/pr2.PNG" alt="">
                    <p>J'aime vraiment cette application, je l'utilise maintenant depuis plus de 80 jours vous risquez de perdre lorsque vous essayez d'augmenter les niveaux de difficulté</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Projetduolingo/img/pr3.PNG" alt="">
                    <p>charger ou regarder des publicités. Vous pouvez suivre des cours pour récupérer des "vies" que vous risquez de perdre lorsque vous essayez d'augmenter les niveaux de difficulté. </p>
                    <h3>Stiven Mark</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Projetduolingo/img/pr4.PNG" alt="">
                    <p>Une application amusante. Par contre, le niveau atteint est trop bas accessible depuis le site duolingo, comme le montrent les tests accessibles depuis le site duolingo. </p>
                    <h3>Mark Leo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!--footer-->
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
















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
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
        var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});
</script>

</body>

</html>