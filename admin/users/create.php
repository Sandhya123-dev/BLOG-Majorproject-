<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section - Add User</title>
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
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            background: #f6f6f6;
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
            /*border: 1px solid red; */
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

        /*-- /post slider  --*/
        .post-slider {
            position: relative;
            /*  border: 1px solid red; --*/
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

            /* -border: 1px dashed red;*/
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
            border: 1px solid green;
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
            border: 1px solid red;
        }

        .content .main-content {
            width: 70%;
            float: left;
            border: 1px soli blue;
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
            border-radius: 0;
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
            border: 1px dashed greenyellow;
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
            height: 350px;
            border: 1px solid ridge;
            position: relative;
            border: 1px solid red;
        }

        .footer .footer-content {

            height: 350px;
            display: flex;
            border: 2px dashed blue;
            /* flex-direction: row; */
            /* border: 1px solid blue; */

        }

        .footer .footer-content .footer-section {
            flex: 1;
            padding: 25px;

            /* box-sizing: border-box; */
            border: 1px solid white;
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
            margin-bottom: 8px;
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

        .footer .footer-bottom {
            background: #343a40;
            color: #686868;
            height: 50px;
            width: 100%;
            text-align: center;

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
                /*border: 1px solid red; */
                overflow: hidden;
            }

            header ul li {
                width: 100%;
            }

            header ul li ul {
                position: static;
                display: block;
                width: 100%;
            }

            header ul li ul a {
                padding: 10px;
                background: #0e94a0;
                color: #444;
                margin-left: 50px;
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
                margin-left: .5em;
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
                border: 1px solid red;
            }

            .footer .footer-content {
                height: auto;
                display: flex;
                flex-direction: column;
                border: 1px solid blue;
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

        /* admin-wrapper  */
        header {
            background: #008489;
        }

        .admin-wrapper {
            display: flex;
            height: calc(100% -10px);
        }

        .admin-wrapper .left-sidebar {
            flex: 2;
            height: 670px;
            background: #008489;
            width: auto;

        }

        .admin-wrapper .left-sidebar ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
            color: aliceblue;
        }

        .admin-wrapper .left-sidebar ul li a {
            padding: 18px;
            display: block;
            border-bottom: 1px solid #004044;
        }

        .admin-wrapper .left-sidebar ul li a:hover {
            background: #004044;
        }


        .admin-wrapper .admin-content {
            flex: 8;
            height: 100%;
            padding: 40px 100px 100px;
            overflow-y: scroll;
        }
        .admin-wrapper .page-title {
            text-align: center;
            margin-bottom: 1rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1.1rem;
        }
        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #d3d3d3;
        }
        .edit{
            color: green;
        }
        .delete{
            color: red;
        }
        .publish{
            color: blue;
        }
        .edit:hover,
        .delete:hover,
        .publish:hover{
           text-decoration: underline; 
        }
        form div{
            margin-bottom: 15px;
        }

    </style>

</head>

<body>
    <!-- Nav bar with responsive  -->
    <?php include(ROOT_PATH ."/app/includes/adminHeader.php"); ?>

    <!-- end of Nav bar with responsive  -->


    <!-- admin page wrapper -->
    <div class="admin-wrapper">
        <!-- left sidebar  -->
        <?php include(ROOT_PATH ."/app/includes/adminSidebar.php"); ?>

            
          <!-- //left sidebar  -->
        <!-- admin content  -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="home.php" class="btn btn-big">Manage topics</a>

            </div>
            <div class="content">
            <?php include(ROOT_PATH ."/app/helpers/formErrors.php"); ?>

                <h2 class="page-title">Add User</h2>
                <form action="create.php" method="post">
                    
                <div>
                <label > Username</label>
                    <input type="text" name="username"  value="<?php echo $username; ?>" class="text-input">
                </div>
                <div>
                    <label > Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                </div>
                <div>
                    <label >Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                </div>
                <div>
                    <label >Password Confirmation</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                </div>
                <div>
                    <?php if(isset($admin) && $admin==1): ?>
                    <label>
                        <input type="checkbox" name="admin" checked >
                        admin
                    </label>
                    <?php else:?>
                        <label>
                        <input type="checkbox" name="admin">
                        admin
                    </label>
                        <?php endif; ?>
                </div>
                    <div>
                        <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- //admin content  -->


    </div>




    <!-- slick crausels  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
       <!-- ckedditor  -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
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
        ClassicEditor
            .create(document.querySelector('#body'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            })
            .catch(error => {
                console.log(error);
            });
    </script>
    <!-- slick crausels  -->
</body>

</html>