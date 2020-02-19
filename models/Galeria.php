<?php
class Galeria extends model {

	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM tab_imagens_ajax";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0)
		{
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getID($id){
		$array = array();

		$sql = "SELECT * FROM tab_imagens_ajax WHERE id=:id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getImageNameID($id){
		$array = array();

		$sql = "SELECT src_imagem FROM tab_imagens_ajax WHERE id=:id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function add($titulo, $file){

		$new_name = md5(time().uniqid()).".jpg";
		move_uploaded_file($file['tmp_name'],"images/".$new_name);
			
		$sql="INSERT INTO tab_imagens_ajax(titulo, src_imagem) VALUES(:titulo, :src_imagem)";
		$sql=$this->db->prepare($sql);
		$sql->bindValue(":titulo", $titulo);
		$sql->bindValue(":src_imagem", $new_name);
		$sql->execute();

	}

	public function editImage($id, $file){
		
		$new_name = md5(time().uniqid()).".jpg";
		move_uploaded_file($file['tmp_name'],"images/".$new_name);
			
		$sql="UPDATE tab_imagens_ajax SET src_imagem=:src_imagem WHERE id=:id";
		$sql=$this->db->prepare($sql);		
		$sql->bindValue(":id", $id);
		$sql->bindValue(":src_imagem", $new_name);
		$sql->execute();

		return $new_name;
	}

	public function del($id){		
		$sql="DELETE FROM tab_imagens_ajax WHERE id=:id";
		$sql=$this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}


}