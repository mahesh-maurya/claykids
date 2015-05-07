<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
	
	public function index()
	{
		$data['page']='home';
		$data['title']='Clay Kids Home';		
		$this->load->view('template',$data);
	}
	
	public function centres()
	{
		$data['page']='centres';
		$data['title']='Clay Kids Centres';		
		$this->load->view('template',$data);
	}
	
	public function testimonials()
	{
		$data['page']='testimonials';
		$data['title']='Clay Kids Testimonials';		
		$this->load->view('template',$data);
	}
	
	
	public function contact()
	{
		$data['page']='contact';
		$data['title']='Clay Kids Contact';		
		$this->load->view('template',$data);
	}
	
	public function aboutm()
	{
		$data['page']='aboutm';
		$data['title']='Clay Kids About';		
		$this->load->view('template',$data);
	}
	
	public function aboutm2()
	{
		$data['page']='aboutm2';
		$data['title']='Clay Kids About';		
		$this->load->view('template',$data);
	}
	
	public function home1()
	{
		$data['page']='home1';
		$data['title']='Clay Kids Home';		
		$this->load->view('template',$data);
	}
	
	public function photos()
	{
		$data['page']='photos';
		$data['title']='Clay Kids Photos';		
		$this->load->view('template',$data);
	}
}
?>

	