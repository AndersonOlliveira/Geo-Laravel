var MvcController = new function () {
    this.Call = function Call(_type, _url, _dataType, _param, _method) {
        StartLoad();
        $.ajax({
            type: _type,
            url: _url,
            cache: false,
            dataType: _dataType,
            data: _param,
            success: function (d) { _method(d); },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown.message);

            }
        }).always(function () { StopLoad(); });
    }
};

 function CarregaCidades() {
        $.ajax({
            url: 'api/cidade',  // Rota criada em Laravel
            type: 'GET',
            dataType: 'json',

            success: function(response) {
                if (response.Status == 2) {
                    console.log(response.message);
                    $('#selectCidade').append($('<option>', { value: '', text: 'Todas as Cidades' }));
                    // Adiciona as outras opções

                    $.each(response.message, function (i, item) {


                        $('#selectCidade').append($('<option>', { value: item.id, text: item.cidade }));
                    });
                } else {
                   // alert(response.Result);
                }
            },
            error: function(xhr, status, error) {
                console.log("Erro ao carregar cidades: " + error);
            }
        });
    }

    // Chama a função quando a página for carregada
    $(document).ready(function() {
        CarregaCidades();
    });

