<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permohonan_informasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Permohonan_informasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'permohonan_informasi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'permohonan_informasi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'permohonan_informasi/index.html';
            $config['first_url'] = base_url() . 'permohonan_informasi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Permohonan_informasi_model->total_rows($q);
        $permohonan_informasi = $this->Permohonan_informasi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'permohonan_informasi_data' => $permohonan_informasi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'judul_page' => 'permohonan_informasi/permohonan_informasi_list',
            'konten' => 'permohonan_informasi/permohonan_informasi_list',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Permohonan_informasi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'pekerjaan' => $row->pekerjaan,
		'no_telp' => $row->no_telp,
		'email' => $row->email,
		'informasi_dibutuhkan' => $row->informasi_dibutuhkan,
		'tujuan' => $row->tujuan,
		'cara1' => $row->cara1,
		'cara2' => $row->cara2,
		'salinan_informasi' => $row->salinan_informasi,
        'judul_page' => 'permohonan_informasi/permohonan_informasi_Detail',
            'konten' => 'permohonan_informasi/permohonan_informasi_read',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('permohonan_informasi'));
        }
    }

    public function create() 
    {
        $data = array(
            'judul_page' => 'permohonan_informasi/permohonan_informasi_form',
            'konten' => 'permohonan_informasi/permohonan_informasi_form',
            'button' => 'Create',
            'action' => site_url('permohonan_informasi/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'no_telp' => set_value('no_telp'),
	    'email' => set_value('email'),
	    'informasi_dibutuhkan' => set_value('informasi_dibutuhkan'),
	    'tujuan' => set_value('tujuan'),
	    'cara1' => set_value('cara1'),
	    'cara2' => set_value('cara2'),
	    'salinan_informasi' => set_value('salinan_informasi'),
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
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'informasi_dibutuhkan' => $this->input->post('informasi_dibutuhkan',TRUE),
		'tujuan' => $this->input->post('tujuan',TRUE),
		'cara1' => $this->input->post('cara1',TRUE),
		'cara2' => $this->input->post('cara2',TRUE),
		'salinan_informasi' => $this->input->post('salinan_informasi',TRUE),
	    );

            $this->Permohonan_informasi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('permohonan_informasi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Permohonan_informasi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => 'permohonan_informasi/permohonan_informasi_form',
                'konten' => 'permohonan_informasi/permohonan_informasi_form',
                'button' => 'Update',
                'action' => site_url('permohonan_informasi/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'email' => set_value('email', $row->email),
		'informasi_dibutuhkan' => set_value('informasi_dibutuhkan', $row->informasi_dibutuhkan),
		'tujuan' => set_value('tujuan', $row->tujuan),
		'cara1' => set_value('cara1', $row->cara1),
		'cara2' => set_value('cara2', $row->cara2),
		'salinan_informasi' => set_value('salinan_informasi', $row->salinan_informasi),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('permohonan_informasi'));
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
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'informasi_dibutuhkan' => $this->input->post('informasi_dibutuhkan',TRUE),
		'tujuan' => $this->input->post('tujuan',TRUE),
		'cara1' => $this->input->post('cara1',TRUE),
		'cara2' => $this->input->post('cara2',TRUE),
		'salinan_informasi' => $this->input->post('salinan_informasi',TRUE),
	    );

            $this->Permohonan_informasi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('permohonan_informasi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Permohonan_informasi_model->get_by_id($id);

        if ($row) {
            $this->Permohonan_informasi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('permohonan_informasi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('permohonan_informasi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('informasi_dibutuhkan', 'informasi dibutuhkan', 'trim|required');
	$this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
	$this->form_validation->set_rules('cara1', 'cara1', 'trim|required');
	$this->form_validation->set_rules('cara2', 'cara2', 'trim|required');
	$this->form_validation->set_rules('salinan_informasi', 'salinan informasi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Permohonan_informasi.php */
/* Location: ./application/controllers/Permohonan_informasi.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2020-03-19 18:42:08 */
/* https://jualkoding.com */