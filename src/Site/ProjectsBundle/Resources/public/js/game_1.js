var context2D = null;
var context3D = null;


function initContext(dimention) {
    if (!dimention) {
        dimention = '2d';
    }
    return document.getElementById('theCanvas').getContext(dimention);
}
;



$(document).ready(function() {
    context2D = initContext('2d');
    context3D = initContext('3d');
});
//
////http://www.faire-des-jeux.com/html5-tutorial-canvas/