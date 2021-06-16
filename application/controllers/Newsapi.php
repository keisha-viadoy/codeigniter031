<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Newsapi extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->load->database();
    }

	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where('viadoy_news', ['id' => $id])->row_array();
        }else{
            $data = $this->db->get('viadoy_news')->result();
        }
        $this->response($data, 200);

	}

} 