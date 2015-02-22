<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller 
{function getallbrand()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`hsp_brand`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`hsp_brand`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`hsp_brand`.`hours`";
$elements[2]->sort="1";
$elements[2]->header="Hours";
$elements[2]->alias="hours";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`hsp_brand`.`location`";
$elements[3]->sort="1";
$elements[3]->header="Location";
$elements[3]->alias="location";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`hsp_brand`.`isfeatured`";
$elements[4]->sort="1";
$elements[4]->header="Is Featured";
$elements[4]->alias="isfeatured";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`hsp_brand`.`isnew`";
$elements[5]->sort="1";
$elements[5]->header="Is New";
$elements[5]->alias="isnew";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`hsp_brand`.`description`";
$elements[6]->sort="1";
$elements[6]->header="Description";
$elements[6]->alias="description";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`hsp_brand`.`logo`";
$elements[7]->sort="1";
$elements[7]->header="Logo";
$elements[7]->alias="logo";

$elements=array();
$elements[8]=new stdClass();
$elements[8]->field="`hsp_brand`.`json`";
$elements[8]->sort="1";
$elements[8]->header="Json";
$elements[8]->alias="json";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_brand`");
$this->load->view("json",$data);
}
public function getsinglebrand()
{
$id=$this->input->get_post("id");
$data["message"]=$this->brand_model->getsinglebrand($id);
$this->load->view("json",$data);
}
function getallbrandcategory()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`hsp_brandcategory`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`hsp_brandcategory`.`brand`";
$elements[1]->sort="1";
$elements[1]->header="Brand";
$elements[1]->alias="brand";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`hsp_brandcategory`.`name`";
$elements[2]->sort="1";
$elements[2]->header="Name";
$elements[2]->alias="name";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`hsp_brandcategory`.`order`";
$elements[3]->sort="1";
$elements[3]->header="Order";
$elements[3]->alias="order";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_brandcategory`");
$this->load->view("json",$data);
}
public function getsinglebrandcategory()
{
$id=$this->input->get_post("id");
$data["message"]=$this->brandcategory_model->getsinglebrandcategory($id);
$this->load->view("json",$data);
}
function getallbranddeal()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`hsp_branddeal`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`hsp_branddeal`.`brand`";
$elements[1]->sort="1";
$elements[1]->header="Brand";
$elements[1]->alias="brand";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`hsp_branddeal`.`description`";
$elements[2]->sort="1";
$elements[2]->header="Description";
$elements[2]->alias="description";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`hsp_branddeal`.`json`";
$elements[3]->sort="1";
$elements[3]->header="Json";
$elements[3]->alias="json";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`hsp_branddeal`.`isfeatured`";
$elements[4]->sort="1";
$elements[4]->header="Is Featured";
$elements[4]->alias="isfeatured";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_branddeal`");
$this->load->view("json",$data);
}
public function getsinglebranddeal()
{
$id=$this->input->get_post("id");
$data["message"]=$this->branddeal_model->getsinglebranddeal($id);
$this->load->view("json",$data);
}
function getallevent()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`hsp_event`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`hsp_event`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`hsp_event`.`date`";
$elements[2]->sort="1";
$elements[2]->header="Date";
$elements[2]->alias="date";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`hsp_event`.`day`";
$elements[3]->sort="1";
$elements[3]->header="Day";
$elements[3]->alias="day";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`hsp_event`.`time`";
$elements[4]->sort="1";
$elements[4]->header="Time";
$elements[4]->alias="time";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`hsp_event`.`json`";
$elements[5]->sort="1";
$elements[5]->header="Json";
$elements[5]->alias="json";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_event`");
$this->load->view("json",$data);
}
public function getsingleevent()
{
$id=$this->input->get_post("id");
$data["message"]=$this->event_model->getsingleevent($id);
$this->load->view("json",$data);
}
function getalldine()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`hsp_dine`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`hsp_dine`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`hsp_dine`.`hours`";
$elements[2]->sort="1";
$elements[2]->header="Hours";
$elements[2]->alias="hours";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`hsp_dine`.`location`";
$elements[3]->sort="1";
$elements[3]->header="Location";
$elements[3]->alias="location";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`hsp_dine`.`isfeatured`";
$elements[4]->sort="1";
$elements[4]->header="Is Featured";
$elements[4]->alias="isfeatured";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`hsp_dine`.`isnew`";
$elements[5]->sort="1";
$elements[5]->header="Is New";
$elements[5]->alias="isnew";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`hsp_dine`.`description`";
$elements[6]->sort="1";
$elements[6]->header="Description";
$elements[6]->alias="description";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`hsp_dine`.`json`";
$elements[7]->sort="1";
$elements[7]->header="Json";
$elements[7]->alias="json";

$elements=array();
$elements[8]=new stdClass();
$elements[8]->field="`hsp_dine`.`logo`";
$elements[8]->sort="1";
$elements[8]->header="Logo";
$elements[8]->alias="logo";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_dine`");
$this->load->view("json",$data);
}
public function getsingledine()
{
$id=$this->input->get_post("id");
$data["message"]=$this->dine_model->getsingledine($id);
$this->load->view("json",$data);
}
function getalldinecategory()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`hsp_dinecategory`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`hsp_dinecategory`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`hsp_dinecategory`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`hsp_dinecategory`.`dine`";
$elements[3]->sort="1";
$elements[3]->header="Dine";
$elements[3]->alias="dine";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_dinecategory`");
$this->load->view("json",$data);
}
public function getsingledinecategory()
{
$id=$this->input->get_post("id");
$data["message"]=$this->dinecategory_model->getsingledinecategory($id);
$this->load->view("json",$data);
}
function getalldinedeal()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`hsp_dinedeal`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`hsp_dinedeal`.`dine`";
$elements[1]->sort="1";
$elements[1]->header="Dine";
$elements[1]->alias="dine";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`hsp_dinedeal`.`description`";
$elements[2]->sort="1";
$elements[2]->header="Description";
$elements[2]->alias="description";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`hsp_dinedeal`.`isfeatured`";
$elements[3]->sort="1";
$elements[3]->header="Is Featured";
$elements[3]->alias="isfeatured";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`hsp_dinedeal`.`json`";
$elements[4]->sort="1";
$elements[4]->header="Json";
$elements[4]->alias="json";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_dinedeal`");
$this->load->view("json",$data);
}
public function getsingledinedeal()
{
$id=$this->input->get_post("id");
$data["message"]=$this->dinedeal_model->getsingledinedeal($id);
$this->load->view("json",$data);
}
} ?>