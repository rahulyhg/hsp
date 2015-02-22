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
		$data[ 'title' ] = 'Welcome';
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
