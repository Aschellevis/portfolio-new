<!DOCTYPE html>
<html lang="en">
<?php
include_once('templates/head.php');
?>
<body>
    <div class="wrapper">
        <?php
        include_once('templates/navbar.php');
        include_once('templates/mediabar.php');
        ?>
        <svg viewbox="50 50 500 320" class="design-block">
            <path fill="#ECB365" fill-opacity="1" d="M 50 200 L 750 150 L 750 150 L 750 250 L 750 250 L 50 300 L 50 200 "></path>
        </svg>
        <main role="main" class="container">
            <div class="row m-5">
                <div class="col">
                    <div class="content">
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        <?php require_once("js/main.js");?>
    </script>
</body>
</html>