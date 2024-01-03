<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

$(function() {
    $('#pesquisar-cep').click(function() {
        var cep = $('#cep').val();

        $.ajax({
            url: `https://viacep.com.br/ws/${cep}/json/`,
            type: 'get',

            success: function(response) {
                console.log(response);
                if (response) {
                    $('#rua').val(response.logradouro),
                    $('#bairro').val(response.bairro),
                    $('#cidade').val(response.localidade);
                }
            },
            error: function(ex, hre) {
                console.error('CEP search failed:', ex);
                alert('Erro ao buscar CEP. Verifique a conexão à internet e tente novamente.');
            }
        });
    });
});
