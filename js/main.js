// all the arrays for the projects
const project = document.querySelector('#projects');
const projectsArray = [];

let healthOne = {
    title: 'Health One',
    image: '../img/projects/healthone/healthone.jpg',
    github: 'https://github.com/Aschellevis/healthone'
}

let jumper = {
    title: 'Infinite jumper',
    image: '../img/projects/jumper.jpg',
    github: 'https://github.com/ROCMondriaanTIN/sd-21-kd-gp-infinite-jumper-Aschellevis'
}

let generator = {
    title: 'Quote generator',
    image: '../img/projects/quotegenerator.jpg',
    github: '#'
}

// put the arrays in one const
projectsArray.push(healthOne, jumper, generator);
console.log(projectsArray)

// show the arrays on the page
for (let i = 0; i < projectsArray.length; i++){
    const projects = projectsArray[i];
    $('#content').html('<div class="col-md-4">' + 
    '<div class="card">' + '<img src="' + projects.image + '" class="card-img-top" alt="project">' +
    '<div class="card-body">' + '<h5 class="card-title">' + projects.title + '</h5>' +
    '<p><a href="' + projects.github + '"><i class="bi bi-github"></i></a></p>' +
    '</div>' + '</div>' + '</div>');
    console.log(projects.title)
}

//jQuery codes
$(document).ready(function(){

    // show home page
    $(document).on('click', '#home', function(){

        var html = `
                
                `;

        $('#content').html(html);
    });

    // show about me page
    $(document).on('click','#about', function(){
        
        var html = `
                <div class="container-sm mt-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-white ">Leefomgeving</h2>
                        </div>
                    </div>
                </div>
                <div class="about container-fluid p-0">
                    <div class="row mb-5 mx-5 bg-secondary">
                        <div class="about-first col-md-4 p-0 mx-auto d-block">
                            <img src="img/thuis.jpg" alt="Thuis" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Ik ben 19 jaar en woon mijn hele leven al in 's-Gravenzande.</p>
                            </div>
                        </div>
                        <div class="about-first col-md-3 p-0">
                            <img src="img/gezin.jpg" alt="Gezin" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Ik leef samen met mijn vader, moeder, zusje en broertje.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 mx-5 bg-secondary">
                        <div class="about-first col-md-3 p-0 mx-auto">
                            <img src="img/molly.jpg" alt="Molly" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Ik heb een hond genaamd Molly.</p>
                            </div>
                        </div>
                        <div class="about-first col-md-3 p-0 mx-auto">
                            <img src="img/parkieten.jpg" alt="Parkieten" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Daarnaast hebben we ook nog 2 parkieten.</p>
                            </div>
                        </div>
                        <div class="about-first col-md-3 p-0 mx-auto">
                            <img src="img/familie.jpg" alt="Familie" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Mijn familie is erg belangrijk voor mij.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-sm mt-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-white ">Hobby's</h2>
                        </div>
                    </div>
                </div>
                <div class="about container-fluid p-0">
                    <div class="row mb-5 mx-5 bg-secondary">
                        <div class="about-first col-md-3 p-0 mx-auto">
                            <img src="img/formule1.jpg" alt="Formule 1" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Ik ben een groot formule 1 fan.</p>
                            </div>
                        </div>
                        <div class="about-first col-md-3 p-0 mx-auto">
                            <img src="img/badminton.jpg" alt="Badminton" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Badminton is mijn grootste passie. Dit doe ik het liefst in mijn vrije tijd.</p>
                            </div>
                        </div>
                        <div class="about-first col-md-3 p-0 mx-auto">
                            <img src="img/puzzelen.jpg" alt="Puzzelen" class="image mx-auto d-block">
                            <div class="text-block">
                                <p class="caption">Puzzelen is voor mij iets rustgevends. Ik zou dit uren kunnen doen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                `;

        $('#content').html(html);
    });

    // show projects page
    $(document).on('click', '#projects', function(){

        $('#content').html(html);
    });

    // show cv page
    $(document).on('click', '#cv', function(){

        var html = `
                <h2>Doei</h2>
                `;

        $('#content').html(html);
    });

    // Add active class to the current button (highlight it)
    var header = document.getElementById("currentPage");
    var btns = header.getElementsByClassName("nav-item");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }

});