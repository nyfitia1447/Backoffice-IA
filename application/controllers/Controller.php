<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Controller extends CI_Controller 
    {
        public function index($err='')
        {
            $this->load->helper('url_helper');
            
            $data['contenu']='login';
            $data['err']=$err;
            $this->load->view('Template',$data);
        }

        public function accueil()
        {
            $this->load->helper('url_helper');
            
            $data['contenu']='accueil';
            $data['articles']=$this->Fonction->getAllArticle();
            $this->load->view('Template',$data);
        }

        public function ficheArticle($id)
        {
            $this->load->helper('url_helper');
            
            $data['contenu']='ficheArticle';
            $data['article']=$this->Fonction->getArticleById($id);
            $this->load->view('Template',$data);
        }

        public function login()
        {
            $this->load->helper('url_helper');

            $email=$this->input->post('email');
            $mdp=$this->input->post('mdp');

            echo $email;
            
            $data['admin']=$this->Fonction->getAdmin($email,$mdp);
            if($data['admin']==null)
            {
                redirect('accueil-authentification-error-1.html');
            }
            else
            {
                redirect('accueil.html');
            }
        }

        public function insererArticle()
        {
            $this->load->helper('url_helper');
            
            $titre=$this->input->post('titre');
            $idcat=$this->input->post('idcategorie');
            $texte=$this->input->post('texte');
            $date=$this->input->post('date');

            $this->Fonction->insertArticle($titre,$idcat,$texte,$date);
            redirect('Controller/accueil');
        }
    } 
?>
