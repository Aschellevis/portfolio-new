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
        <div class="row my-5 projects">
        <?php
        $projects = array(
            array("Health One", "img/projects/healthone/healthone.jpg", "https://github.com/Aschellevis/healthone", "health-one.php"),
            array("Infinite jumper", "img/projects/jumper.jpg", "https://github.com/ROCMondriaanTIN/sd-21-kd-gp-infinite-jumper-Aschellevis", "infinite-jumper.php"),
            array("Quote generator", "img/projects/quotegenerator.jpg", "#", "quote-generator.php"),
            array("Swift projects", "img/projects/swift.jpg", "https://github.com/Aschellevis?tab=repositories&q=&type=&language=swift&sort=")
        );

        foreach($projects as $project){
        ?>
            <div class="col-4 mb-5">
                <div class="card">
                    <img src="<?php echo $project[1]; ?>" class="card-img-top" alt="project">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="project-title"><h5 class="card-title"><?php echo $project[0]; ?></h5></a>
                            </div>
                            <div class="col-6">
                                <p><a href="<?php echo $project[2]; ?>" class="float-end"><i class="bi bi-github"></i></a></p>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        
        <!-- The Modal -->
        <!-- <div id="myModal" class="modal"> -->
        <!-- Modal content -->
        <!-- <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>
        </div> -->
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
    <script>
        // Get the button that opens the modal
        var btn = document.querySelectorAll("button.modal-button");
        // All page modals
        var modals = document.querySelectorAll('.modal');
        // Get the <span> element that closes the modal
        var spans = document.getElementsByClassName("close");

        // When the user clicks the button, open the modal
        for (var i = 0; i < btn.length; i++) {
        btn[i].onclick = function(e) {
            e.preventDefault();
            modal = document.querySelector(e.target.getAttribute("href"));
            modal.style.display = "block";
        }
        }

        // When the user clicks on <span> (x), close the modal
        for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function() {
            for (var index in modals) {
            if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
            }
        }
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
            for (var index in modals) {
            if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
            }
            }
        }
    </script>
</body>
</html>