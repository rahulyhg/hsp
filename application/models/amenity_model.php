<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class Amenity_model extends CI_Model
{
    public function create($name,$order)
    {
        $data=array(
            "name" => $name,
            "order" => $order
        );
        $query=$this->db->insert( "amenity", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("amenity")->row();
        return $query;
    }
    function getsingleamenity($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("amenity")->row();
        return $query;
    }
    public function edit($id,$name,$order)
    {
        $data=array(
            "name" => $name,
            "order" => $order
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "amenity", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `amenity` WHERE `id`='$id'");
        return $query;
    }
    
	public function getisfeatureddropdown()
	{
		$isfeatured= array(
			 "1" => "Yes",
			 "0" => "No",
			);
		return $isfeatured;
	}
	
	public function getisnewdropdown()
	{
		$isnew= array(
			 "1" => "Yes",
			 "0" => "No",
			);
		return $isnew;
	}
	public function getamenitylogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `amenity` WHERE `id`='$id'")->row();
		return $query;
	}
    
    public function getamenitydropdown()
	{
		$query=$this->db->query("SELECT * FROM `amenity`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    public function getdineramenity($id)
    {
        $query=$this->db->query("SELECT `dineamenity`.`amenity` AS `id` FROM `dineamenity` INNER JOIN `hsp_dine` ON `hsp_dine`.`id` = `dineamenity`.`dine` WHERE `hsp_dine`.`id`='$id'")->result();
		return $query;
    }
}
?>
