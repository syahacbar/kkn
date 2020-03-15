<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lap_kkn extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lap_kkn_model');
    } 

    /*
     * Listing of lap_kkn
     */
    function index()
    {
        $data['lap_kkn'] = $this->Lap_kkn_model->get_all_lap_kkn();
        
        $data['_view'] = 'backend/lap_kkn/index';
        $this->load->view('backend/layouts/main',$data);
    }

    /*
     * Adding a new lap_kkn
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nim' => $this->input->post('nim'),
				'judul_laporan' => $this->input->post('judul_laporan'),
				'jenis_laporan' => $this->input->post('jenis_laporan'),
				'tgl_upload' => $this->input->post('tgl_upload'),
				'dospem_1' => $this->input->post('dospem_1'),
				'dospem_2' => $this->input->post('dospem_2'),
				'kategori_laporan' => $this->input->post('kategori_laporan'),
				'upload_laporan' => $this->input->post('upload_laporan'),
				'notifikasi' => $this->input->post('notifikasi'),
            );
            
            $lap_kkn_id = $this->Lap_kkn_model->add_lap_kkn($params);
            redirect('lap_kkn/index');
        }
        else
        {            
            $data['_view'] = 'backend/lap_kkn/add';
            $this->load->view('backend/layouts/main',$data);
        }
    }  

    /*
     * Editing a lap_kkn
     */
    function edit($id_laporan)
    {   
        // check if the lap_kkn exists before trying to edit it
        $data['lap_kkn'] = $this->Lap_kkn_model->get_lap_kkn($id_laporan);
        
        if(isset($data['lap_kkn']['id_laporan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nim' => $this->input->post('nim'),
					'judul_laporan' => $this->input->post('judul_laporan'),
					'jenis_laporan' => $this->input->post('jenis_laporan'),
					'tgl_upload' => $this->input->post('tgl_upload'),
					'dospem_1' => $this->input->post('dospem_1'),
					'dospem_2' => $this->input->post('dospem_2'),
					'kategori_laporan' => $this->input->post('kategori_laporan'),
					'upload_laporan' => $this->input->post('upload_laporan'),
					'notifikasi' => $this->input->post('notifikasi'),
                );

                $this->Lap_kkn_model->update_lap_kkn($id_laporan,$params);            
                redirect('lap_kkn/index');
            }
            else
            {
                $data['_view'] = 'backend/lap_kkn/edit';
                $this->load->view('backend/layouts/main',$data);
            }
        }
        else
            show_error('The lap_kkn you are trying to edit does not exist.');
    } 

    /*
     * Deleting lap_kkn
     */
    function remove($id_laporan)
    {
        $lap_kkn = $this->Lap_kkn_model->get_lap_kkn($id_laporan);

        // check if the lap_kkn exists before trying to delete it
        if(isset($lap_kkn['id_laporan']))
        {
            $this->Lap_kkn_model->delete_lap_kkn($id_laporan);
            redirect('lap_kkn/index');
        }
        else
            show_error('The lap_kkn you are trying to delete does not exist.');
    }
    
}