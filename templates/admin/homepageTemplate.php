<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/adminstyles.css">
    <script src="../scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/2ce145b69d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"> <img src="../images/logo/logo.jpg" alt="Safari Express"></a>
            </div>

            <!-- logged in user -->
            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 1){ ?>
            <div class="links">
                <a href="index.php?page=approve">Approve</a>
            </div>

            <div class="login">
                <?php echo '<b><a href="#">User: '. $_SESSION['userName'] .'</a></b>' ; ?>
                <!-- notification bell -->
                <div class="dropdown" id="dropdown">
                    <button class="dropbtn" onclick="myFunction()"><i class="fa fa-bell"></i></button>
                    <div class="dropdown-content" id="dropdown-content"> 
                        <div class="itms">
                            <img src="../images/logo/avatar1.png" alt="logo">
                            <div class="text">
                                <h4><?php echo $value['notif_title'];?></h4>
                                <p><?php echo $value['notif_msg'];?></p>
                            </div><br>
                        </div>
                    </div>
                </div>
                <!-- Logout button -->
                <form action="../public_html/index.php?page=login" method="POST">
                    <input type="submit" name="logout" value="Logout">
                </form>
                <?php
                    }
                    else{
                        echo '<a href="index.php?page=login">Login</a>';
                    }
                ?>
            </div>
        </nav>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <section class="footer_cont">
            <span class="footer_main">Safari Express</span>
            <span>&#169 2022 Safari Express | All Rights Reserved.</span>
        </section>
    </footer>
</body>
</html>