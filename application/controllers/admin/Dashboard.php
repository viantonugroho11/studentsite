<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    private $template    =    '/templates/backend';

    // halaman dashboard
    public function index()
    {
        $data['title']    =    'Dashboard | DHIBS';
        $data['page']    =    '/admin/dashboard';
        $this->load->view($this->template, $data);
    }
}
