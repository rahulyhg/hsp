<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class branddeal_model extends CI_Model
{
    public function create($brand,$description,$json,$isfeatured)
    {
        $data=array("brand" => $brand,"description" => $description,"json" => $json,"isfeatured" => $isfeatured);
        $query=$this->db->insert( "hsp_branddeal", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_branddeal")->row();
        return $query;
    }
    function getsinglebranddeal($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("hsp_branddeal")->row();
        return $query;
    }
    public function edit($id,$brand,$description,$json,$isfeatured)
    {
        $data=array("brand" => $brand,"description" => $description,"json" => $json,"isfeatured" => $isfeatured);
        $this->db->where( "id", $id );
        $query=$this->db->update( "hsp_branddeal", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `hsp_branddeal` WHERE `id`='$id'");
        return $query;
    }
    public function getalldeals()
    {
        $query=$this->db->query("SELECT `hsp_brand`.`id` AS `id`, `hsp_brand`.`logo` AS `logo`, `hsp_brand`.`image` AS `image`, `hsp_brand`.`hours` AS `hours`, `hsp_brand`.`location` AS `location`, `hsp_brand`.`isfeatured` AS `isfeatured`, `hsp_brand`.`isnew` AS `isnew`, `hsp_branddeal`.`description` AS `description` FROM `hsp_brand` INNER JOIN `hsp_branddeal` ON `hsp_branddeal`.`brand` = `hsp_brand`.`id`")->result();
        return $query;
    }
}
?>
