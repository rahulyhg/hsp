<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class categoryfordine_model extends CI_Model
{
    public function create($name,$order)
    {
        $data=array(
            "name" => $name,
            "order" => $order
        );
        $query=$this->db->insert( "categoryfordine", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("categoryfordine")->row();
        return $query;
    }
    function getsinglecategoryfordine($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("categoryfordine")->row();
        return $query;
    }
    public function edit($id,$name,$order)
    {
        $data=array(
            "name" => $name,
            "order" => $order
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "categoryfordine", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `categoryfordine` WHERE `id`='$id'");
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
	public function getcategoryfordinelogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `categoryfordine` WHERE `id`='$id'")->row();
		return $query;
	}
    
    public function getcategoryfordinedropdown()
	{
		$query=$this->db->query("SELECT * FROM `categoryfordine`  ORDER BY `id` ASC")->result();
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
