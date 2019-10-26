jQuery(document).on('submit','#formlg',function(event){
    event.preventDefault();

    jQuery.ajax({
        url: 'mainApp/login.php',
        type:'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.Tipo == 'admin'){
                location.href = 'Inicio.php';
            }
        }
        else{
            $('.errorMsj').css('visibility','visible');
            setTimeout(function(){
                $('.errorMsj').css('visibility','hidden');
            },3000)
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });
});