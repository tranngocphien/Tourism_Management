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
        $data = array();
        if(isset($_POST["search"])){
            $word = $_POST["search"];
            if($word != ""){
                $data = $this->pageModel->getToursBySearchWord($word);
            }
        }
        else{
          $data = $this->pageModel->getTours();
        }
        return $this->view('pages/tours', $data);
    }


    public function tour($word){
        $data = array();
        if($word== 'da-lat'){
            $data = $this->pageModel->getToursBySearchWord("đà lạt");
        }
        if($word== 'hue'){
            $data = $this->pageModel->getToursBySearchWord("huế");
        }
        if($word== 'phu-quoc'){
            $data = $this->pageModel->getToursBySearchWord("phú quốc");
        }
        if($word== 'sa-pa'){
            $data = $this->pageModel->getToursBySearchWord("sa pa");
        }
        if($word== 'ha-long'){
            $data = $this->pageModel->getToursBySearchWord("hạ long");
        }
        if($word== 'ha-noi'){
            $data = $this->pageModel->getToursBySearchWord("hà nội");
        }
        if($word== 'ho-chi-minh'){
            $data = $this->pageModel->getToursBySearchWord("hồ chí minh");
        }
        if($word== 'da-nang'){
            $data = $this->pageModel->getToursBySearchWord("đà nẵng");
        }
        if($word== 'mien-bac'){
            $data = $this->pageModel->getToursBySearchWord("miền bắc");
        }
        if($word== 'mien-trung'){
            $data = $this->pageModel->getToursBySearchWord("miền trung");
        }
        if($word== 'mien-nam'){
            $data = $this->pageModel->getToursBySearchWord("miền nam");
        }
        
        
        return $this->view('pages/tours', $data);
    }

    public function tour_detail($tour_id)
    {
        $tour = $this->pageModel->getTourById($tour_id);
        $image = $this->pageModel->getImageByTourId($tour_id);

        //print_r($tour);


        $word = $tour[0]["Place"]["places_name"];

        $other = $this->pageModel->getToursBySearchWord($word);

        for ($i = 0; $i < count($other); $i++){
            for($j=$i+1; $j < count($other); $j++){
                if($other[$i]["Tour"]["tour_id"] == $other[$j]["Tour"]["tour_id"]){
                    array_splice($other, $j, 1);
                }
            }
            if($other[$i]["Tour"]["tour_id"] == $tour[0]["Tour"]["tour_id"]){
                array_splice($other, $i, 1);
            }
        }


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
        $data = $this->pageModel->getMemories();
        //print_r($data);
        $this->view('pages/images', $data);
    }
}
