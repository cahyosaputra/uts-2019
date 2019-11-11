<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa_controler extends CI_Controller {

	public function index()
	{
		$data= $this->model->GetTable('mahasiswa');
		$this->load->view('view', array('data'=>$data));
	}

	public function log()
	{
		$data= $this->model->GetTablelog('log');
		$this->load->view('log', array('data'=>$data));
	}

	public function insert()
	{
		if(isset($_POST['submit'])){
			$nim = $this->input->post('nim');
			$nama_mhs = $this->input->post('nama_mhs');
			$kelamin = $this->input->post('kelamin');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$data = array('nim'=>$nim, 'nama_mhs'=>$nama_mhs, 'kelamin'=>$kelamin,'alamat'=>$alamat,'no_hp'=>$no_hp);
			$this->model->InsertData('mahasiswa', $data);
			redirect('Mahasiswa_controler');
		}else{
			$this->load->view('tambahdata');
		}
	}

	public function update(){
		if(isset($_POST['submit'])){
			$nim = $this->input->post('nim');
			$nama_mhs = $this->input->post('nama_mhs');
			$kelamin = $this->input->post('kelamin');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$data = array('nim'=>$nim, 'nama_mhs'=>$nama_mhs, 'kelamin'=>$kelamin,'alamat'=>$alamat,'no_hp'=>$no_hp);
			$this->model->UpdateData('mahasiswa', $data,'nim',$nim);
			redirect('Mahasiswa_controler');
		}else{
			$id = $this->uri->segment(3);
			$data = $this->model->getByID('mahasiswa','nim',$id)->row_array();
			$this->load->view('update',array('r'=>$data));
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model->DeleteData('mahasiswa','nim',$id);
		redirect('Mahasiswa_controler');
	}
}