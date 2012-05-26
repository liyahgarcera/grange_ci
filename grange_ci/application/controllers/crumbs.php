<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crumbs extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function create(){
		$path = base_url().'index.php/display/view_home';
		return '<a href="'.$path.'">Home</a>';
	}
	
	function append($page, $name){
		if($page == '#')
			$path = '#';
		else
			$path = base_url().'index.php/display/'.$page;
		
		return ' - <a href="'.$path.'">'.$name.'</a>';
	}
}

/* End of file crumbs.php */
/* Location: ./application/controllers/crumbs.php */
?>