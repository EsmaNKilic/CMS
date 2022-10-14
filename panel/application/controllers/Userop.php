<?php

class Userop extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "users_v";

        $this->load->model("user_model");

    }

    public function login(){

        if(get_active_user()){

            redirect(base_url());
        }

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "login";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function do_login(){


        if(get_active_user()){

            redirect(base_url(""));
        }


        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_email", "E-posta", "required|trim|valid_email"); 
        $this->form_validation->set_rules("user_password", "Şifre", "required|trim|min_length[6]|max_length[10]");
      
        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır.",
                "valid_email" => "Lütfen geçerli bir e-posta adresi giriniz.",
                "min_length" => "<b>{field}</b> uzunluğu en az 6 karakterden oluşmalıdır.",
                "max_length" => "<b>{field}</b> uzunluğu en fazla 10 karakterden oluşmalıdır.",
            )
        ); 

        if($this->form_validation->run() == FALSE){

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "login";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

        }else{

            $user = $this->user_model->get(
                array(
                    "email"     => $this->input->post("user_email"),
                    "password"  => md5($this->input->post("user_password")),
                    "isActive"  => 1
                )
            );

            if($user){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "$user->full_name Hoşgeldiniz", 
                    "type"  => "success"
                );

                $this->session->set_userdata("user", $user);
                $this->session->set_flashdata("alert", $alert);

                redirect(base_url());
            
            } else{

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Lütfen giriş bilgilerinizi kontrol ediniz",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("login"));
            }

        }
    }

    public function logout(){

        $this->session->unset_userdata("user");

        redirect(base_url("login"));

    }

    public function forget_password(){

        if(get_active_user()){

            redirect(base_url());
        }

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "forget_password";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function reset_password(){
        
        $this->load->library("form_validation");

        $this->form_validation->set_rules("email", "E-posta", "required|trim|valid_email"); 

      
        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır.",
                "valid_email" => "Lütfen geçerli bir <b>e-posta</b> adresi giriniz.",
            )
        ); 

        if($this->form_validation->run() === FALSE){

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "forget_password";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

        }else{

            $user = $this->user_model->get(
                array(
                    "isActive" => 1,
                    "email" => $this->input->post("email")
                )
            );

            if($user){

                $this->load->helper("string");

                $temp_password = random_string();

                $send = send_email($user->email, "Şifremi Unuttum", "CMS'e geçici olarak <b>{$temp_password}</b> şifresiyle giriş yapabilirsiniz.");

                if($send){
                    echo "E-posta başarılı bir şekilde gönderilmiştir.";

                    $this->user_model_update(
                        array(
                            "id" => $user->id
                        ),
                        array(
                            "passwoord" => md5($temp_password)
                        )
                    );

                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Şifreniz resetlendi, lütfen e-postanızı kontrol ediniz.",
                        "type"  => "success"
                    );
    
                    $this->session->set_flashdata("alert", $alert);
    
                    redirect(base_url("login"));

                    die();

                } else{
                    //echo $this->email->print_debugger();
                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "E-posta gönderilirken bir hata oluştu!",
                        "type"  => "error"
                    );
    
                    $this->session->set_flashdata("alert", $alert);
    
                    redirect(base_url("sifremi-unuttum"));

                    die();
                }

            }else{
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kullanıcı Bulunamadı!",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("sifremi-unuttum"));
            }

        }

    
    }

    public function register(){

        if(get_active_user()){

            redirect(base_url());
        }

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "register";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_register(){

        if(get_active_user()){

            redirect(base_url());
        }

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "register";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    
    }

    public function register_save(){

            $this->load->library("form_validation");
    
            $this->form_validation->set_rules("user_name", "Kullanıcı Adı", "required|trim|is_unique[users.user_name]"); //is_unique kullanıcı adından bir tane daha aynı olamaz bu yüzden bu kuralı da ekledik benzer bulursa hata verir
            $this->form_validation->set_rules("full_name", "Ad Soyad", "required|trim");
            $this->form_validation->set_rules("email", "E-posta", "required|trim|valid_email|is_unique[users.email]"); //valid_email de geçerli bir email olup olmadığını kontrol ediyor
            $this->form_validation->set_rules("password", "Şifre", "required|trim|min_length[6]|max_length[10]");
            $this->form_validation->set_rules("re_password", "Şifre Tekrar", "required|trim|min_length[6]|max_length[10]|matches[password]");
    
            $this->form_validation->set_message(
                array(
                    "required"  => "<b>{field}</b> alanı doldurulmalıdır.",
                    "valid_email" => "Lütfen geçerli bir e-posta adresi giriniz.",
                    "is_unique" => "<b>{field}</b> daha önceden alınmış.",
                    "matches" => "Şifreler aynı değil!",
                    "min_length" => "<b>{field}</b> uzunluğu en az 6 karakterden oluşmalıdır.",
                    "max_length" => "<b>{field}</b> uzunluğu en fazla 10 karakterden oluşmalıdır.", 
                )
            );
    
            $validate = $this->form_validation->run();
    
            if($validate){
    
                    $insert = $this->user_model->add(
                        array(
                            "user_name"     => $this->input->post("user_name"),
                            "full_name"     => $this->input->post("full_name"),
                            "email"         => $this->input->post("email"),
                            "password"      => md5($this->input->post("password")),
                            "isActive"      => 1,
                            "createAt"     => date("Y-m-d H:i:s")
                        )
                    );
    
                    if($insert){
    
                        $alert = array(
                            "title" => "İşlem Başarılı",
                            "text" => "Kullanıcı eklendi",
                            "type"  => "success"
                        );
    
                    } else {
    
                        $alert = array(
                            "title" => "İşlem Başarısız",
                            "text" => "Kullanıcı eklemenemedi",
                            "type"  => "error"
                        );
                    }
    
                $this->session->set_flashdata("alert", $alert);
    
                redirect(base_url("login"));
    
                die();
    
            } else {
    
                $viewData = new stdClass();
    
                $viewData->viewFolder = $this->viewFolder;
                $viewData->subViewFolder = "register";
                $viewData->form_error = true;
    
                $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
            }
    
        }
    
        
        
        
    }
