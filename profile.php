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
    <div class="container" style="min-height: 600px;">
        <div class="row mt-3">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DEVELOPER</th>
                        <th width="10%;">DETAILS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $games = getAllGames();
                    if($games!=null){
                        foreach ($games as $game){
                            ?>
                            <tr>
                                <td><?php echo $game['id'];?></td>
                                <td><?php echo $game['name'];?></td>
                                <td><?php echo $game['developer_name']." / ".$game['izdatel'];?></td>
                                <td><a href="details.php?id=<?php echo $game['id']?>" class="btn btn-primary btn-sm">DETAILS</a></td>
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
    <?php
     require_once 'footer.php';
    ?>
    <?php
} else {
    header("Location:login.php");
}
?>

