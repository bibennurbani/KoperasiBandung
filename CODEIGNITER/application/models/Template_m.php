<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_m extends MY_Model {

	public function __construct()
	{
		parent::__construct();

		$this->base_template_resource();
	}

	public function base_template_resource()
	{
		$this->template->set_platform('themes1');

		$this->template->set_title('Aplikasi Koperasi');
		$this->template->set_meta('author','');
		$this->template->set_meta('description','');

		// Base CSS
		$this->template->set_css('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700', 'remote');
		$this->template->set_css('http://fonts.googleapis.com/css?family=Oswald:400,300,700', 'remote');
		$this->template->set_css('css/font-awesome.min.css');
		$this->template->set_css('js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css');
		$this->template->set_css('css/bootstrap.min.css');
		// App CSS
		$this->template->set_css('css/style.css');
		$this->template->set_css('css/custom.css');
		
		// $this->template->set_js('bootstrap.min.js','footer');
		$this->template->set_js('js/libs/jquery-1.10.1.min.js','footer');
		$this->template->set_js('js/libs/jquery-ui-1.9.2.custom.min.js','footer');
		$this->template->set_js('js/libs/bootstrap.min.js','footer');
		$this->template->set_js('js/libs/realdatetime.js','footer');
		$this->template->set_js('js/libs/raphael-2.1.2.min.js','footer');
		$this->template->set_js('js/plugins/nicescroll/jquery.nicescroll.min.js','footer');
		$this->template->set_js('js/plugins/sparkline/jquery.sparkline.min.js','footer');
		$this->template->set_js('js/script.js','footer');

		$layout = $this->template->get_platform() . '/_base';
		$this->template->set_layout($layout);
	}

	public function p_fullcalendar()
	{
		$this->template->set_css('js/plugins/fullcalendar/fullcalendar.css');
		$this->template->set_js('js/plugins/fullcalendar/fullcalendar.min.js','footer');
	}

	public function p_icheck()
	{
		$this->template->set_css('js/plugins/icheck/skins/minimal/blue.css');
		$this->template->set_js('js/plugins/icheck/jquery.icheck.js','footer');
	}

	public function p_select2()
	{
		$this->template->set_css('js/plugins/select2/select2.css');
		$this->template->set_js('js/plugins/select2/select2.js','footer');
	}

	public function p_morris()
	{
		$this->template->set_css('js/plugins/morris/morris.css');
		$this->template->set_js('js/plugins/morris/morris.min.js','footer');
	}

	public function p_datatables()
	{
		$this->template->set_js('js/plugins/datatables/jquery.dataTables.min.js','footer');
		$this->template->set_js('js/plugins/datatables/DT_bootstrap.js','footer');
		$this->template->set_js('js/plugins/tableCheckable/jquery.tableCheckable.js','footer');
	}

	public function dasboard()
	{
		$this->p_fullcalendar();
		$this->p_icheck();
		$this->p_select2();
		$this->p_morris();
		$this->template->set_js('js/demos/dashboard.js','footer');
		$this->template->set_js('js/demos/calendar.js','footer');
		$this->template->set_js('js/demos/charts/morris/area.js','footer');
		$this->template->set_js('js/demos/charts/morris/donut.js','footer');
	}

	public function pendataan()
	{
		$this->p_datatables();
		$this->p_icheck();
	}

}

/* End of file Template_m.php */
/* Location: ./application/models/Template_m.php */