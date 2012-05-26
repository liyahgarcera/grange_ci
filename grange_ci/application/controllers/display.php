<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('crumbs.php');

class Display extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->crumbs = new Crumbs();
	}
	
	function view_home(){
		$data['title'] = 'Home';
		
		$data['crumb_links'] = $this->crumbs->create();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function history(){
		$data['title'] = 'History';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Story');
		$data['crumb_links'] .= $this->crumbs->append('history', 'History');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('history', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function stories(){
		$data['title'] = 'Grange Stories';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Story');
		$data['crumb_links'] .= $this->crumbs->append('stories', 'Grange Stories');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('stories', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function scholarship(){
		$data['title'] = 'Scholarship';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('scholarship', 'Scholarship');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('scholarship', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function labulabo(){
		$data['title'] = 'LabuLabo';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('labulabo', 'LabuLabo');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('labulabo', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function civic_activities(){
		$data['title'] = 'Civic Activities';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('civic_activities', 'Civic Activities');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('civic_activities', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function academy(){
		$data['title'] = 'Grange Academy';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('academy', 'Grange Academy');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('academy', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function formation_cause(){
		$data['title'] = 'Grange Formation Cause';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Works');
		$data['crumb_links'] .= $this->crumbs->append('#', 'Activities');
		$data['crumb_links'] .= $this->crumbs->append('formation_cause', 'Grange Formation Cause');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('formation_cause', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function gallery_pictures(){
		$data['title'] = 'Pictures';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Gallery');
		$data['crumb_links'] .= $this->crumbs->append('gallery_pictures', 'Pictures');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('gallery_pictures', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function gallery_videos(){
		$data['title'] = 'Videos';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Gallery');
		$data['crumb_links'] .= $this->crumbs->append('gallery_videos', 'Videos');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('gallery_videos', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function news(){
		$data['title'] = 'News';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('news', 'News');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('news', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function public_activities(){
		$data['title'] = 'Activities';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('public_activities', 'Activities');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('public_activities', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function announcements(){
		$data['title'] = 'Announcements';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('announcements', 'Announcements');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('announcements', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function our_activities(){
		$data['title'] = 'Grange Activities';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Archive');
		$data['crumb_links'] .= $this->crumbs->append('our_activities', 'Grange Activities');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('our_activities', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function residents(){
		$data['title'] = 'Resident Members';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Family');
		$data['crumb_links'] .= $this->crumbs->append('residents', 'Resident Members');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('residents', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function jr_alumni(){
		$data['title'] = 'Junior Alumni';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Family');
		$data['crumb_links'] .= $this->crumbs->append('jr_alumni', 'Junior Alumni');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('jr_alumni', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function sr_alumni(){
		$data['title'] = 'Senior Alumni';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('#', 'Our Family');
		$data['crumb_links'] .= $this->crumbs->append('sr_alumni', 'Senior Alumni');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('sr_alumni', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function contact_us(){
		$data['title'] = 'Contact Us';
		
		$data['crumb_links'] = $this->crumbs->create();
		$data['crumb_links'] .= $this->crumbs->append('contact_us', 'Contact Us');
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigator', $data);
		$this->load->view('templates/bread_crumbs', $data);
		$this->load->view('contact_us', $data);
		$this->load->view('templates/footer', $data);
	}
}

/* End of file display.php */
/* Location: ./application/controllers/display.php */

?>