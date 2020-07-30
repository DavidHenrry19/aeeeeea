<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('ejemplar_m', 'm');
	}

	function index(){
		$data['blogs'] = $this->m->getEjemplar();
		$this->load->view('layout/header');
		$this->load->view('ejemplar/index', $data);
		$this->load->view('layout/footer');
	}

	public function add(){
		$this->load->view('layout/header');
		$this->load->view('ejemplar/add');
		$this->load->view('layout/footer');
	}

	public function submit(){

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

		$result = $this->m->submit();
		
		redirect(base_url('ejemplar/index'));
	}

	public function edit($id){
		$data['blog'] = $this->m->getEjemplarById($id);
		$this->load->view('layout/header');
		$this->load->view('ejemplar/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		
		$usua_id = $this->input->post('usua_id');
		
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

		$result = $this->m->update();
		
		redirect(base_url('ejemplar/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		redirect(base_url('ejemplar/index'));
	}

}