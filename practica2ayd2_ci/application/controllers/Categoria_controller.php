<?php

    class Categoria_controller extends CI_Controller{


        function __construct(){
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->model('Categoria_Model');
        }
        
        
        public function view($categoria = NULL){
            $data['categorias'] = $this->Categoria_Model->get_categorias($categoria);
            
            if (empty($data['categorias']))
            {
                    show_404();
            }
            
            $data['title'] = $data['categorias']['ayd2_categoria_descripcion']; // Mayuscula la primera

            $this->load->view('templates/header', $data);
            $this->load->view('categorias/view', $data);
            $this->load->view('templates/footer');
        }
        
        public function index(){
            $data['categorias'] = $this->Categoria_Model->get_categorias();
            $data['title'] = 'Nuevas Categorias';

            $this->load->view('templates/header', $data);
            $this->load->view('categorias/index', $data);
            $this->load->view('templates/footer');
        }
        
        public function create(){
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Crear Nuevas Categorias';
            
            $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
            
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('categorias/create');
                $this->load->view('templates/footer');
            }else{
                if($this->Categoria_Model->set_categoria() === TRUE) {
                    $m['message'] = 'Campo Agregado Correctamente';
                    $this->load->view('categorias/message',$m);    
                }else{
                    $m['message'] = 'Categoria Duplicada';
                    $this->load->view('categorias/message',$m);
                }
            }
        }
        
        /*

        public function index(){
            $query = $this->db->get("ayd2_categoria_201020917");
            $data['records'] = $query->result();
            $this->load->helper('url');
            $this->load->view('Categoria_view',$data);
        }

        public function add_categoria_view(){
            $this->load->helper('form');
            $this->load->view('Categoria_add');
        }
        
        public function add_categoria(){
            $this->load->model('Categoria_Model');
            $data = array(
                'ayd2_categoria_descripcion' => $this->input->post('categoria')
            );
            $this->Categoria_model->insert($data);
            
            $query = $this->db->get('ayd2_categoria_201020917');
            $data['records'] = $query->result();
            $this->load->view('Categoria_view',$data);
        }
*/
    }

?>