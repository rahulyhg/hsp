<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Website extends CI_Controller 
{
	public function index()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/index', $data );	
	}
    public function about_us()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/about_us', $data );	
	}
    public function brands_inner()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/brands_inner', $data );	
	}
    public function brands_list()
	{
        /*
        $galleryid = $this->input->get_post("id");
        $data["creativecat"] = $this->photographercategory_model->getsinglephotographercategory($creativeid);
        $query=$this->db->query("SELECT * FROM `anima_photographeralbum` WHERE `anima_photographeralbum`.`photographer`='$id' ORDER BY `anima_photographeralbum`.`order`")->result();
		return $query;
        */
        $data['brands']= $this->brand_model->getall();
		$data[ 'title' ] = 'Brands';
		$this->load->view( 'frontend/brands_list', $data );	
	}
    public function contact()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/brands_list', $data );	
	}
    public function deals_list()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/deals_list', $data );	
	}
    public function eat_list()
	{
		$data[ 'title' ] = 'Dine';
        $data['diners']=$this->dine_model->getall();
		$this->load->view( 'frontend/eat_list', $data );	
	}
    public function eat_inner()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/eat_inner', $data );	
	}
    public function event_inner()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/event_inner', $data );	
	}
    public function events_list()
	{
		$data[ 'title' ] = 'Welcome';
        $data['events'] = $this->event_model->getall();
		$this->load->view( 'frontend/events_list', $data );	
	}
    public function jobs()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/jobs', $data );	
	}
    public function post()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/post', $data );	
	}
    public function press()
    {
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/press', $data );	
	}
    
	
    
}
?>
