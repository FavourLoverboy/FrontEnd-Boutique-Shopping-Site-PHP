<?php include('includes/header.php'); ?>

    <div class="container-fluid black">
        <div class="row middle black height-1">
            <marquee>GET 10% OFF ON YOUR FIRST PURCHASE - USE CODE:XTAREG1</marquee>
        </div>
    </div>

    <!-- MENU AREA -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 middle height-nav">
                <a href="home" class="main-logo">Logo</a>
            </div>
            <div class="col-md-7 middle height-nav">
                <?php include('pages/menu.php'); ?>
            </div>
            <div class="col-md-3 middle height-nav icons">
                <ul>
                    <li><a href="home"> <span><i class='fa fa-search' aria-hidden='true'></i></span> </a></li>
                    <li><a href="home"> <span><i class='fa fa-user-o' aria-hidden='true'></i></span> </a></li>
                    <li><a href="home"> <span><i class='fa fa-heart-o' aria-hidden='true'></i></span> </a></li>
                    <li><a href="home"> <span><i class='fa fa-instagram' aria-hidden='true'></i></span> </a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php include($pages);?>
    
<?php include('includes/footer.php'); ?>