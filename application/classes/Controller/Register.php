<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Template {
    public $template = 'template';

    public function action_index()
    {
        $conferences = new Model_Conference();
        $this->template->content = View::factory('pages/register', [
            'conferences' => $conferences->with('activities')->find_all()
        ]);
    }
    public function action_complete() {
        if($this->request->method()!=='POST') $this->redirect('/register/') and die;
        $errors = [];
        if($this->request->post('password')!==$this->request->post('re-password'))
            $errors[]='Повторный пароль введен не верно.';
        if(empty($errors)) {
            $users = new Model_ConferenceRegistration();
            $users->id_conference = $this->request->post('conference_id');
            $users->name = $this->request->post('fio');
            $users->email = $this->request->post('email');
            $users->phone = $this->request->post('phone');
            $users->city = $this->request->post('city');
            $users->status = $this->request->post('reg-status');
            $users->working = $this->request->post('activities');
            $users->report_name = $this->request->post('report_name');
            $users->report_size = $this->request->post('report_size');
            $users->days = $this->request->post('days');
            $users->cultural_events = $this->request->post('additional_activity');
            $users->scoup = $this->request->post('report_scopus');
            $users->save();
        }
        $this->template->content = "";
    }
}