<?php
class visitantesModel extends CI_Model
{
	function listvisitantes()
	{
		$hasil = $this->db->get('visitantes_personas');
		return $hasil->result();
	}
	function saveVisitante()
	{
		$fecha_nacimiento = $this->input->post('fecha_nacimiento');
		$fecha_nacimiento = date('Y-m-d', strtotime(str_replace('-', '/', $fecha_nacimiento)));
		$data = array(
			'cedula' 			=> $this->input->post('cedula'),
			'nombre' 			=> $this->input->post('nombre'),
			'correo' 	=> $this->input->post('correo'),
            'telefono' 		=> $this->input->post('telefono'),
            'placa' 		=> $this->input->post('placa'),
			'fecha_nacimiento' 		=> $fecha_nacimiento,

		);
		$result = $this->db->insert('clientes', $data);
		return $result;
	}
	
}
