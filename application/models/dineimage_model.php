<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class dineimage_model extends CI_Model
{
    public function create($dine,$name,$order,$image)
    {
        $data=array(
            "dine" => $dine,
            "name" => $name,
            "order" => $order,
            "image" => $image
        );
        $query=$this->db->insert( "dineimage", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("dineimage")->row();
        return $query;
    }
    function getsingledineimage($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("dineimage")->row();
        return $query;
    }
    public function edit($id,$dine,$name,$order,$image)
    {
        $data=array(
            
            "dine" => $dine,
            "name" => $name,
            "order" => $order,
            "image" => $image
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "dineimage", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `dineimage` WHERE `id`='$id'");
        return $query;
    }
    
	public function getdineimageimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `dineimage` WHERE `id`='$id'")->row();
		return $query;
	}
    
    
    public function getalldeals()
    {
        $query=$this->db->query("SELECT `dine`.`id` AS `id`, `dine`.`logo` AS `logo`, `dine`.`image` AS `image`, `dine`.`hours` AS `hours`, `dine`.`location` AS `location`, `dine`.`isfeatured` AS `isfeatured`, `dine`.`isnew` AS `isnew`, `dineimage`.`description` AS `description` FROM `dine` INNER JOIN `dineimage` ON `dineimage`.`dine` = `dine`.`id` WHERE `dineimage`.`isfeatured`=1")->result();
        return $query;
    }
    public function getnormaldeals()
    {
        $query=$this->db->query("SELECT `dine`.`id` AS `id`, `dine`.`logo` AS `logo`, `dine`.`image` AS `image`, `dine`.`hours` AS `hours`, `dine`.`location` AS `location`, `dine`.`isfeatured` AS `isfeatured`, `dine`.`isnew` AS `isnew`, `dineimage`.`description` AS `description` FROM `dine` INNER JOIN `dineimage` ON `dineimage`.`dine` = `dine`.`id` WHERE `dineimage`.`isfeatured`=0")->result();
        return $query;
    }
    public function getsingledineimages($id)
    {
        $query=$this->db->query("SELECT * FROM `dineimage` WHERE `dine` = '$id'")->result();
        return $query;
    }
}
?>
