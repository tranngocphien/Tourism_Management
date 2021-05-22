<?php
class Page
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($username, $password, $email, $phone, $fullname)
    {
        $query = "INSERT INTO `user`(`user_id`, `username`, `password`, `fullname`,`email`, `tel`) VALUES (0,'$username','$password','$fullname','$email','$phone')";
        if ($this->db->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function getImageByTourId($tour_id)
    {
        $query = "SELECT places_image.* FROM places, tour, places_image 
        WHERE tour.places_id = places.places_id 
        AND places.places_id = places_image.places_id 
        AND tour.tour_id = $tour_id";
        return $this->db->query($query);
    }

    public function getTourAvt($tour_id)
    {
        $query = "SELECT * from places_image where places_image.tour_id = $tour_id";
        $avt = $this->db->query($query);
        if (isset($avt[0])) {
            return $avt[0];
        }
    }



    public function getTourById($tour_id)
    {
        $query = "SELECT * FROM tour, places  
            WHERE tour.places_id = places.places_id AND tour.tour_id = $tour_id";
        return $this->db->query($query);
    }

    public function getTours()
    {
        $query = "SELECT * FROM tour, places, places_image  
                     WHERE tour.places_id = places.places_id
                     AND image_id = (
                         SELECT image_id FROM places_image 
                         WHERE places_image.places_id = places.places_id 
                         ORDER by image_id LIMIT 1)";
        return $this->db->query($query);
    }



    public function getToursByName($tour_name)
    {
        $query = "SELECT * from tour, places, p where tour_name like '%$tour_name%' and tour.places_id = places.places_id";
        return $this->db->query($query);
    }

    public function getToursBySearchWord($word)
    {
        $data = explode(",", $word);
        $tours = array();

        foreach ($data as $w) {

            $query = "SELECT * FROM places, tour, places_image 
            WHERE tour.places_id = places.places_id 
            AND places.places_id = places_image.places_id 
            AND (places.places_name LIKE '%$w%'OR places.places_description LIKE '%$w%' OR tour.tour_name LIKE '%$w%' OR tour.transport LIKE '%$w%')
            AND places_image.image_id = (SELECT places_image.image_id FROM places_image WHERE places_image.places_id = places.places_id LIMIT 1)";

            $q = $this->db->query($query);
            $tours = $tours + $q;
        }
        return $tours;
    }

    public function getToursBySearchDay($day)
    {
        $query = "SELECT * FROM tour, places, places_image WHERE tour.places_id = places.places_id 
                AND tour.day = $day
                AND image_id = (
                     SELECT image_id FROM places_image 
                     WHERE places_image.places_id = places.places_id 
                     ORDER by image_id LIMIT 1)";
    }


    public function getToursBySearch($word, $day)
    {
        $query = "SELECT * FROM places, tour, places_image 
        WHERE tour.places_id = places.places_id 
        AND places.places_id = places_image.places_id 
        AND (places.places_name LIKE '%$word%'OR places.places_description LIKE '%$word%' OR tour.tour_name LIKE '%$word%')
         AND tour.tour_day = $day 
        AND places_image.image_id = (SELECT places_image.image_id FROM places_image WHERE places_image.places_id = places.places_id LIMIT 1)";

        return $this->db->query($query);
    }

    public function getMemories(){
        $query = "SELECT memories.image FROM memories";
        return $this->db->query($query);
    }






    public function stripunicode($str)
    {
        if (!$str) return false;
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd' => 'đ', 'D' => 'Đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ', 'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );
        foreach ($unicode as $khongdau => $codau) {
            $arr = explode("|", $codau);
            $str = str_replace($arr, $khongdau, $str);
        }
        return $str;
    }
}
