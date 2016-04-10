<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_ui extends MY_Controller {

	public function index()
	{
		$this->login_v();
	}

	public function login_v()
	{
		$this->template->render();
	}

	public function dasboard_v()
	{
		$this->template_m->dasboard();

		$this->data['content_v'] = 'dasboard_v';
		$this->template->render($this->data);
	}

	public function pendataan_buruh_v()
	{
		$this->template_m->pendataan();

		$this->data['content_v'] = 'pendataan_buruh_v';
		$this->template->render($this->data);
	}

	public function pendataan_koperasi_v()
	{
		$this->template_m->pendataan();

		$this->data['content_v'] = 'pendataan_koperasi_v';
		$this->template->render($this->data);
	}

	public function pendataan_supplier_v()
	{
		$this->template_m->pendataan();

		$this->data['content_v'] = 'pendataan_supplier_v';
		$this->template->render($this->data);
	}

	public function pendataan_barang_v()
	{
		$this->template_m->pendataan();

		$this->data['content_v'] = 'pendataan_barang_v';
		$this->template->render($this->data);
	}

}

/* End of file View_ui.php */
/* Location: ./application/modules/view_ui/controllers/View_ui.php */