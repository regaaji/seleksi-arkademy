<?php 


/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
    $this->load->helper('form');
	}
	
	public function index()
	{
		$data['judul'] = 'Halaman Home';


		$data['get_data'] = $this->Home_model->getData()->result_array(); 
		
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');

		
	}

	public function insert(){

    if($this->Home_model->insertData()){
      $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect(base_url());
      }else{
        redirect(base_url());
    }
  }

  public function change(){
    
    $data['get_data'] = $this->Home_model->getDataById()->result_array();
    $this->load->view('templates/header');
    $this->load->view('home/edit_view', $data);
    $this->load->view('templates/footer');
  }

  public function edit(){

    if($this->Home_model->editData()){
      $this->session->set_flashdata('pesan', 'Diubah');
        redirect(base_url());
      }else{
        redirect(base_url());
    }
  }

  public function delete(){

    if($this->Home_model->deleteData()){
      $this->session->set_flashdata('pesan', 'Dihapus');
        redirect(base_url());
      }else{
        redirect(base_url());
    }
  }


}
