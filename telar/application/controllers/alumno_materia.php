<?php
include (APPPATH . 'libraries/GroceryCrudEnterprise/autoload.php');
use GroceryCrud\Core\GroceryCrud;

class alumno_materia extends CI_Controller
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
        $crud->setTable('alumno_materia');
        $crud->setSubject('Alumno_Materia', 'Administrador de pruebas');
        /*$crud->setRelation('id_alumno','alumnos','id_alumno' );
        $crud->setRelation('id_materia','materias','nombre_materia');
        $crud->displayAs('alumnos','nombre_materia');*/
        $crud->setRelationNtoN('materias', 'alumno_materia', 'materias', 'id_alumno', 'id_materia', 'nombre_materia');  
        //$crud->setRelationNtoN('');
        $output = $crud->render();

        $this->_Dashboard_output($output);
    }

    public function viewDetails($id)
    {
        $this->load->model('info_alumnos');
        $data['alumno'] = $this->info_alumnos->getAlumno($id);
        $data['materias'] = $this->info_alumnos->getMaterias($id);
        $materias = $this->info_alumnos->getMaterias($id);
        print_r($materias);
        $this->load->view('alumnos_materias', $data); 
        


    }
    public function _Dashboard_output($output = null)
    {
        if (isset($output->isJSONResponse) && $output->isJSONResponse) {
            header('Content-Type: application/json; charset=utf-8');
            echo $output->output;
            exit;
        }
        $this->load->view('head', $output);
        $this->load->view('crud');
        $this->load->view('footer');
        
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
