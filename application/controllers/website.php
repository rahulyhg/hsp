<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Website extends CI_Controller 
{
	public function index()
	{
		$data[ 'title' ] = 'Welcome';
        $data['brandticker']=$this->config_model->getalllogos();
        $data['config']=$this->config_model->getconfig();
        $data['video']=$this->config_model->getvideo();
		$this->load->view( 'frontend/index', $data );	
	}
    public function about_us()
	{
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'frontend/about_us', $data );	
	}
    public function brands_inner()
	{
        $brandid = $this->input->get_post("id");
		$data[ 'title' ] = 'Welcome';
        $data['branddata'] = $this->brand_model->getsinglebrand($brandid);
		$this->load->view( 'frontend/brands_inner', $data );	
	}
    public function brands_list()
	{
        $data['brands']= $this->brand_model->getall();
        $data['brandcategories']= $this->categoryforbrand_model->getcategoryforbranddropdown();
        $letter = "a";
        //$data['lettersearch']=$this->brand_model->getbrandbyletter($letter);
        $searchtext = "a";
        //$data['search']=$this->brand_model->getbrandbysearch($searchtext);
        $category = "category1";
        //$data['catsearch']=$this->brand_model->getbrandbycategory($category);
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
        $data['dinercategories']=$this->categoryfordine_model->getcategoryfordinedropdown();
        $letter = "a";
        //$data['lettersearch']=$this->dine_model->getdinerbyletter($letter);
        $searchtext = "a";
        //$data['search']=$this->dine_model->getbrandbysearch($searchtext);
        $category = "category1";
        //$data['catsearch']=$this->dine_model->getbrandbycategory($category);
        $amenity = "";
        //$data['ammenitysearch'] = $this->dine_model->getdinerbyammenity($amenity);
		$this->load->view( 'frontend/eat_list', $data );	
	}
    public function eat_inner()
	{
        $dinerid = $this->input->get_post("id");
		$data[ 'title' ] = 'Welcome';
        $data['dinerdata']=$this->dine_model->getsingledine($dinerid);
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
