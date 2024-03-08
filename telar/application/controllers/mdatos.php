<?php
include APPPATH . 'libraries/GroceryCrudEnterprise/autoload.php';
use GroceryCrud\Core\GroceryCrud;

class datos extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->database();

    }

    public function index()
    {
        $this->cuenta();
    }

    public function cuenta()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setSkin('bootstrap-v4'); 
        $crud->setTable('alumnos');
        $crud->setSubject('Alumno', 'Administrador de pruebas');
        $crud->setRelation('alumno','materias', 'id_materias');
        $crud->setRelationNtoN('materias', 'alumno_materia', 'materias', 'id_alumno', 'id_materias', 'nombre_materia');
        $output = $crud->render();
        $this->_Dashboard_output($output);
    }


    private function _getDbData()
    {
        $db = [];
        include APPPATH . 'config/database.php';
        return [
            'adapter' => [
                'driver'   => 'Pdo_Mysql',
                'host'     => $db['default']['hostname'],
                'database' => $db['default']['database'],
                'username' => $db['default']['username'],
                'password' => $db['default']['password'],
                'charset'  => 'utf8',
            ],
        ];
    }
    private function _getGroceryCrudEnterprise($bootstrap = true, $jquery = true)
    {
        $db          = $this->_getDbData();
        $config      = include APPPATH . 'config/gcrud-enterprise.php';
        $groceryCrud = new GroceryCrud($config, $db);
        return $groceryCrud;
    }
}
