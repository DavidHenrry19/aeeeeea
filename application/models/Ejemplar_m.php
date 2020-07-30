<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar_m extends CI_Model{

	public function getEjemplar(){
		
		$query = $this->db->get('ejemplar');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$data = array(
			'ejem_titulo'=>$this->input->post('ejem_titulo'),
			'ejem_editorial'=>$this->input->post('ejem_editorial'),
			'ejem_paginas'=>$this->input->post('ejem_paginas'),
			'ejem_isbn'=>$this->input->post('ejem_isbn'),
			'ejem_idioma'=>$this->input->post('ejem_idioma'),
			'ejem_portada'=>$this->input->post('ejem_portada'),
			'ejem_digital'=>$this->input->post('ejem_digital'),
			'ejem_audio'=>$this->input->post('ejem_audio'),
			'ejem_resumen'=>$this->input->post('ejem_resumen'),
			'ejem_tipo_id'=>$this->input->post('ejem_tipo_id'),
			'ejem_cate_id'=>$this->input->post('ejem_cate_id'),
			'ejem_valoracion'=>$this->input->post('ejem_valoracion'),
			'ejem_anio'=>$this->input->post('ejem_anio'),
			'ejem_nprestamos'=>$this->input->post('ejem_nprestamos'),
			);
		$this->db->insert('ejemplar', $data);
		
	}

	public function getEjemplarById($id){
		$this->db->where('ejem_id', $id);
		$query = $this->db->get('ejemplar');
		return $query->row();	
	}

	public function update(){
		$id = $this->input->post('ejem_id');
		$data = array(
			'ejem_titulo'=>$this->input->post('ejem_titulo'),
			'ejem_editorial'=>$this->input->post('ejem_editorial'),
			'ejem_paginas'=>$this->input->post('ejem_paginas'),
			'ejem_isbn'=>$this->input->post('ejem_isbn'),
			'ejem_idioma'=>$this->input->post('ejem_idioma'),
			'ejem_portada'=>$this->input->post('ejem_portada'),
			'ejem_digital'=>$this->input->post('ejem_digital'),
			'ejem_audio'=>$this->input->post('ejem_audio'),
			'ejem_resumen'=>$this->input->post('ejem_resumen'),
			'ejem_tipo_id'=>$this->input->post('ejem_tipo_id'),
			'ejem_cate_id'=>$this->input->post('ejem_cate_id'),
			'ejem_valoracion'=>$this->input->post('ejem_valoracion'),
			'ejem_anio'=>$this->input->post('ejem_anio'),
			'ejem_nprestamos'=>$this->input->post('ejem_nprestamos'),
			
			);
		$this->db->where('ejem_id', $id);
		$this->db->update('ejemplar', $data);	
	}

	public function delete($id){
		$this->db->where('ejem_id', $id);
		$this->db->delete('ejemplar');
	}

}