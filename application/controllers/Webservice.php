<?php

class Webservice extends CI_Controller
{
	
	public function registrasi()
	{
		$email = $this->input->post('email');
		$nik = $this->input->post('noKTP');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$noTel = $this->input->post('noTelp');

		$ObjectData = array(
			'email' => $email,
			'password' => $password,
			'nama' => $nama,
			'nik' => $nik,
			'nomor_telepon' => $noTel
		);

		$res = $this->user->insertData('registrasi', $ObjectData);
		$data['response'] = array();
		$response = array();
		if($res > 0){
			$response['status'] = '0';
			$response['message'] = 'Registrasi Berhasil';
			array_push($data['response'], $response);
			echo json_encode($data);
		}else{
			$response['status'] = '1';
			$response['message'] = 'Registrasi Gagal';
			array_push($data['response'], $response);
			echo json_encode($data);
		}
	}

	public function login()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');

		$objectData = array(
			'email' => $username,
			'password' => $password
		);

		$data['response'] = array();
		$response = array();
		
		$result = $this->user->cekLogin('registrasi', $objectData);

		if(sizeof($result) > 0){
			foreach ($result as $key => $value) {
				$response['email'] = $value->email;
				$response['nama'] = $value->nama;
				$response['nik'] = $value->nik;
				$response['password'] = $value->password;
				$response['nomor_telepon'] = $value->nomor_telepon;


				
				$response['status'] = 0;
				$response['message'] = 'Data Ditemukan';	
				array_push($data['response'], $response);
			}
			die(json_encode($data));
		}else{
			$response['status'] = 1;
			$response['message'] = 'Login Gagal';
			array_push($data['response'], $response);

			die(json_encode($data));
		}
	}

	public function lapor()
	{
		$ret = FALSE;
		$file_path = "./assets/upload/";
		$data['response'] = array();
		$response = array();

		$id = $this->input->post("id");
		$ktp = $this->input->post("noktp");
		$pos = $this->input->post("posisi");
		$jml = $this->input->post("jumlah_korban");
		$stts = $this->input->post("status_korban");
		$filename = $this->input->post('gambar');
		$fileContent = $this->input->post('file-content');
		$kondisi = $this->input->post("kondisi_korban");

		if(file_put_contents($file_path.$filename, base64_decode($fileContent))){
			$ret = TRUE;

			$objectData = array(
				'id' => $id,
				'noktp' => $ktp,
				'posisi' => $pos,
				'jumlah_korban' => $jml,
				'status_korban' => $stts,
				'gambar' => $filename,
				'kondisi_korban' => $kondisi
			);
			$insert = $this->user->insertData('lapor', $objectData);
			if($insert > 0){
				$ret = TRUE;
			}else{
				$ret = FALSE;
			}
		}else{
			$ret = FALSE;
		}

		if($ret){
			$response['status'] = 0;
			$response['message'] = 'Laporan Berhasil Dimasukkan';
			array_push($data['response'], $response);

			die(json_encode($data));
		}else{
			$response['status'] = 1;
			$response['message'] = 'Terjadi Kesalahan';
			array_push($data['response'], $response);

			die(json_encode($data));
		}
		
	}

}