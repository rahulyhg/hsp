<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class brandcategory_model extends CI_Model
{
    public function create($brand,$name,$order)
    {
        $data=array("brand" => $brand,"name" => $name,"order" => $order);
        $query=$this->db->insert( "hsp_brandcategory", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_brandcategory")->row();
        return $query;
    }
    function getsinglebrandcategory($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_brandcategory")->row();
        return $query;
    }
    public function edit($id,$brand,$name,$order)
    {
        $data=array("brand" => $brand,"name" => $name,"order" => $order);
        $this->db->where( "id", $id );
        $query=$this->db->update( "hsp_brandcategory", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `hsp_brandcategory` WHERE `id`='$id'");
        return $query;
    }
}
?>
