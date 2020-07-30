<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('blog_m', 'm');
	}

	function index(){
		$data['blogs'] = $this->m->getBlog();
		$this->load->view('layout/header');
		$this->load->view('blog/index', $data);
		$this->load->view('layout/footer');
	}

	public function add(){
		$this->load->view('layout/header');
		$this->load->view('blog/add');
		$this->load->view('layout/footer');
	}

	public function submit(){

		$usua_login = $this->input->post('usua_login');
		$usua_password = $this->input->post('usua_password');
		$usua_telefono = $this->input->post('usua_telefono');
		$usua_nombres = $this->input->post('usua_nombres');
		$usua_apellidos = $this->input->post('usua_apellidos');
		$usua_codigo = $this->input->post('usua_codigo');
		$usua_correo = $this->input->post('usua_correo');
		$usua_direccion = $this->input->post('usua_direccion');
		$usua_esadmin = $this->input->post('usua_esadmin');

		$data = array(
			'usua_login'=>$usua_login,
			'usua_password'=>$usua_password,
			'usua_telefono'=>$usua_telefono,
			'usua_nombres'=>$usua_nombres,
			'usua_apellidos'=>$usua_apellidos,
			'usua_codigo'=>$usua_codigo,
			'usua_correo'=>$usua_correo,
			'usua_direccion'=>$usua_direccion,
			'usua_esadmin'=>$usua_esadmin,
			);

		$result = $this->m->submit();
		
		redirect(base_url('blog/index'));
	}

	public function edit($id){
		$data['blog'] = $this->m->getBlogById($id);
		$this->load->view('layout/header');
		$this->load->view('blog/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		
		$usua_id = $this->input->post('usua_id');
		
		$usua_login = $this->input->post('usua_login');
		$usua_password = $this->input->post('usua_password');
		$usua_telefono = $this->input->post('usua_telefono');
		$usua_nombres = $this->input->post('usua_nombres');
		$usua_apellidos = $this->input->post('usua_apellidos');
		$usua_codigo = $this->input->post('usua_codigo');
		$usua_correo = $this->input->post('usua_correo');
		$usua_direccion = $this->input->post('usua_direccion');
		$usua_esadmin = $this->input->post('usua_esadmin');

		$data = array(
			'usua_login'=>$usua_login,
			'usua_password'=>$usua_password,
			'usua_telefono'=>$usua_telefono,
			'usua_nombres'=>$usua_nombres,
			'usua_apellidos'=>$usua_apellidos,
			'usua_codigo'=>$usua_codigo,
			'usua_correo'=>$usua_correo,
			'usua_direccion'=>$usua_direccion,
			'usua_esadmin'=>$usua_esadmin,
			);

		$result = $this->m->update();
		
		redirect(base_url('blog/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		redirect(base_url('blog/index'));
	}

}