<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portada extends CI_Controller {

	public function index()
	{
		/*$s=0;
		for($i=1;$i<=100;$i++){
			$s=$s+$i;
		}
		$f=1;
		for($i=1;$i<=100;$i++){
			$f=$f*$i;
		//$datos = array();
		//$datos['suma']=$s;
		//$datos['factorial']=$s;
		$datos= array(
			'suma'=>$s,
			'factorial'=>$f
		);*/
		$this->load->library('menu',array('Inicio','Contacto','Cursos'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->helper('mihelper');
		$this->load->view('portada/inicio',$data);
	}
}
