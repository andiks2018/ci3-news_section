<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function view($page='test')
	{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $data['title'] = ucfirst($page);
		$this->load->view('templates/header', $data);
		$this->load->view('pages/test');
		$this->load->view('templates/footer');
	}
}
