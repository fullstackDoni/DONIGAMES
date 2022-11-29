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
<div class="container" style="min-height: 700px;">
    <div class="row mt-3">
        <div class="col-6 mx-auto">
            <?php
            if (isset($_GET['id']) && is_numeric($_GET['id'])){
            $game = getGames($_GET['id']);
            if ($game != null){
            ?>
            <?php
            if (isset($_GET['success'])) {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Saved successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <label>NAME :</label>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <input type="text" class="form-control" name="name" required placeholder="Insert Game Name"
                       value="<?php echo $game['name'] ?>" readonly>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <label>DEVELOPER :</label>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <input type="text" class="form-control" name="developer_name" required placeholder="Insert Developer"
                       value="<?php echo $game['developer_name'] . " / " . $game['izdatel'] ?>" readonly>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editmodal">
                    EDIT
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal">
                    DELETE
                </button>
            </div>
        </div>
        <div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="savegame.php" method="post">
                        <input type="hidden" name="id" value="<?php echo ['id']; ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">EDIT</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <label>NAME:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="name" required
                                           placeholder="Insert Game Name" value="<?php echo $game['name'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>DEVELOPER:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="developer_name" required
                                           placeholder="Insert Developer / Izdatel"
                                           value="<?php echo $game['developer_name'] . " / " . $game['izdatel'] ?>">
                                </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-primary"  data-bs-dismiss="modal">SAVE</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deletemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="deletegame.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $game['id']; ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you Sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">YES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    }
    }
    ?>
</div>
</div>
</body>
</html>