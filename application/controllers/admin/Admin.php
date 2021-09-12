<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    private $template    =    '/templates/backend';

    // halaman dashboard
    public function index()
    {
        $data['title']    =    'Admin | DHIBS';
        $data['page']    =    '/admin/admin';
        $data['dt_admin'] =     $this->db->get('admin');

        $this->load->view($this->template, $data);
    }

    public function addNewAdmin()
    {
        $data['title']    =    'Add New Data Admin | DHIBS';
        $data['page']    =    '/admin/addnewAdmin';
        $data['dt_admin'] =     $this->db->get('user');

        // RULES FORM
        $this->form_validation->set_rules('nama_admin', 'Nama', 'required|trim', [
            'required'    =>    'Nama tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
            'required'    =>    'Alamat tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jk', 'required|trim', [
            'required'    =>    'Jenis Kelamin tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('telp', 'No Telepon', 'required|trim', [
            'required'    =>    'No Telepon / WA tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('email_admin', 'Email', 'required|trim|valid_email', [
            'required'    =>    'Email tidak boleh kosong! ',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required'    =>    'Password tidak boleh kosong! ',
            'matches'    =>    'Password tidak cocok dengan Konfirmasi password'

        ]);
        // $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password]', [
        //     'required'    =>    'Konfirmasi Password tidak boleh kosong! ',
        // ]);
        // END RULES FORM

        if ($this->form_validation->run() == FALSE) {
            $this->load->view($this->template, $data);
        } else {
            /* JIKA FORM BERNILAI SEBALIKNYA MAKA LANJUTKAN */

            $pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data = [
                'email_admin' =>    $this->input->post('email_admin'),
                'password' =>    $pass,
                'nama_admin' =>    $this->input->post('nama_admin'),
                'jenis_kelamin' =>    $this->input->post('jenis_kelamin'),
                'no_telp' =>    $this->input->post('telp'),
                'alamat' =>    $this->input->post('alamat')
            ];
            $this->AdminModel->create('admin', $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
					Berhasil Menambahkan Data Baru !
                </div>');

            return redirect('admin/admin');
        }
    }

    public function editAdmin($id)
    {
        $data['title']    =    'Edit Admin | DHIBS';
        $data['page']    =    '/admin/editAdmin';
        $data['dt_admin'] =     $this->db->get('user');
        $data['dt'] = $this->AdminModel->read('admin', 'id_admin', $id);

        // RULES FORM
        $this->form_validation->set_rules('nama_admin', 'Nama', 'required|trim', [
            'required'    =>    'Nama tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
            'required'    =>    'Alamat tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jk', 'required|trim', [
            'required'    =>    'Jenis Kelamin tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('telp', 'No Telepon', 'required|trim', [
            'required'    =>    'No Telepon / WA tidak boleh kosong! '
        ]);
        $this->form_validation->set_rules('email_admin', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required'    =>    'Email tidak boleh kosong! ',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required'    =>    'Password tidak boleh kosong! ',
            'matches'    =>    'Password tidak cocok dengan Konfirmasi password'

        ]);
        // $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password]', [
        //     'required'    =>    'Konfirmasi Password tidak boleh kosong! ',
        // ]);
        // END RULES FORM

        if ($this->form_validation->run() == FALSE) {
            $this->load->view($this->template, $data);
        } else {
            /* JIKA FORM BERNILAI SEBALIKNYA MAKA LANJUTKAN */

            $pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data = [
                'email_admin'   =>    $this->input->post('email_admin'),
                'password'      =>    $pass,
                'nama_admin'    =>    $this->input->post('nama_admin'),
                'jenis_kelamin' =>    $this->input->post('jenis_kelamin'),
                'no_telp'       =>    $this->input->post('telp'),
                'alamat'        =>    $this->input->post('alamat')
            ];
            $this->AdminModel->update('admin', 'id_admin', $id, $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
					Berhasil Mengubah Data !
                </div>');

            return redirect('admin/Admin');
        }
    }

    public function delete($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">
					Berhasil Mengapus Data !
                </div>');

        return redirect('admin/Admin');
    }

    public function cetak()
    {
        $data['title']    =    'Daftar Admin | DHIBS';
        $data['page']    =    '/admin/cetak_admin';
        $data['dt_admin'] =     $this->db->get('admin');

        $this->load->view($this->template, $data);
    }
}
