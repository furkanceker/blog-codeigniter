<?php

class Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("blog_model");
    }

    public function index(){
        $items = $this->blog_model->get_all();
    
        $viewData = array(
            "blogs" => $items,
        );
    
        $this->load->view("blog_list", $viewData);
    }

    public function insert(){
        $this->load->view("new_blog");
        if($this->input->post()){
            $title = $this->input->post("blog_title");
            $text = $this->input->post("blog_text");
    
            $insert = $this->blog_model->insert(
                array(
                    "title" => $title,
                    "text" => $text,
                    "createdAt" => date("Y-m-d H:i:s")
                )
            );

            if ($insert){
                redirect(base_url());
            }
        }
    }

    public function delete($id){
        $delete = $this->blog_model->delete($id);

        redirect(base_url());
    }

    public function view($id){
        $items = $this->blog_model->view($id);

        $viewData = array(
            "blogs" => $items,
        );

        $this->load->view("blog_view", $viewData);
    }
}

