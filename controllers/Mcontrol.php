<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mcontrol extends CI_Controller {

    public function index() {
        $this->load->view('public/home');
    }

    public function login() {
        $this->load->view('public/login');
    }

    //data start
    public function dataplayer() {
        $this->load->model('Team_model');
        $data['teams'] = $this->Team_model->get_all_team();

        $this->load->view('data/player', $data);
    }

    public function datateam() {
        $this->load->view('data/team');
    }

    public function datamatches() {
        $this->load->model('Team_model');
        $data['teams'] = $this->Team_model->get_all_team();

        $this->load->model('Location_model');
        $data['locations'] = $this->Location_model->get_all_location();

        $this->load->view('data/matches', $data);
    }

    public function playerprofile() {
        $this->load->model('Player_model');
        $data['player'] = $this->Player_model->get_player_by_id($this->uri->segment(2));

//        print_r($data);
        $this->load->view('data/profile', $data);
    }

    //data end
    //broadcast start
    public function broadcasthome() {
        $this->load->model('Match_model');
        $data['match'] = $this->Match_model->get_match_by_date();

        $this->load->view('broadcast/home', $data);
    }

    public function broadcasting() {
        $this->load->view('broadcast/broadcasting');
    }

    //broadcast end

    public function analysehome() {
        $this->load->view('analyse/attributes');
    }

    public function analysemapping() {
        $this->load->model('Attribute_model');
        $data['attributes'] = $this->Attribute_model->get_all_attribute();
        $this->load->view('analyse/map', $data);
    }

    public function attribanalysepage() {
        $this->load->model('Player_has_attribute_model');
        $data['player_has_attribute'] = $this->Player_has_attribute_model->get_player_has_attribute_by_addtri_id($this->uri->segment(2));
        $this->load->view('analyse/attribanalyse', $data);
    }

    public function analysepage() {
        $this->load->view('analyse/analyse');
    }

    public function user() {
        $this->load->view('user/home');
    }

    public function test() {
        $id = "2";
        $idMatch = "1";
         $this->load->model('Match_idmatch_model');
        $data = $this->Match_idmatch_model->each_ball_calculation($idMatch);
        echo json_encode($data);
//        print_r($data);
    }

}
