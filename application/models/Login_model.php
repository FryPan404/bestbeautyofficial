<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function g_login()
    {
        $id_number = $this->input->post('id_number', true);
        $password = $this->input->post('password', true);
        $this->db->select('tbl_seller.*, tbl_role.name as role_name');
        $this->db->where('tbl_seller.id_number', $id_number);
        $this->db->join('tbl_role', 'tbl_seller.role_id = tbl_role.id', 'left');
        $this->db->limit(1);
        $this->db->order_by('tbl_seller.id', 'asc');
        $user = $this->db->get('tbl_seller')->row_array();
        if ($user) {
            if ($user['login_attempt']<=0) {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                        Anda terlalu banyak mencoba masuk. Silahkan hhbungi admin untuk mengaktifkan akun anda lagi!
                    </div>'
                );
                redirect('login');
            }else{
                if ($user['is_active'] == 1) {
                    if (password_verify($password, $user['password'])) {
                        if ($user['role_id'] >=1) {
                            $data = [
                                'id' => $user['id'],
                                'id_number' => $user['id_number'],
                                'name' => $user['name'],
                                'role_id' => $user['role_id'],
                                'role_name' => $user['role_name']
                            ];
                            $this->session->set_userdata($data);
                            $data=[
                                'login_attempt' => '5'
                            ];
                            $this->db->where('id', $user['id']);
                            $this->db->update('tbl_seller', $data);
                            redirect(base_url('portal/#home'));
                        } else {

                        }
                    } else {
                        $data=[
                            'login_attempt' => intval($user['login_attempt']) - 1
                        ];
                        $this->db->where('id', $user['id']);
                        $this->db->update('tbl_seller', $data);
                        $this->session->set_flashdata(
                            'pesan',
                            '<div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
	                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
	                            </button>
	                            Password yang anda masukan salah!
	                        </div>'
                        );
                        redirect('login');
                    }
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                            Akun anda belum aktif. Silahkan hubungi admin untuk mengaktifkan akun anda atau periksa email anda dan klik link aktivasinya!
                        </div>'
                    );
                    redirect('login');
                }
            }
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      
                    </button>
                    Anda belum terdaftar. Silahkan ajukan pendaftaran ke anggota Best Beauty!
                </div>'
            );
            redirect('login');
        }
    }
}
