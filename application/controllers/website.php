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
        $data['branddeals'] = $this->branddeal_model->getsinglebranddeals($brandid);
		$this->load->view( 'frontend/brands_inner', $data );	
	}
    public function brands_list()
	{
        $data['brands']= $this->brand_model->getall();
        $data['brandcategories']= $this->categoryforbrand_model->getcategorydropdown();
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
		$this->load->view( 'frontend/contact', $data );	
	}
    public function deals_list()
	{
		$data[ 'title' ] = 'Welcome';
        $data['deals']=$this->branddeal_model->getalldeals();
        $data['normaldeals']=$this->branddeal_model->getnormaldeals();
		$this->load->view( 'frontend/deals_list', $data );	
	}
    public function eat_list()
	{
		$data[ 'title' ] = 'Dine';
        $data['diners']=$this->dine_model->getall();
        $data['dinercategories']=$this->categoryfordine_model->getdinecategorydropdown();
        $letter = "a";
        //$data['lettersearch']=$this->dine_model->getdinerbyletter($letter);
        $searchtext = "a";
        //$data['search']=$this->dine_model->getbrandbysearch($searchtext);
        $category = "category1";
        //$data['catsearch']=$this->dine_model->getbrandbycategory($category);
        $amenity = "";
        //$data['ammenitysearch'] = $this->dine_model->getdinerbyammenity($amenity);
        $data['dealnames']=$this->dinedeal_model->getdealnames();
		$this->load->view( 'frontend/eat_list', $data );	
	}
    public function eat_inner()
	{
        $dinerid = $this->input->get_post("id");
		$data[ 'title' ] = 'Welcome';
        $data['dinerdata']=$this->dine_model->getsingledine($dinerid);
        $data['dineramenities']=$this->amenity_model->getdineramenity($dinerid);
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
        $data['oldevents'] = $this->event_model->getoldevent();
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
    public function brandfilter() 
    {
        $alph=$this->input->get_post("alph");
        $search=$this->input->get_post("search");
        $category=$this->input->get_post("category");
        $first=$this->input->get_post("first");
        $data['message']=$this->brand_model->getbrandbyfilter($alph,$search,$category,$first);
        $this->load->view( 'json', $data );	
    }
    public function dinefilter()
    {
        $alph=$this->input->get_post("alph");
        $search=$this->input->get_post("search");
        $category=$this->input->get_post("category");
        $amenity1=$this->input->get_post("amenity1");
        $amenity2=$this->input->get_post("amenity2");
        $amenity3=$this->input->get_post("amenity3");
        $amenity4=$this->input->get_post("amenity4");
        $first=$this->input->get_post("first");
        
        $data['message']=$this->dine_model->getdinerbyfilter($alph,$search,$category,$amenity1,$amenity2,$amenity3,$amenity4,$first);
        $this->load->view('json', $data);
    } 
}
?>
