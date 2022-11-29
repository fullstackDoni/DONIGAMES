<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html>
<?php
require_once 'header.php';
?>
<?php
require_once 'navbar.php';
?>
<div class="container" style="min-height: 600px;">
    <div class="row mt-3">
        <div class="col-6 mx-auto">
            <?php
            if(isset($_GET['success'])){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Game added successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            ?>
            <form action="toaddgames.php" method="post">
               <div class="row mt-3">
                   <div class="col-12">
                       <label>NAME :</label>
                   </div>
               </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <input type="text" class="form-control" name="name" required placeholder="Insert Game Name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>DEVELOPER :</label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <select class="form-select" name="developer_id">
                            <?php
                              $developers = getAllDevelopers();
                              if($developers!=null){
                                  foreach ($developers as $developer){


                            ?>
                              <option value="<?php echo $developer['id']?>">
                                  <?php echo $developer['name']." / ".$developer['izdatel'];?>
                              </option>
                            <?php
                                  }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button class="btn btn-success">ADD GAMES</button>
                    </div>
                </div>
            </form>
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
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $games = getAllGames();
                    if($games!=null){
                        foreach($games as $game){
                            ?>
                            <tr>
                                <td><?php echo $game['id']; ?></td>
                                <td><?php echo $game['name']; ?></td>
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
</div>
</html>