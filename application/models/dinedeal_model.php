<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class dinedeal_model extends CI_Model
{
    public function create($dine,$description,$isfeatured,$json,$name)
    {
        $data=array("dine" => $dine,"description" => $description,"isfeatured" => $isfeatured,"json" => $json,"name" => $name);
        $query=$this->db->insert( "hsp_dinedeal", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_dinedeal")->row();
        return $query;
    }
    function getsingledinedeal($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_dinedeal")->row();
        return $query;
    }
    public function edit($id,$dine,$description,$isfeatured,$json,$name)
    {
        $data=array("dine" => $dine,"description" => $description,"isfeatured" => $isfeatured,"json" => $json,"name" => $name);
        $this->db->where( "id", $id );
        $query=$this->db->update( "hsp_dinedeal", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `hsp_dinedeal` WHERE `id`='$id'");
        return $query;
    }
}
?>
