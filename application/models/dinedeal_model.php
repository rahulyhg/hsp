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
    public function getalldeals()
    {
        $query=$this->db->query("SELECT `hsp_dine`.`id` AS `id`, `hsp_dine`.`logo` AS `logo`, `hsp_dine`.`image` AS `image`, `hsp_dine`.`hours` AS `hours`, `hsp_dine`.`location` AS `location`, `hsp_dine`.`isfeatured` AS `isfeatured`, `hsp_dine`.`isnew` AS `isnew`, `hsp_dinedeal`.`description` AS `description` FROM `hsp_dine` INNER JOIN `hsp_dinedeal` ON `hsp_dinedeal`.`dine` = `hsp_dine`.`id`")->result();
        return $query;
    }
    public function getdealnames()
    {
        $query=$this->db->query("SELECT `id`, `name` FROM `hsp_dinedeal`")->result();
        return $query;
    }
}
?>