<?php
    class Pages extends Controller {
        protected $pageModel;
        public function __construct() {
            $this->pageModel = $this->model('Page');
        }
        
        public function index(){
            $data = $this->pageModel->getTours();
            $this->view('pages/index', $data);
        }
        
        public function about() {
            $this->view('pages/about');
        }

        public function tours(){
            $this->view('pages/tours');
        }

        public function tour_detail($tour_id){
            $data = $this->pageModel->getTourById($tour_id);
            
            $this->view("pages/tour_detail", $data);
        }

        public function search(){
            
            $this->view('pages/tours');
        }

        public function khoanh_khac_lu_hanh(){
            $this->view('pages/images');
        }
    }



