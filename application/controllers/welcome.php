<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url'));
		// Your own constructor code
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insert()
	{
		$this->load->view('insert_knowledge');
	}

	public function result()
	{
		$this->load->view('knowledge_result');
	}

	public function retrieve_data($type)
	{
		$keyword = $_POST['keyword'];
		$data['result'] = null;
		$query = $this->db->query("SELECT * FROM source WHERE ".$type." LIKE '%".$keyword."%'");
		$i = 0;
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data['result'][$i]['source_name'] = $row->source_name;
				$data['result'][$i]['source_url'] = $row->source_url;
				$data['result'][$i]['creation_date'] = $row->creation_date;
				$data['result'][$i]['source_desc'] = $row->source_desc;
				$data['result'][$i]['category'] = $row->category;
				$i++;
			}
		}
		$this->load->view('knowledge_result', $data);
	}

	public function insert_data() 
	{
		$name = $_POST['name'];
		$link = $_POST['url'];
		$date = $_POST['date'];
		$cat  = $_POST['category'];
		$desc = $_POST['desc'];
		$data = array(
			'source_name' => $name,
			'source_url' => $link,
			'creation_date' => $date,
			'source_desc' => $desc,
			'category' => $cat
			);
		$this->db->insert('source', $data);
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */