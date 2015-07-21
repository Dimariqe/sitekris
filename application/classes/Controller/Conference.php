<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Conference extends Controller_Template {
    public $template = 'template';

    public function action_index()
    {
        $conferences = new Model_Conference();
        $this->template->content = View::factory('pages/conference', ['conferences' => $conferences->with('activities')->find_all()]);
    }

}