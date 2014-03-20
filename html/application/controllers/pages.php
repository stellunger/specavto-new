<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'Поставка спецтехники от ведущих производителей | Спецавто-торг.рф';

		$this->load->view('header', $data);
		$this->load->view('main-page');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		
		$data['benefits'] = $this->load->view('benefits','',true);
		$data['zayavka'] = $this->load->view('zayavka','',true);
		$data['left_menu_agp'] = $this->load->view('left-menu-agp','',true);

		switch($page_id)
		{
			case 'agp':
				$data['title'] = 'Автовышки, автогидроподъемники';
				break;
		}
		
		$data['title'] .= '| Спецавто-торг.рф';

		$this->load->view('header', $data);
		$this->load->view($page_id, $data);
		$this->load->view('footer');
	}
}

