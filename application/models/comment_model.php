<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class comment_model extends CI_Model
{
    public function create($name,$email,$phone,$comment)
    {
        $data=array(
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "comment" => $comment
        );
        $query=$this->db->insert( "comment", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("comment")->row();
        return $query;
    }
    function getsinglecomment($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("comment")->row();
        return $query;
    }
    public function edit($id,$name,$email,$phone,$comment)
    {
        $data=array(
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "comment" => $comment
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "comment", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `comment` WHERE `id`='$id'");
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
	public function getcommentlogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `comment` WHERE `id`='$id'")->row();
		return $query;
	}
    
    public function getcommentdropdown()
	{
		$query=$this->db->query("SELECT * FROM `comment`  ORDER BY `id` ASC")->result();
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
