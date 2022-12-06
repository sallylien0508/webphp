<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" class="body_img" >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav" style="background: rgba(100, 85, 66);      ">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block" style="letter-spacing: 9px; text-indent: 9px; text-transform: uppercase; font-size: 27px;">manager</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0" style="width: 80%">
            <?php
            $current_page = 'MANAGER';
            if(array_key_exists('page', $_GET)){
                $current_page = $_GET['page'];
            }
            switch($current_page){
                case 'delete':
                    include 'Mdelete.htm';
                    break;
                case 'reply':
                    include 'Mreply.htm';
                    break;
                case 'distribution':
                    include 'M_distribution.php';
                    break;
                case 'list':
                    include 'Mlisthomepage.htm';
                    break;
                case 'set':
                    include 'Mfixaccount.php';
                    break;
                case 'content':
                    include 'Mfixcontent.htm';
                    break;
                case 'replycon':
                    include 'Mreplycon.html';
                    break;
                default:
                    include 'Micon.php';
            }
            ?>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
