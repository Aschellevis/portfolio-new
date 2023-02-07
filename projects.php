<?php
$projects = array(
    array("Health One", "img/projects/healthone/healthone.jpg", "https://github.com/Aschellevis/healthone", '<a class="project-title" data-target="simpleModal_1" data-toggle="modal">Health One</a>'),
    array("Infinite jumper", "img/projects/jumper.jpg", "https://github.com/ROCMondriaanTIN/sd-21-kd-gp-infinite-jumper-Aschellevis", '<a class="project-title" data-target="simpleModal_2" data-toggle="modal">Infinite jumper</a>'),
    array("Quote generator", "img/projects/quotegenerator.jpg", "#", '<a class="project-title" data-target="simpleModal_3" data-toggle="modal">Quote generator</a>'),
    array("Swift projects", "img/projects/swift.jpg", "https://github.com/Aschellevis?tab=repositories&q=&type=&language=swift&sort=", '<a class="project-title" data-target="simpleModal_4" data-toggle="modal">Swift projects</a>')
);
$healthOne = array(
    array("img/projects/healthone/healthone.jpg", "Dit is de homepagina van HealthOne"),
    array("img/projects/healthone/healthone_categories.jpg", "Er zijn vier verschillende categorieën sportapparaten."),
    array("img/projects/healthone/healthone_reviews.jpg", "Bij elk apparaat staan reviews die geschreven zijn door de bezoekers."),
    array("img/projects/healthone/healthone_contact.jpg", "Er zijn verschillende manieren op contact op te nemen."),
    array("img/projects/healthone/healthone_register.jpg", "Om een account aan te maken, moet je registreren."),
    array("img/projects/healthone/healthone_login.jpg", "Daarna kan je inloggen op de website."),
    array("img/projects/healthone/healthone_loggedin.jpg", "Als je bent ingelogd, kom je op je eigen homepagina."),
    array("img/projects/healthone/healthone_change_profile.jpg", "Je kan zelf je profiel veranderen."),
    array("img/projects/healthone/healthone_change_password.jpg", "Wachtwoord kan ook veranderd worden."),
    array("img/projects/healthone/healthone_new_review.jpg", "Je moet ingelogd zijn om een review te kunnen schrijven.")
);
?>
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
        foreach($projects as $project){
        ?>
            <div class="col-4 mb-5">
                <div class="card">
                    <img src="<?php echo $project[1]; ?>" class="card-img-top" alt="project">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <?= $project[3]; ?>
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
        <div id="simpleModal_1" class="modal">
            <div class="modal-window">
            <button data-dismiss="modal" class="bi bi-x-circle"></button>
                <div id="carouselExampleCaptions" class="carousel slide w-75 mx-auto my-4" data-bs-ride="carousel">
                    <div class="carousel-indicators text-dark">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="slider carousel-inner">
                    <?php
                    foreach ($healthOne as $info) {
                        ?>
                         <div class="carousel-item active">
                            <img src="<?= $info[0]; ?>" class="d-block w-100 rounded" alt="start healthone">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 py-2">
                                <p><?= $info[1]; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span><i class="bi bi-arrow-left-short fs-1 text-dark" aria-hidden="true"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span><i class="bi bi-arrow-right-short fs-1 text-dark" aria-hidden="true"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="row description">
                    <div class="col-12">
                        <p>
                            Health One is het eerste project dat ik heb gemaakt met PHP. De bedoeling van de website is dat je als bezoeker 
                            de verschillende sportapparaten kan bekijken. Daarnaast kan je ook een account aan kan maken om een review te 
                            schrijven bij een sportapparaat.
                        </p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-sm-12">
                        <table class="table">
                            <thead class="fs-4">
                                <tr>
                                    <th scope="col">Programmeertalen</th>
                                    <th scope="col">Functionaliteiten</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HTML</td>
                                    <td>Registreren</td>
                                </tr>
                                <tr>
                                    <td>CSS</td>
                                    <td>Inloggen</td>
                                </tr>
                                <tr>
                                    <td>Bootstrap 5</td>
                                    <td>Profiel aanpassen</td>
                                </tr>
                                <tr>
                                    <td>PHP</td>
                                    <td>Wachtwoord aanpassen</td>
                                </tr>
                                <tr>
                                    <td>Databases</td>
                                    <td>Review schrijven</td>
                                </tr>
                                <tr>MySQL</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="simpleModal_2" class="modal">
            <div class="modal-window">
                <button data-dismiss="modal" class="bi bi-x-circle"></button>
                <div class="row pb-5">
                    <div class="col-sm-12 p-2">
                        <table class="table">
                            <thead class="fs-4">
                                <tr>
                                    <th scope="col">Programmeertalen</th>
                                    <th scope="col">Functionaliteiten</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HTML</td>
                                    <td>Karakter heeft een animatie</td>
                                </tr>
                                <tr>
                                    <td>Phaser 3</td>
                                    <td>Wortels oppakken</td>
                                </tr>
                                <tr>
                                    <td>Javascript</td>
                                    <td>Hoge sprong door springveer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="simpleModal_3" class="modal">
            <div class="modal-window">
                <button data-dismiss="modal" class="bi bi-x-circle"></button>
                <div class="quote-block">
                    <div class="button">
                        <a>&#8635; Nieuwe quote</a>
                    </div>
                    <div class="quote"></div>
                    <div class="person"></div>
                </div>
                <div class="row description">
                    <div class="col-12">
                        <p>
                            De quote generator is een simpel javascript project. Dit is één van mijn eerste zelfgemaakte javascript projecten. 
                            Er zijn een aantal quotes aangemaakt. Deze staan in arrays. Als je op de knop 'Nieuwe quote' klikt, krijg je een 
                            nieuwe quote te zien.
                        </p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-sm-12 p-2">
                        <table class="table">
                            <thead class="fs-4">
                                <tr>
                                    <th scope="col">Programmeertalen</th>
                                    <th scope="col">Functionaliteiten</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HTML</td>
                                    <td>Slaat de quotes op in een constante</td>
                                </tr>
                                <tr>
                                    <td>CSS</td>
                                    <td>Kiest een willekeurige quote</td>
                                </tr>
                                <tr>
                                    <td>Javascript</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="simpleModal_4" class="modal">
            <div class="modal-window">
                <button data-dismiss="modal" class="bi bi-x-circle"></button>
                <div class="row description">
                    <div class="col-4">
                        <img src="img/projects/element-quiz.jpg" alt="quiz">
                    </div>
                    <div class="col-8">
                        <p>
                            Het eerste project is een elementen quiz. Hierbij kan je kiezen tussen de opties flashcards en quiz. Met 
                            de flashcards kan je zelf kiezen of je het antwoord wilt zien. Bij de quiz moet je het goede natwoord proberen 
                            het goede antwoord in te vullen. Aan het eind wordtje score laten zien.
                        </p>
                    </div>
                </div>
                <div class="row description">
                    <div class="col-8">
                        Het tweede project is een colormixer. Je hebt 3 knoppen met de kleuren rood, groen en blauw. Door de knoppen om 
                        te zetten, ga je de kleuren mengen. Je zet bijvoorbeeld de knoppen rood en blauw aan dan verschijnnt er in het 
                        vierkante vak bovenaan de kleur paars.
                    </div>
                    <div class="col-4">
                    <img src="img/projects/color-mix.jpg" alt="mix">
                    </div>
                </div>
                <div class="row description">
                    <div class="col-4">
                        <img src="img/projects/chatbot.jpg" alt="chatbot">
                    </div>
                    <div class="col-8">
                        <p>
                            Het derde en tevens laatste project met Swift dat af is heet de chatbot. De naam zegt het al, je kan vragen 
                            stellen aan het programma en je krijgt een antwoord terug. Er zijn maar een bepaald aantal antwoorden dat de 
                            app kan geven.
                        </p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-sm-12 p-2">
                        <table class="table">
                            <thead class="fs-4">
                                <tr>
                                    <th scope="col">Programmeertalen</th>
                                    <th scope="col">Functionaliteiten</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Swift</td>
                                    <td>Vraag stellen</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Willekeurig antwoord terug</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include_once('templates/design-block.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        <?php 
        require_once("js/main.js");
        require_once("js/quotegenerator.js");
        ?>
    </script>
</body>
</html>