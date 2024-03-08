<?php


class viewDetail extends CI_Model {


    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getAlumno($id)
    {
        $this->db->where('id_alumno', $id);
        $query = $this->db->get('alumnos'); 
        return $query->result(); 
    }

    function getMateria($id)
    {
        $this->db->where('id_materias', $id);
        $query = $this->db->get('materias');
        return $query->result();
    }

    function getAlumno_Materia($id)
    {
        $this->db->where('id_alumno', $id);
        $query = $this->db->get('alumno_materia');
        return $query->result();
    }


   
   

}