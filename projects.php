<!DOCTYPE html>
<html lang="en">
<?php
include_once('templates/head.php');
?>
<body>
    <?php
    include_once('templates/navbar.php');
    include_once('templates/mediabar.php');
    ?>
    <main role="main" class="container">
        <div class="row m-5 projects">
        <?php
        $projects = array(
            array("Health One", "img/projects/healthone/healthone.jpg", "https://github.com/Aschellevis/healthone"),
            array("Infinite jumper", "img/projects/jumper.jpg", "https://github.com/ROCMondriaanTIN/sd-21-kd-gp-infinite-jumper-Aschellevis"),
            array("Quote generator", "img/projects/quotegenerator.jpg")
        );

        foreach($projects as $project){
        ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $project[1]; ?>" class="card-img-top" alt="project">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title"><?php echo $project[0]; ?></h5>
                            </div>
                            <div class="col-6">
                                <p><a href="<?php echo $project[2]; ?>" class="float-end stretched-link"><i class="bi bi-github"></i></a></p>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </main>
    <?php
    include_once('templates/design-block.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        <?php require_once("js/main.js");?>
    </script>
</body>
</html>