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
        $data = $this->pageModel->getTours();
        return $this->view('pages/tours', $data);
    }

    public function tour_detail($tour_id)
    {
        $tour = $this->pageModel->getTourById($tour_id);
        $image = $this->pageModel->getImageByTourId($tour_id);


        $word = $tour[0]["Tour"]["tour_name"];

        $other = $this->pageModel->getToursBySearchWord($word);


        $data = array(
            "tour" => $tour,
            "image" => $image,
            "other" =>$other
        );


        $this->view("pages/tour_detail", $data);
    }

    public function search()
    {
        if (isset($_POST["day"]) && isset($_POST["key_word"])) {
            $word = $_POST["key_word"];
            $day = $_POST["day"];

            if ($day > 0) {
                $data = $this->pageModel->getToursBySearch($word, $day);
                // print_r("TÌM CẢ NGÀY VÀ CHỮ\n");
                // print_r($data);
                return $this->view('pages/tours', $data);
            } else if ($word != '') {
                $data = $this->pageModel->getToursBySearchWord($word);
                // print_r("TÌM CHỮ\n");
                // print_r($data);
                return $this->view('pages/tours', $data);
            }
            else{
                $data = $this->pageModel->getTours();
                // print_r("Không tìm gì cả\n");
                // print_r($data);
                return $this->view('pages/tours', $data);
            }

        }
    }

    public function khoanh_khac_lu_hanh()
    {
        $this->view('pages/images');
    }
}
