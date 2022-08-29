<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlumnosController extends CI_Controller
{
    /**
     * Controlador Alumnos
     * Descripcion: Ejemplo de mantenimiento 
     */
    public function __construct()
    {
        parent::__construct();

        $model = array('Model_alumnos');
        $this->load->model($model);
    }

    /**
     * Carga vista principal
     */
    function index()
    {
        $this->data['resultados'] = $this->Model_alumnos->getAlmnos();
        $this->data['titulo'] = "Lista de Alumnos";
        $this->data['vista'] = "alumno/index";
        $this->load->view('layout/partialView', $this->data);
    }

    /**
     * Carga vista formulario
     */
    public function form()
    {
        $this->data['titulo'] = "Mantenimiento de Alumnos";
        $this->data['vista'] = "alumno/form";
        $this->data['accion'] = site_url('alumnosController/create');
        $this->load->view('layout/partialView', $this->data);
    }

    public function formActualiza($id)
    {
        $this->data['resul'] = $this->Model_alumnos->getAlmnos_id($id);
        $this->data['titulo'] = "Editar Alumno";     
        $this->data['vista'] = "alumno/form";
        $this->data['accion'] = site_url('alumnosController/update/').$id;
        $this->load->view('layout/partialView', $this->data);
    }
    /**
     * Recibe los datos del formulario para crear un nuevo registro
     * @return [type] [retorna vista con datos cargados en edit]
     */
    public function create()
    {
        if ($_POST) {
            $datos = array(
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'direccion' => $this->input->post('direccion'),
                'movil' => $this->input->post('movil'),
                'email' => $this->input->post('email'),
                'dpi' => $this->input->post('dpi'),
                'inactivo' => $this->input->post('inactivo'),
                'user' => 1
            );

            if ($this->Model_alumnos->create($datos)) {
                $this->session->set_flashdata('eok', 'Registro creado satisfactoriamente');
            } else {
                $this->session->set_flashdata('eerror', 'Ocurrio un error al intentar crear el registro');
            }
            redirect('alumnosController/form/');
        } else {
            $this->session->set_flashdata('eerror', 'Error al guardar el registro, contacte al administrador');
        }
        redirect('alumnosController');
    }

    public function eliminar($id = NULL)
    {
        
        if($id!=NULL)
        {
        $this->Model_alumnos->delete($id);
        
        }
        else {
    
            redirect('');  
        }
    }
    
    public function update($id = NUll)
    {
        if ($_POST) {
            $datos = array(
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'direccion' => $this->input->post('direccion'),
                'movil' => $this->input->post('movil'),
                'email' => $this->input->post('email'),
                'dpi' => $this->input->post('dpi'),
                'inactivo' => $this->input->post('inactivo'),
                'user' => 1
            );
            
                if ($this->Model_alumnos->update($id, $datos)) {
                    $this->session->set_flashdata('eok', 'Registro Actualizado satisfactoriamente');
                } else {
                    $this->session->set_flashdata('eerror', 'Ocurrio un error al intentar Actualizar el registro');
                }
            redirect('alumnosController/form/');
        }
         else {
            $this->session->set_flashdata('eerror', 'Error al Actualizar el registro, contacte al administrador');
        }
        redirect('alumnosController');
    }

    
    
}
