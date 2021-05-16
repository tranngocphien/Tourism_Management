<?php
    class Pages extends Controller {
        public function __construct() {
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

        public function tour_detail(){
            $this->view('pages/tour_detail');
        }
    }



