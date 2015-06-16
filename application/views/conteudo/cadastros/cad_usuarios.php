<!-- TÍTULO DA SESSÃO -->
<div class="panel panel-default sessao">
    <div class="panel-body">
        <span>Cadastro de Usuários</span>
    </div>
</div>


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
        
        <!-- Email / ATIVO-->
        <div class="row">
            
            <div class="col-md-6 form-group">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" id="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email', '<div class="label label-danger">', '</div>'); ?>
            </div>
            
            <div class="col-md-2 form-group">
                <label>Ativo</label>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked=""> Sim
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Não
                </label>
            </div>            
        </div>
        
        <!-- NÚCLEO -->
        <div class="row">
            
            <div class="col-md-6">
                <label>Núcleo</label>
                <input type="text" name="nucleo" id="nucleo" class="form-control" value="<?php echo set_value('nucleo'); ?>">
                <input type="hidden" name="idNucleo" id="idNucleo" value="<?php set_value('idNucleo'); ?>">
            </div>
            
        </div><!-- /nucleo -->
        
    </form>
    
</div><!-- /cxConteudo -->