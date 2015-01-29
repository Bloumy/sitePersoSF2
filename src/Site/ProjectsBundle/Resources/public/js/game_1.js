

var context2D = null;
var context3D = null;


function initContext(dimention) {
    if (!dimention) {
        dimention = '2d';
    }
    return document.getElementById('theCanvas').getContext(dimention);
}
;

function customiseContext2D(context2D) {
//    context2D.strokeStyle = "#0000FF";
//    context2D.rect(200, 200, 600, 800); // x, y, width, height
//    context2D.stroke();

    var imagePanoramique;
    var imagePanoramiqueX = 0;
    var imagePanoramiqueY = 0;

    imagePanoramique = new Image();
    imagePanoramique.src = sourceImagePanoramique;
    context2D.drawImage(imagePanoramique, imagePanoramiqueX, imagePanoramiqueY);
}

$(document).ready(function () {
    context2D = initContext('2d');

});
//
////http://www.faire-des-jeux.com/html5-tutorial-canvas/