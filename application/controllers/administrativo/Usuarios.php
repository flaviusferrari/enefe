<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends MY_Controller
{
    protected $dados;


    public function __construct()
    {
        parent::__construct();
        
        // BIBLIOTECAS
        $this->load->library('form_validation');
        $this->load->library('estados');
        
        // DADOS
        $this->dados['css'] = 'usuarios'; 
        $this->dados['js']  = 'usuarios';
        $this->dados['conteudo'] = 'cadastros/cad_usuarios';  
        $this->dados['uf'] = $this->estados->getEstados();
                
        // MODEL
        //$this->load->model('clientespf_model');
    }    
    
    
    public function index()
    {        
        // Exibe a página de Cadastro
        $this->load->view('administrativo', $this->dados);
    }
    
    
}