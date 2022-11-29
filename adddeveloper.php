<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php require_once 'header.php'; ?>
</head>
<body>
<?php
require_once 'navbar.php';
?>
<div class="container" style="min-height: 300px;">
    <div class="row mt-3">
        <div class="col-6 mx-auto">
            <?php
            if(isset($_GET['success'])){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    DEVELOPER added successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            ?>
            <form action="toadddeveloper.php" method="post">
                <div class="row mt-3">
                    <div class="col-12">
                        <label>NAME: </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="text" class="form-control" name="name" required placeholder="Insert name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>IZDATEL: </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="text" class="form-control" name="izdatel" required placeholder="Insert Izdatel">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button class="btn btn-success">ADD DEVELOPER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container" style="min-height: 700px;">
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>IZDATEL</th>
                    <th width="7%;">DETAILS</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $developer = getAllDevelopers();
                if($developer!=null){
                    foreach($developer as $developer){
                        ?>
                        <tr>
                            <td><?php echo $developer['id']; ?></td>
                            <td><?php echo $developer['name']; ?></td>
                            <td><?php echo $developer['izdatel']; ?></td>
                            <td><a href="" class="btn btn-primary btn-sm">DETAILS</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>