<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('id')) {
        //redirect('session_expired');
        echo '<script>document.location.href="'.base_url().'login";</script>';
        exit();
    } else {
        // $role_id = $ci->session->userdata('role_id');
        // $menu = $ci->uri->segment(1);
        // if (!$ci->uri->segment(1)) {
        //     $menu='';
        // }

        // $userAkses = $ci->db->get_where('tbl_user_access', ['role_id' => $role_id, 'name' => $menu]);

        // if ($ci->session->userdata('role_id')<=1) {
            
        // }else{
        //     if ($userAkses->num_rows() < 1) {
        //         redirect('not_found');
        //     }
        // }
        
    }
}

function rupiah($angka){
    return number_format($angka,2,",",".");
}

function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function format_tanggal_indo($text='0000-00-00')
{
    $master = explode('-', $text);
    $tanggal = $master[2];
    $bulan = $master[1];
    $tahun = $master[0];
    return $tanggal.'-'.$bulan.'-'.$tahun;
}

function master_title(){
    return 'Portal - Best Beauty Official';
}

function get_bulan_indo($bulan_angka)
{
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );

    return $bulan[intval($bulan_angka)];
}

