<?php 

class Project extends CI_Controller{
    
    public $viewFolder = "";

    public function __construct(){
        parent::__construct();

        $this->viewFolder = "project_v";
        $this->load->model("project_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index(){

        $viewData = new stdClass();

        $items = $this->project_model->get_all(
            array("isDeleted" => 0)
        );

        $viewData->viewFolder =  $this->viewFolder; 
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
        
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public function new_form(){

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public function save(){ //form validation tekrar izle, kullan!!!

        $this->load->library("form_validation");

        if($_FILES["img_url"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Görsel seçilmedi!",
                "type"  => "error"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("project/new_form"));

            die(); //(? sor)
        }

        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        $validate = $this->form_validation->run();

        if($validate){


            $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

            $config["allowed_types"] = "jpg|jpeg|png";
            $config["upload_path"]   = "uploads/$this->viewFolder/";
            $config["file_name"] = $file_name;

            $this->load->library("upload", $config);

            $upload = $this->upload->do_upload("img_url");

            if($upload){

                $uploaded_file = $this->upload->data("file_name");

                $insert = $this->project_model->add(
                    array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "isActive" => 1,
                    "isNew" => 1,
                    "img_url" => $uploaded_file,
                    "createdAt" => date("Y-m-d H:i:s"),
                    "deletedAt" => date("Y-m-d H:i:s")
                    )
                );

                if($insert){

                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Projeniz eklendi",
                        "type"  => "success"
                    );

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Proje eklemede hata!",
                        "type"  => "error"
                    );
                }

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Görsel yüklenemedi!",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("project/new_form"));

                die();

            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("project"));

        } else {

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function update_form($id){

        $viewData = new stdClass();

        $item = $this->project_model->get(
            array(
                "id" => $id
            )
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public function update($id){

        $this->load->library("form_validation");

        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        $validate = $this->form_validation->run();

        if($validate){

            if($_FILES["img_url"]["name"] !== "") {

                $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

                $config["allowed_types"] = "jpg|jpeg|png";
                $config["upload_path"] = "uploads/$this->viewFolder/";
                $config["file_name"] = $file_name;

                $this->load->library("upload", $config);

                $upload = $this->upload->do_upload("img_url");

                if ($upload) {

                    $uploaded_file = $this->upload->data("file_name");

                    $data = array(
                        "title" => $this->input->post("title"),
                        "description" => $this->input->post("description"),
                        "isActive" => 1,
                        "isNew" => 1,
                        "img_url" => $uploaded_file,
                        "createdAt" => date("Y-m-d H:i:s"),
                        "deletedAt" => date("Y-m-d H:i:s")
                    );

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Görsel yüklenemedi!",
                        "type" => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("project/update_form/$id"));

                    die();

                }

            } else {

                $data = array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                );

            }

            $update = $this->project_model->update(array("id" => $id), $data);

            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Projeniz güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Projeniz güncellenemedi, tekrar deneyin!",
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("project"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            $viewData->item = $this->project_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function delete($id){

        if($id){

            $this->project_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "isDeleted" => 1
                )
            );
        }
            redirect(base_url("project"));
    }

    public function isActiveSetter($id){
        
        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->project_model->update(
            array(
                "id" => $id
            ),
            array(
                "isActive" => $isActive
            )
        );

        }
    }

    public function isNewSetter($id){

        if($id){

            $isNew = ($this->input->post("data") === "true") ? 1 : 0;
            
            $this->project_model->update(

                array(
                    "id" => $id
                ),
                array(
                    "isNew" => $isNew
                )
            );

        }
    }

    public function isDeleted($id){

        if($id){
            $isDeleted = ($this->input->post("data") === "true") ? 1 : 0;
            
            $this->project_model->delete(
                
                array(
                    "id" => $id
                ),
                array(
                    "isDeleted" => $isDeleted
                )
            );
     
        }

    }
}

