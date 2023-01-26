<?php
class Pages extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Page_Model'); //Load the Model here   
	}

	public function makeQuizDataSet($questions)
	{
		$resultSet = array();
		if (!empty($questions)) {
			foreach ($questions as $k => $question) {
				$resultSet[$question['question']]['qid'] = $question['qid'];
				$resultSet[$question['question']]['answers'][] = array(
					'aid' => $question['id'],
					'answer' => $question['answer'],
					'isCorrect' => $question['isCorrect']
				);
			}
		}
		return $resultSet;
	}

	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}
		$data['title'] = ucfirst($page);

		switch ($page) {
			case 'HUD-quiz':
				$questionsRaw = $this->Page_Model->get_quiz_with_answer();
				$data['questions'] = $this->makeQuizDataSet($questionsRaw);
				break;

			default:
				# code...
				break;
		}
		$this->load->view('templates/header');
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer');
	}
}
