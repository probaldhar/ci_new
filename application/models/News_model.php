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
		                $query = $this->db->get('news');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('news', array('slug' => $slug));
		        return $query->row_array();
		}

		public function set_news()
		{
		    $this->load->helper('url');

		    $slug = url_title($this->input->post('title'), 'dash', TRUE);

		    $data = array(
		        'title' => $this->input->post('title'),
		        'slug' => $slug,
		        'text' => $this->input->post('text')
		    );

		    return $this->db->insert('news', $data);
		}

		public function add_users($params) {
			// $data = [
			// 	'title' => $params->name,
			// 	'email' => $params->title
			// ];

			// print_r($params);

			$result = $this->db->insert('news', $params);
			$newId = $this->db->insert_id();
			if ($result) {
				// return $this->db->get($newId)->row_array();
				return "data added";
			}
			return false;
		}


}

