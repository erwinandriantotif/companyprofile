<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{

    public function index()
    {
        $this->load->view('Landing_Page/index');
    }

    public function detail_layanan()
    {
        $this->load->view('Landing_Page/v_detailLayanan');
    }

    public function detail_layanan_WebApps()
    {
        $this->load->view('Landing_Page/v_detailLayanan_WebApp');
    }

    public function detail_layanan_MobileApps()
    {
        $this->load->view('Landing_Page/v_detailLayanan_MobileApp');
    }

    public function detail_layanan_ITService()
    {
        $this->load->view('Landing_Page/v_detailLayanan_ITService');
    }

    public function detail_layanan_DataSecurity()
    {
        $this->load->view('Landing_Page/v_detailLayanan_DataSecurity');
    }

    public function detail_layanan_CourseAndTraining()
    {
        $this->load->view('Landing_Page/v_detailLayanan_CourseAndTraining');
    }

    public function detail_layanan_GraphicDesign()
    {
        $this->load->view('Landing_Page/v_detailLayanan_GrapikDesain');
    }
}