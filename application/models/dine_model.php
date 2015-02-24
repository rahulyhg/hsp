<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class dine_model extends CI_Model
{
    public function create($name,$hours,$location,$isfeatured,$isnew,$description,$json,$logo,$categoryfordine,$amenity,$email,$contactno,$facebook,$twitter,$instagram,$googleplus,$image,$specialoffer,$specialofferimage,$floor)
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
            "floor" => $floor,
            "image" => $image,
            "specialoffer" => $specialoffer,
            "specialofferimage" => $specialofferimage,
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
    public function getsingledine($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_dine")->row();
        return $query;
    }
    public function edit($id,$name,$hours,$location,$isfeatured,$isnew,$description,$json,$logo,$categoryfordine,$amenity,$email,$contactno,$facebook,$twitter,$instagram,$googleplus,$image,$specialoffer,$specialofferimage,$floor)
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
            "floor" => $floor,
            "image" => $image,
            "specialoffer" => $specialoffer,
            "specialofferimage" => $specialofferimage,
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
    
	public function getdineimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `hsp_dine` WHERE `id`='$id'")->row();
		return $query;
	}
    
	public function getdinespecialofferimagebyid($id)
	{
		$query=$this->db->query("SELECT `specialofferimage` FROM `hsp_dine` WHERE `id`='$id'")->row();
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
    public function getall()
    {
        $query=$this->db->query("SELECT * FROM `hsp_dine`")->result();
        return $query;
    }
    public function getdinerbyletter($l)
    {
    
        $query=$this->db->query("SELECT * FROM `hsp_dine` WHERE `name` LIKE '$l'%")->result();
		return $query;
    }
    public function getbrandbysearch($l)
    {
    
        $query=$this->db->query("SELECT * FROM `hsp_dine` WHERE `name` LIKE %'$l'%")->result();
		return $query;
    }
    public function getbrandbycategory($cat)
    {
    
        $query=$this->db->query("SELECT * FROM `hsp_dine` WHERE `name` LIKE %'$l'%")->result();
		return $query;
    }
    public function getdinerbyammenity($a)
    {
        $query=$this->db->query("SELECT `hsp_dine`.`logo`,`hsp_dine`.`name`,`hsp_dine`.`hours`,`amenity`.`id` FROM `amenity` INNER JOIN `hsp_dine` ON ``")->result();
		return $query;  
    }
    public function getdinerbyfilter($alph,$search,$category,$amenity,$first)
    {
        $totalnum=6;
        $filtercat="";
        $filteramenity="";
        if($category!="")
        {
            $filtercat="AND `dinecategory`.`category`='$category'";
        }
        if($amenity!="")
        {
            $filteramenity="AND `dineamenity`.`amenity`='$amenity'";
        }
        
        if($alph!="")
        {
            $query=$this->db->query("SELECT * FROM `hsp_dine` INNER JOIN `dinecategory` ON `hsp_dine`.`id`=`dinecategory`.`dine` WHERE `hsp_dine`.`name` LIKE '$alph%' $filtercat LIMIT $first,$totalnum")->result();
        }
        else
        {
            $query=$this->db->query("SELECT DISTINCT(`hsp_dine`.`id`) AS `id`, `hsp_dine`.`logo` AS `logo`,`hsp_dine`.`hours` AS `hours`,`hsp_dine`.`location` AS `location`,`hsp_dine`.`name` AS `name` FROM `hsp_dine` INNER JOIN `dinecategory` ON `hsp_dine`.`id`=`dinecategory`.`dine` INNER JOIN `dineamenity` ON `hsp_dine`.`id`=`dineamenity`.`dine` WHERE `hsp_dine`.`name` LIKE '%$search%' $filtercat LIMIT $first,$totalnum")->result();
        }
        return $query;
    }
}
?>
