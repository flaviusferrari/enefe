<!-- TÍTULO DA SESSÃO -->
<div class="panel panel-default sessao">
    <div class="panel-body">
        <span>Cadastro de Usuários</span>
    </div>
</div>


<!-- ABAS -->
<ul class="nav nav-tabs nav-justified">
    <li role="presentation" class="active"><a href="clientespf"><b>Clientes</b></a></li>
    <li role="presentation"><a href="clientespj">Empresas</a></li>
</ul>    

<div id="cxConteudo" class="padding">
    
    <!-- BOTÕES -->
    <div class="">
        <a class="btn btn-primary" id="btnSalvar">Salvar</a>
        <a class="btn btn-primary" id="btnNovo">Novo</a>
        <a class="btn btn-primary" id="btnAtualizar">Atualizar</a>
        <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
        <a class="btn btn-primary" id="btnExcluir">Excluir</a>       
    </div>
    
    <br>
     
    <!-- FORMULÁRIO -->    
    <form id="formulario" method="POST" autocomplete="off" action="">
        
        <!-- NOME -->
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo set_value('nome'); ?>">
            <?php echo form_error('nome', '<div class="label label-danger">', '</div>'); ?>
            <input name="idCliente" id="idCliente" type="hidden" value="">
            <input name="tipo" id="tipo" type="hidden" value="PF">
        </div>
        
        <!-- ENDEREÇO, NÚMERO E COMPLEMTO -->
        <div class="row">
            <div class="col-md-6 form-group">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="<?php echo set_value('endereco'); ?>">
                <?php echo form_error('endereco', '<div class="label label-danger">', '</div>'); ?>
            </div>
            <div class="col-md-2 form-group">
                <label>Nº</label>
                <input type="text" class="form-control" name="numero" id="numero" value="<?php echo set_value('numero'); ?>">
                <?php echo form_error('numero', '<div class="label label-danger">', '</div>'); ?>
            </div>
            <div class="col-md-4 form-group">
                <label>Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo set_value('complemento'); ?>">
            </div>
        </div>
        
        <!-- BAIRRO, CIDADE , ESTADO -->
        <div class="row">
            <div class="col-md-5 form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo set_value('bairro'); ?>">
            </div>
            <div class="col-md-5 form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Buscar" value="<?php echo set_value('cidade'); ?>">
                <input name="idCidade" type="hidden" id="idCidade" value="<?php echo set_value('idCidade'); ?>">
            </div>
            <div class="col-md-2 form-group">
                <label>Estado</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        
        <!-- CONTATO -->
        <div class="row">
            <div class="col-md-12 form-group">
                <label>Contato</label>
                <div class="input-group">
                    
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tipo <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Celular</a></li>
                            <li><a href="#">Residência</a></li>
                            <li><a href="#">Trabalho</a></li>
                            <li><a href="#">E-mail</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar</button>
                    </span>
                </div>
            </div>
        </div>
</div>