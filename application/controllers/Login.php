<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}
	public function index(){
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password tidak boleh kosong !',
        ]);

		if ($this->form_validation->run() == false) {
			$data ['title']='Login';
			$this->load->view('template user/header',$data);
            $this->load->view('Login', $data);
            $this->load->view('template user/footer', $data);
        } else {
            $this->_login();
        }
		
	}

	public function logout()
    {
        $this->session->unset_userdata('login_session');

        // set_pesan('anda telah berhasil logout');
        redirect('Login');
    }


	private function _login()
    {
        $NIK = $this->input->post('NIK');
        $password = $this->input->post('password');

        $penduduk = $this->db->get_where('penduduk', ['NIK' => $NIK])->row_array();

        //jika user nya ada
        if ($penduduk) {
            //jika user nya atif

                //cek password
                if (password_verify($password, $penduduk['password'])) {
                    $data = [
                        'id_penduduk' => $penduduk['id_penduduk'],
                        'nama' => $penduduk['nama'],
                        'NIK' => $penduduk['NIK'],
                        'hak_akses' => $penduduk['hak_akses'],
                    ];
                    $this->session->set_userdata($data);
                    if ($penduduk['hak_akses'] == 'Penduduk') {
                        redirect('user/home_pelayanan');
                    }else if ($penduduk['hak_akses'] == 'Pegawai') {
						redirect('pegawai/home');
                } else if ($penduduk['hak_akses'] == 'RT') {
                    redirect('RT/home');
                } else if ($penduduk['hak_akses'] == 'RW') {
                    redirect('RW/home');
					}
					else {
                        redirect('admin/home');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                           Password Salah !
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('Login');
                }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Email is not registered
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('Login');
        }
    }
	
}
?>