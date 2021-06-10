<?php
?>



<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

<form class='frm-register-client' class="form-horizontal" class="enviar-form" >
    <fieldset>
        <div class="panel panel-primary">
            <div class="panel-heading">Cadastro de Cliente</div>

            <div class="panel-body">
                <div class="form-group">
                    <!--
                    <div class="form-group">
                    <div class="col-md-4 control-label">
                        <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
                    </div>
                    <div class="col-md-4 control-label">
                        <h1>Cadastro de Cliente</h1>

                    </div>
                    </div>
                        -->
                    <div class="col-md-11 control-label">
                        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
                    <div class="col-md-8">
                        <input id="Nome" name="Nome" placeholder="" class="form-control input-md"  type="text">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>
                    <div class="col-md-2">
                        <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md"  type="text" maxlength="11" pattern="[0-9]+$">
                    </div>

                    <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>
                    <div class="col-md-2">
                        <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md"  type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com"  type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </div>
                    </div>
                </div>

                <!-- Search input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                    <div class="col-md-2">
                        <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md"  value="" type="search" maxlength="8" pattern="[0-9]+$">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">Rua</span>
                            <input id="rua" name="rua" class="form-control" placeholder=""  readonly="readonly" type="text">
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon">Nº <h11>*</h11></span>
                            <input id="numero" name="numero" class="form-control" placeholder=""  type="text">
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">Bairro</span>
                            <input id="bairro" name="bairro" class="form-control" placeholder=""  readonly="readonly" type="text">
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext"></label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">Cidade</span>
                            <input id="cidade" name="cidade" class="form-control" placeholder=""    type="text">
                        </div>

                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Cadastrar"></label>
                    <div class="col-md-8">
                        <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                        <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                    </div>
                </div>

            </div>
        </div>


    </fieldset>
</form>


    <script>
        $(function(){
            $('#enviar-form').click(function () {
                $.ajax({
                    url: 'insert.php',
                    type: 'post',
                    data: $('#frm-register-client').serialize(),
                    success: function (meu_param) {
                        console.log(meu_param)
                    }
                })
            })
        })

    </script>



</body>
</html>
