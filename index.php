<?php
require_once 'user.php';
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cdn.shazoo.ru/c1200x525/614883_vnMc8kW_don.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Mafia 4</h5>
                <p>Mafia 4 может быть посвящена Сицилии и Дону Сальери</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.shazoo.ru/c1200x525/614956_mKdYGsZ_scarface2.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Scarface 2</h5>
                <p>Утечка: Концепты и уровни отмененной Scarface 2</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.shazoo.ru/c1200x525/614734_9Iuivy6_13-sniper.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Sniper Elite 5</h5>
                <p>Целый час кооперативного геймплея Sniper Elite 5</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.shazoo.ru/c1200x525/614625_hDCHbYr_3.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Achilles: Legends Untold</h5>
                <p>Ролевой экшен про Ахилла Achilles: Legends Untold вышел в раннем доступе Steam</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.shazoo.ru/c1200x525/614443_3fQID9t_0.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Stellaris</h5>
                <p>Дополнение Overlord для Stellaris превратило всех людей в азиатов</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php
require_once 'footer.php';
?>

