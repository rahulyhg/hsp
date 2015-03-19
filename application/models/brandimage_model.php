<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class brandimage_model extends CI_Model
{
    public function create($brand,$name,$order,$image)
    {
        $data=array(
            "brand" => $brand,
            "name" => $name,
            "order" => $order,
            "image" => $image
        );
        $query=$this->db->insert( "brandimage", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("brandimage")->row();
        return $query;
    }
    function getsinglebrandimage($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("brandimage")->row();
        return $query;
    }
    public function edit($id,$brand,$name,$order,$image)
    {
        $data=array(
            
            "brand" => $brand,
            "name" => $name,
            "order" => $order,
            "image" => $image
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "brandimage", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `brandimage` WHERE `id`='$id'");
        return $query;
    }
    
	public function getbrandimageimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `brandimage` WHERE `id`='$id'")->row();
		return $query;
	}
    
    
    public function getalldeals()
    {
        $query=$this->db->query("SELECT `brand`.`id` AS `id`, `brand`.`logo` AS `logo`, `brand`.`image` AS `image`, `brand`.`hours` AS `hours`, `brand`.`location` AS `location`, `brand`.`isfeatured` AS `isfeatured`, `brand`.`isnew` AS `isnew`, `brandimage`.`description` AS `description` FROM `brand` INNER JOIN `brandimage` ON `brandimage`.`brand` = `brand`.`id` WHERE `brandimage`.`isfeatured`=1")->result();
        return $query;
    }
    public function getnormaldeals()
    {
        $query=$this->db->query("SELECT `brand`.`id` AS `id`, `brand`.`logo` AS `logo`, `brand`.`image` AS `image`, `brand`.`hours` AS `hours`, `brand`.`location` AS `location`, `brand`.`isfeatured` AS `isfeatured`, `brand`.`isnew` AS `isnew`, `brandimage`.`description` AS `description` FROM `brand` INNER JOIN `brandimage` ON `brandimage`.`brand` = `brand`.`id` WHERE `brandimage`.`isfeatured`=0")->result();
        return $query;
    }
    public function getsinglebrandimages($id)
    {
        $query=$this->db->query("SELECT * FROM `brandimage` WHERE `brand` = '$id'")->result();
        return $query;
    }
}
?>
