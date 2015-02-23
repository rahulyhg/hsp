<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class config_model extends CI_Model
{
    public function create($title,$text,$date,$image)
    {
        $data=array(
            "title" => $title,
            "text" => $text,
            "date" => $date,
            "image" => $image
        );
        $query=$this->db->insert( "config", $data );
        $id=$this->db->insert_id();
        
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function createvideo($title,$video)
    {
        $data=array(
            "title" => $title,
            "video" => $video
        );
        $query=$this->db->insert( "configvideo", $data );
        $id=$this->db->insert_id();
        
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function createlogo($title,$logo)
    {
        $data=array(
            "title" => $title,
            "logo" => $logo
        );
        $query=$this->db->insert( "configlogo", $data );
        $id=$this->db->insert_id();
        
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function createconfigcategory($value,$configid)
	{
		$data  = array(
			'category' => $value,
			'config' => $configid
		);
		$query=$this->db->insert( 'configcategory', $data );
		return  1;
	}
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("config")->row();
        return $query;
    }
    public function beforeeditvideo($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("configvideo")->row();
        return $query;
    }
    public function beforeeditlogo($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("configlogo")->row();
        return $query;
    }
    function getsingleconfig($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("config")->row();
        return $query;
    }
    public function edit($id,$title,$text,$date,$image)
    {
        $data=array(
            "title" => $title,
            "text" => $text,
            "date" => $date,
            "image" => $image
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "config", $data );
        
        return 1;
    }
    public function editvideo($id,$title,$video)
    {
        $data=array(
            "title" => $title,
            "video" => $video
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "configvideo", $data );
        
        return 1;
    }
    public function editlogo($id,$title,$logo)
    {
        $data=array(
            "title" => $title,
            "logo" => $logo
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "configlogo", $data );
        
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `config` WHERE `id`='$id'");
        return $query;
    }
    
    public function deletevideo($id)
    {
        $query=$this->db->query("DELETE FROM `configvideo` WHERE `id`='$id'");
        return $query;
    }
    
    public function deletelogo($id)
    {
        $query=$this->db->query("DELETE FROM `configlogo` WHERE `id`='$id'");
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
	public function getconfigimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `config` WHERE `id`='$id'")->row();
		return $query;
	}
    
	public function getvideobyid($id)
	{
		$query=$this->db->query("SELECT `video` FROM `configvideo` WHERE `id`='$id'")->row();
		return $query;
	}
    
	public function getlogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `configlogo` WHERE `id`='$id'")->row();
		return $query;
	}
    
     public function getcategoryforconfigbyconfig($id)
	{
         $return=array();
		$query=$this->db->query("SELECT `id`,`config`,`category` FROM `configcategory`  WHERE `config`='$id'");
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
    public function getalllogos()
    {
        $query=$this->db->query("SELECT `logo` FROM `configlogo`")->result();
		return $query;
    }
    public function getconfig()
    {
        $query=$this->db->query("SELECT * FROM `config`")->result();
		return $query;
    }
    public function getvideo()
    {
        $query=$this->db->query("SELECT * FROM `configvideo` WHERE `id` = 1")->row();
		return $query;
    }
}
?>
