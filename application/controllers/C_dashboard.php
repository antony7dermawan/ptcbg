<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_t_t_t_penjualan_rincian');
    $this->load->model('m_t_t_t_pembelian');
    $this->load->model('m_t_t_t_pemakaian');

    
  }

  public function index()
  {
    $data = [



      "c_t_t_t_pembelian" => $this->m_t_t_t_pembelian->select_dashboard($this->session->userdata('date_to_dashboard')),
      "c_t_t_t_pemakaian" => $this->m_t_t_t_pemakaian->select_dashboard($this->session->userdata('date_to_dashboard')),

      "title" => "Dashboard",
      "description" => "Web Version:21-01-26 22:11"
    ];

    $this->render_backend('template/backend/pages/dashboard', $data);
  }

  public function search_date_1()
  {
    $date_from_dashboard_1 = ($this->input->post("date_from_dashboard_1"));
    $this->session->set_userdata('date_from_dashboard_1', $date_from_dashboard_1);

    $date_to_dashboard_1 = ($this->input->post("date_to_dashboard_1"));
    $this->session->set_userdata('date_to_dashboard_1', $date_to_dashboard_1);
    redirect('/c_dashboard');
  }

public function search_date()
  {

    $date_to_dashboard = ($this->input->post("date_to_dashboard"));
    $this->session->set_userdata('date_to_dashboard', $date_to_dashboard);
    redirect('/c_dashboard');
  }

  public function search_date_2()
  {
    $date_from_dashboard_2 = ($this->input->post("date_from_dashboard_2"));
    $this->session->set_userdata('date_from_dashboard_2', $date_from_dashboard_2);

    $date_to_dashboard_2 = ($this->input->post("date_to_dashboard_2"));
    $this->session->set_userdata('date_to_dashboard_2', $date_to_dashboard_2);
    redirect('/c_dashboard');
  }



}
