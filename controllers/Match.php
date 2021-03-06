<?php

/*
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Match extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Match_model');
    }

    /*
     * Listing of match
     */

    function index() {
        $data['match'] = $this->Match_model->get_all_match();

        $data['_view'] = 'match/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new match
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'idseries' => '2',
                'from_date' => $this->input->post('from_date') . ' 08:00:00',
                'to_date' => $this->input->post('from_date') . ' 08:00:00',
                'idlocation' => $this->input->post('idlocation'),
                'team1' => $this->input->post('team1'),
                'team2' => $this->input->post('team2'),
                'status' => '1',
                'status' => '20',
            );

            $match_id = $this->Match_model->add_match($params);
            redirect('../data_matches');
        } else {
            $data['_view'] = 'match/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a match
     */

    function edit($idmatch) {
        // check if the match exists before trying to edit it
        $data['match'] = $this->Match_model->get_match($idmatch);

        if (isset($data['match']['idmatch'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'idseries' => $this->input->post('idseries'),
                    'from_date' => $this->input->post('from_date'),
                    'to_date' => $this->input->post('to_date'),
                    'idlocation' => $this->input->post('idlocation'),
                );

                $this->Match_model->update_match($idmatch, $params);
                redirect('match/index');
            } else {
                $data['_view'] = 'match/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The match you are trying to edit does not exist.');
    }

    /*
     * Deleting match
     */

    function remove($idmatch) {
        $match = $this->Match_model->get_match($idmatch);

        // check if the match exists before trying to delete it
        if (isset($match['idmatch'])) {
            $this->Match_model->delete_match($idmatch);
            redirect('match/index');
        } else
            show_error('The match you are trying to delete does not exist.');
    }

    function get_teams() {
        if (isset($_POST) && count($_POST) > 0) {
            $idmatch = $this->input->post('id');
            $match = $this->Match_model->get_match_all_by_id($idmatch);
            echo json_encode($match);
        }
    }

    function change_state() {
        if (isset($_POST) && count($_POST) > 0) {
            $idmatch = $this->input->post('idmatch');
            $params = array(
                'status' => $this->input->post('state'),
            );

            $this->Match_model->update_match($idmatch, $params);
        }
    }

    function get_match_by_date() {
        $matches = $this->Match_model->get_match_by_date_1($this->input->post('date'));
        echo json_encode($matches);
    }

}
