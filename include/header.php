<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVANCE VISION</title>
    <!-- start font -->
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap">
    <!-- start bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- start font -->
    <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <!-- start google font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- start custom css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="image/logo1.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-capitalize ml-auto">
                    <li class="nav-item <?php if($active == "home"){echo "active";}else{echo "";} ?>">
                        <a class="nav-link" href="index.php">home</a>
                    </li>
                    <li class="nav-item <?php if($active == "product"){echo "active";}else{echo "";}  ?>">
                        <a class="nav-link" href="products.php">products</a>
                    </li>
                    <li class="nav-item <?php if($active == "services"){echo "active";}else{echo "";}  ?>">
                        <a class="nav-link" href="services.php">services</a>
                    </li>
                    <li class="nav-item <?php if($active == "contact"){echo "active";}else{echo "";}  ?>">
                        <a class="nav-link" href="contactus.php">contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------------- end-navbar ------------>