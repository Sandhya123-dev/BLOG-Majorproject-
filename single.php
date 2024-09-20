<?php include("path.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
    <!-- fonts awsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <!-- bootstrap1 -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!-- <link href="./css/home.css" rel="stylesheet"> -->
    <style>
        * {
            box-sizing: border-box;
        }


        html,
        body {
            height: 100%;
            margin: 0px;
            padding: 0px;
            min-height: 100vh;
            display: flex;
            background: #f6f6f6;
            font-family: 'Lora', serif;
            flex-direction: column;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Candal', serif;
            color: #444;
            margin: 5px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .btn {
            padding: .5rem 1rem;
            background: #006669;
            color: white;
            border: 1px solid transparent;
            border-radius: .25rem;
            font-size: 1.08em;
            font-family: 'Lora', serif;
        }

        .btn-big {
            padding: .7rem 1.1rem;
            line-height: 1.3rem;
        }

        .btn:hover {
            color: white !important;
            background: #005255;
        }


        .text-input {
            padding: .7rem 1rem;
            display: block;
            width: 100%;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            outline: none;
            color: #444444;
            line-height: 1.5rem;
            font-size: 1.2em;
            font-family: 'Lora', serif;
        }

        .note-input {
            height: 150px;
        }

        /* .clearfix::after{
            content: '';
            display: block;
            clear: both; */
        /* } */
        header {
            background: #008489;
            height: 66px;

        }

        header * {
            color: white;
        }

        header .logo {
            float: left;
            margin-left: 2rem;
            height: inherit;
            /*border: 1px solid red; */
        }

        header .logo-text {
            margin: 9px;
            font-family: 'Candal', serif;
        }

        header .logo-text span {
            color: #05f7ff;
        }

        header ul {
            float: right;
            margin: 0px;
            padding: 0px;
            list-style: none;

        }

        header ul li {
            float: left;
            position: relative;
        }

        header ul li ul {
            position: absolute;
            top: 66px;
            right: 0px;
            width: 180px;
            display: none;
            z-index: 88888;
            float: right;
        }

        header ul li:hover ul {
            display: block;
        }

        header ul li ul li {
            width: 100%;
        }

        header ul li ul li a {
            padding: 10px;
            background: white;
            color: #444;
        }

        header ul li ul li a.logout {
            color: red;
        }

        header ul li ul li a:hover {
            background: #d5d6d6;
        }

        header ul li a {
            display: block;
            padding: 21px;
            font-size: 1.1rem;
            text-decoration: none;

        }

        header ul li a:hover {
            background: #006669;
            transition: 0.5s;
        }

        header .menu-toggle {
            display: none;
        }

        /*.page-wrapper{
            min-height: 100%;
        }*/
        .page-wrapper {
            flex: 1;
        }

        .page-wrapper a:hover {
            color: #006669;
        }

        /*-- post slider  --*/
        .post-slider {
            position: relative;
        }

        .post-slider .slider-title {
            text-align: center;
            margin: 30px auto;
            background: #f6f6f6;
            font-family: 'Lora', serif;
        }

        .post-slider .next {
            position: absolute;
            top: 50%;
            right: 30px;
            font-size: 2em;
            color: #006669;
            cursor: pointer;
        }

        .post-slider .prev {
            position: absolute;
            top: 50%;
            left: 30px;
            font-size: 2em;
            color: #006669;
            cursor: pointer;
        }

        .post-slider .post-wrapper {
            width: 84%;
            height: 350px;
            margin: 0px auto;
            overflow: hidden;
            padding: 10px 0px 10px 0px;

        }

        .post-slider .post-wrapper .post {
            height: 350px;
            width: 300px;
            margin: 0px 10px;
            display: inline-block;
            background: white;
            border-radius: 5px;
            box-shadow: 1rem 1rem 1rem -1rem #a0a0a033;
        }

        .post-slider .post-wrapper .post .post-info {
            height: 130px;
            padding: 13px 13px;
            /* border: 1px solid green; */
        }

        .post-slider .post-wrapper .post .slider-image {
            width: 100%;
            height: 200px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        /*-- content  --*/
        .content {
            width: 90%;
            margin: 30px auto 30px;
            /* border: 1px solid red; */
        }

        .content .main-content {
            width: 70%;
            float: left;
            border: 1px soli blue;
        }

        .content .main-content.single {
            background: white;
            padding: 20px 50px;
            font-size: 1.1em;
            border-radius: 5px;
        }
        .content .main-content.single .post-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .content .main-content .post {
            width: 95%;
            height: 270px;
            margin: 20px auto;
            border-radius: 5px;
            background: white;
            position: relative;
        }
        .content .popular .post {
            border-top: 1px solid #e0e0e0;
            margin-top: 10px;
            padding-top: 10px;
        }

        .content .popular .post img {
            height: 60px;
            width: 60px;
            float: left;
            margin-right: 10px;
        }

        .content .main-content .post .read-more {
            position: absolute;
            bottom: 10px;
            right: 10px;
            border: 1px solid #006669;
            background: transparent;
            border-radius: 0px;
            color: #006669 !important;

        }

        .content .main-content .post .read-more:hover {
            background: #006669;
            color: white !important;
            transition: .25s;

        }

        .content .main-content .post .post-image {
            width: 40%;
            height: 100%;
            float: left;
        }

        .content .main-content .post .post-preview {
            padding: 10px;
            width: 60%;
            float: right;
        }

        .content .main-content .post .post-preview .preview-text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            /* Number of lines to show before adding ellipsis */
            -webkit-box-orient: vertical;
        }

        .content .main-content .recent-post-title {
            margin: 20px;
        }

        .content .sidebar {
            width: 30%;
            float: left;
            /* border: 1px dashed green; */
            /* height: 300px; */
        }
        .content .sidebar.single {
            padding: 0px 10px;
        }

        .content .sidebar .section {
            background: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .content .sidebar .section .section-title {
            margin: 10px 0px 10px 0;
        }

        .content .sidebar .section.search {
            margin-top: 80px;
        }


        .content .sidebar .section.topics ul {
            margin: 0;
            padding: 0;
            list-style: none;
            border-top: 1px solid #e0e0e0;
        }


        .content .sidebar .section.topics ul li a {
            display: block;
            padding: 15px 0px 15px 0px;
            border-bottom: 1px solid #e0e0e0;
            transition: all 0.3s;
        }

        .content .sidebar .section.topics ul li a:hover {
            padding-left: 10px;
            transition: all 0.3s;

        }


        /*- FOOTER--*/
        .footer {
            background: #303036;
            color: #d3d3d3;
            height: 400px;
            border: 1px solid ridge;
            position: relative;
            /* border: 1px solid red; */
        }

        .footer .footer-content {

            height: 350px;
            display: flex;
            /* border: 2px dashed blue ; */
            /* flex-direction: row; */
            /* border: 1px solid blue; */

        }

        .footer .footer-content .footer-section {
            flex: 1;
            padding: 25px;

        }

        .footer .footer-content h1,
        .footer .footer-content h2 {
            color: white;
        }

        .footer .footer-content .about h1 span {
            color: #0557ff;
        }

        .footer .footer-content .about .contact span {
            display: block;
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        .footer .footer-content .about .socials a {
            border: 1px solid gray;
            width: 45px;
            height: 41px;
            padding-top: 5px;
            margin-right: 5px;
            text-align: center;
            display: inline-block;
            font-size: 1.3em;
            border-radius: 5px;
            transition: all .3s;

        }

        .footer .footer-content .about .socials a:hover {
            border: 1px solid white;
            color: white;
            transition: all .3s;
        }

        .footer .footer-content .links ul a {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2em;
            transition: all .3s;
        }

        .footer .footer-content .links ul a:hover {
            color: white;
            margin-left: 15px;
            transition: all .3s;

        }

        .footer .footer-content .contact-form .contact-input {
            background: black;
            color: #bebdbd;
            margin-bottom: 10px;
            line-height: 1.5rem;
            padding: .9rem 1.4rem;
            border: none;
            /* height: 50px; */
            transition: all .3s;

        }


        .footer .footer-content .contact-form .contact-input:focus {
            background: #1a1a1a;
        }

        .contact-btn {
            float: right;
            font-size: 1.1em;
            font-family: 'Lora', serif;
        }

        .btn-big {
            padding: .7rem 1.3rem;
            line-height: 1.3rem;
        }

        .footer .footer-content .contact-form .contact-btn {
            float: right;
            font-size: 1.1em;
            font-family: 'Lora', serif;
        }


        .footer .footer-bottom {
            background: #343a40;
            color: #686868;
            height: 50px;
            width: 100%;
            text-align: center;
            position: relative;
            bottom: 0px;
            left: 0px;
            padding-top: 20px;
        }

        .clearfix ::after {
            content: "";
            display: block;
            clear: both;
        }



        @media only screen and (max-width:776px) {
            header {
                position: relative;
            }
            .main-content-wrapper{
               padding: 10px; 
            }

            header ul {
                width: 100%;
                background: #0e94ad;
                max-height: 0px;
                overflow: hidden;
            }

            .showing {
                max-height: 100em;
            }

            header ul li {
                width: 100%;
            }

            header ul li ul {
                position: static;
                display: block;
                width: 100%;
            }

            header ul li ul li a {
                padding: 10px;
                background: #0e94a0;
                color: #b5cdd4;
                padding-left: 50px;
            }

            header ul li ul li a:hover {
                background: #006669;
            }


            header ul li ul li a .logout {
                color: red;
            }

            header .menu-toggle {
                display: block;
                position: absolute;
                right: 20px;
                top: 20px;
                font-size: 1.9em;
            }

            header .logo {
                margin-left: .8em;
            }



        }

        @media only screen and (max-width:934px) {
            .content {
                width: 100%;
            }

            .content .main-content {
                width: 100%;
                padding: 10px;
            }

            .content .main-content .post {
                width: 100%;


            }

            .content .sidebar {
                width: 100%;
                padding: 10X;
            }

            .content .sidebar .section.search {
                margin-top: 30px;
            }

            .footer {
                height: auto;
                /* border: 1px solid red; */
            }

            .footer .footer-content {
                height: auto;
                display: flex;
                flex-direction: column;
                /* border: 1px solid blue; */
            }

            .footer .footer-content .contact-form {
                padding-bottom: 90px;
            }

            .footer .footer-content .contact-form .contact-btn {
                width: 100%;
            }




        }

        @media only screen and (max-width:600px) {
            .content .main-content .post {
                height: auto;
            }
            .content .main-content.single {
                    padding: 10px 20px;
        
        }

            .content .main-content .post .post-image {
                width: 100%;
            }

            .content .main-content .post .post-preview {
                width: 100%;
            }

            .content .main-content .post .read-more {
                position: static;
                display: block;
                width: 100%;
                text-align: center;
            }

            .post-slider .next {
                right: 10px;
            }

            .post-slider .prev {
                left: 10px;
            }

            .content .main-content .post .post-preview .preview-text {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                /* Number of lines to show before adding ellipsis */
                -webkit-box-orient: vertical;
            }
        }
    </style>

</head>

<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0" nonce="nYhTbPOq"></script>
    

    <!-- Nav bar with responsive  -->
    <?php include(ROOT_PATH ."/app/includes/header.php"); ?>

    <!-- end of Nav bar with responsive  -->

    <!--page wrapper-->
    <div class="page-wrapper">


        <!-- content  -->
        <div class="content clearfix">
            <div class="main-content single">
                <h2 class="post-title">this is the title of the post</h2>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda totam pariatur inventore!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ducimus aliquam maiores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente facere maiores ut iste aliquam
                        perspiciatis deserunt? ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem,
                        fugit!</p>
                    <p>0L8FfYX3RCDxt6OkLyRPRX2R5CAaQ9keQk7PIi8VAQmmOQ8oDKOQ8pK7yF2gMGw5RQN6KAzhMLibWBs
                        w4hhcT23o5j0fD0xSZCFRFKK19whR6NtRbtngSMRL</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Deleniti in accusantium facilis quis consectetur nulla voluptas
                        vel ipsa alias quae odio at placeat odit veniam autem amet iure cum,
                        voluptate exercitationem id. Ea dignissimos odio, itaque consectetur
                        a expedita atque ipsa cumque eveniet harum quam illo libero error
                        qui sed ullam totam ad saepe. In quis cupiditate harum ea,
                        repellendus sit. Consectetur voluptatem, aliquid, facilis, e
                        st debitis commodi natus magnam amet quae mollitia praesentium
                        ullam ad impedit quas sed error. Assumenda non, quisquam nostrum
                        ad dolorem veritatis officiis suscipit autem optio quaerat quasi
                        praesentium repellat reiciendis facere minima animi neque, voluptatibus, voluptates soluta nisi
                        ratione temporibus tempora! Repellat accusantium, quidem voluptas numquam pariatur quis. Nisi
                        delectus amet recusandae consequatur ut temporibus earum facilis, eum debitis asperiores placeat
                        repellendus eius obcaecati unde quasi, eligendi libero quae iste mollitia iusto est? Facere ad
                        id assumenda corporis perspiciatis asperiores dolorum nobis, rerum ipsam reiciendis voluptates
                        alias mollitia reprehenderit laboriosam sit recusandae magnam harum suscipit amet tempora quis
                        facilis eligendi? Aliquam laborum enim nisi animi exercitationem ab architecto eum doloribus
                        aliquid in ullam eaque explicabo, deserunt odit temporibus voluptatum ex blanditiis porro
                        ducimus et eos, adipisci natus sequi. Est, consequuntur? At enim blanditiis nostrum, ipsam
                        aliquid deserunt voluptatem officiis magni facere, amet nisi cum voluptatibus aspernatur
                        adipisci cupiditate officia natus incidunt tempore error aperiam unde! Doloremque id corrupti,
                        velit officiis facere amet tempore aliquam deserunt atque tenetur ullam, expedita quasi
                        recusandae nemo odio tempora alias dicta aut nisi! Deserunt, tempore dolor! Totam ipsam
                        voluptatem nisi. Facilis recusandae aspernatur nihil assumenda voluptatum non velit quia dicta
                        optio sed, laboriosam laborum officiis quas! Nostrum distinctio natus ex ducimus voluptatem. Et
                        qui odit quis asperiores, nostrum maiores porro ratione quod fuga nobis enim incidunt ex
                        pariatur eaque officia nesciunt doloribus fugiat quam deserunt reprehenderit. Atque,
                        reprehenderit beatae.</p>
                </div>

            </div>

            <div class="sidebar single">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>

                <div class="section popular">
                    <h2 class="section-title">Popular </h2>

                    <div class="post clearfix">
                        <img src="images/download.jpg" alt="">
                        <a href="" class="title">how to overcome your fears</a>
                    </div>
                    <div class="post clearfix">
                        <img src="images/download.jpg" alt="">
                        <a href="" class="title">how to overcome your fears</a>
                    </div>
                    <div class="post clearfix">
                        <img src="images/download.jpg" alt="">
                        <a href="" class="title">how to overcome your fears</a>
                    </div>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="">Quotes</a></li>
                        <li><a href="">Fiction</a></li>
                        <li><a href="">Biography</a></li>
                        <li><a href="">Motivation</a></li>
                        <li><a href="">Inspiration</a></li>
                        <li><a href="">Life Lessons</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end  content  -->
    <!-- footer -->  
     <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    <!-- JQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- slick crausels  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.menu-toggle').on('click', function () {
            $('.nav').toggleClass('showing');
            $('.nav ul').toggleClass('showing');
        });
        $('.post-wrapper').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <!-- slick crausels  -->
</body>

</html>
