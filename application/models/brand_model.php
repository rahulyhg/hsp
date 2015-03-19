<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");
class brand_model extends CI_Model {
    public function create($name, $hours, $location, $isfeatured, $isnew, $description, $logo, $json, $contactno, $email, $categoryforbrand, $facebook, $twitter, $instagram, $googleplus, $image, $specialoffer, $specialofferimage, $stars, $duration) {
        $data = array("name" => $name, "hours" => $hours, "location" => $location, "isfeatured" => $isfeatured, "isnew" => $isnew, "description" => $description, "logo" => $logo, "contactno" => $contactno, "email" => $email, "facebook" => $facebook, "twitter" => $twitter, "instagram" => $instagram, "googleplus" => $googleplus, "image" => $image, "specialoffer" => $specialoffer, "specialofferimage" => $specialofferimage, "stars" => $stars, "duration" => $duration, "json" => $json);
        $query = $this->db->insert("hsp_brand", $data);
        $id = $this->db->insert_id();
        foreach ($categoryforbrand AS $key => $value) {
            $this->brand_model->createbrandcategory($value, $id);
        }
        if (!$query) return 0;
        else return $id;
    }
    public function createbrandcategory($value, $brandid) {
        $data = array('category' => $value, 'brand' => $brandid);
        $query = $this->db->insert('brandcategory', $data);
        return 1;
    }
    public function beforeedit($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("hsp_brand")->row();
        return $query;
    }
    function getsinglebrand($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("hsp_brand")->row();
        return $query;
    }
    function getsinglebrandimages($id) {
        $images = $this->db->query("SELECT * FROM `brandimage` WHERE `brand`='$id'")->result();
        return $images;
    }
    public function edit($id, $name, $hours, $location, $isfeatured, $isnew, $description, $logo, $json, $contactno, $email, $categoryforbrand, $facebook, $twitter, $instagram, $googleplus, $image, $specialoffer, $specialofferimage, $stars, $duration) {
        $data = array("name" => $name, "hours" => $hours, "location" => $location, "isfeatured" => $isfeatured, "isnew" => $isnew, "description" => $description, "logo" => $logo, "contactno" => $contactno, "email" => $email, "facebook" => $facebook, "twitter" => $twitter, "instagram" => $instagram, "googleplus" => $googleplus, "image" => $image, "specialoffer" => $specialoffer, "specialofferimage" => $specialofferimage, "stars" => $stars, "duration" => $duration, "json" => $json);
        $this->db->where("id", $id);
        $query = $this->db->update("hsp_brand", $data);
        $querydelete = $this->db->query("DELETE FROM `brandcategory` WHERE `brand`='$id'");
        foreach ($categoryforbrand AS $key => $value) {
            $this->brand_model->createbrandcategory($value, $id);
        }
        return 1;
    }
    public function delete($id) {
        $query = $this->db->query("DELETE FROM `hsp_brand` WHERE `id`='$id'");
        return $query;
    }
    public function getisfeatureddropdown() {
        $isfeatured = array("1" => "Yes", "0" => "No",);
        return $isfeatured;
    }
    public function getisnewdropdown() {
        $isnew = array("1" => "Yes", "0" => "No",);
        return $isnew;
    }
    public function getbrandlogobyid($id) {
        $query = $this->db->query("SELECT `logo` FROM `hsp_brand` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getbrandimagebyid($id) {
        $query = $this->db->query("SELECT `image` FROM `hsp_brand` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getbrandspecialofferimagebyid($id) {
        $query = $this->db->query("SELECT `specialofferimage` FROM `hsp_brand` WHERE `id`='$id'")->row();
        return $query;
    }
    public function getcategoryforbrandbybrand($id) {
        $return = array();
        $query = $this->db->query("SELECT `id`,`brand`,`category` FROM `brandcategory`  WHERE `brand`='$id'");
        if ($query->num_rows() > 0) {
            $query = $query->result();
            foreach ($query as $row) {
                $return[] = $row->category;
            }
        }
        return $return;
    }
    public function getall() {
        $query = $this->db->query("SELECT * FROM `hsp_brand`")->result();
        return $query;
    }
    public function getbrandbyfilter($alph, $search, $category, $first) {
        $totalnum = 6;
        $filtercat = "";
        $selectfields = "DISTINCT(`hsp_brand`.`id`) AS `id`,`hsp_brand`.`name` AS `name`,`hsp_brand`.`hours` AS `hours`,`hsp_brand`.`location` AS `location`,`hsp_brand`.`logo` AS `logo`,`hsp_brand`.`isfeatured` AS `isfeatured`, `hsp_brand`.`isnew` AS `isnew`";
        if ($category != "") {
            $filtercat = "AND `brandcategory`.`category`='$category'";
        }
        if ($alph != "") {
            if ($alph == "#") {
                $query = $this->db->query("SELECT $selectfields FROM `hsp_brand` INNER JOIN `brandcategory` ON `hsp_brand`.`id`=`brandcategory`.`brand` WHERE `hsp_brand`.`name` regexp '^[0-9]+' $filtercat LIMIT $first,$totalnum")->result();
            } else {
                $query = $this->db->query("SELECT $selectfields FROM `hsp_brand` INNER JOIN `brandcategory` ON `hsp_brand`.`id`=`brandcategory`.`brand` WHERE `hsp_brand`.`name` LIKE '$alph%' $filtercat LIMIT $first,$totalnum")->result();
            }
        } else {
            $query = $this->db->query("SELECT $selectfields FROM `hsp_brand` INNER JOIN `brandcategory` ON `hsp_brand`.`id`=`brandcategory`.`brand` WHERE `hsp_brand`.`name` LIKE '%$search%' $filtercat LIMIT $first,$totalnum")->result();
        }
        return $query;
    }
}
?>
