<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ejemplar extends CI_Controller {

	public function index()
	{
		$this->load->model('model_ejemplar');
		$result = $this->model_ejemplar->consultar();
		$datos = array('registros'=>$result);
		$this->load->view('menu/cabecera');
		$this->load->view('ejemplar/ejemplar',$datos);
		$this->load->view('menu/pies');
	}
	public function formejemplar()
	{
		$this->load->view('menu/cabecera');
		$this->load->view('ejemplar/formejemplar');
		$this->load->view('menu/pies');
	}

	public function guardar()
	{
        $this->load->model('model_ejemplar');
        $ejem_titulo = $this->input->post('ejem_titulo');
        $ejem_editorial = $this->input->post('ejem_editorial');
        $ejem_paginas = $this->input->post('ejem_paginas');
        $ejem_isbn = $this->input->post('ejem_isbn');
        $ejem_idioma = $this->input->post('ejem_idioma');
        $ejem_portada = $this->input->post('ejem_portada');
        $ejem_digital = $this->input->post('ejem_digital');
        $ejem_audio = $this->input->post('ejem_audio');
        $ejem_resumen = $this->input->post('ejem_resumen');
        $ejem_tipo_id = $this->input->post('ejem_tipo_id');
        $ejem_cate_id = $this->input->post('ejem_cate_id');
        $ejem_valoracion = $this->input->post('ejem_valoracion');
        $ejem_anio = $this->input->post('ejem_anio');
        $ejem_nprestamos = $this->input->post('ejem_nprestamos');
        
        $data = array(
            'ejem_titulo'=>$ejem_titulo,
            'ejem_editorial'=>$ejem_editorial,
            'ejem_paginas'=>$ejem_paginas,
            'ejem_isbn'=>$ejem_isbn,
            'ejem_idioma'=>$ejem_idioma,
            'ejem_portada'=>$ejem_portada,
            'ejem_digital'=>$ejem_digital,
            'ejem_audio'=>$ejem_audio,
            'ejem_resumen'=>$ejem_resumen,
            'ejem_tipo_id'=>$ejem_tipo_id,
            'ejem_cate_id'=>$ejem_cate_id,
            'ejem_valoracion'=>$ejem_valoracion,
            'ejem_anio'=>$ejem_anio,
            'ejem_nprestamos'=>$ejem_nprestamos,
            );
		$this->model_ejemplar->guardar($data);
		redirect('ejemplar');
	}

	public function editar($ejem_id){
		$this->load->model('model_ejemplar');
		
		$result = $this->model_ejemplar->consultarid($ejem_id);
		$datos = array('reg'=>$result);
		$this->load->view('menu/cabecera');
		$this->load->view('ejemplar/editar',$datos);
		$this->load->view('menu/pies');
	}

	public function cambiar(){

		$this->load->model('model_ejemplar');
		$this->model_ejemplar->cambiar();
		redirect('ejemplar');
	}

	public function eliminar($ejem_id){
		$this->load->model('model_ejemplar');

		$this->model_ejemplar->eliminar($ejem_id);

		redirect('ejemplar');
	}
	
}

