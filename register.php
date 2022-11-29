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
            <?php
              if(isset($_GET['usererror'])){
            ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      User with such email exists!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            <?php
            }
            ?>
            <?php
            if(isset($_GET['passworderror'])){
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    User password are not some!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            ?>
            <?php
            if(isset($_GET['success'])){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Account created successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            ?>
            <form action="toregister.php" method="post">
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
                        <label>CONFIRM PASSWORD: </label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <input type="password" name="re_password" class="form-control" placeholder=" CONFIRM PASSWORD" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label> FULL NAME: </label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button class="btn btn-success">
                            SIGN UP
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
