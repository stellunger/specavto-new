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
				$data['title'] = 'Автовышки, автогидроподъемники (АГП)';
				break;
			case 'kmu':
				$data['title'] = 'Кран-манипуляторы (КМУ)';
				break;
			case 'aesp':
				$data['title'] = 'Эвакуаторы со сдвижной платформой, автоэвакуаторы';
				break;
			case 'aesp-gaz-33106-3000-kg':
				$data['title'] = 'ГАЗ 33106 до 3000 кг - эвакуаторы со сдвижной платформой, автоэвакуаторы';
				break;
			case 'aesp-hyundai-hd78-3520-kg':
				$data['title'] = 'Hyundai HD78 до 3520 кг - эвакуаторы со сдвижной платформой, автоэвакуаторы';
				break;
			case 'aesp-isuzu-npr75l-3540-kg':
				$data['title'] = 'Isuzu NPR75L до 3540 кг - эвакуаторы со сдвижной платформой, автоэвакуаторы';
				break;
			case 'aesp-kamaz-4308-4950-kg':
				$data['title'] = 'КамАЗ 4308 до 4950 кг - эвакуаторы со сдвижной платформой, автоэвакуаторы';
				break;
			case 'agp-gaz-3302-15-20-m':
				$data['title'] = 'ГАЗ 3302 Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-gaz-23107-14-m':
				$data['title'] = 'ГАЗ 23107 Socage 14 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-gaz-33098-15-20-m':
				$data['title'] = 'ГАЗ 33098 Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-gaz-33098-19-22-m':
				$data['title'] = 'ГАЗ 33098 Socage 19-22 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-gaz-33098-20-28-m':
				$data['title'] = 'ГАЗ 33098 Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-gaz-33106-15-20-m':
				$data['title'] = 'ГАЗ 33106 Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-gaz-33106-20-28-m':
				$data['title'] = 'ГАЗ 33106 Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-hyundai-hd78-15-20-m':
				$data['title'] = 'Hyundai HD78 Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-hyundai-hd78-19-22-m':
				$data['title'] = 'Hyundai HD78 Socage 19-22 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-hyundai-hd78-20-28-m':
				$data['title'] = 'Hyundai HD78 Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-hyundai-hd120-20-28-m':
				$data['title'] = 'Hyundai HD120 Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-isuzu-npr75l-15-20-m':
				$data['title'] = 'Isuzu NPR75L Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-isuzu-npr75l-20-28-m':
				$data['title'] = 'Isuzu NPR75L Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-kamaz-4308-15-20-m':
				$data['title'] = 'КамАЗ 4308 Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-kamaz-4308-20-28-m':
				$data['title'] = 'КамАЗ 4308 Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-kamaz-4326-15-20-m':
				$data['title'] = 'КамАЗ 4326 Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-kamaz-4326-20-28-m':
				$data['title'] = 'КамАЗ 4326 Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-kamaz-4326-32-m':
				$data['title'] = 'КамАЗ 4326 Socage 32 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-ural-4320-15-20-m':
				$data['title'] = 'Урал 4320 Socage 15-20 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'agp-ural-4320-20-28-m':
				$data['title'] = 'Урал 4320 Socage 20-28 м - автовышки, автогидроподъемники (АГП)';
				break;
			case 'kmu-gaz-33088-450-900-kg':
				$data['title'] = 'ГАЗ 33088 Tadano 450-900 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-gaz-33098-450-900-kg':
				$data['title'] = 'ГАЗ 33098 Tadano 450-900 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-gaz-33106-450-900-kg':
				$data['title'] = 'ГАЗ 33106 Tadano 450-900 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-hyundai-hd78-450-620-kg':
				$data['title'] = 'Hyundai HD78 Tadano 450-620 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-hyundai-hd120-520-800-kg':
				$data['title'] = 'Hyundai HD120 Tadano 520-800 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-hyundai-hd170-780-1180-kg':
				$data['title'] = 'Hyundai HD170 Tadano 780-1180 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-isuzu-cyz51q-1830-kg':
				$data['title'] = 'Isuzu CYZ51Q Amco Veba 1830 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-isuzu-nlr85a-330-kg':
				$data['title'] = 'Isuzu NLR85A Amco Veba 330 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-isuzu-npr75l-450-900-kg':
				$data['title'] = 'Isuzu NPR75L Tadano 450-900 кг - кран-манипуляторы (КМУ)';
				break;
			case 'kmu-kamaz-43118-970-1400-kg':
				$data['title'] = 'КамАЗ 43118 Tadano 970-1400 кг - кран-манипуляторы (КМУ)';
				break;



		}
		
		$data['title'] .= '| Спецавто-торг.рф';

		$this->load->view('header', $data);
		$this->load->view($page_id, $data);
		$this->load->view('footer');
	}
}

