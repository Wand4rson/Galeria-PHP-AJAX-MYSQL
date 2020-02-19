<?php
class fotoController extends controller {

    public function __construct() {
        parent::__construct();
    }



    //Form Add
    public function index() {
        $data = array();
        $this->loadTemplate('add', $data);
    }

    //Form Add Action
    public function add_action() {
    
        $data = array();
        $data ['msgErro'] = '';
        
        $typeFile = $_FILES['arquivo']['type'];
        
        if(in_array($typeFile, array('image/jpeg', 'image/png'))) 
        {
            $galeria = new Galeria();

            $titulo = addslashes($_POST['titulo']);
            $file = $_FILES['arquivo'];       
            $galeria->add($titulo, $file);    
            
            header("Location:".BASE_URL);
            exit;
                
        }
        else
        {
            $_SESSION['msg'] = 'Tipo de Arquivo selecionado, Inválido.';
            $data ['msgErro'] = $_SESSION['msg'];


            $_SESSION['msg'] = '';
            $this->loadTemplate('add', $data);
        }

    }

     public function editImage_action() {
        
        $data = array();
        $data ['msgErro'] = '';

        //Só permitir gravar caso tipo do arquivo seja Image//
        $typeFile = $_FILES['arquivo']['type'];
        
        if(in_array($typeFile, array('image/jpeg', 'image/png'))) 
        {
            $galeria = new Galeria();

            $id = $_POST['inputID'];
            $file = $_FILES['arquivo'];                

            echo $galeria->editImage($id, $file);                
        }
        else
        {
            $_SESSION['msg'] = 'Tipo de Arquivo selecionado, Inválido.';
            $data ['msgErro'] = $_SESSION['msg'];


            $_SESSION['msg'] = '';
            $this->loadTemplate('add', $data);
        }

    }



    public function del($id){

        if (!empty($id))
        {
            $galeria = new Galeria();     

            //1º Pega Nome do Arquivo da Imagem
            $nomeImagem = $galeria->getImageNameID($id);            
            $dirFile = 'images/'.$nomeImagem['src_imagem'];

            //2º Apaga no Banco de dados            
            $galeria->del($id);

            //3º Se Imagem existir na Pasta Apaga
            if(file_exists($dirFile)) {
                unlink($dirFile);
            }
            else
            {
                echo "Arquivo não existe na pasta<br>";                                
            }
	
        }

        header("Location:".BASE_URL);
        exit;	        
    }

}