<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class dine_model extends CI_Model
{
    public function create($name,$hours,$location,$isfeatured,$isnew,$description,$json,$logo,$categoryfordine,$amenity,$email,$contactno,$facebook,$twitter,$instagram,$googleplus)
    {
        $data=array(
            "name" => $name,
            "hours" => $hours,
            "location" => $location,
            "isfeatured" => $isfeatured,
            "isnew" => $isnew,
            "description" => $description,
            "email" => $email,
            "contactno" => $contactno,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "googleplus" => $googleplus,
            "json" => $json,
            "logo" => $logo
        );
        $query=$this->db->insert( "hsp_dine", $data );
        $id=$this->db->insert_id();
        foreach($categoryfordine AS $key=>$value)
        {
            $this->dine_model->createdinecategory($value,$id);
        }
        foreach($amenity AS $key=>$value)
        {
            $this->dine_model->createdineamenity($value,$id);
        }
        if(!$query)
            return  0;
        else
            return  $id;
    }
    public function createdinecategory($value,$dineid)
	{
		$data  = array(
			'category' => $value,
			'dine' => $dineid
		);
		$query=$this->db->insert( 'dinecategory', $data );
		return  1;
	}
    public function createdineamenity($value,$dineid)
	{
		$data  = array(
			'amenity' => $value,
			'dine' => $dineid
		);
		$query=$this->db->insert( 'dineamenity', $data );
		return  1;
	}
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_dine")->row();
        return $query;
    }
    function getsingledine($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_dine")->row();
        return $query;
    }
    public function edit($id,$name,$hours,$location,$isfeatured,$isnew,$description,$json,$logo,$categoryfordine,$amenity,$email,$contactno,$facebook,$twitter,$instagram,$googleplus)
    {
        $data=array(
            "name" => $name,
            "hours" => $hours,
            "location" => $location,
            "isfeatured" => $isfeatured,
            "isnew" => $isnew,
            "description" => $description,
            "email" => $email,
            "contactno" => $contactno,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "googleplus" => $googleplus,
            "json" => $json,
            "logo" => $logo
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "hsp_dine", $data );
        
        $querydelete=$this->db->query("DELETE FROM `dinecategory` WHERE `dine`='$id'");
        $querydeleteamenity=$this->db->query("DELETE FROM `dineamenity` WHERE `dine`='$id'");
        foreach($categoryfordine AS $key=>$value)
        {
            $this->dine_model->createdinecategory($value,$id);
        }
        foreach($amenity AS $key=>$value)
        {
            $this->dine_model->createdineamenity($value,$id);
        }
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `hsp_dine` WHERE `id`='$id'");
        return $query;
    }
	public function getdinelogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `hsp_dine` WHERE `id`='$id'")->row();
		return $query;
	}
    
     public function getcategoryfordinebydine($id)
	{
         $return=array();
		$query=$this->db->query("SELECT `id`,`dine`,`category` FROM `dinecategory`  WHERE `dine`='$id'");
        if($query->num_rows() > 0)
        {
            $query=$query->result();
            foreach($query as $row)
            {
                $return[]=$row->category;
            }
        }
         return $return;
         
		
	}
     public function getamenitybydine($id)
	{
         $return=array();
		$query=$this->db->query("SELECT `id`,`dine`,`amenity` FROM `dineamenity`  WHERE `dine`='$id'");
        if($query->num_rows() > 0)
        {
            $query=$query->result();
            foreach($query as $row)
            {
                $return[]=$row->amenity;
            }
        }
         return $return;
         
		
	}
}
?>
