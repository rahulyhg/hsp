<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller 
{
	public function __construct( )
	{
		parent::__construct();
		
		$this->is_logged_in();
	}
	function is_logged_in( )
	{
		$is_logged_in = $this->session->userdata( 'logged_in' );
		if ( $is_logged_in !== 'true' || !isset( $is_logged_in ) ) {
			redirect( base_url() . 'index.php/login', 'refresh' );
		} //$is_logged_in !== 'true' || !isset( $is_logged_in )
	}
	function checkaccess($access)
	{
		$accesslevel=$this->session->userdata('accesslevel');
		if(!in_array($accesslevel,$access))
			redirect( base_url() . 'index.php/site?alerterror=You do not have access to this page. ', 'refresh' );
	}
	public function index()
	{
		$access = array("1","2");
		$this->checkaccess($access);
		$data[ 'page' ] = 'dashboard';
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'template', $data );	
	}
	public function createuser()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data['accesslevel']=$this->user_model->getaccesslevels();
		$data[ 'status' ] =$this->user_model->getstatusdropdown();
		$data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
        
        $json=array();
        
        $json[0]=new stdClass();
        $json[0]->placeholder="";
        $json[0]->value="";
        $json[0]->label="Meta Title";
        $json[0]->type="text";
        $json[0]->options="";
        $json[0]->classes="";
        
        $json[1]=new stdClass();
        $json[1]->placeholder="";
        $json[1]->value="";
        $json[1]->label="Meta Description";
        $json[1]->type="textarea";
        $json[1]->options="";
        $json[1]->classes="";
        
        $json[2]=new stdClass();
        $json[2]->placeholder="";
        $json[2]->value="";
        $json[2]->label="Meta Keywords";
        $json[2]->type="textarea";
        $json[2]->options="";
        $json[2]->classes="";
        
        
        $data["fieldjson"]=$json;
        
//        $data['category']=$this->category_model->getcategorydropdown();
		$data[ 'page' ] = 'createuser';
		$data[ 'title' ] = 'Create User';
		$this->load->view( 'template', $data );	
	}
	function createusersubmit()
	{
		$access = array("1");
		$this->checkaccess($access);
		$this->form_validation->set_rules('name','Name','trim|required|max_length[30]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','trim|required|matches[password]');
		$this->form_validation->set_rules('accessslevel','Accessslevel','trim');
		$this->form_validation->set_rules('status','status','trim|');
		$this->form_validation->set_rules('socialid','Socialid','trim');
		$this->form_validation->set_rules('logintype','logintype','trim');
		$this->form_validation->set_rules('json','json','trim');
		if($this->form_validation->run() == FALSE)	
		{
			$data['alerterror'] = validation_errors();
			$data['accesslevel']=$this->user_model->getaccesslevels();
            $data[ 'status' ] =$this->user_model->getstatusdropdown();
            $data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
            $data[ 'page' ] = 'createuser';
            $data[ 'title' ] = 'Create User';
            $this->load->view( 'template', $data );	
		}
		else
		{
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $accesslevel=$this->input->post('accesslevel');
            $status=$this->input->post('status');
            $socialid=$this->input->post('socialid');
            $logintype=$this->input->post('logintype');
            $json=$this->input->post('json');
//            $category=$this->input->post('category');
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $image=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
			if($this->user_model->create($name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json)==0)
			$data['alerterror']="New user could not be created.";
			else
			$data['alertsuccess']="User created Successfully.";
			$data['redirect']="site/viewusers";
			$this->load->view("redirect",$data);
		}
	}
    function viewusers()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data['page']='viewusers';
        $data['base_url'] = site_url("site/viewusersjson");
        
		$data['title']='View Users';
		$this->load->view('template',$data);
	} 
    function viewusersjson()
	{
		$access = array("1");
		$this->checkaccess($access);
        
        
        $elements=array();
        $elements[0]=new stdClass();
        $elements[0]->field="`user`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        
        $elements[1]=new stdClass();
        $elements[1]->field="`user`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`user`.`email`";
        $elements[2]->sort="1";
        $elements[2]->header="Email";
        $elements[2]->alias="email";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`user`.`socialid`";
        $elements[3]->sort="1";
        $elements[3]->header="SocialId";
        $elements[3]->alias="socialid";
        
        $elements[4]=new stdClass();
        $elements[4]->field="`logintype`.`name`";
        $elements[4]->sort="1";
        $elements[4]->header="Logintype";
        $elements[4]->alias="logintype";
        
        $elements[5]=new stdClass();
        $elements[5]->field="`user`.`json`";
        $elements[5]->sort="1";
        $elements[5]->header="Json";
        $elements[5]->alias="json";
       
        $elements[6]=new stdClass();
        $elements[6]->field="`accesslevel`.`name`";
        $elements[6]->sort="1";
        $elements[6]->header="Accesslevel";
        $elements[6]->alias="accesslevelname";
       
        $elements[7]=new stdClass();
        $elements[7]->field="`statuses`.`name`";
        $elements[7]->sort="1";
        $elements[7]->header="Status";
        $elements[7]->alias="status";
       
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
            $maxrow=20;
        }
        
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
       
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `user` LEFT OUTER JOIN `logintype` ON `logintype`.`id`=`user`.`logintype` LEFT OUTER JOIN `accesslevel` ON `accesslevel`.`id`=`user`.`accesslevel` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`user`.`status`");
        
		$this->load->view("json",$data);
	} 
    
    
	function edituser()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data[ 'status' ] =$this->user_model->getstatusdropdown();
		$data['accesslevel']=$this->user_model->getaccesslevels();
		$data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
		$data['before']=$this->user_model->beforeedit($this->input->get('id'));
		$data['page']='edituser';
		$data['page2']='block/userblock';
		$data['title']='Edit User';
		$this->load->view('template',$data);
	}
	function editusersubmit()
	{
		$access = array("1");
		$this->checkaccess($access);
		
		$this->form_validation->set_rules('name','Name','trim|required|max_length[30]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','trim|matches[password]');
		$this->form_validation->set_rules('accessslevel','Accessslevel','trim');
		$this->form_validation->set_rules('status','status','trim|');
		$this->form_validation->set_rules('socialid','Socialid','trim');
		$this->form_validation->set_rules('logintype','logintype','trim');
		$this->form_validation->set_rules('json','json','trim');
		if($this->form_validation->run() == FALSE)	
		{
			$data['alerterror'] = validation_errors();
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data['accesslevel']=$this->user_model->getaccesslevels();
            $data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
			$data['before']=$this->user_model->beforeedit($this->input->post('id'));
			$data['page']='edituser';
//			$data['page2']='block/userblock';
			$data['title']='Edit User';
			$this->load->view('template',$data);
		}
		else
		{
            
            $id=$this->input->get_post('id');
            $name=$this->input->get_post('name');
            $email=$this->input->get_post('email');
            $password=$this->input->get_post('password');
            $accesslevel=$this->input->get_post('accesslevel');
            $status=$this->input->get_post('status');
            $socialid=$this->input->get_post('socialid');
            $logintype=$this->input->get_post('logintype');
            $json=$this->input->get_post('json');
//            $category=$this->input->get_post('category');
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $image=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($image=="")
            {
            $image=$this->user_model->getuserimagebyid($id);
               // print_r($image);
                $image=$image->image;
            }
            
			if($this->user_model->edit($id,$name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json)==0)
			$data['alerterror']="User Editing was unsuccesful";
			else
			$data['alertsuccess']="User edited Successfully.";
			
			$data['redirect']="site/viewusers";
			//$data['other']="template=$template";
			$this->load->view("redirect",$data);
			
		}
	}
	
	function deleteuser()
	{
		$access = array("1");
		$this->checkaccess($access);
		$this->user_model->deleteuser($this->input->get('id'));
//		$data['table']=$this->user_model->viewusers();
		$data['alertsuccess']="User Deleted Successfully";
		$data['redirect']="site/viewusers";
			//$data['other']="template=$template";
		$this->load->view("redirect",$data);
	}
	function changeuserstatus()
	{
		$access = array("1");
		$this->checkaccess($access);
		$this->user_model->changestatus($this->input->get('id'));
		$data['table']=$this->user_model->viewusers();
		$data['alertsuccess']="Status Changed Successfully";
		$data['redirect']="site/viewusers";
        $data['other']="template=$template";
        $this->load->view("redirect",$data);
	}
    
    
    
    public function viewbrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewbrand";
        $data["base_url"]=site_url("site/viewbrandjson");
        $data["title"]="View brand";
        $this->load->view("template",$data);
    }
    function viewbrandjson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`hsp_brand`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`hsp_brand`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`hsp_brand`.`hours`";
        $elements[2]->sort="1";
        $elements[2]->header="Hours";
        $elements[2]->alias="hours";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`hsp_brand`.`location`";
        $elements[3]->sort="1";
        $elements[3]->header="Location";
        $elements[3]->alias="location";
        
        $elements[4]=new stdClass();
        $elements[4]->field="`hsp_brand`.`isfeatured`";
        $elements[4]->sort="1";
        $elements[4]->header="Is Featured";
        $elements[4]->alias="isfeatured";
        
        $elements[5]=new stdClass();
        $elements[5]->field="`hsp_brand`.`isnew`";
        $elements[5]->sort="1";
        $elements[5]->header="Is New";
        $elements[5]->alias="isnew";
        
        $elements[6]=new stdClass();
        $elements[6]->field="`hsp_brand`.`description`";
        $elements[6]->sort="1";
        $elements[6]->header="Description";
        $elements[6]->alias="description";
        
        $elements[7]=new stdClass();
        $elements[7]->field="`hsp_brand`.`logo`";
        $elements[7]->sort="1";
        $elements[7]->header="Logo";
        $elements[7]->alias="logo";
        
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
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_brand`");
        $this->load->view("json",$data);
    }

    public function createbrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data['isnew']=$this->brand_model->getisnewdropdown();
        $data['categoryforbrand']=$this->categoryforbrand_model->getcategoryforbranddropdown();
        
        $json=array();
        
        $json[0]=new stdClass();
        $json[0]->placeholder="";
        $json[0]->value="";
        $json[0]->label="Meta Title";
        $json[0]->type="text";
        $json[0]->options="";
        $json[0]->classes="";
        
        $json[1]=new stdClass();
        $json[1]->placeholder="";
        $json[1]->value="";
        $json[1]->label="Meta Description";
        $json[1]->type="textarea";
        $json[1]->options="";
        $json[1]->classes="";
        
        $json[2]=new stdClass();
        $json[2]->placeholder="";
        $json[2]->value="";
        $json[2]->label="Meta Keywords";
        $json[2]->type="textarea";
        $json[2]->options="";
        $json[2]->classes="";
        
        
        $data["fieldjson"]=$json;
        
        
        $data["page"]="createbrand";
        $data["title"]="Create brand";
        $this->load->view("template",$data);
    }
    public function createbrandsubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("hours","Hours","trim");
        $this->form_validation->set_rules("location","Location","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        $this->form_validation->set_rules("isnew","Is New","trim");
        $this->form_validation->set_rules("description","Description","trim");
//        $this->form_validation->set_rules("logo","Logo","trim");
        $this->form_validation->set_rules("json","Json","trim");
        $this->form_validation->set_rules("contactno","contactno","trim");
        $this->form_validation->set_rules("email","email","trim");
        $this->form_validation->set_rules("facebook","facebook","trim");
        $this->form_validation->set_rules("twitter","twitter","trim");
        $this->form_validation->set_rules("instagram","instagram","trim");
        $this->form_validation->set_rules("googleplus","googleplus","trim");
        $this->form_validation->set_rules("specialoffer","specialoffer","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $data['isnew']=$this->brand_model->getisnewdropdown();
            $data['categoryforbrand']=$this->categoryforbrand_model->getcategoryforbranddropdown();
            $data["page"]="createbrand";
            $data["title"]="Create brand";
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $hours=$this->input->get_post("hours");
            $location=$this->input->get_post("location");
            $isfeatured=$this->input->get_post("isfeatured");
            $isnew=$this->input->get_post("isnew");
            $description=$this->input->get_post("description");
//            $logo=$this->input->get_post("logo");
            $json=$this->input->get_post("json");
            $contactno=$this->input->get_post("contactno");
            $email=$this->input->get_post("email");
            $facebook=$this->input->get_post("facebook");
            $twitter=$this->input->get_post("twitter");
            $instagram=$this->input->get_post("instagram");
            $googleplus=$this->input->get_post("googleplus");
            $categoryforbrand=$this->input->get_post("categoryforbrand");
            $specialoffer=$this->input->get_post("specialoffer");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    $logo=$this->image_lib->dest_image;
                }
                
			}
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    $image=$this->image_lib->dest_image;
                }
                
			}
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="specialofferimage";
			$specialofferimage="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$specialofferimage=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    $specialofferimage=$this->image_lib->dest_image;
                }
                
			}
//            echo $logo."<br>";
//            echo $image;
            if($this->brand_model->create($name,$hours,$location,$isfeatured,$isnew,$description,$logo,$json,$contactno,$email,$categoryforbrand,$facebook,$twitter,$instagram,$googleplus,$image,$specialoffer,$specialofferimage)==0)
                $data["alerterror"]="New brand could not be created.";
            else
                $data["alertsuccess"]="brand created Successfully.";
            $data["redirect"]="site/viewbrand";
            $this->load->view("redirect",$data);
        }
    }
    public function editbrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data['isnew']=$this->brand_model->getisnewdropdown();
        $data['categoryforbrand']=$this->categoryforbrand_model->getcategoryforbranddropdown();
        
        $data['selectedcategoryforbrand']=$this->brand_model->getcategoryforbrandbybrand($this->input->get_post('id'));
        $data["page"]="editbrand";
        $data["page2"]="block/brandblock";
        $data["title"]="Edit brand";
        $data["before"]=$this->brand_model->beforeedit($this->input->get("id"));
        $this->load->view("templatewith2",$data);
    }
    public function editbrandsubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("hours","Hours","trim");
        $this->form_validation->set_rules("location","Location","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        $this->form_validation->set_rules("isnew","Is New","trim");
        $this->form_validation->set_rules("description","Description","trim");
//        $this->form_validation->set_rules("logo","Logo","trim");
        $this->form_validation->set_rules("json","Json","trim");
        $this->form_validation->set_rules("contactno","contactno","trim");
        $this->form_validation->set_rules("email","email","trim");
        $this->form_validation->set_rules("facebook","facebook","trim");
        $this->form_validation->set_rules("twitter","twitter","trim");
        $this->form_validation->set_rules("instagram","instagram","trim");
        $this->form_validation->set_rules("googleplus","googleplus","trim");
        $this->form_validation->set_rules("specialoffer","specialoffer","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $data['isnew']=$this->brand_model->getisnewdropdown();
            $data['categoryforbrand']=$this->categoryforbrand_model->getcategoryforbranddropdown();
            $data['selectedcategoryforbrand']=$this->brand_model->getcategoryforbrandbybrand($this->input->get_post('id'));
            $data["page"]="editbrand";
            $data["page2"]="block/brandblock";
            $data["title"]="Edit brand";
            $data["before"]=$this->brand_model->beforeedit($this->input->get_post("id"));
            $this->load->view("templatewith2",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $name=$this->input->get_post("name");
            $hours=$this->input->get_post("hours");
            $location=$this->input->get_post("location");
            $isfeatured=$this->input->get_post("isfeatured");
            $isnew=$this->input->get_post("isnew");
            $description=$this->input->get_post("description");
//            $logo=$this->input->get_post("logo");
            $json=$this->input->get_post("json");
            $contactno=$this->input->get_post("contactno");
            $email=$this->input->get_post("email");
            $facebook=$this->input->get_post("facebook");
            $twitter=$this->input->get_post("twitter");
            $instagram=$this->input->get_post("instagram");
            $googleplus=$this->input->get_post("googleplus");
            $categoryforbrand=$this->input->get_post("categoryforbrand");
            $specialoffer=$this->input->get_post("specialoffer");
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $logo=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($logo=="")
            {
                $logo=$this->brand_model->getbrandlogobyid($id);
                $logo=$logo->logo;
            }
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $image=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($image=="")
            {
                $image=$this->brand_model->getbrandimagebyid($id);
                $image=$image->image;
            }
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="specialofferimage";
			$specialofferimage="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$specialofferimage=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $specialofferimage=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($specialofferimage=="")
            {
                $specialofferimage=$this->brand_model->getbrandspecialofferimagebyid($id);
                $specialofferimage=$specialofferimage->specialofferimage;
            }
            
            if($this->brand_model->edit($id,$name,$hours,$location,$isfeatured,$isnew,$description,$logo,$json,$contactno,$email,$categoryforbrand,$facebook,$twitter,$instagram,$googleplus,$image,$specialoffer,$specialofferimage)==0)
                $data["alerterror"]="New brand could not be Updated.";
            else
                $data["alertsuccess"]="brand Updated Successfully.";
            $data["redirect"]="site/viewbrand";
            $this->load->view("redirect",$data);
        }
    }
    public function deletebrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->brand_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewbrand";
        $this->load->view("redirect",$data);
    }
    
    function uploadbrandcsv()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data[ 'page' ] = 'uploadbrandcsv';
		$data[ 'title' ] = 'Upload Brand';
		$this->load->view( 'template', $data );
	} 
    
    function uploadbrandcsvsubmit()
	{
        $access = array("1");
		$this->checkaccess($access);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $filename="file";
        $file="";
        if (  $this->upload->do_upload($filename))
        {
            $uploaddata = $this->upload->data();
            $file=$uploaddata['file_name'];
            $filepath=$uploaddata['file_path'];
        }
        $fullfilepath=$filepath."".$file;
        $file = $this->csvreader->parse_file($fullfilepath);
        $id1=$this->config_model->createbrandbycsv($file);
//        echo $id1;
        if($id1==0)
        $data['alerterror']="New brand could not be Uploaded.";
		else
		$data['alertsuccess']="Brand Uploaded Successfully.";
//        $data['table']=$this->brand_model->viewbrand();
		$data['page']='viewbrand';
		$data["redirect"]="site/viewbrand";
        $this->load->view("redirect",$data);
    }
		
    
    function uploaddinecsv()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data[ 'page' ] = 'uploaddinecsv';
		$data[ 'title' ] = 'Upload Dine';
		$this->load->view( 'template', $data );
	} 
    
    function uploaddinecsvsubmit()
	{
        $access = array("1");
		$this->checkaccess($access);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $filename="file";
        $file="";
        if (  $this->upload->do_upload($filename))
        {
            $uploaddata = $this->upload->data();
            $file=$uploaddata['file_name'];
            $filepath=$uploaddata['file_path'];
        }
        $fullfilepath=$filepath."".$file;
        $file = $this->csvreader->parse_file($fullfilepath);
        $id1=$this->config_model->createdinebycsv($file);
//        echo $id1;
        if($id1==0)
        $data['alerterror']="New Dine could not be Uploaded.";
		else
		$data['alertsuccess']="Dine Uploaded Successfully.";
//        $data['table']=$this->brand_model->viewbrand();
		$data['page']='viewdine';
		$data["redirect"]="site/viewdine";
        $this->load->view("redirect",$data);
    }
		
    
    //brandcategory
    public function viewbrandcategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewbrandcategory";
        $data["page2"]="block/brandblock";
        $data["before"]=$this->brand_model->beforeedit($this->input->get_post("id"));
        $data["base_url"]=site_url("site/viewbrandcategoryjson?id=".$this->input->get('id'));
        $data["title"]="View brandcategory";
        $this->load->view("templatewith2",$data);
    }
    function viewbrandcategoryjson()
    {
        $elements=array();
        $brandid=$this->input->get('id');
        
        $elements[0]=new stdClass();
        $elements[0]->field="`hsp_brandcategory`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`hsp_brandcategory`.`brand`";
        $elements[1]->sort="1";
        $elements[1]->header="Brand";
        $elements[1]->alias="brand";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`hsp_brandcategory`.`name`";
        $elements[2]->sort="1";
        $elements[2]->header="Name";
        $elements[2]->alias="name";
        
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
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_brandcategory`","WHERE `hsp_brandcategory`.`brand`='$brandid'");
        $this->load->view("json",$data);
    }

    public function createbrandcategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $brandid=$this->input->get('id');
        $data['brandid']=$brandid;
        
        
        $data["page"]="createbrandcategory";
        $data["title"]="Create brandcategory";
        $this->load->view("template",$data);
    }
    public function createbrandcategorysubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("brand","Brand","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("order","Order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $brandid=$this->input->get_post('brand');
            $data['brandid']=$brandid;
            $data["page"]="createbrandcategory";
            $data["title"]="Create brandcategory";
            $this->load->view("template",$data);
        }
        else
        {
            $brand=$this->input->get_post("brand");
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            if($this->brandcategory_model->create($brand,$name,$order)==0)
                $data["alerterror"]="New brandcategory could not be created.";
            else
                $data["alertsuccess"]="brandcategory created Successfully.";
            $data["redirect"]="site/viewbrandcategory?id=".$brand;
            $this->load->view("redirect2",$data);
        }
    }
    public function editbrandcategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $brandid=$this->input->get('id');
        $data['brandid']=$brandid;
        $brandcategoryid=$this->input->get('brandcategoryid');
        $data["page"]="editbrandcategory";
        $data["title"]="Edit brandcategory";
        $data["before"]=$this->brandcategory_model->beforeedit($this->input->get("brandcategoryid"));
        $this->load->view("template",$data);
    }
    public function editbrandcategorysubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
    //    $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("brand","Brand","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("order","Order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editbrandcategory";
            $data["title"]="Edit brandcategory";
            $brandid=$this->input->get('id');
            $data['brandid']=$brandid;
            $brandcategoryid=$this->input->get('brandcategoryid');
            $data["before"]=$this->brandcategory_model->beforeedit($this->input->get_post("brandcategoryid"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("brandcategoryid");
            $brand=$this->input->get_post("brand");
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            if($this->brandcategory_model->edit($id,$brand,$name,$order)==0)
                $data["alerterror"]="New brandcategory could not be Updated.";
            else
                $data["alertsuccess"]="brandcategory Updated Successfully.";
            $data["redirect"]="site/viewbrandcategory?id=".$brand;
            $this->load->view("redirect2",$data);
        }
    }
    public function deletebrandcategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->brandcategory_model->delete($this->input->get("brandcategoryid"));
        $data["redirect"]="site/viewbrandcategory?id=".$this->input->get('id');
        $this->load->view("redirect2",$data);
    }
    public function viewbranddeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $brandid=$this->input->get('id');
        $data["page"]="viewbranddeal";
        $data["page2"]="block/brandblock";
        $data["before"]=$this->brand_model->beforeedit($this->input->get("id"));
        $data["base_url"]=site_url("site/viewbranddealjson?id=".$brandid);
        $data["title"]="View branddeal";
        $this->load->view("templatewith2",$data);
    }
    function viewbranddealjson()
    {
        $elements=array();
        $brandid=$this->input->get('id');
        
        $elements[0]=new stdClass();
        $elements[0]->field="`hsp_branddeal`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`hsp_branddeal`.`brand`";
        $elements[1]->sort="1";
        $elements[1]->header="Brand";
        $elements[1]->alias="brand";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`hsp_branddeal`.`description`";
        $elements[2]->sort="1";
        $elements[2]->header="Description";
        $elements[2]->alias="description";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`hsp_branddeal`.`json`";
        $elements[3]->sort="1";
        $elements[3]->header="Json";
        $elements[3]->alias="json";
        
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
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_branddeal`","WHERE `hsp_branddeal`.`brand`='$brandid'");
        $this->load->view("json",$data);
    }

    public function createbranddeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $brandid=$this->input->get('id');
        $data['brandid']=$brandid;
        $json=array();
        
        $json[0]=new stdClass();
        $json[0]->placeholder="";
        $json[0]->value="";
        $json[0]->label="Meta Title";
        $json[0]->type="text";
        $json[0]->options="";
        $json[0]->classes="";
        
        $json[1]=new stdClass();
        $json[1]->placeholder="";
        $json[1]->value="";
        $json[1]->label="Meta Description";
        $json[1]->type="textarea";
        $json[1]->options="";
        $json[1]->classes="";
        
        $json[2]=new stdClass();
        $json[2]->placeholder="";
        $json[2]->value="";
        $json[2]->label="Meta Keywords";
        $json[2]->type="textarea";
        $json[2]->options="";
        $json[2]->classes="";
        
        
        $data["fieldjson"]=$json;
        
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data["page"]="createbranddeal";
        $data["title"]="Create branddeal";
        $this->load->view("template",$data);
    }
    public function createbranddealsubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("brand","Brand","trim");
        $this->form_validation->set_rules("description","Description","trim");
        $this->form_validation->set_rules("json","Json","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createbranddeal";
            $data["title"]="Create branddeal";

            $json=array();

            $json[0]=new stdClass();
            $json[0]->placeholder="";
            $json[0]->value="";
            $json[0]->label="Meta Title";
            $json[0]->type="text";
            $json[0]->options="";
            $json[0]->classes="";

            $json[1]=new stdClass();
            $json[1]->placeholder="";
            $json[1]->value="";
            $json[1]->label="Meta Description";
            $json[1]->type="textarea";
            $json[1]->options="";
            $json[1]->classes="";

            $json[2]=new stdClass();
            $json[2]->placeholder="";
            $json[2]->value="";
            $json[2]->label="Meta Keywords";
            $json[2]->type="textarea";
            $json[2]->options="";
            $json[2]->classes="";


            $data["fieldjson"]=$json;
        
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $this->load->view("template",$data);
        }
        else
        {
            $brand=$this->input->get_post("brand");
            $description=$this->input->get_post("description");
            $json=$this->input->get_post("json");
            $isfeatured=$this->input->get_post("isfeatured");
            if($this->branddeal_model->create($brand,$description,$json,$isfeatured)==0)
                $data["alerterror"]="New branddeal could not be created.";
            else
                $data["alertsuccess"]="branddeal created Successfully.";
            $data["redirect"]="site/viewbranddeal?id=".$brand;
            $this->load->view("redirect2",$data);
        }
    }
    public function editbranddeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editbranddeal";
        $data["title"]="Edit branddeal";
        $brandid=$this->input->get('id');
        $data['brandid']=$brandid;
        $branddealid=$this->input->get('branddealid');
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data["before"]=$this->branddeal_model->beforeedit($this->input->get("branddealid"));
        $this->load->view("template",$data);
    }
    public function editbranddealsubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
//        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("brand","Brand","trim");
        $this->form_validation->set_rules("description","Description","trim");
        $this->form_validation->set_rules("json","Json","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editbranddeal";
            $data["title"]="Edit branddeal";
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $data["before"]=$this->branddeal_model->beforeedit($this->input->get("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("branddealid");
            $brand=$this->input->get_post("brand");
            $description=$this->input->get_post("description");
            $json=$this->input->get_post("json");
            $isfeatured=$this->input->get_post("isfeatured");
            if($this->branddeal_model->edit($id,$brand,$description,$json,$isfeatured)==0)
                $data["alerterror"]="New branddeal could not be Updated.";
            else
                $data["alertsuccess"]="branddeal Updated Successfully.";
            $data["redirect"]="site/viewbranddeal?id=".$brand;
            $this->load->view("redirect2",$data);
        }
    }
    public function deletebranddeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->branddeal_model->delete($this->input->get("branddealid"));
        $data["redirect"]="site/viewbranddeal?id=".$this->input->get('id');
        $this->load->view("redirect",$data);
    }
    public function viewevent()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewevent";
        $data["base_url"]=site_url("site/vieweventjson");
        $data["title"]="View event";
        $this->load->view("template",$data);
    }
    function vieweventjson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`hsp_event`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`hsp_event`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`hsp_event`.`date`";
        $elements[2]->sort="1";
        $elements[2]->header="Date";
        $elements[2]->alias="date";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`hsp_event`.`day`";
        $elements[3]->sort="1";
        $elements[3]->header="Day";
        $elements[3]->alias="day";
        
        $elements[4]=new stdClass();
        $elements[4]->field="`hsp_event`.`time`";
        $elements[4]->sort="1";
        $elements[4]->header="Time";
        $elements[4]->alias="time";
        
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
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_event`");
        $this->load->view("json",$data);
    }

    public function createevent()
    {
        $access=array("1");
        $this->checkaccess($access);
        
            $json=array();

            $json[0]=new stdClass();
            $json[0]->placeholder="";
            $json[0]->value="";
            $json[0]->label="Meta Title";
            $json[0]->type="text";
            $json[0]->options="";
            $json[0]->classes="";

            $json[1]=new stdClass();
            $json[1]->placeholder="";
            $json[1]->value="";
            $json[1]->label="Meta Description";
            $json[1]->type="textarea";
            $json[1]->options="";
            $json[1]->classes="";

            $json[2]=new stdClass();
            $json[2]->placeholder="";
            $json[2]->value="";
            $json[2]->label="Meta Keywords";
            $json[2]->type="textarea";
            $json[2]->options="";
            $json[2]->classes="";


            $data["fieldjson"]=$json;
        
        $data["page"]="createevent";
        $data["title"]="Create event";
        $this->load->view("template",$data);
    }
    public function createeventsubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("date","Date","trim");
        $this->form_validation->set_rules("day","Day","trim");
        $this->form_validation->set_rules("time","Time","trim");
        $this->form_validation->set_rules("facebook","facebook","trim");
        $this->form_validation->set_rules("twitter","twitter","trim");
        $this->form_validation->set_rules("instagram","instagram","trim");
        $this->form_validation->set_rules("googleplus","googleplus","trim");
        $this->form_validation->set_rules("json","Json","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createevent";
            $data["title"]="Create event";
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $date=$this->input->get_post("date");
            $day=$this->input->get_post("day");
            $time=$this->input->get_post("time");
            $facebook=$this->input->get_post("facebook");
            $twitter=$this->input->get_post("twitter");
            $instagram=$this->input->get_post("instagram");
            $googleplus=$this->input->get_post("googleplus");
            $json=$this->input->get_post("json");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    $logo=$this->image_lib->dest_image;
                }
                
			}
            
            if($this->event_model->create($name,$date,$day,$time,$json,$logo,$facebook,$twitter,$instagram,$googleplus)==0)
                $data["alerterror"]="New event could not be created.";
            else
                $data["alertsuccess"]="event created Successfully.";
            $data["redirect"]="site/viewevent";
            $this->load->view("redirect",$data);
        }
    }
    public function editevent()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editevent";
        $data["title"]="Edit event";
        $data["before"]=$this->event_model->beforeedit($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editeventsubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("date","Date","trim");
        $this->form_validation->set_rules("day","Day","trim");
        $this->form_validation->set_rules("time","Time","trim");
        $this->form_validation->set_rules("facebook","facebook","trim");
        $this->form_validation->set_rules("twitter","twitter","trim");
        $this->form_validation->set_rules("instagram","instagram","trim");
        $this->form_validation->set_rules("googleplus","googleplus","trim");
        $this->form_validation->set_rules("json","Json","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editevent";
            $data["title"]="Edit event";
            $data["before"]=$this->event_model->beforeedit($this->input->get("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $name=$this->input->get_post("name");
            $date=$this->input->get_post("date");
            $day=$this->input->get_post("day");
            $time=$this->input->get_post("time");
            $facebook=$this->input->get_post("facebook");
            $twitter=$this->input->get_post("twitter");
            $instagram=$this->input->get_post("instagram");
            $googleplus=$this->input->get_post("googleplus");
            $json=$this->input->get_post("json");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $logo=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($logo=="")
            {
                $logo=$this->event_model->geteventlogobyid($id);
                $logo=$logo->logo;
            }
            
            
            if($this->event_model->edit($id,$name,$date,$day,$time,$json,$logo,$facebook,$twitter,$instagram,$googleplus)==0)
                $data["alerterror"]="New event could not be Updated.";
            else
                $data["alertsuccess"]="event Updated Successfully.";
            $data["redirect"]="site/viewevent";
            $this->load->view("redirect",$data);
        }
    }
    public function deleteevent()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->event_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewevent";
        $this->load->view("redirect",$data);
    }
    public function viewdine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewdine";
        $data["base_url"]=site_url("site/viewdinejson");
        $data["title"]="View dine";
        $this->load->view("template",$data);
    }
    function viewdinejson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`hsp_dine`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`hsp_dine`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`hsp_dine`.`hours`";
        $elements[2]->sort="1";
        $elements[2]->header="Hours";
        $elements[2]->alias="hours";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`hsp_dine`.`location`";
        $elements[3]->sort="1";
        $elements[3]->header="Location";
        $elements[3]->alias="location";
        
        $elements[4]=new stdClass();
        $elements[4]->field="`hsp_dine`.`isfeatured`";
        $elements[4]->sort="1";
        $elements[4]->header="Is Featured";
        $elements[4]->alias="isfeatured";
        
        $elements[5]=new stdClass();
        $elements[5]->field="`hsp_dine`.`isnew`";
        $elements[5]->sort="1";
        $elements[5]->header="Is New";
        $elements[5]->alias="isnew";
        
        $elements[6]=new stdClass();
        $elements[6]->field="`hsp_dine`.`description`";
        $elements[6]->sort="1";
        $elements[6]->header="Description";
        $elements[6]->alias="description";
        
        $elements[7]=new stdClass();
        $elements[7]->field="`hsp_dine`.`json`";
        $elements[7]->sort="1";
        $elements[7]->header="Json";
        $elements[7]->alias="json";
        
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
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_dine`");
        $this->load->view("json",$data);
    }

    public function createdine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createdine";
        $data["title"]="Create dine";
        
            $json=array();

            $json[0]=new stdClass();
            $json[0]->placeholder="";
            $json[0]->value="";
            $json[0]->label="Meta Title";
            $json[0]->type="text";
            $json[0]->options="";
            $json[0]->classes="";

            $json[1]=new stdClass();
            $json[1]->placeholder="";
            $json[1]->value="";
            $json[1]->label="Meta Description";
            $json[1]->type="textarea";
            $json[1]->options="";
            $json[1]->classes="";

            $json[2]=new stdClass();
            $json[2]->placeholder="";
            $json[2]->value="";
            $json[2]->label="Meta Keywords";
            $json[2]->type="textarea";
            $json[2]->options="";
            $json[2]->classes="";


            $data["fieldjson"]=$json;
        
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data['isnew']=$this->brand_model->getisnewdropdown();
        $data['categoryfordine']=$this->categoryfordine_model->getcategoryfordinedropdown();
        $data['amenity']=$this->amenity_model->getamenitydropdown();
        $this->load->view("template",$data);
    }
    public function createdinesubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("hours","Hours","trim");
        $this->form_validation->set_rules("location","Location","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        $this->form_validation->set_rules("isnew","Is New","trim");
        $this->form_validation->set_rules("description","Description","trim");
        $this->form_validation->set_rules("json","Json","trim");
        $this->form_validation->set_rules("email","email","trim");
        $this->form_validation->set_rules("contactno","contactno","trim");
        $this->form_validation->set_rules("facebook","facebook","trim");
        $this->form_validation->set_rules("twitter","twitter","trim");
        $this->form_validation->set_rules("instagram","instagram","trim");
        $this->form_validation->set_rules("googleplus","googleplus","trim");
//        $this->form_validation->set_rules("logo","Logo","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createdine";
            $data["title"]="Create dine";
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $data['isnew']=$this->brand_model->getisnewdropdown();
            $data['categoryfordine']=$this->categoryfordine_model->getcategoryfordinedropdown();
            $data['amenity']=$this->amenity_model->getamenitydropdown();
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $hours=$this->input->get_post("hours");
            $location=$this->input->get_post("location");
            $isfeatured=$this->input->get_post("isfeatured");
            $isnew=$this->input->get_post("isnew");
            $description=$this->input->get_post("description");
            $json=$this->input->get_post("json");
            $categoryfordine=$this->input->get_post("categoryfordine");
            $amenity=$this->input->get_post("amenity");
            $email=$this->input->get_post("email");
            $contactno=$this->input->get_post("contactno");
            $facebook=$this->input->get_post("facebook");
            $twitter=$this->input->get_post("twitter");
            $instagram=$this->input->get_post("instagram");
            $googleplus=$this->input->get_post("googleplus");
            $specialoffer=$this->input->get_post("specialoffer");
            $floor=$this->input->get_post("floor");
//            $logo=$this->input->get_post("logo");
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    $logo=$this->image_lib->dest_image;
                }
                
			}
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    $image=$this->image_lib->dest_image;
                }
                
			}
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="specialofferimage";
			$specialofferimage="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$specialofferimage=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    $specialofferimage=$this->image_lib->dest_image;
                }
                
			}
            if($this->dine_model->create($name,$hours,$location,$isfeatured,$isnew,$description,$json,$logo,$categoryfordine,$amenity,$email,$contactno,$facebook,$twitter,$instagram,$googleplus,$image,$specialoffer,$specialofferimage,$floor)==0)
                $data["alerterror"]="New dine could not be created.";
            else
                $data["alertsuccess"]="dine created Successfully.";
            $data["redirect"]="site/viewdine";
            $this->load->view("redirect",$data);
        }
    }
    public function editdine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editdine";
        $data["page2"]="block/dineblock";
        $data["title"]="Edit dine";
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data['isnew']=$this->brand_model->getisnewdropdown();
        $data['categoryfordine']=$this->categoryfordine_model->getcategoryfordinedropdown();
        $data['selectedcategoryfordine']=$this->dine_model->getcategoryfordinebydine($this->input->get_post('id'));
        $data['amenity']=$this->amenity_model->getamenitydropdown();
        $data['selectedamenity']=$this->dine_model->getamenitybydine($this->input->get_post('id'));
        $data["before"]=$this->dine_model->beforeedit($this->input->get("id"));
        $this->load->view("templatewith2",$data);
    }
    public function editdinesubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("hours","Hours","trim");
        $this->form_validation->set_rules("location","Location","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        $this->form_validation->set_rules("isnew","Is New","trim");
        $this->form_validation->set_rules("description","Description","trim");
        $this->form_validation->set_rules("json","Json","trim");
        $this->form_validation->set_rules("email","email","trim");
        $this->form_validation->set_rules("contactno","contactno","trim");
        $this->form_validation->set_rules("facebook","facebook","trim");
        $this->form_validation->set_rules("twitter","twitter","trim");
        $this->form_validation->set_rules("instagram","instagram","trim");
        $this->form_validation->set_rules("googleplus","googleplus","trim");
//        $this->form_validation->set_rules("logo","Logo","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editdine";
            $data["title"]="Edit dine";
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $data['isnew']=$this->brand_model->getisnewdropdown();
            $data['categoryfordine']=$this->categoryfordine_model->getcategoryfordinedropdown();
            $data['selectedcategoryfordine']=$this->dine_model->getcategoryfordinebydine($this->input->get_post('id'));
            $data['amenity']=$this->amenity_model->getamenitydropdown();
            $data['selectedamenity']=$this->dine_model->getamenitybydine($this->input->get_post('id'));
            $data["before"]=$this->dine_model->beforeedit($this->input->get("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $name=$this->input->get_post("name");
            $hours=$this->input->get_post("hours");
            $location=$this->input->get_post("location");
            $isfeatured=$this->input->get_post("isfeatured");
            $isnew=$this->input->get_post("isnew");
            $description=$this->input->get_post("description");
            $json=$this->input->get_post("json");
            $categoryfordine=$this->input->get_post("categoryfordine");
            $amenity=$this->input->get_post("amenity");
            $email=$this->input->get_post("email");
            $contactno=$this->input->get_post("contactno");
            $facebook=$this->input->get_post("facebook");
            $twitter=$this->input->get_post("twitter");
            $instagram=$this->input->get_post("instagram");
            $googleplus=$this->input->get_post("googleplus");
            $specialoffer=$this->input->get_post("specialoffer");
            $floor=$this->input->get_post("floor");
//            $logo=$this->input->get_post("logo");
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $logo=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($logo=="")
            {
                $logo=$this->dine_model->getdinelogobyid($id);
                $logo=$logo->logo;
            }
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $image=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($image=="")
            {
                $image=$this->dine_model->getdineimagebyid($id);
                $image=$image->image;
            }
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="specialofferimage";
			$specialofferimage="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$specialofferimage=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $specialofferimage=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($specialofferimage=="")
            {
                $specialofferimage=$this->dine_model->getdinespecialofferimagebyid($id);
                $specialofferimage=$specialofferimage->specialofferimage;
            }
            
            
            
            if($this->dine_model->edit($id,$name,$hours,$location,$isfeatured,$isnew,$description,$json,$logo,$categoryfordine,$amenity,$email,$contactno,$facebook,$twitter,$instagram,$googleplus,$image,$specialoffer,$specialofferimage,$floor)==0)
                $data["alerterror"]="New dine could not be Updated.";
            else
                $data["alertsuccess"]="dine Updated Successfully.";
            $data["redirect"]="site/viewdine";
            $this->load->view("redirect",$data);
        }
    }
    public function deletedine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->dine_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewdine";
        $this->load->view("redirect",$data);
    }
    public function viewdinecategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $dineid=$this->input->get('id');
        $data['dineid']=$dineid;
        $data["page"]="viewdinecategory";
        $data["page2"]="block/dineblock";
        $data["before"]=$this->dine_model->beforeedit($this->input->get("id"));
        $data["base_url"]=site_url("site/viewdinecategoryjson?id=".$dineid);
        $data["title"]="View dinecategory";
        $this->load->view("templatewith2",$data);
    }
    function viewdinecategoryjson()
    {
        $elements=array();
        $dineid=$this->input->get('id');
        
        $elements[0]=new stdClass();
        $elements[0]->field="`hsp_dinecategory`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`hsp_dinecategory`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`hsp_dinecategory`.`order`";
        $elements[2]->sort="1";
        $elements[2]->header="Order";
        $elements[2]->alias="order";
        
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
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_dinecategory`","WHERE `hsp_dinecategory`.`dine`='$dineid'");
        $this->load->view("json",$data);
    }

    public function createdinecategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $dineid=$this->input->get('id');
        $data['dineid']=$dineid;
        $data["page"]="createdinecategory";
        $data["title"]="Create dinecategory";
        $this->load->view("template",$data);
    }
    public function createdinecategorysubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("order","Order","trim");
        $this->form_validation->set_rules("dine","Dine","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $dineid=$this->input->get_post('dine');
            $data['dineid']=$dineid;
            $data["page"]="createdinecategory";
            $data["title"]="Create dinecategory";
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            $dine=$this->input->get_post("dine");
            if($this->dinecategory_model->create($name,$order,$dine)==0)
                $data["alerterror"]="New dinecategory could not be created.";
            else
                $data["alertsuccess"]="dinecategory created Successfully.";
            $data["redirect"]="site/viewdinecategory?id=".$dine;
            $this->load->view("redirect2",$data);
        }
    }
    public function editdinecategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $dineid=$this->input->get('id');
        $data['dineid']=$dineid;
        $dinecategoryid=$this->input->get('dinecategoryid');
        $data["page"]="editdinecategory";
        $data["title"]="Edit dinecategory";
        $data["before"]=$this->dinecategory_model->beforeedit($this->input->get("dinecategoryid"));
        $this->load->view("template",$data);
    }
    public function editdinecategorysubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("order","Order","trim");
        $this->form_validation->set_rules("dine","Dine","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $dineid=$this->input->get_post('dine');
            $data['dineid']=$dineid;
            $dinecategoryid=$this->input->get('dinecategoryid');
            $data["page"]="editdinecategory";
            $data["title"]="Edit dinecategory";
            $data["before"]=$this->dinecategory_model->beforeedit($this->input->get_post("dinecategoryid"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("dinecategoryid");
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            $dine=$this->input->get_post("dine");
            if($this->dinecategory_model->edit($id,$name,$order,$dine)==0)
                $data["alerterror"]="New dinecategory could not be Updated.";
            else
                $data["alertsuccess"]="dinecategory Updated Successfully.";
            $data["redirect"]="site/viewdinecategory?id=".$dine;
            $this->load->view("redirect",$data);
        }
    }
    public function deletedinecategory()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->dinecategory_model->delete($this->input->get("dinecategoryid"));
        $data["redirect"]="site/viewdinecategory?id=".$this->input->get('id');
        $this->load->view("redirect",$data);
    }
    public function viewdinedeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $dineid=$this->input->get('id');
        $data["page"]="viewdinedeal";
        $data["page2"]="block/dineblock";
        $data["before"]=$this->dine_model->beforeedit($this->input->get("id"));
        $data["base_url"]=site_url("site/viewdinedealjson?id=".$dineid);
        $data["title"]="View dinedeal";
        $this->load->view("templatewith2",$data);
    }
    function viewdinedealjson()
    {
        $elements=array();
        $dineid=$this->input->get('id');
        $elements[0]=new stdClass();
        $elements[0]->field="`hsp_dinedeal`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`hsp_dinedeal`.`dine`";
        $elements[1]->sort="1";
        $elements[1]->header="Dine";
        $elements[1]->alias="dine";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`hsp_dinedeal`.`description`";
        $elements[2]->sort="1";
        $elements[2]->header="Description";
        $elements[2]->alias="description";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`hsp_dinedeal`.`isfeatured`";
        $elements[3]->sort="1";
        $elements[3]->header="Is Featured";
        $elements[3]->alias="isfeatured";
        
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
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `hsp_dinedeal`","WHERE `hsp_dinedeal`.`dine`='$dineid'");
        $this->load->view("json",$data);
    }

    public function createdinedeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $dineid=$this->input->get('id');
        $data['dineid']=$dineid;
        
            $json=array();

            $json[0]=new stdClass();
            $json[0]->placeholder="";
            $json[0]->value="";
            $json[0]->label="Meta Title";
            $json[0]->type="text";
            $json[0]->options="";
            $json[0]->classes="";

            $json[1]=new stdClass();
            $json[1]->placeholder="";
            $json[1]->value="";
            $json[1]->label="Meta Description";
            $json[1]->type="textarea";
            $json[1]->options="";
            $json[1]->classes="";

            $json[2]=new stdClass();
            $json[2]->placeholder="";
            $json[2]->value="";
            $json[2]->label="Meta Keywords";
            $json[2]->type="textarea";
            $json[2]->options="";
            $json[2]->classes="";


            $data["fieldjson"]=$json;
        
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data["page"]="createdinedeal";
        $data["title"]="Create dinedeal";
        $this->load->view("template",$data);
    }
    public function createdinedealsubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("dine","Dine","trim");
        $this->form_validation->set_rules("description","Description","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        $this->form_validation->set_rules("json","Json","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $dineid=$this->input->get_post('id');
            $data['dineid']=$dineid;
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $data["page"]="createdinedeal";
            $data["title"]="Create dinedeal";
            $this->load->view("template",$data);
        }
        else
        {
            $dine=$this->input->get_post("dine");
            $description=$this->input->get_post("description");
            $isfeatured=$this->input->get_post("isfeatured");
            $json=$this->input->get_post("json");
            if($this->dinedeal_model->create($dine,$description,$isfeatured,$json)==0)
                $data["alerterror"]="New dinedeal could not be created.";
            else
                $data["alertsuccess"]="dinedeal created Successfully.";
            $data["redirect"]="site/viewdinedeal?id=".$dine;
            $this->load->view("redirect2",$data);
        }
    }
    public function editdinedeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editdinedeal";
        $data["title"]="Edit dinedeal";
        $dineid=$this->input->get('id');
        $data['dineid']=$dineid;
        $dinedealid=$this->input->get('dinedealid');
        $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
        $data["before"]=$this->dinedeal_model->beforeedit($this->input->get("dinedealid"));
        $this->load->view("template",$data);
    }
    public function editdinedealsubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("dine","Dine","trim");
        $this->form_validation->set_rules("description","Description","trim");
        $this->form_validation->set_rules("isfeatured","Is Featured","trim");
        $this->form_validation->set_rules("json","Json","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editdinedeal";
            $data["title"]="Edit dinedeal";
            $dineid=$this->input->get('id');
            $data['dineid']=$dineid;
            $dinedealid=$this->input->get('dinedealid');
            $data['isfeatured']=$this->brand_model->getisfeatureddropdown();
            $data["before"]=$this->dinedeal_model->beforeedit($this->input->get("dinedealid"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("dinedealid");
            $dine=$this->input->get_post("dine");
            $description=$this->input->get_post("description");
            $isfeatured=$this->input->get_post("isfeatured");
            $json=$this->input->get_post("json");
            if($this->dinedeal_model->edit($id,$dine,$description,$isfeatured,$json)==0)
                $data["alerterror"]="New dinedeal could not be Updated.";
            else
                $data["alertsuccess"]="dinedeal Updated Successfully.";
            $data["redirect"]="site/viewdinedeal?id=".$dine;
            $this->load->view("redirect2",$data);
        }
    }
    public function deletedinedeal()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->dinedeal_model->delete($this->input->get("dinedealid"));
        $data["redirect"]="site/viewdinedeal?id=".$this->input->get('id');
        $this->load->view("redirect2",$data);
    }

    
    
    public function viewcategoryforbrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewcategoryforbrand";
        $data["base_url"]=site_url("site/viewcategoryforbrandjson");
        $data["title"]="View categoryforbrand";
        $this->load->view("template",$data);
    }
    function viewcategoryforbrandjson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`categoryforbrand`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`categoryforbrand`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`categoryforbrand`.`order`";
        $elements[2]->sort="1";
        $elements[2]->header="Order";
        $elements[2]->alias="order";
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        
        if($maxrow=="")
        {
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `categoryforbrand`");
        $this->load->view("json",$data);
    }

    public function createcategoryforbrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createcategoryforbrand";
        $data["title"]="Create categoryforbrand";
        $this->load->view("template",$data);
    }
    public function createcategoryforbrandsubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim|required");
        $this->form_validation->set_rules("order","order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createcategoryforbrand";
            $data["title"]="Create categoryforbrand";
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            if($this->categoryforbrand_model->create($name,$order)==0)
                $data["alerterror"]="New categoryforbrand could not be created.";
            else
                $data["alertsuccess"]="categoryforbrand created Successfully.";
            $data["redirect"]="site/viewcategoryforbrand";
            $this->load->view("redirect",$data);
        }
    }
    public function editcategoryforbrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editcategoryforbrand";
        $data["title"]="Edit categoryforbrand";
        $data["before"]=$this->categoryforbrand_model->beforeedit($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editcategoryforbrandsubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("order","order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editcategoryforbrand";
            $data["title"]="Edit categoryforbrand";
            $data["before"]=$this->categoryforbrand_model->beforeedit($this->input->get("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            
            if($this->categoryforbrand_model->edit($id,$name,$order)==0)
                $data["alerterror"]="New categoryforbrand could not be Updated.";
            else
                $data["alertsuccess"]="categoryforbrand Updated Successfully.";
            $data["redirect"]="site/viewcategoryforbrand";
            $this->load->view("redirect",$data);
        }
    }
    public function deletecategoryforbrand()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->categoryforbrand_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewcategoryforbrand";
        $this->load->view("redirect",$data);
    }
    //endcategoryforbrand
    
    public function viewcategoryfordine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewcategoryfordine";
        $data["base_url"]=site_url("site/viewcategoryfordinejson");
        $data["title"]="View categoryfordine";
        $this->load->view("template",$data);
    }
    function viewcategoryfordinejson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`categoryfordine`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`categoryfordine`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`categoryfordine`.`order`";
        $elements[2]->sort="1";
        $elements[2]->header="Order";
        $elements[2]->alias="order";
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        
        if($maxrow=="")
        {
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `categoryfordine`");
        $this->load->view("json",$data);
    }

    public function createcategoryfordine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createcategoryfordine";
        $data["title"]="Create categoryfordine";
        $this->load->view("template",$data);
    }
    public function createcategoryfordinesubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim|required");
        $this->form_validation->set_rules("order","order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createcategoryfordine";
            $data["title"]="Create categoryfordine";
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            if($this->categoryfordine_model->create($name,$order)==0)
                $data["alerterror"]="New categoryfordine could not be created.";
            else
                $data["alertsuccess"]="categoryfordine created Successfully.";
            $data["redirect"]="site/viewcategoryfordine";
            $this->load->view("redirect",$data);
        }
    }
    public function editcategoryfordine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editcategoryfordine";
        $data["title"]="Edit categoryfordine";
        $data["before"]=$this->categoryfordine_model->beforeedit($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editcategoryfordinesubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("order","order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editcategoryfordine";
            $data["title"]="Edit categoryfordine";
            $data["before"]=$this->categoryfordine_model->beforeedit($this->input->get("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            
            if($this->categoryfordine_model->edit($id,$name,$order)==0)
                $data["alerterror"]="New categoryfordine could not be Updated.";
            else
                $data["alertsuccess"]="categoryfordine Updated Successfully.";
            $data["redirect"]="site/viewcategoryfordine";
            $this->load->view("redirect",$data);
        }
    }
    public function deletecategoryfordine()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->categoryfordine_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewcategoryfordine";
        $this->load->view("redirect",$data);
    }
    //endcategoryfordine
    
    public function viewamenity()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewamenity";
        $data["base_url"]=site_url("site/viewamenityjson");
        $data["title"]="View amenity";
        $this->load->view("template",$data);
    }
    function viewamenityjson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`amenity`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`amenity`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`amenity`.`order`";
        $elements[2]->sort="1";
        $elements[2]->header="Order";
        $elements[2]->alias="order";
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        
        if($maxrow=="")
        {
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `amenity`");
        $this->load->view("json",$data);
    }

    public function createamenity()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createamenity";
        $data["title"]="Create amenity";
        $this->load->view("template",$data);
    }
    public function createamenitysubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim|required");
        $this->form_validation->set_rules("order","order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createamenity";
            $data["title"]="Create amenity";
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            if($this->amenity_model->create($name,$order)==0)
                $data["alerterror"]="New amenity could not be created.";
            else
                $data["alertsuccess"]="amenity created Successfully.";
            $data["redirect"]="site/viewamenity";
            $this->load->view("redirect",$data);
        }
    }
    public function editamenity()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editamenity";
        $data["title"]="Edit amenity";
        $data["before"]=$this->amenity_model->beforeedit($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editamenitysubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("order","order","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editamenity";
            $data["title"]="Edit amenity";
            $data["before"]=$this->amenity_model->beforeedit($this->input->get("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $name=$this->input->get_post("name");
            $order=$this->input->get_post("order");
            
            if($this->amenity_model->edit($id,$name,$order)==0)
                $data["alerterror"]="New amenity could not be Updated.";
            else
                $data["alertsuccess"]="amenity Updated Successfully.";
            $data["redirect"]="site/viewamenity";
            $this->load->view("redirect",$data);
        }
    }
    public function deleteamenity()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->amenity_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewamenity";
        $this->load->view("redirect",$data);
    }
    //endamenity
    
    
    
    
    public function viewconfig()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewconfig";
        $data["base_url"]=site_url("site/viewconfigjson");
        $data["title"]="View config";
        $this->load->view("template",$data);
    }
    function viewconfigjson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`config`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`config`.`title`";
        $elements[1]->sort="1";
        $elements[1]->header="Title";
        $elements[1]->alias="title";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`config`.`text`";
        $elements[2]->sort="1";
        $elements[2]->header="Text";
        $elements[2]->alias="text";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`config`.`date`";
        $elements[3]->sort="1";
        $elements[3]->header="Date";
        $elements[3]->alias="date";
        
        $elements[4]=new stdClass();
        $elements[4]->field="`config`.`image`";
        $elements[4]->sort="1";
        $elements[4]->header="Image";
        $elements[4]->alias="image";
        
        $elements[5]=new stdClass();
        $elements[5]->field="`config`.`timestamp`";
        $elements[5]->sort="1";
        $elements[5]->header="Timestamp";
        $elements[5]->alias="timestamp";
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        
        if($maxrow=="")
        {
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `config`");
        $this->load->view("json",$data);
    }

    public function createconfig()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createconfig";
        $data["title"]="Create config";
        $this->load->view("template",$data);
    }
    public function createconfigsubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("title","title","trim");
        $this->form_validation->set_rules("text","text","trim");
        $this->form_validation->set_rules("date","date","trim");
        
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createconfig";
            $data["title"]="Create config";
            $this->load->view("template",$data);
        }
        else
        {
            $title=$this->input->get_post("title");
            $text=$this->input->get_post("text");
            $date=$this->input->get_post("date");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
			}
            
            
//            $config['upload_path'] = './uploads/';
//			$config['allowed_types'] = 'gif|jpg|png|jpeg';
//			$this->load->library('upload', $config);
//			$filename="image";
//			$image="";
//			if (  $this->upload->do_upload($filename))
//			{
//				$uploaddata = $this->upload->data();
//				$image=$uploaddata['file_name'];
//                
//                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
//                $config_r['maintain_ratio'] = TRUE;
//                $config_t['create_thumb'] = FALSE;///add this
//                $config_r['width']   = 800;
//                $config_r['height'] = 800;
//                $config_r['quality']    = 100;
//                //end of configs
//
//                $this->load->library('image_lib', $config_r); 
//                $this->image_lib->initialize($config_r);
//                if(!$this->image_lib->resize())
//                {
//                    echo "Failed." . $this->image_lib->display_errors();
//                    //return false;
//                }  
//                else
//                {
//                    //print_r($this->image_lib->dest_image);
//                    //dest_image
//                    $image=$this->image_lib->dest_image;
//                    //return false;
//                }
//                
//			}
            
            if($this->config_model->create($title,$text,$date,$image)==0)
                $data["alerterror"]="New config could not be created.";
            else
                $data["alertsuccess"]="config created Successfully.";
            $data["redirect"]="site/viewconfig";
            $this->load->view("redirect",$data);
        }
    }
    public function editconfig()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editconfig";
        $data["title"]="Edit config";
        $data["before"]=$this->config_model->beforeedit($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editconfigsubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("title","title","trim");
        $this->form_validation->set_rules("text","text","trim");
        $this->form_validation->set_rules("date","date","trim");
        
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data['isfeatured']=$this->config_model->getisfeatureddropdown();
            $data['isnew']=$this->config_model->getisnewdropdown();
            $data['categoryforconfig']=$this->categoryforconfig_model->getcategoryforconfigdropdown();
            $data['selectedcategoryforconfig']=$this->config_model->getcategoryforconfigbyconfig($this->input->get_post('id'));
            $data["page"]="editconfig";
            $data["page2"]="block/configblock";
            $data["title"]="Edit config";
            $data["before"]=$this->config_model->beforeedit($this->input->get_post("id"));
            $this->load->view("templatewith2",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            
            $title=$this->input->get_post("title");
            $text=$this->input->get_post("text");
            $date=$this->input->get_post("date");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
			}
            
//            $config['upload_path'] = './uploads/';
//			$config['allowed_types'] = 'gif|jpg|png|jpeg';
//			$this->load->library('upload', $config);
//			$filename="image";
//			$image="";
//			if (  $this->upload->do_upload($filename))
//			{
//				$uploaddata = $this->upload->data();
//				$image=$uploaddata['file_name'];
//                
//                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
//                $config_r['maintain_ratio'] = TRUE;
//                $config_t['create_thumb'] = FALSE;///add this
//                $config_r['width']   = 800;
//                $config_r['height'] = 800;
//                $config_r['quality']    = 100;
//                //end of configs
//
//                $this->load->library('image_lib', $config_r); 
//                $this->image_lib->initialize($config_r);
//                if(!$this->image_lib->resize())
//                {
//                    echo "Failed." . $this->image_lib->display_errors();
//                    //return false;
//                }  
//                else
//                {
//                    //print_r($this->image_lib->dest_image);
//                    //dest_image
//                    $image=$this->image_lib->dest_image;
//                    //return false;
//                }
//                
//			}
            
            if($image=="")
            {
            $image=$this->config_model->getconfigimagebyid($id);
               // print_r($image);
                $image=$image->image;
            }
            
            
            if($this->config_model->edit($id,$title,$text,$date,$image)==0)
                $data["alerterror"]="New config could not be Updated.";
            else
                $data["alertsuccess"]="config Updated Successfully.";
            $data["redirect"]="site/viewconfig";
            $this->load->view("redirect",$data);
        }
    }
    public function deleteconfig()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->config_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewconfig";
        $this->load->view("redirect",$data);
    }
    //end of config
    
    public function viewvideo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewvideo";
        $data["base_url"]=site_url("site/viewvideojson");
        $data["title"]="View video";
        $this->load->view("template",$data);
    }
    function viewvideojson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`configvideo`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`configvideo`.`video`";
        $elements[1]->sort="1";
        $elements[1]->header="Video";
        $elements[1]->alias="video";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`configvideo`.`timestamp`";
        $elements[2]->sort="1";
        $elements[2]->header="Timestamp";
        $elements[2]->alias="timestamp";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`configvideo`.`title`";
        $elements[3]->sort="1";
        $elements[3]->header="Title";
        $elements[3]->alias="title";
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        
        if($maxrow=="")
        {
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `configvideo`");
        $this->load->view("json",$data);
    }

    public function createvideo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createvideo";
        $data["title"]="Create video";
        $this->load->view("template",$data);
    }
    public function createvideosubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("title","title","trim");
        
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createvideo";
            $data["title"]="Create video";
            $this->load->view("template",$data);
        }
        else
        {
            $title=$this->input->get_post("title");
             
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'mp4|3gp|flv|mp3';
            $this->load->library('upload', $config);
            $filename="video";
            $video="";
            if (  $this->upload->do_upload($filename))
            {
                $uploaddata = $this->upload->data();
                $video=$uploaddata['file_name'];
            }
        
            
            if($this->config_model->createvideo($title,$video)==0)
                $data["alerterror"]="New video could not be created.";
            else
                $data["alertsuccess"]="video created Successfully.";
            $data["redirect"]="site/viewvideo";
            $this->load->view("redirect",$data);
        }
    }
    public function editvideo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editvideo";
        $data["title"]="Edit video";
        $data["before"]=$this->config_model->beforeeditvideo($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editvideosubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("title","title","trim");
        
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data['isfeatured']=$this->config_model->getisfeatureddropdown();
            $data['isnew']=$this->config_model->getisnewdropdown();
            $data['categoryforconfig']=$this->categoryforconfig_model->getcategoryforconfigdropdown();
            $data['selectedcategoryforconfig']=$this->config_model->getcategoryforconfigbyconfig($this->input->get_post('id'));
            $data["page"]="editconfig";
            $data["page2"]="block/configblock";
            $data["title"]="Edit config";
            $data["before"]=$this->config_model->beforeedit($this->input->get_post("id"));
            $this->load->view("templatewith2",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            
            $title=$this->input->get_post("title");
            $text=$this->input->get_post("text");
            $date=$this->input->get_post("date");
            
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'mp4|3gp|flv|mp3';
            $this->load->library('upload', $config);
            $filename="video";
            $video="";
            if (  $this->upload->do_upload($filename))
            {
                $uploaddata = $this->upload->data();
                $video=$uploaddata['file_name'];
            }
        
            if($video=="")
            {
            $video=$this->config_model->getvideobyid($id);
               // print_r($image);
                $video=$video->video;
            }
            
            
            if($this->config_model->editvideo($id,$title,$video)==0)
                $data["alerterror"]="New video could not be Updated.";
            else
                $data["alertsuccess"]="video Updated Successfully.";
            $data["redirect"]="site/viewvideo";
            $this->load->view("redirect",$data);
        }
    }
    public function deletevideo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->config_model->deletevideo($this->input->get("id"));
        $data["redirect"]="site/viewvideo";
        $this->load->view("redirect",$data);
    }
    
    public function viewlogo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewlogo";
        $data["base_url"]=site_url("site/viewlogojson");
        $data["title"]="View logo";
        $this->load->view("template",$data);
    }
    function viewlogojson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`configlogo`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`configlogo`.`logo`";
        $elements[1]->sort="1";
        $elements[1]->header="logo";
        $elements[1]->alias="logo";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`configlogo`.`timestamp`";
        $elements[2]->sort="1";
        $elements[2]->header="Timestamp";
        $elements[2]->alias="timestamp";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`configlogo`.`title`";
        $elements[3]->sort="1";
        $elements[3]->header="Title";
        $elements[3]->alias="title";
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        
        if($maxrow=="")
        {
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `configlogo`");
        $this->load->view("json",$data);
    }

    public function createlogo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createlogo";
        $data["title"]="Create logo";
        $this->load->view("template",$data);
    }
    public function createlogosubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("title","title","trim");
        
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createlogo";
            $data["title"]="Create logo";
            $this->load->view("template",$data);
        }
        else
        {
            $title=$this->input->get_post("title");
             
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
			}
            
            
            if($this->config_model->createlogo($title,$logo)==0)
                $data["alerterror"]="New logo could not be created.";
            else
                $data["alertsuccess"]="logo created Successfully.";
            $data["redirect"]="site/viewlogo";
            $this->load->view("redirect",$data);
        }
    }
    public function editlogo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editlogo";
        $data["title"]="Edit logo";
        $data["before"]=$this->config_model->beforeeditlogo($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editlogosubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("title","title","trim");
        
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editlogo";
            $data["title"]="Edit logo";
            $data["before"]=$this->config_model->beforeeditlogo($this->input->get_post("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            
            $title=$this->input->get_post("title");
            
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
			}
            if($logo=="")
            {
            $logo=$this->config_model->getlogobyid($id);
               // print_r($logo);
                $logo=$logo->logo;
            }
            
            
            
            if($this->config_model->editlogo($id,$title,$logo)==0)
                $data["alerterror"]="New logo could not be Updated.";
            else
                $data["alertsuccess"]="logo Updated Successfully.";
            $data["redirect"]="site/viewlogo";
            $this->load->view("redirect",$data);
        }
    }
    public function deletelogo()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->config_model->deletelogo($this->input->get("id"));
        $data["redirect"]="site/viewlogo";
        $this->load->view("redirect",$data);
    }
    
    public function viewcomment()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="viewcomment";
        $data["base_url"]=site_url("site/viewcommentjson");
        $data["title"]="View comment";
        $this->load->view("template",$data);
    }
    function viewcommentjson()
    {
        $elements=array();
        
        $elements[0]=new stdClass();
        $elements[0]->field="`comment`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        $elements[1]=new stdClass();
        $elements[1]->field="`comment`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`comment`.`email`";
        $elements[2]->sort="1";
        $elements[2]->header="Email";
        $elements[2]->alias="email";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`comment`.`phone`";
        $elements[3]->sort="1";
        $elements[3]->header="Phone";
        $elements[3]->alias="phone";
        
        $elements[4]=new stdClass();
        $elements[4]->field="`comment`.`comment`";
        $elements[4]->sort="1";
        $elements[4]->header="Comment";
        $elements[4]->alias="comment";
        
        $elements[5]=new stdClass();
        $elements[5]->field="`comment`.`timestamp`";
        $elements[5]->sort="1";
        $elements[5]->header="Timestamp";
        $elements[5]->alias="timestamp";
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        
        if($maxrow=="")
        {
            $maxrow=20;
        }
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `comment`");
        $this->load->view("json",$data);
    }

    public function createcomment()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="createcomment";
        $data["title"]="Create comment";
        $this->load->view("template",$data);
    }
    public function createcommentsubmit() 
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("name","Name","trim|required");
        $this->form_validation->set_rules("email","email","trim");
        $this->form_validation->set_rules("phone","phone","trim");
        $this->form_validation->set_rules("comment","comment","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="createcomment";
            $data["title"]="Create comment";
            $this->load->view("template",$data);
        }
        else
        {
            $name=$this->input->get_post("name");
            $phone=$this->input->get_post("phone");
            $email=$this->input->get_post("email");
            $comment=$this->input->get_post("comment");
            if($this->comment_model->create($name,$email,$phone,$comment)==0)
                $data["alerterror"]="New comment could not be created.";
            else
                $data["alertsuccess"]="comment created Successfully.";
            $data["redirect"]="site/viewcomment";
            $this->load->view("redirect",$data);
        }
    }
    public function editcomment()
    {
        $access=array("1");
        $this->checkaccess($access);
        $data["page"]="editcomment";
        $data["title"]="Edit comment";
        $data["before"]=$this->comment_model->beforeedit($this->input->get("id"));
        $this->load->view("template",$data);
    }
    public function editcommentsubmit()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->form_validation->set_rules("id","ID","trim");
        $this->form_validation->set_rules("name","Name","trim");
        $this->form_validation->set_rules("email","email","trim");
        $this->form_validation->set_rules("phone","phone","trim");
        $this->form_validation->set_rules("commemt","commemt","trim");
        if($this->form_validation->run()==FALSE)
        {
            $data["alerterror"]=validation_errors();
            $data["page"]="editcomment";
            $data["title"]="Edit comment";
            $data["before"]=$this->comment_model->beforeedit($this->input->get("id"));
            $this->load->view("template",$data);
        }
        else
        {
            $id=$this->input->get_post("id");
            $name=$this->input->get_post("name");
            $email=$this->input->get_post("email");
            $phone=$this->input->get_post("phone");
            $comment=$this->input->get_post("comment");
            
            if($this->comment_model->edit($id,$name,$email,$phone,$comment)==0)
                $data["alerterror"]="New comment could not be Updated.";
            else
                $data["alertsuccess"]="comment Updated Successfully.";
            $data["redirect"]="site/viewcomment";
            $this->load->view("redirect",$data);
        }
    }
    public function deletecomment()
    {
        $access=array("1");
        $this->checkaccess($access);
        $this->comment_model->delete($this->input->get("id"));
        $data["redirect"]="site/viewcomment";
        $this->load->view("redirect",$data);
    }
    //endcomment
}
?>
