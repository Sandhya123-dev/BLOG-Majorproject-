<?php include("path.php");
// include(ROOT_PATH . "/app/database/db.php");
 include(ROOT_PATH . "/app/controllers/topics.php");

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
            /* border: 1px soli blue; */
        }


        .content .main-content .post {
            width: 95%;
            height: 270px;
            margin: 20px auto;
            border-radius: 5px;
            background: white;
            position: relative;
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
                padding: 10px;
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

    <!-- Nav bar with responsive  -->
   <?php include(ROOT_PATH ."/app/includes/header.php"); ?>
   <?php include(ROOT_PATH ."/app/includes/message.php"); ?>

   
    <!-- end of Nav bar with responsive  -->

    <!--page wrapper-->
    <div class="page-wrapper">
        <div class="post-slider">
            <h1 class="slider-title">Trending Post</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>


            <div class="post-wrapper">

                <div class="post">
                    <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D"
                        alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day you will be win</a></h4>
                        <i class="far fa-user">A Jass</i>
                        &nbsp;
                        <i class="far fa-calender">Mar 8,2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="Snapchat-2089681756.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day you will be win</a></h4>
                        <i class="far fa-user">A Jass</i>
                        &nbsp;
                        <i class="far fa-calender">Mar 8,2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="Snapchat-2089681756.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day you will be win</a></h4>
                        <i class="far fa-user">A Jass</i>
                        &nbsp;
                        <i class="far fa-calender">Mar 8,2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="https://buffer.com/cdn-cgi/image/w=1000,fit=contain,q=90,f=auto/library/content/images/size/w1200/2023/10/free-images.jpg"
                        alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day you will be win</a></h4>
                        <i class="far fa-user">A Jass</i>
                        &nbsp;
                        <i class="far fa-calender">Mar 8,2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="data:image/jpeg;base64,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"
                        alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day you will be win</a></h4>
                        <i class="far fa-user">A Jass</i>
                        &nbsp;
                        <i class="far fa-calender">Mar 8,2019</i>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of crausel  -->

        <!-- content  -->
        <div class="content clearfix">
            <!-- main content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post">
                    <img src="data:image/jpeg;base64,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"
                        alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">blog.title</a></h2>
                        <i class="far fa-user">A Jass</i>
                        &nbsp;
                        <i class="far calender">Mar 11,2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A enim doloremque nisi eligendi
                            quidem eaque tempore ducimus saepe cumque. Nisi tempora facere similique!
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post">
                    <img src="data:image/jpeg;base64,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"
                        alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">blog.title</a></h2>
                        <i class="far fa-user">A Jass</i>
                        &nbsp;
                        <i class="far calender">Mar 11,2019</i>
                        <p class="preview-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe quibusdam quasi eius
                            blanditiis.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

            </div>

            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $key=> $topic):?>
                        <li><a href="#"><?php echo $topic['name'];?></a></li>

                        <?php endforeach; ?>
                        
                        <!-- <li><a href="#">Poems</a></li> -->

                        <!-- <li><a href="">Quotes</a></li>
                        <li><a href="">Fiction</a></li>
                        <li><a href="">Biography</a></li>
                        <li><a href="">Motivation</a></li>
                        <li><a href="">Inspiration</a></li>
                        <li><a href="">Life Lessons</a></li> -->

                    </ul>
                </div>
            </div>
        </div>
        <!-- end  content  -->
    </div>
    <!-- footer -->
    <?php include(ROOT_PATH ."/app/includes/footer.php"); ?>


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



