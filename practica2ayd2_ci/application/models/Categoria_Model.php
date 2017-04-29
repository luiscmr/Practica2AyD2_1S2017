<?php
    class Categoria_Model extends CI_Model {

        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function insert($data){
            if($this->db->insert("ayd2_categoria_201020917",$data)){
                return true;
            }
        }

        public function get_categorias($categoria = FALSE)
        {
            if ($categoria === FALSE)
            {
                    $query = $this->db->get('ayd2_categoria_201020917');
                    return $query->result_array();
            }

            $query = $this->db->get_where('ayd2_categoria_201020917', array('ayd2_categoria_descripcion' => $categoria));
            return $query->row_array();
        }
        
        public function set_Categoria(){
            $this->load->helper('url');
            
            $descripcion = $this->input->post('descripcion');
            
            $query = $this->db->get_where('ayd2_categoria_201020917', array('ayd2_categoria_descripcion' => $descripcion));
            
            if($query->num_rows()=== 0){
                $data = array('ayd2_categoria_descripcion' => $descripcion);
                return $this->db->insert('ayd2_categoria_201020917',$data);   
            }else{
                return FALSE;
            }
            
            
        }
        
    }
?>