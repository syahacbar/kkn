<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dosen extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
    } 

    /*
     * Listing of dosen
     */
    function index()
    {
        $data['dosen'] = $this->Dosen_model->get_all_dosen();
        
        $data['_view'] = 'backend/dosen/index';
        $this->load->view('backend/layouts/main',$data);
    }

    /*
     * Adding a new dosen
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'nip' => $this->input->post('nip'),
				'nama_dosen' => $this->input->post('nama_dosen'),
				'username' => $this->input->post('username'),
            );
            
            $dosen_id = $this->Dosen_model->add_dosen($params);
            redirect('dosen/index');
        }
        else
        {            
            $data['_view'] = 'backend/dosen/add';
            $this->load->view('backend/layouts/main',$data);
        }
    }  

    /*
     * Editing a dosen
     */
    function edit($id_dosen)
    {   
        // check if the dosen exists before trying to edit it
        $data['dosen'] = $this->Dosen_model->get_dosen($id_dosen);
        
        if(isset($data['dosen']['id_dosen']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'nip' => $this->input->post('nip'),
					'nama_dosen' => $this->input->post('nama_dosen'),
					'username' => $this->input->post('username'),
                );

                $this->Dosen_model->update_dosen($id_dosen,$params);            
                redirect('dosen/index');
            }
            else
            {
                $data['_view'] = 'backend/dosen/edit';
                $this->load->view('backend/layouts/main',$data);
            }
        }
        else
            show_error('The dosen you are trying to edit does not exist.');
    } 

    /*
     * Deleting dosen
     */
    function remove($id_dosen)
    {
        $dosen = $this->Dosen_model->get_dosen($id_dosen);

        // check if the dosen exists before trying to delete it
        if(isset($dosen['id_dosen']))
        {
            $this->Dosen_model->delete_dosen($id_dosen);
            redirect('dosen/index');
        }
        else
            show_error('The dosen you are trying to delete does not exist.');
    }
    
}
