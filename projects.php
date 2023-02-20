<?php
$projects = array(
    array("Health One", "img/projects/healthone/healthone.jpg", "https://github.com/Aschellevis/healthone", '<a class="project-title" data-target="simpleModal-1" data-toggle="modal">Health One</a>'),
    array("Infinite jumper", "img/projects/jumper.jpg", "https://github.com/ROCMondriaanTIN/sd-21-kd-gp-infinite-jumper-Aschellevis", '<a class="project-title" data-target="simpleModal-2" data-toggle="modal">Infinite jumper</a>'),
    array("Quote generator", "img/projects/quotegenerator.jpg", "#", '<a class="project-title" data-target="simpleModal-3" data-toggle="modal">Quote generator</a>'),
    array("Swift projects", "img/projects/swift.jpg", "https://github.com/Aschellevis?tab=repositories&q=&type=&language=swift&sort=", '<a class="project-title" data-target="simpleModal-4" data-toggle="modal">Swift projects</a>'),
    array("Pizza", "img/projects/pizza/pizza.jpg", "https://github.com/Aschellevis/Pizza_project", '<a class="project-title" data-target="simpleModal-5" data-toggle="modal">Pizza</a>')
);
?>
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
        <main role="main" class="container mx-auto">
            <div class="row my-5 projects">
            <?php
            foreach($projects as $project){
            ?>
                <div class="col-md-4 mb-5">
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
            <div id="simpleModal-1" class="modal">
                <div class="modal-window">
                <button data-dismiss="modal" class="bi bi-x-circle"></button>
                    <div class="carousel">
                        <div class="images">
                            <img src="img/projects/healthone/healthone.jpg" alt="home" class="image active">
                            <img src="img/projects/healthone/healthone_categories.jpg" alt="categories" class="image">
                            <img src="img/projects/healthone/healthone_reviews.jpg" alt="reviews" class="image">
                            <img src="img/projects/healthone/healthone_contact.jpg" alt="contact" class="image">
                            <img src="img/projects/healthone/healthone_register.jpg" alt="register" class="image">
                            <img src="img/projects/healthone/healthone_login.jpg" alt="login" class="image">
                            <img src="img/projects/healthone/healthone_loggedin.jpg" alt="logged in" class="image">
                            <img src="img/projects/healthone/healthone_change_profile.jpg" alt="change profile" class="image">
                            <img src="img/projects/healthone/healthone_change_password.jpg" alt="change password" class="image">
                            <img src="img/projects/healthone/healthone_new_review.jpg" alt="add review" class="image">
                        </div>
                        <div class="controls">
                            <a class="action left"><i class="bi bi-arrow-left"></i></a>
                            <a class="action right"><i class="bi bi-arrow-right"></i></a>
                        </div>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="simpleModal-2" class="modal">
                <div class="modal-window">
                    <button data-dismiss="modal" class="bi bi-x-circle"></button>
                    <div class="row description">
                        <div class="col-12">
                            <p>
                                Dit is de eerste game die ik zelf heb gemaakt. Het lijk heel erg op Doodle Jump. Het verschil is dat er maar 1 wereld is 
                                waarin je kan spelen. Door de wortels te pakken die je onderweg tegen komt gaat je score omhoog. De functie met de 
                                springveer doet het nog niet.
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
            <div id="simpleModal-3" class="modal">
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
            <div id="simpleModal-4" class="modal">
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
                                        <td>Willekeurig element laten zien</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Geeft feedback op je antwoord</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Laat je totale score zien aan het eind</td>
                                    </tr>
                                </tbody>
                            </table>
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
                                        <td>Zelf een kleur mengen</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Reset de waardes</td>
                                    </tr>
                                </tbody>
                            </table>
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
            <div id="simpleModal-5" class="modal">
                <div class="modal-window">
                    <button data-dismiss="modal" class="bi bi-x-circle"></button>
                    <div class="carousel">
                        <div class="images">
                            <img src="img/projects/pizza/home.jpg" alt="home" class="image active">
                            <img src="img/projects/pizza/meat-pizza.jpg" alt="meat" class="image">
                            <img src="img/projects/pizza/fish-pizza.jpg" alt="fish" class="image">
                            <img src="img/projects/pizza/veggie-pizza.jpg" alt="veggie" class="image">
                            <img src="img/projects/pizza/pay.jpg" alt="pay" class="image">
                            <img src="img/projects/pizza/payed.jpg" alt="payed" class="image">
                            <img src="img/projects/pizza/about.jpg" alt="about" class="image">
                            <img src="img/projects/pizza/contact.jpg" alt="contact" class="image">
                            <img src="img/projects/pizza/login.jpg" alt="login" class="image">
                            <img src="img/projects/pizza/home-admin.jpg" alt="admin" class="image">
                        </div>
                        <div class="controls">
                            <a class="action left"><i class="bi bi-arrow-left"></i></a>
                            <a class="action right"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="row description">
                        <div class="col-12">
                            <p>
                                Op deze website kan je als bezoeker een pizza bestellen. Deze pizza wordt vervolgens opgeslagen in de database. 
                                De admin is de enige die kan inloggen op de pagina. Hij/zij kan namelijk de bestellingen bekijken van de klanten.
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
                                        <td>Inloggen</td>
                                    </tr>
                                    <tr>
                                        <td>CSS</td>
                                        <td>Pizza bestellen</td>
                                    </tr>
                                    <tr>
                                        <td>Symfony 5</td>
                                        <td>Gegevens opslaan in de database</td>
                                    </tr>
                                    <tr>
                                        <td>Databases</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        <?php 
        require_once("js/main.js");
        require_once("js/quotegenerator.js");
        require_once("js/image-slider.js");
        ?>

        $(document).ready(function() {
            $('.right').on('click', function() {
                var current = $('.active');
                var next = current.next();
                if(next.length) {
                    current.removeClass('active');
                    next.addClass('active');
                } else {
                    current.removeClass('active');
                    $('.image:first-child').addClass('active');
                }
            });
            $('.left').on('click', function() {
                var current = $('.active');
                var prev = current.prev();
                if(prev.length) {
                    current.removeClass('active');
                    prev.addClass('active');
                } else {
                    current.removeClass('active');
                    $('.image:last-child').addClass('active');
                }
            });
        });

        setInterval(function() {
            var current = $('.active');
            var next = current.next();
            if(next.length) {
                current.removeClass('active');
                next.addClass('active');
            } else {
                current.removeClass('active');
                $('.image:first-child').addClass('active');
            }
        }, 3000);
    </script>
</body>
</html>