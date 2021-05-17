<?php
    class Pages extends Controller {
        protected $pageModel;
        public function __construct() {
            $this->pageModel = $this->model('Page');
        }
        
        public function index(){
            $this->view('pages/index');
        }
        
        public function about() {
            $this->view('pages/about');
        }

        public function tours(){
            $this->view('pages/tours');
        }

        public function tour_detail($tour_id){
            $data = $this->pageModel->getTourById($tour_id);
            $data2 = $this->pageModel->getTourByWord("Đà Lạt");

            
            $this->view("pages/tour_detail", $data);
        }
    }



