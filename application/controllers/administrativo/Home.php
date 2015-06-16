<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
    protected $dados;

    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css'] = 'administrativo'; 
        $this->dados['js']  = 'administrativo';
        $this->dados['conteudo'] = 'administrativo/home';        
        
        // Carrega a validação dos formulários
        $this->load->library('form_validation');
        
        // Carrega o Model
        //$this->load->model('clientespf_model');
    }    
    
    
    public function index()
    {        
        // Exibe a página de Cadastro
        $this->load->view('administrativo', $this->dados);
    }   
    
}