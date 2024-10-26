<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class Register extends MY_Controller {
	
	protected $_template = 'layouts/templates/';
	protected $_primary_view = 'auth/';

	public function construct(){
    	parent::construct();
	}

	public function index()
	{
		$this->load->model("auth/Model_auth_main", "m_main");
		$input_POST = $this->input->post();

		$save_data = [
			"first_name" => $input_POST["first_name"],
			"last_name" => $input_POST["last_name"],
			"email" => $input_POST["email"],
			"password" => password_hash($input_POST["password"], PASSWORD_DEFAULT)
		]; 
		$save_result = $this->m_main->save($save_data);
		if($save_result){
			$send_email = $this->send_email(
				$input_POST["email"], 
				base_url("submit/register/verify?e=".base64_encode($input_POST["email"]))
			);
			if($send_email){
				redirect(base_url("submit/register/verify_email"));
			}else{
				$this->session->set_flashdata('error', 'Unable to send email.');
				redirect(base_url());
			}
		}else{
			$this->session->set_flashdata('error', 'Unable to save user data.');
			redirect(base_url());
		}	
	}

	public function verify_email()
	{
		$data = &$this->data;
        $data['final_view'] = $this->_template.'_auth_template';
        $data['primary_view'] = $this->_primary_view.'verify_email';
		$this->load->view($data['final_view'], $data);   
	}

	public function verify()
	{
		$this->load->model("auth/Model_auth_main", "m_main");
		if(isset($_GET["e"])){
			$email = base64_decode($_GET["e"]);
			$save_result = $this->m_main->update_user($email, ["is_verified" => 1]);
			if($save_result){
				$this->session->set_flashdata('success', 'Email Successfully Verified. You can now sign in.');
				redirect(base_url());
			}else{
				$this->session->set_flashdata('error', 'Unable to verify email.');
				redirect(base_url());
			}
		}else{
			$this->session->set_flashdata('error', 'Failed to verify email.');
			redirect(base_url());
		}
	}

	public function send_email($email, $link)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_CLIENT; 
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = "elearngamessmtp@gmail.com"; // Your Gmail address
            $mail->Password = "xifg dywi uxyi tvca"; // Your Gmail password or App password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('elearngamessmtp@gmail.com', 'Two Factor Authentication');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Verify Your Email';
            $mail->Body = "Click here to verify your email: <a href='".$link."'>Verify Email Address</a>";

            $mail->send();
            
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            die();
        }
    }
}

