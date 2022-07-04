$(document).ready(function() {

    $('.producte').on('click', function() {
        const id = $(this).parent().attr('id')

        getDetallProducte(id)

    })

    $('.img_producte').on('click', function() {

        const id = $(this).parent().attr('id')

        getDetallProducte(id)
    })
});

function getDetallProducte(idProducte){

    $.ajax({
        url : './controladors/ajax/ajax_productes.php',
        data : {
            'action': 'getDetallProducte',
            'id_producte': idProducte
        },
        dataType:'json',
        success : function(data) {
            $('#productes').hide()
            $('#categories').load('../index.php?accio=2', {
                producte: data
            });
        },
        error : function(request,error)
        {
            console.log("Request: "+JSON.stringify(request))
        }
    });
}
