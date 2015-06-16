<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Estados 
{
    public function __construct()
    {
        
    }
 
    public function getEstados()
    {
        // Estados
        $uf = array('AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO');
        
        return $uf;
    }
}