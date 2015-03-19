<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class eventimage_model extends CI_Model
{
    public function create($event,$name,$order,$image)
    {
        $data=array(
            "event" => $event,
            "name" => $name,
            "order" => $order,
            "image" => $image
        );
        $query=$this->db->insert( "eventimage", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("eventimage")->row();
        return $query;
    }
    function getsingleeventimage($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("eventimage")->row();
        return $query;
    }
    public function edit($id,$event,$name,$order,$image)
    {
        $data=array(
            
            "event" => $event,
            "name" => $name,
            "order" => $order,
            "image" => $image
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "eventimage", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `eventimage` WHERE `id`='$id'");
        return $query;
    }
    
	public function geteventimageimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `eventimage` WHERE `id`='$id'")->row();
		return $query;
	}
    
    
    public function getalldeals()
    {
        $query=$this->db->query("SELECT `event`.`id` AS `id`, `event`.`logo` AS `logo`, `event`.`image` AS `image`, `event`.`hours` AS `hours`, `event`.`location` AS `location`, `event`.`isfeatured` AS `isfeatured`, `event`.`isnew` AS `isnew`, `eventimage`.`description` AS `description` FROM `event` INNER JOIN `eventimage` ON `eventimage`.`event` = `event`.`id` WHERE `eventimage`.`isfeatured`=1")->result();
        return $query;
    }
    public function getnormaldeals()
    {
        $query=$this->db->query("SELECT `event`.`id` AS `id`, `event`.`logo` AS `logo`, `event`.`image` AS `image`, `event`.`hours` AS `hours`, `event`.`location` AS `location`, `event`.`isfeatured` AS `isfeatured`, `event`.`isnew` AS `isnew`, `eventimage`.`description` AS `description` FROM `event` INNER JOIN `eventimage` ON `eventimage`.`event` = `event`.`id` WHERE `eventimage`.`isfeatured`=0")->result();
        return $query;
    }
    public function getsingleeventimages($id)
    {
        $query=$this->db->query("SELECT * FROM `eventimage` WHERE `event` = '$id'")->result();
        return $query;
    }
}
?>
