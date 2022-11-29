<?php
require_once 'user.php';
?>
<?php
require_once 'header.php';
?>
<?php
require_once 'navbar.php';
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="tologin.php" method="post">
                <div class="row mt-3">
                    <div class="col-12">
                        <label> EMAIL: </label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <input type="email" name="email" class="form-control" placeholder="EMAIL" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label> PASSWORD: </label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <input type="password" name="password" class="form-control" placeholder="PASSWORD" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button class="btn btn-success">
                            SIGN IN
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
