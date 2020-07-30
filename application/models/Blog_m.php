<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{

	public function getBlog(){
		
		$query = $this->db->get('usuario');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$data = array(
			'usua_login'=>$this->input->post('usua_login'),
			'usua_password'=>$this->input->post('usua_password'),
			'usua_telefono'=>$this->input->post('usua_telefono'),
			'usua_nombres'=>$this->input->post('usua_nombres'),
			'usua_apellidos'=>$this->input->post('usua_apellidos'),
			'usua_codigo'=>$this->input->post('usua_codigo'),
			'usua_email'=>$this->input->post('usua_email'),
			'usua_direccion'=>$this->input->post('usua_direccion'),
			'usua_esadmin'=>$this->input->post('usua_esadmin'),
		
			);
		$this->db->insert('usuario', $data);
		
	}

	public function getBlogById($id){
		$this->db->where('usua_id', $id);
		$query = $this->db->get('usuario');
		return $query->row();	
	}

	public function update(){
		$id = $this->input->post('usua_id');
		$data = array(
			'usua_login'=>$this->input->post('usua_login'),
			'usua_password'=>$this->input->post('usua_password'),
			'usua_telefono'=>$this->input->post('usua_telefono'),
			'usua_nombres'=>$this->input->post('usua_nombres'),
			'usua_apellidos'=>$this->input->post('usua_apellidos'),
			'usua_codigo'=>$this->input->post('usua_codigo'),
			'usua_email'=>$this->input->post('usua_email'),
			'usua_direccion'=>$this->input->post('usua_direccion'),
			'usua_esadmin'=>$this->input->post('usua_esadmin'),
			
			);
		$this->db->where('usua_id', $id);
		$this->db->update('usuario', $data);	
	}

	public function delete($id){
		$this->db->where('usua_id', $id);
		$this->db->delete('usuario');
	}

}