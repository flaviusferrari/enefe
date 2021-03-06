<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <base href="/enefe/" />
        <title>ENEFE - Encontro Estadual da Família Espírita</title>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!-- CSS -->        
        <?php 
        echo link_tag('includes/bootstrap/css/bootstrap.min.css'); 
        echo "\n";
        echo link_tag('includes/css/geral.css'); ?>
         <link href="<?php echo base_url("includes/css/$css.css"); ?>" rel="stylesheet" type="text/css" />

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
        
    </head>
    <body>
        <!-- HEADER -->
        <div id="cabecalho">
            <div class="container">
                <div class="row">
                    <!-- LOGO -->
                    <div id="logo" class="col-md-2">
                        <img src="<?php echo base_url('includes/images/LogoCEERJmenu.png') ?>" alt="CEERJ">
                    </div>

                    <!-- DESCRIÇÃO -->
                    <div class="col-md-8">
                        <h2>ENEFE - Encontro Estadual da Família Espírita</h2>
                        <p>O ENEFE agrupa em torno de si uma equipe de trabalhadores que o desenvolve durante todo o ano em várias 
                            regiões do Rio de Janeiro através dos Encontros de Família. Por esta razão, o encontro se tornou um marco 
                            na divulgação do trabalho junto às famílias.</p>
                    </div>
                    
                    <!-- LOGIN -->
                    <?php if($this->session->userdata("logado") == 1): ?>
                        <div id="login" class="col-md-2">
                            <font class="txtBem white">
                            Bem Vindo,</font>
                            <br>
                                <a title="Clique para exibir os dados" class="link_user">
                                <?php echo $this->session->userdata('nome'); ?>
                            </a>
                            <br>
                            <a href="login/logout" class="btn btn-info btn-xs">Sair</a>
                        </div>
                    <?php else: ?>
                        <div id="login" class="col-md-2">
                            <div class="lbLogar">Logar</div>
                            <form class="form" method="post" role="form" action="login/logar">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Entre com seu email">
                                    <input type="password" name="pass" class="form-control" placeholder="Entre com a senha">
                                </div>
                                <button type="submit" class="btn btn-info btn-xs">Logar</button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        