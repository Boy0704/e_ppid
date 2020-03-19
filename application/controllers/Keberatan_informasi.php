<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keberatan_informasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Keberatan_informasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'keberatan_informasi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'keberatan_informasi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'keberatan_informasi/index.html';
            $config['first_url'] = base_url() . 'keberatan_informasi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Keberatan_informasi_model->total_rows($q);
        $keberatan_informasi = $this->Keberatan_informasi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'keberatan_informasi_data' => $keberatan_informasi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'judul_page' => 'keberatan_informasi/keberatan_informasi_list',
            'konten' => 'keberatan_informasi/keberatan_informasi_list',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Keberatan_informasi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'no_pendaftaran' => $row->no_pendaftaran,
		'tujuan_informasi' => $row->tujuan_informasi,
		'nama' => $row->nama,
		'alamat' => $row->alamat,
		'pekerjaan' => $row->pekerjaan,
		'no_telp' => $row->no_telp,
		'nama_kuasa' => $row->nama_kuasa,
		'alamat_kuasa' => $row->alamat_kuasa,
		'no_telp_kuasa' => $row->no_telp_kuasa,
		'alasan_pengajuan' => $row->alasan_pengajuan,
		'kasus_posisi' => $row->kasus_posisi,
        'judul_page' => 'keberatan_informasi/keberatan_informasi_detail',
            'konten' => 'keberatan_informasi/keberatan_informasi_read',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keberatan_informasi'));
        }
    }

    public function create() 
    {
        $data = array(
            'judul_page' => 'keberatan_informasi/keberatan_informasi_form',
            'konten' => 'keberatan_informasi/keberatan_informasi_form',
            'button' => 'Create',
            'action' => site_url('keberatan_informasi/create_action'),
	    'id' => set_value('id'),
	    'no_pendaftaran' => set_value('no_pendaftaran'),
	    'tujuan_informasi' => set_value('tujuan_informasi'),
	    'nama' => set_value('nama'),
	    'alamat' => set_value('alamat'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'no_telp' => set_value('no_telp'),
	    'nama_kuasa' => set_value('nama_kuasa'),
	    'alamat_kuasa' => set_value('alamat_kuasa'),
	    'no_telp_kuasa' => set_value('no_telp_kuasa'),
	    'alasan_pengajuan' => set_value('alasan_pengajuan'),
	    'kasus_posisi' => set_value('kasus_posisi'),
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'tujuan_informasi' => $this->input->post('tujuan_informasi',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'nama_kuasa' => $this->input->post('nama_kuasa',TRUE),
		'alamat_kuasa' => $this->input->post('alamat_kuasa',TRUE),
		'no_telp_kuasa' => $this->input->post('no_telp_kuasa',TRUE),
		'alasan_pengajuan' => $this->input->post('alasan_pengajuan',TRUE),
		'kasus_posisi' => $this->input->post('kasus_posisi',TRUE),
	    );

            $this->Keberatan_informasi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('keberatan_informasi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Keberatan_informasi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => 'keberatan_informasi/keberatan_informasi_form',
                'konten' => 'keberatan_informasi/keberatan_informasi_form',
                'button' => 'Update',
                'action' => site_url('keberatan_informasi/update_action'),
		'id' => set_value('id', $row->id),
		'no_pendaftaran' => set_value('no_pendaftaran', $row->no_pendaftaran),
		'tujuan_informasi' => set_value('tujuan_informasi', $row->tujuan_informasi),
		'nama' => set_value('nama', $row->nama),
		'alamat' => set_value('alamat', $row->alamat),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'nama_kuasa' => set_value('nama_kuasa', $row->nama_kuasa),
		'alamat_kuasa' => set_value('alamat_kuasa', $row->alamat_kuasa),
		'no_telp_kuasa' => set_value('no_telp_kuasa', $row->no_telp_kuasa),
		'alasan_pengajuan' => set_value('alasan_pengajuan', $row->alasan_pengajuan),
		'kasus_posisi' => set_value('kasus_posisi', $row->kasus_posisi),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keberatan_informasi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'tujuan_informasi' => $this->input->post('tujuan_informasi',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'nama_kuasa' => $this->input->post('nama_kuasa',TRUE),
		'alamat_kuasa' => $this->input->post('alamat_kuasa',TRUE),
		'no_telp_kuasa' => $this->input->post('no_telp_kuasa',TRUE),
		'alasan_pengajuan' => $this->input->post('alasan_pengajuan',TRUE),
		'kasus_posisi' => $this->input->post('kasus_posisi',TRUE),
	    );

            $this->Keberatan_informasi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keberatan_informasi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Keberatan_informasi_model->get_by_id($id);

        if ($row) {
            $this->Keberatan_informasi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keberatan_informasi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keberatan_informasi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_pendaftaran', 'no pendaftaran', 'trim|required');
	$this->form_validation->set_rules('tujuan_informasi', 'tujuan informasi', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('nama_kuasa', 'nama kuasa', 'trim|required');
	$this->form_validation->set_rules('alamat_kuasa', 'alamat kuasa', 'trim|required');
	$this->form_validation->set_rules('no_telp_kuasa', 'no telp kuasa', 'trim|required');
	$this->form_validation->set_rules('alasan_pengajuan', 'alasan pengajuan', 'trim|required');
	$this->form_validation->set_rules('kasus_posisi', 'kasus posisi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Keberatan_informasi.php */
/* Location: ./application/controllers/Keberatan_informasi.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2020-03-19 18:42:15 */
/* https://jualkoding.com */