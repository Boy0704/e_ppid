<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Devisi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Devisi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'devisi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'devisi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'devisi/index.html';
            $config['first_url'] = base_url() . 'devisi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Devisi_model->total_rows($q);
        $devisi = $this->Devisi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'devisi_data' => $devisi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'judul_page' => 'devisi/devisi_list',
            'konten' => 'devisi/devisi_list',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Devisi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'ringkasan_informasi' => $row->ringkasan_informasi,
		'penjabat_yang_menguasai_informasi' => $row->penjabat_yang_menguasai_informasi,
		'penanggung_jawab' => $row->penanggung_jawab,
		'waktu_pembuatan' => $row->waktu_pembuatan,
		'bentuk_informasi' => $row->bentuk_informasi,
		'jangka_waktu' => $row->jangka_waktu,
		'kategori_informasi' => $row->kategori_informasi,
	    );
            $this->load->view('devisi/devisi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('devisi'));
        }
    }

    public function create() 
    {
        $data = array(
            'judul_page' => 'devisi/devisi_form',
            'konten' => 'devisi/devisi_form',
            'button' => 'Create',
            'action' => site_url('devisi/create_action'),
	    'id' => set_value('id'),
	    'ringkasan_informasi' => set_value('ringkasan_informasi'),
	    'penjabat_yang_menguasai_informasi' => set_value('penjabat_yang_menguasai_informasi'),
	    'penanggung_jawab' => set_value('penanggung_jawab'),
	    'waktu_pembuatan' => set_value('waktu_pembuatan'),
	    'bentuk_informasi' => set_value('bentuk_informasi'),
	    'jangka_waktu' => set_value('jangka_waktu'),
	    'kategori_informasi' => set_value('kategori_informasi'),
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
		'ringkasan_informasi' => $this->input->post('ringkasan_informasi',TRUE),
		'penjabat_yang_menguasai_informasi' => $this->input->post('penjabat_yang_menguasai_informasi',TRUE),
		'penanggung_jawab' => $this->input->post('penanggung_jawab',TRUE),
		'waktu_pembuatan' => $this->input->post('waktu_pembuatan',TRUE),
		'bentuk_informasi' => $this->input->post('bentuk_informasi',TRUE),
		'jangka_waktu' => $this->input->post('jangka_waktu',TRUE),
		'kategori_informasi' => $this->input->post('kategori_informasi',TRUE),
	    );

            $this->Devisi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('devisi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Devisi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => 'devisi/devisi_form',
                'konten' => 'devisi/devisi_form',
                'button' => 'Update',
                'action' => site_url('devisi/update_action'),
		'id' => set_value('id', $row->id),
		'ringkasan_informasi' => set_value('ringkasan_informasi', $row->ringkasan_informasi),
		'penjabat_yang_menguasai_informasi' => set_value('penjabat_yang_menguasai_informasi', $row->penjabat_yang_menguasai_informasi),
		'penanggung_jawab' => set_value('penanggung_jawab', $row->penanggung_jawab),
		'waktu_pembuatan' => set_value('waktu_pembuatan', $row->waktu_pembuatan),
		'bentuk_informasi' => set_value('bentuk_informasi', $row->bentuk_informasi),
		'jangka_waktu' => set_value('jangka_waktu', $row->jangka_waktu),
		'kategori_informasi' => set_value('kategori_informasi', $row->kategori_informasi),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('devisi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'ringkasan_informasi' => $this->input->post('ringkasan_informasi',TRUE),
		'penjabat_yang_menguasai_informasi' => $this->input->post('penjabat_yang_menguasai_informasi',TRUE),
		'penanggung_jawab' => $this->input->post('penanggung_jawab',TRUE),
		'waktu_pembuatan' => $this->input->post('waktu_pembuatan',TRUE),
		'bentuk_informasi' => $this->input->post('bentuk_informasi',TRUE),
		'jangka_waktu' => $this->input->post('jangka_waktu',TRUE),
		'kategori_informasi' => $this->input->post('kategori_informasi',TRUE),
	    );

            $this->Devisi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('devisi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Devisi_model->get_by_id($id);

        if ($row) {
            $this->Devisi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('devisi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('devisi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('ringkasan_informasi', 'ringkasan informasi', 'trim|required');
	$this->form_validation->set_rules('penjabat_yang_menguasai_informasi', 'penjabat yang menguasai informasi', 'trim|required');
	$this->form_validation->set_rules('penanggung_jawab', 'penanggung jawab', 'trim|required');
	$this->form_validation->set_rules('waktu_pembuatan', 'waktu pembuatan', 'trim|required');
	$this->form_validation->set_rules('bentuk_informasi', 'bentuk informasi', 'trim|required');
	$this->form_validation->set_rules('jangka_waktu', 'jangka waktu', 'trim|required');
	$this->form_validation->set_rules('kategori_informasi', 'kategori informasi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Devisi.php */
/* Location: ./application/controllers/Devisi.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2020-03-13 07:50:58 */
/* https://jualkoding.com */