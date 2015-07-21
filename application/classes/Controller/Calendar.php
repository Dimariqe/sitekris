<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Calendar extends Controller_Template {
    public $template = 'template';

    public function action_index()
    {
        $this->template->content = View::factory('pages/calendar');
    }

}