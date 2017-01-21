<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public static $language;
	
	private $data = array();

	public function __construct() {

		parent::__construct();

		$this->load->model(array(
			'Category', 'Item',
		));

		$this->load->helper(array('cookie', 'language'));

		$language = get_cookie(LANG);

		if(!$language) $language = GE;

		$this->set_language($language);

		App::$language = $language;

		$full_lang = get_full_language($language);

		$this->config->set_item('language', $full_lang);

		$this->load->language('general');
	}

	public function index() {

		$this->data['categories'] = $this->Category->get_list();

		$this->load->view('main', $this->data);
	}

	public function get_list($category) {

		$this->load->model('Item');

		$this->data['items'] = $this->Item->get_by_category($category);

		$this->load->view('list', $this->data);
	}

	public function lang($language) {
		$this->set_language($language);
		redirect(base_url());
	}

	private function set_language($language) {

		if($language !== GE && $language !== EN && $language !== RU) {
			$language = GE;
		}
		
		set_cookie(array(
			'name' => LANG,
			'value' => $language,
			'expire' => 5184000,
		));
	}

}

/* End of file App.php */
/* Location: ./application/controllers/App.php */