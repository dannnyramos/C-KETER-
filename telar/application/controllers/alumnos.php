<?php
include APPPATH . 'libraries/GroceryCrudEnterprise/autoload.php';
use GroceryCrud\Core\GroceryCrud;

class alumnos extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        $this->load->model('viewDetail');
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
        //$crud->where(['alumnos.Activo' => 'No']);
        $crud->setSubject('Alumno', 'Administrador de pruebas');
        // $crud->columns(['Foto', 'nombre','ap_paterno','ap_materno','id_grupo', 'carrera']);
        $crud->setClone();
        /* $crud->setRelationNtoN('Materias', 'alumno_materia', 'materias', 'id_alumno', 'id_materia', 'nombre_materia'); */
        $crud->setRelation('id_grupo','grupos','carrera');
        $crud->setRelationNtoN('materias', 'alumno_materia', 'materias', 'id_alumno', 'id_materias', 'nombre_materia'); 
        $uploadValidations = ['maxUploadSize' => '20M', 'minUploadSize' => '1K', 'allowedFileTypes' => ['gif','jpeg','jpg','png','tiff']];
        $crud->setFieldupload('Foto', 'uploader/image', base_url('/uploader/image'));
        // $crud->callbackColumn('Foto', function ($value, $row) {
        //         return '<img src="'.base_url().'/uploader/image/'.$value.'" height="20px">';  });
        $crud->callbackColumn('Archivo', function ($value, $row) { 
            if( $value == ""){
              return '<img src="'.base_url().'/uploader/image/reemplazo.jpg'.'" height="20px">';  }
              return '<img src="'.base_url().'/uploader/image/'.$value.'" height="20px">'; 
        });
        $crud->setActionButton('Ver Detalles', 'fa fa-list-check', function ($row) {
        return '/telar/index.php/alumnos/viewDetails/' . $row->id_alumno;
        }, false);

        $output = $crud->render();
        $this->_Dashboard_output($output);
    }

   /* public function viewDetails($idalumno)  pruebas de la documentacion,  crear un proyecto nuevo y verificar la conexion 
    { $data['alumno'] = $this->viewDetail->getAlumno($idalumno);    
    $crud->setActionButton('Asignar operaciones', 'fa fa-list-check', function ($row) {
            return base_url('index.php/Estilo/asignarOperacion#/edit/') . $row->IdEstilo;
        }, true);
    print_r($data['alumno']);}*/

    public function viewDetails($idalumno){
        $data['alumno'] = $this->viewDetail->getAlumno($idalumno); 
        //print_r($data['alumno']);
    
        $getMateria = $this->viewDetail->getAlumno_Materia($idalumno); 
        //print_r($data['alma']);
        $arrayMaterias = array();
        foreach ( $getMateria as $alma)
        {
            print_r($alma->id_materias);
            //print("<br>");
            $infomateria = $this->viewDetail->getMateria($alma->id_materias);
            //print_r($infomateria[0]->nombre_materia);
            $info = array( 
                'materia' => $infomateria[0]->nombre_materia
            );
            array_push($arrayMaterias, $info);
            //print_r($info);
        }        //print_r($arrayMaterias);
        $data['materias'] = $arrayMaterias  ; 
        print_r($data['alumno']);
        print_r($data['materias']);
        $this->load->view('datos', $data);
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



