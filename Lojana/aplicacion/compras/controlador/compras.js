var compras = {

    nuevo:function(params){
        console.log(params);
        $.ajax({
            type: "POST",
            url: "../vistas/_presentador.php",
            data:{
                datas:params,
                xaction:params.xaction
            },
            dataType: "json"
        }).done(function(response){
            // var obj = JSON.parse(response);
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
            url: "../vistas/_presentador.php",
            data: {
                datas:params,
                xaction:params.xaction
            },
            dataType: "json"
        }).done(function(response) {
            console.log(response);
        });
    },

    guardar:function(params){
        console.log(params);
        $.ajax({
            type: "POST",
            url: "../aplicacion/compras/vistas/_presentador.php",
            data: {
                datas:params,
                xaction:params.xaction
            },
            dataType: 'json'
        }).done(function(response){
            console.log(response);
            // modal.open({
            //     title:'Compra registrada',
            //     content:response.msg
            //     width:'500px',
            //     height:'500px'
            // });
        });
    },

}
