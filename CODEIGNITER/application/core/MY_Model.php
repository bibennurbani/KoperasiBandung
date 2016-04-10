<?php
/**
 * Core Model
 * Base Init for definition table name, primary key, order by
 * Base template for CRUD (Insert, Read, Update, Delete) to database
 * 
 * 
 * 
 * 
 * @author 	Hidayat
 * @version v1.0
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	// Init table name of database
	protected $_table_name = '';

	// Init primary key of table
	protected $_primary_key = 'id';

	// Init primary key filter of table
	protected $_primary_filter = 'intval';

	// Init order by of table
	protected $_order_by = '';

	// Init rules for form action
	public $rules = array();

	// Init timestamp
	protected $_timestamps = FALSE;
	
	function __construct() {
		parent::__construct();
	}
	
	/**
	 * get field data from action (post).
	 * @param $fields 	array	field name element
	 * @return array
	 */
	public function array_from_post($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}

	public function array_from_get($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->get($field);
		}
		return $data;
	}
	
	/**
	 * get data from database / table have definition.
	 * @param $id 		string	id of record tabel on database
	 * @param $single 	boolean	show data from database
	 * @return object
	 * @return array of object
	 */
	public function get($id = NULL, $single = FALSE){
		
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		
		$this->db->order_by($this->_order_by);
		
		return $this->db->get($this->_table_name)->$method();
	}
	
	/**
	 * get data from database / table have definition using where custom condition.
	 * @param $where 	array	filtering data from table to show
	 * @param $single 	boolean	show data from database
	 * @return object
	 * @return array of object
	 */
	public function get_by($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}
	
	/**
	 * insert or update data from database / table have definition
	 * @param $data 	array	filed and value for insert or update
	 * @param $id 		string	id record (primary key) if update data
	 * @return string
	 */
	public function save($data, $id = NULL){
		
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['create'] = $now;
			$data['update'] = $now;
		}
		
		// Insert
		if ($id === NULL) {
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		// Update
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}
		
		return $id;
	}

	/**
	 * update data from database / table have definition by custume
	 * @param $data 	array	filed and value for insert or update
	 * @param $where 	arra	field definition where
	 * @return void
	 */
	public function save_by($data, $where){
		
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}
		
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update($this->_table_name);

	}
	
	/**
	 * delete data from database / table have definition
	 * @param $id 		string	id record (primary key) of record
	 * @return object
	 */
	public function delete($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);
		
		if (!$id) {
			return FALSE;
		}

		$data = $this->get($id);

		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);

		return $data;
	}

	/**
	 * delete data by custom where
	 * @param $where 	array 	filtering data from table to show
	 * @return void
	 */
	public function delete_by($where)
	{	
		$this->db->where($where);
		$this->db->delete($this->_table_name);
	}

	/**
	 * count row data
	 * @param $where 	array 	filtering data from table to show
	 * @return int
	 */
	public function count_data($where = NULL)
	{	
		$count_data = 0;
		if($where){
			$this->db->where($where);
		}

		$count_data = $this->db->count_all_results($this->_table_name);

		return $count_data;
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */