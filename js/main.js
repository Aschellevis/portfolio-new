// all the arrays for the projects
// const project = document.querySelector('#projects');
// const projectsArray = [];

// let healthOne = {
//     title: 'Health One',
//     image: '../img/projects/healthone/healthone.jpg',
//     github: 'https://github.com/Aschellevis/healthone'
// }

// let jumper = {
//     title: 'Infinite jumper',
//     image: '../img/projects/jumper.jpg',
//     github: 'https://github.com/ROCMondriaanTIN/sd-21-kd-gp-infinite-jumper-Aschellevis'
// }

// let generator = {
//     title: 'Quote generator',
//     image: '../img/projects/quotegenerator.jpg',
//     github: '#'
// }

// // put the arrays in one const
// projectsArray.push(healthOne, jumper, generator);
// console.log(projectsArray)

// // show the arrays on the page
// for (let i = 0; i < projectsArray.length; i++){
//     const projects = projectsArray[i];
//     $('#content').html('<div class="col-md-4">' + 
//     '<div class="card">' + '<img src="' + projects.image + '" class="card-img-top" alt="project">' +
//     '<div class="card-body">' + '<h5 class="card-title">' + projects.title + '</h5>' +
//     '<p><a href="' + projects.github + '"><i class="bi bi-github"></i></a></p>' +
//     '</div>' + '</div>' + '</div>');
//     console.log(projects.title)
// }

//jQuery codes
$(document).ready(function(){

    // // show home page
    // $(document).on('click', '#home', function(){

    //     var html = `
                
    //             `;

    //     $('#content').html(html);
    // });

    // Add active class to the current button (highlight it)
    $('li').on(click, function() { 
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });

});