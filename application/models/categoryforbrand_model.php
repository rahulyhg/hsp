<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class categoryforbrand_model extends CI_Model
{
    public function create($name,$order)
    {
        $data=array(
            "name" => $name,
            "order" => $order
        );
        $query=$this->db->insert( "categoryforbrand", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("categoryforbrand")->row();
        return $query;
    }
    function getsinglecategoryforbrand($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("categoryforbrand")->row();
        return $query;
    }
    public function edit($id,$name,$order)
    {
        $data=array(
            "name" => $name,
            "order" => $order
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "categoryforbrand", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `categoryforbrand` WHERE `id`='$id'");
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
	public function getcategoryforbrandlogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `categoryforbrand` WHERE `id`='$id'")->row();
		return $query;
	}
    
    public function getcategoryforbranddropdown()
	{
		$query=$this->db->query("SELECT * FROM `categoryforbrand`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
}
?>
