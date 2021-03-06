<?php

/*
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Team extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Team_model');
    }

    /*
     * Listing of team
     */

    function index() {
        $data['team'] = $this->Team_model->get_all_team();

        $data['_view'] = 'team/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new team
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'name' => $this->input->post('name'),
                'contact' => $this->input->post('contact'),
                'address' => $this->input->post('address'),
                'image' => 'default.jpg',
                'short_code' => $this->input->post('shortcode'),
            );

            $team_id = $this->Team_model->add_team($params);
            redirect('../data_team');
        } else {
            $data['_view'] = 'team/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a team
     */

    function edit($idteam) {
        // check if the team exists before trying to edit it
        $data['team'] = $this->Team_model->get_team($idteam);

        if (isset($data['team']['idteam'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'name' => $this->input->post('name'),
                    'contact' => $this->input->post('contact'),
                    'address' => $this->input->post('address'),
                    'image' => $this->input->post('image'),
                );

                $this->Team_model->update_team($idteam, $params);
                redirect('team/index');
            } else {
                $data['_view'] = 'team/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The team you are trying to edit does not exist.');
    }

    /*
     * Deleting team
     */

    function remove($idteam) {
        $team = $this->Team_model->get_team($idteam);

        // check if the team exists before trying to delete it
        if (isset($team['idteam'])) {
            $this->Team_model->delete_team($idteam);
            redirect('team/index');
        } else
            show_error('The team you are trying to delete does not exist.');
    }

    function filter() {
        if (isset($_POST) && count($_POST) > 0) {

            $name = $this->input->post('name');
            $code = $this->input->post('code');
            $address = $this->input->post('address');
            $contact = $this->input->post('contact');

            $teamList = $this->Team_model->get_filtered_teams($name, $code, $address, $contact);

            echo json_encode($teamList);
        } else {
            echo 'else';
        }
    }

}
