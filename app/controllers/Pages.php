<?php
class Pages extends Controller
{
    protected $pageModel;
    public function __construct()
    {
        $this->pageModel = $this->model('Page');
    }

    public function index()
    {
        $data = $this->pageModel->getTours();
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function tours()
    {

        $this->view('pages/tours');
    }

    public function tour_detail($tour_id)
    {
        $tour = $this->pageModel->getTourById($tour_id);
        $image = $this->pageModel->getImageByTourId($tour_id);


        $data = array(
            "tour" => $tour,
            "image" => $image
        );

        print_r($data);

        //$this->view("pages/tour_detail", $data);
    }

    public function search()
    {
        if (isset($_POST["day"]) && isset($_POST["key_word"])) {
            $word = $_POST["key_word"];
            $day = $_POST["day"];

            if ($day > 0) {
                $data = $this->pageModel->getToursBySearch($word, $day);
                return $this->view('pages/tours', $data);
            } else {
                $word = $_POST["key_word"];

                $data = $this->pageModel->getToursBySearchWord($word);
                return $this->view('pages/tours', $data);
            }
        } else if (isset($_POST["day"])) {
            $day = $_POST["day"];
            if ($day > 0) {
                $data = $this->pageModel->getToursBySearchDay($day);
                return $this->view('pages/tours', $data);
            } else {
                $data = $this->pageModel->getTours();
                return $this->view('pages/tours', $data);
            }
        }
    }

    public function khoanh_khac_lu_hanh()
    {
        $this->view('pages/images');
    }
}
