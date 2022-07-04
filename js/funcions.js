function mostrarProductesCategoria(id) {
    $(document).ready(function(){

         $(".contingut").load('http://localhost/practica_TDIW/MVC/Controller/llistar_productes.php?q='+id);

        console.log(id);
    });
}

function mostrarProducteDetall(id) {
    $(document).ready(function(){
        $(".contingut").load('../MVC/Controller/detall_producte.php?q='+id);
        console.log(id);
    });
}

function mostrarCategoriaId(id) {
    $(document).ready(function(){
        $(".contingut").load('../MVC/Controller/llistar_categories.php?q='+id);
        console.log(id);
    });
}

function afegirCabas(id, preu_producte) {
    $num = document.getElementById("quantitat").value;
    window.location.href = "../MVC/Controller/controlador_cabas.php?id="+id+"&quantitat="+$num+"&preu_producte="+preu_producte;
}

function borrarCabas() {
    window.location.href = "../MVC/Controller/controlador_cabas.php?borrar";
}

function comprarCabas() {
    window.location.href = "../MVC/Controller/controlador_cabas.php?comprar";
}

function verLListaComandes() {
    window.location.href = "../MVC/Controller/llistat_comandes.php?comandes";
}

$(document).ready(function () {
    $("ul.jquery li").hover(function () {
        $(this).children("ul.sub").slideDown('fast').show();
    }, function () {
        $(this).children("ul.sub").slideUp('slow');
    });
});
