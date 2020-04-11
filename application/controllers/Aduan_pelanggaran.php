<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aduan_pelanggaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Aduan_pelanggaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'aduan_pelanggaran/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'aduan_pelanggaran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'aduan_pelanggaran/index.html';
            $config['first_url'] = base_url() . 'aduan_pelanggaran/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Aduan_pelanggaran_model->total_rows($q);
        $aduan_pelanggaran = $this->Aduan_pelanggaran_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'aduan_pelanggaran_data' => $aduan_pelanggaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'judul_page' => 'aduan_pelanggaran/aduan_pelanggaran_list',
            'konten' => 'aduan_pelanggaran/aduan_pelanggaran_list',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Aduan_pelanggaran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'alamat' => $row->alamat,
		'upload_identitas' => $row->upload_identitas,
		'no_telp' => $row->no_telp,
		'email' => $row->email,
        'peristiwa' => $row->peristiwa,
        'tempat_kejadian' => $row->tempat_kejadian,
        'tgl_kejadian' => $row->tgl_kejadian,
        'waktu_kejadian' => $row->waktu_kejadian,
        'terlapor' => $row->terlapor,
        'alamat_terlapor' => $row->alamat_terlapor,
        'no_telp_terlapor' => $row->no_telp_terlapor,
		'nama_saksi' => $row->nama_saksi,
		'alamat_saksi' => $row->alamat_saksi,
		'no_telp_saksi' => $row->no_telp_saksi,
		'upload_bukti1' => $row->upload_bukti1,
		'upload_bukti2' => $row->upload_bukti2,
		'uraian_singkat' => $row->uraian_singkat,
        'judul_page' => 'aduan_pelanggaran/aduan_pelanggaran_detail',
            'konten' => 'aduan_pelanggaran/aduan_pelanggaran_read',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('aduan_pelanggaran'));
        }
    }

    public function create() 
    {
        $data = array(
            'judul_page' => 'aduan_pelanggaran/aduan_pelanggaran_form',
            'konten' => 'aduan_pelanggaran/aduan_pelanggaran_form',
            'button' => 'Create',
            'action' => site_url('aduan_pelanggaran/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'alamat' => set_value('alamat'),
	    'upload_identitas' => set_value('upload_identitas'),
	    'no_telp' => set_value('no_telp'),
	    'email' => set_value('email'),
        'peristiwa' => set_value('peristiwa'),
        'tempat_kejadian' => set_value('tempat_kejadian'),
        'tgl_kejadian' => set_value('tgl_kejadian'),
        'waktu_kejadian' => set_value('waktu_kejadian'),
        'terlapor' => set_value('terlapor'),
        'alamat_terlapor' => set_value('alamat_terlapor'),
        'no_telp_terlapor' => set_value('no_telp_terlapor'),
	    'nama_saksi' => set_value('nama_saksi'),
	    'alamat_saksi' => set_value('alamat_saksi'),
	    'no_telp_saksi' => set_value('no_telp_saksi'),
	    'upload_bukti1' => set_value('upload_bukti1'),
	    'upload_bukti2' => set_value('upload_bukti2'),
	    'uraian_singkat' => set_value('uraian_singkat'),
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
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'upload_identitas' => $this->input->post('upload_identitas',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'peristiwa' => $this->input->post('peristiwa',TRUE),
		'nama_saksi' => $this->input->post('nama_saksi',TRUE),
		'alamat_saksi' => $this->input->post('alamat_saksi',TRUE),
		'no_telp_saksi' => $this->input->post('no_telp_saksi',TRUE),
		'upload_bukti1' => $this->input->post('upload_bukti1',TRUE),
		'upload_bukti2' => $this->input->post('upload_bukti2',TRUE),
		'uraian_singkat' => $this->input->post('uraian_singkat',TRUE),
	    );

            $this->Aduan_pelanggaran_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('aduan_pelanggaran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Aduan_pelanggaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => 'aduan_pelanggaran/aduan_pelanggaran_form',
                'konten' => 'aduan_pelanggaran/aduan_pelanggaran_form',
                'button' => 'Update',
                'action' => site_url('aduan_pelanggaran/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'alamat' => set_value('alamat', $row->alamat),
		'upload_identitas' => set_value('upload_identitas', $row->upload_identitas),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'email' => set_value('email', $row->email),
        'peristiwa' => set_value('peristiwa', $row->peristiwa),
        'tempat_kejadian' => set_value('tempat_kejadian', $row->tempat_kejadian),
        'tgl_kejadian' => set_value('tgl_kejadian', $row->tgl_kejadian),
        'waktu_kejadian' => set_value('waktu_kejadian', $row->waktu_kejadian),
        'terlapor' => set_value('terlapor', $row->terlapor),
        'alamat_terlapor' => set_value('alamat_terlapor', $row->alamat_terlapor),
		'no_telp_terlapor' => set_value('no_telp_terlapor', $row->no_telp_terlapor),
		'nama_saksi' => set_value('nama_saksi', $row->nama_saksi),
		'alamat_saksi' => set_value('alamat_saksi', $row->alamat_saksi),
		'no_telp_saksi' => set_value('no_telp_saksi', $row->no_telp_saksi),
		'upload_bukti1' => set_value('upload_bukti1', $row->upload_bukti1),
		'upload_bukti2' => set_value('upload_bukti2', $row->upload_bukti2),
		'uraian_singkat' => set_value('uraian_singkat', $row->uraian_singkat),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('aduan_pelanggaran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'upload_identitas' => $this->input->post('upload_identitas',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
        'peristiwa' => $this->input->post('peristiwa',TRUE),
        'tempat_kejadian' => $this->input->post('tempat_kejadian',TRUE),
        'tgl_kejadian' => $this->input->post('tgl_kejadian',TRUE),
        'waktu_kejadian' => $this->input->post('waktu_kejadian',TRUE),
        'terlapor' => $this->input->post('terlapor',TRUE),
        'alamat_terlapor' => $this->input->post('alamat_terlapor',TRUE),
		'no_telp_terlapor' => $this->input->post('no_telp_terlapor',TRUE),
		'nama_saksi' => $this->input->post('nama_saksi',TRUE),
		'alamat_saksi' => $this->input->post('alamat_saksi',TRUE),
		'no_telp_saksi' => $this->input->post('no_telp_saksi',TRUE),
		'upload_bukti1' => $this->input->post('upload_bukti1',TRUE),
		'upload_bukti2' => $this->input->post('upload_bukti2',TRUE),
		'uraian_singkat' => $this->input->post('uraian_singkat',TRUE),
	    );

            $this->Aduan_pelanggaran_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('aduan_pelanggaran'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Aduan_pelanggaran_model->get_by_id($id);

        if ($row) {
            $this->Aduan_pelanggaran_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('aduan_pelanggaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('aduan_pelanggaran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('upload_identitas', 'upload identitas', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('peristiwa', 'peristiwa', 'trim|required');
	$this->form_validation->set_rules('nama_saksi', 'nama saksi', 'trim|required');
	$this->form_validation->set_rules('alamat_saksi', 'alamat saksi', 'trim|required');
	$this->form_validation->set_rules('no_telp_saksi', 'no telp saksi', 'trim|required');
	$this->form_validation->set_rules('upload_bukti1', 'upload bukti1', 'trim|required');
	$this->form_validation->set_rules('upload_bukti2', 'upload bukti2', 'trim|required');
	$this->form_validation->set_rules('uraian_singkat', 'uraian singkat', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Aduan_pelanggaran.php */
/* Location: ./application/controllers/Aduan_pelanggaran.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2020-03-19 18:42:20 */
/* https://jualkoding.com */