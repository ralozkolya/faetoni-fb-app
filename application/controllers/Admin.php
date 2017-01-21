<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $data = array(
		SUCCESS_MESSAGE => NULL,
		ERROR_MESSAGE => NULL,
	);

	public function __construct() {

		parent::__construct();

		$this->load->library(array('Auth', 'session'));

		$this->load->helper('language');

		$this->load->language('general');
	}

	public function index() {

		if($this->auth->is_logged_in()) {
			$this->categories();
		}

		else {
			$this->login();
		}
	}

	public function categories() {

		$this->redirect();

		$this->load->model('Category');

		$this->data['categories'] = $this->Category->get_list_admin();
		$this->data['priority'] = $this->Category->get_last_priority();

		$this->load->view('admin/categories', $this->data);
	}

	public function add_category() {

		$this->redirect();

		$this->load->model('Category');

		if($this->input->post()) {

			$this->load->library('form_validation');

			$this->form_validation->set_rules('ge_name', 'lang:ge_name', 'required');
			$this->form_validation->set_rules('en_name', 'lang:en_name', 'required');
			$this->form_validation->set_rules('ru_name', 'lang:ru_name', 'required');
			$this->form_validation->set_rules('priority', 'lang:priority', 'integer');

			if($this->form_validation->run()) {

				if($this->Category->add($this->input->post())) {
					$this->data[SUCCESS_MESSAGE] = lang('added_successfully');
				}

				else {
					$this->data[ERROR_MESSAGE] = lang('unexpected_error');
				}
			}

			else {
				$this->data[ERROR_MESSAGE] = validation_errors();
			}
		}

		$this->data['last_priority'] = $this->Category->get_last_priority();

		$this->load->view('admin/add_category', $this->data);
	}

	public function edit_category($id) {

		$this->redirect();

		$this->load->model('Category');

		if($this->input->post()) {

			$this->load->library('form_validation');

			$this->form_validation->set_rules('ge_name', 'lang:ge_name', 'required');
			$this->form_validation->set_rules('en_name', 'lang:en_name', 'required');
			$this->form_validation->set_rules('ru_name', 'lang:ru_name', 'required');
			$this->form_validation->set_rules('priority', 'lang:priority', 'integer');

			if($this->form_validation->run()) {

				if($this->Category->edit($this->input->post(), $id)) {
					$this->data[SUCCESS_MESSAGE] = lang('changed_successfully');
				}

				else {
					$this->data[ERROR_MESSAGE] = lang('unexpected_error');
				}
			}

			else {
				$this->data[ERROR_MESSAGE] = validation_errors();
			}
		}

		$this->data['category'] = $this->Category->get($id);

		$this->load->view('admin/edit_category', $this->data);
	}

	public function delete_category($id) {

		$this->redirect();

		$this->load->model('Category');

		if($this->Category->delete($id)) {
			$this->session->set_flashdata(SUCCESS_MESSAGE, lang('deleted_successfully'));
		}

		else {
			$this->session->set_flashdata(ERROR_MESSAGE, lang('unexpected_error'));
		}

		redirect(base_url().'admin/categories');
	}

	public function items($id) {

		$this->redirect();

		$this->load->model('Item');

		$this->data['items'] = $this->Item->get_by_category_admin($id);

		$this->load->view('admin/items', $this->data);
	}

	public function add_item() {

		$this->redirect();

		$this->load->model(array('Item', 'Category'));

		if($this->input->post()) {

			$this->load->library('form_validation');

			$this->form_validation->set_rules('ge_name', 'lang:ge_name', 'required');
			$this->form_validation->set_rules('en_name', 'lang:en_name', 'required');
			$this->form_validation->set_rules('ru_name', 'lang:ru_name', 'required');
			$this->form_validation->set_rules('priority', 'lang:priority', 'integer');
			$this->form_validation->set_rules('price_1', 'lang:price_1', 'required|numeric');
			$this->form_validation->set_rules('price_2', 'lang:price_2', 'numeric');
			$this->form_validation->set_rules('category', 'lang:category', 'required|integer');

			if($this->form_validation->run()) {

				if($this->Item->add($this->input->post())) {
					$this->data[SUCCESS_MESSAGE] = lang('added_successfully');
				}

				else {
					$this->data[ERROR_MESSAGE] = lang('unexpected_error');
				}
			}

			else {
				$this->data[ERROR_MESSAGE] = validation_errors();
			}
		}

		$this->data['categories'] = $this->Category->get_list_admin();

		$this->load->view('admin/add_item', $this->data);
	}

	public function edit_item($id) {

		$this->redirect();

		$this->load->model(array('Item', 'Category'));

		if($this->input->post()) {

			$this->load->library('form_validation');

			$this->form_validation->set_rules('ge_name', 'lang:ge_name', 'required');
			$this->form_validation->set_rules('en_name', 'lang:en_name', 'required');
			$this->form_validation->set_rules('ru_name', 'lang:ru_name', 'required');
			$this->form_validation->set_rules('priority', 'lang:priority', 'integer');
			$this->form_validation->set_rules('price_1', 'lang:price_1', 'required|numeric');
			$this->form_validation->set_rules('price_2', 'lang:price_2', 'numeric');
			$this->form_validation->set_rules('category', 'lang:category', 'required|integer');

			if($this->form_validation->run()) {

				if($this->Item->edit($this->input->post(), $id)) {
					$this->data[SUCCESS_MESSAGE] = lang('changed_successfully');
				}

				else {
					$this->data[ERROR_MESSAGE] = lang('unexpected_error');
				}
			}

			else {
				$this->data[ERROR_MESSAGE] = validation_errors();
			}
		}

		$this->data['item'] = $this->Item->get($id);
		$this->data['categories'] = $this->Category->get_list_admin();

		$this->load->view('admin/edit_item', $this->data);
	}

	public function delete_item($id) {

		$this->redirect();

		$this->load->model('Item');

		$category_id = $this->Item->get($id)->category;

		if($this->Item->delete($id)) {
			$this->session->set_flashdata(SUCCESS_MESSAGE, lang('deleted_successfully'));
		}

		else {
			$this->session->set_flashdata(ERROR_MESSAGE, lang('unexpected_error'));
		}

		redirect(base_url().'admin/items/'.$category_id);
	}

	public function users() {

		$this->redirect();

		$this->data['user'] = $this->session->userdata('user');

		$this->load->view('admin/users', $this->data);
	}

	public function change_user() {

		if($this->input->post()) {

			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'lang:username', 'required');
			$this->form_validation->set_rules('password', 'lang:password', 'required|min_length[6]');
			$this->form_validation->set_rules('repeat_password', 'lang:repeat_password', 'required|matches[password]');

			if($this->form_validation->run()) {

				$username = $this->input->post('username');
				$password = $this->input->post('password');

				if($this->auth->change_current_user($username, $password)) {
					$this->session->set_flashdata(SUCCESS_MESSAGE, lang('changed_successfully'));
				}

				else {
					$this->session->set_flashdata(ERROR_MESSAGE, lang('unexpected_error'));
				}
			}

			else {
				$this->session->set_flashdata(ERROR_MESSAGE, validation_errors());
			}
		}

		redirect(base_url().'admin/users');
	}

	public function login() {

		if($this->input->post()) {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($this->auth->login($username, $password)) {
				redirect(base_url().'admin');
				return;
			}

			$this->data['error_message'] = 'არასწორი მომხმარებელი/პაროლი';
		}

		$this->load->view('login', $this->data);
	}

	public function logout() {

		$this->auth->logout();

		redirect(base_url().'admin');
	}

	private function redirect() {

		if(!$this->auth->is_logged_in()) {
			redirect(base_url().'admin');
			exit;
		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */