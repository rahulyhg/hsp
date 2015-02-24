<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class event_model extends CI_Model
{
    public function create($name,$date,$day,$time,$json,$logo,$facebook,$twitter,$instagram,$googleplus,$description)
    {
        $data=array(
            "name" => $name,
            "date" => $date,
            "day" => $day,
            "time" => $time,
            "logo" => $logo,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "googleplus" => $googleplus,
            "description" => $description,
            "json" => $json
        );
        $query=$this->db->insert( "hsp_event", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_event")->row();
        return $query;
    }
    function getsingleevent($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_event")->row();
        return $query;
    }
    public function edit($id,$name,$date,$day,$time,$json,$logo,$facebook,$twitter,$instagram,$googleplus,$description)
    {
        $data=array(
            "name" => $name,
            "date" => $date,
            "day" => $day,
            "time" => $time,
            "logo" => $logo,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "googleplus" => $googleplus,
            "description" => $description,
            "json" => $json
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "hsp_event", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `hsp_event` WHERE `id`='$id'");
        return $query;
    }
    
	public function geteventlogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `hsp_event` WHERE `id`='$id'")->row();
		return $query;
	}
    public function getall()
    {
        $query=$this->db->query("SELECT * FROM `hsp_event` WHERE `date`>CURRENT_DATE()")->result();
		return $query;
    }
    
}
?>
