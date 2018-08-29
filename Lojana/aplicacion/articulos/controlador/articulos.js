var articulos = {

    nuevo:function(params){
        console.log(params);
        $.ajax({
            type: "POST",
            url: "http://localhost/lojana/aplicacion/articulos/vistas/_presentador.php",
            data:{
                datas:params,
                xaction:params.xaction
            },
            dataType: "json"
        }).done(function(response){
             //var obj = JSON.parse(response);
            console.log(response);

            if(response.status == '1'){
                alert(response.msg);
            }

            if(response.status == '2') {
                alert(response.msg);
            }

        });
    },

    registrar:function(params){
        console.log(params);
        $.ajax({
            type: "POST",
            url: "../aplicacion/articulos/vistas/_presentador.php",
            data: {
                datas:params,
                xaction:params.xaction
            },
            dataType: "json"
        }).done(function(response) {
            console.log(response);
        });
    },

}
