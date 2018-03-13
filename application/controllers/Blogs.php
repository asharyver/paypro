<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model(['model_blog', 'model_blog_category','model_user']);
		$this->load->library(['template']);
	}

	public function index()
	{
		$data['pageType'] = 'blogs';
		$data['judul']    = 'Blog';
		$data['news']     = $this->_parsePost($this->model_blog->tampilkan_news());
		$data['featured'] = $this->_parsePost($this->model_blog->tampilkan_featured());
		$data['category'] = $this->model_blog_category->tampilkan(true);

        $this->template->utama('web/view_blog', $data);
	}

	public function view($link = null) {
		var_dump($this->model_blog->single_post($link));
		// if (empty()) {
		// 	redirect('Blogs');
		// }
	}
	
	private function _parsePost($post) {
		$result = [];

		foreach ($post as $p) {
			$author = $this->model_user->get_id($p->author);
			$result[] = [
				'ID' => $p->post_id,
				'title' => $p->title,
				'thumbnail' => $p->thumbnail,
				'author' => [
					'email' => $author->email,
					'fullname' => $author->nama
				],
				'summary' => $this->_makeSummary($p->descriptions, 20),
				'descriptions' => $p->descriptions,
				'time' => date('l, d F Y'),
				'timeISO8601' => date(DATE_ISO8601, $p->time),
				'link' => $p->link
			];
		}

		
		return $result;
	}
	
	private  function _makeSummary($text, $length) {
		$text = explode(' ', strip_tags(htmlspecialchars_decode($text)));
		
		$result = [];
		
		for ($i=0; $i < $length; $i++) { 
			if (isset($text[$i])) {
				$result[] = $text[$i];
			}
		}
		
		return implode(' ', $result);
	}

}


/* End of file Blogs.php */
/* Location: ./application/controllers/Blogs.php */
