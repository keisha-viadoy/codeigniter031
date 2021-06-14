<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_news($slug = FALSE)
		{
				if ($slug === FALSE)
				{
						$query = $this->db->get('viadoy_news');
						return $query->result_array();
				}

				$query = $this->db->get_where('viadoy_news', array('slug' => $slug));
				return $query->row_array();
		}
} 