<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Series extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Series_model');
    } 

    /*
     * Listing of series
     */
    function index()
    {
        $data['series'] = $this->Series_model->get_all_series();
        
        $data['_view'] = 'series/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new series
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'sponsor' => $this->input->post('sponsor'),
				'comments' => $this->input->post('comments'),
            );
            
            $series_id = $this->Series_model->add_series($params);
            redirect('series/index');
        }
        else
        {            
            $data['_view'] = 'series/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a series
     */
    function edit($idseries)
    {   
        // check if the series exists before trying to edit it
        $data['series'] = $this->Series_model->get_series($idseries);
        
        if(isset($data['series']['idseries']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'sponsor' => $this->input->post('sponsor'),
					'comments' => $this->input->post('comments'),
                );

                $this->Series_model->update_series($idseries,$params);            
                redirect('series/index');
            }
            else
            {
                $data['_view'] = 'series/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The series you are trying to edit does not exist.');
    } 

    /*
     * Deleting series
     */
    function remove($idseries)
    {
        $series = $this->Series_model->get_series($idseries);

        // check if the series exists before trying to delete it
        if(isset($series['idseries']))
        {
            $this->Series_model->delete_series($idseries);
            redirect('series/index');
        }
        else
            show_error('The series you are trying to delete does not exist.');
    }
    
}