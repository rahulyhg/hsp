<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class dinecategory_model extends CI_Model
{
    public function create($name,$order,$dine)
    {
        $data=array("name" => $name,"order" => $order,"dine" => $dine);
        $query=$this->db->insert( "hsp_dinecategory", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_dinecategory")->row();
        return $query;
    }
    function getsingledinecategory($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_dinecategory")->row();
        return $query;
    }
    public function edit($id,$name,$order,$dine)
    {
        $data=array("name" => $name,"order" => $order,"dine" => $dine);
        $this->db->where( "id", $id );
        $query=$this->db->update( "hsp_dinecategory", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `hsp_dinecategory` WHERE `id`='$id'");
        return $query;
    }
}
?>
