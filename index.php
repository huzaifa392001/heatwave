<?php include "./includes/header.php" ?>
<?php include "./includes/menu.php" ?>
    <main data-barba="container" data-barba-namespace="index">
        <div class="preloaderCont">
            <div class="preloaderBg"></div>
            <figure class="preloaderImg">
                <img src="/heatwave/assets/images/preloader-logo.png" alt="">
                <div class="preloaderMask"></div>
                <div class="logoIcon">
                    <?php include './includes/preloadersvg.php' ?>
                </div>
            </figure>
        </div>

        <?php include './pages/home.php' ?>
        <?php include './pages/classes.php' ?>
        <?php include './pages/coaching.php' ?>
        <?php include './pages/plans.php' ?>
        <?php include './pages/join.php' ?>
    </main>
<?php include "./includes/footer.php" ?>