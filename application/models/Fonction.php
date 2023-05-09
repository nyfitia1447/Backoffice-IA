<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Fonction extends CI_Model
    {
        public function getAllArticle()
        {
            $sql="select*from v_article";
            $query=$this->db->query($sql);
            $data = array();

            foreach($query->result_array() as $row)
            {
                $data[]=$row;
            }
            return $data;
        }
        
        public function getArticleById($id)
        {
            $sql="select*from v_article where id=$id";
            $query=$this->db->query($sql);
            $data=$query->row();
            return $data;
        }

        public function getAdmin($email,$mdp)
        {
            $sql="select*from admins where email='$email' and mdp='$mdp'";
            $query=$this->db->query($sql);
            $data = null;

            foreach($query->result_array() as $row)
            {
                $data=$row;
            }
            return $data;
        }

        public function insertArticle($titre,$idcat,$texte,$date)
        {
            $sql="insert into article(titre,idcategorie,texte,datedepublication,image) values('%s',%s,'%s','%s','intelligence-artificielle3.png')";
            $sql=sprintf($sql,$titre,$idcat,$texte,$date);
            $this->db->query($sql);
        }
    }
?>