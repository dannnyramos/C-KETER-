<?php
class info_alumnos extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //public function obtenerAlumno() {
       // $this->alumno->select('id, nombre, edad, ingreso, activo, becado');
        //$query = $this->alumno->get();
        //return $query->result_array();
    //}

    public function getAlumno($id)
    {
        $this->db->where('id_alumno', $id);
        $query = $this->db->get('alumnos'); 
        return $query->result(); 
    }

    public function getMaterias($id)
    {
        $this->db->where('id_materia', $id);
        $query = $this->db->get('alumno_materia');
        return $query->result();
    }
}