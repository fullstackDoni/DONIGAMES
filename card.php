<?php
require_once 'user.php';
global $ONLINE;
if ($ONLINE) {
    ?>
    <?php
    require_once 'db.php';
    ?>
    <?php
    require_once 'header.php';
    ?>
    <?php
    require_once 'navbar.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card mt-5" style="width:390px">
                    <img src="https://utorrentgames.pro/uploads/posts/2020-07/thumbs/1594640748_56fg.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Far Cry 6</h5>
                        <p class="card-text"> Ubisoft Montreal / Ubisoft</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mt-5" style="width:390px">
                    <img src="https://utorrentgames.pro/uploads/posts/2020-11/thumbs/1604923151_56fg.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Assassin's Creed:Valhalla</h5>
                        <p class="card-text"> Ubisoft Montreal / Ubisoft</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mt-5" style="width:390px">
                    <img src="https://utorrentgames.pro/uploads/posts/2017-11/thumbs/1509698762_67gh.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Call of Duty:WWII</h5>
                        <p class="card-text"> Sledgehammer Games / Activision</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mt-5" style="width:390px">
                    <img src="https://utorrentgames.pro/uploads/posts/2021-11/thumbs/1636113015_56fg.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Call of Duty:Vanguard</h5>
                        <p class="card-text"> Sledgehammer Games / Activision</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    header("Location:login.php");
}
?>

