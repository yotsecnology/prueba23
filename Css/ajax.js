function cargarForm(pack){
        var parametros = {
                "Escogido" : pack
        };
        $.ajax({
                data:  parametros,
                url:   'Procesos/FormReg.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("<div><img src='source/loading.gif' width='40px' height='40px'/></div>");
                },
                success:  function (response) {
                        $("#resultado").html(response); // este # resultadado es el que eesta en el index, porq el otro es un proceso que se llama en 
                }
        });
}
