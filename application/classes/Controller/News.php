<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Template {
    public $template = 'template';

    public function action_index()
    {
        $news = new Model_News();
        $this->template->content = View::factory('pages/news', ['news' => $news->find_all()]);
    }

}