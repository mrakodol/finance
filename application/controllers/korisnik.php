<?php

class Korisnik extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
    	
	function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('korisnik/pocetna');
        }else{
        	$this->load->view('korisnik/prijava');	
        }
	}

    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return sha1(md5($password."jnwk813i1Bep3FWR0okH")."4f2EGd8kRU7hhC1m56w3");
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function prijava()
	{	
		$korisnickoime = $this->input->post('korisnickoime');
		$lozinka = $this->__encrip_password($this->input->post('lozinka'));
		
		$is_valid = $this->Korisnici_model->provjera($korisnickoime, $lozinka);
		
		if($is_valid)
		{
			$data = array(
				'user_name' => $korisnickoime,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('korisnik/pocetna');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('prijava', $data);	
		}
	}
	
	function pocetna()
	{
		$data['message'] = "Dobrodosli";
		 $data['main_content'] = 'korisnik/pocetna';
        $this->load->view('includes/template', $data); 
	}	
	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function odjava()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}