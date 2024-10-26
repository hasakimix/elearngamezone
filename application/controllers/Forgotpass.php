<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Forgotpass extends MY_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'auth/';
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_auth_template';
        $data['primary_view'] = $this->_primary_view.'forgotpage';
		$this->load->view($data['final_view'], $data);   
	}

    public function send_reset()
    {
        $this->load->model("auth/Model_auth_main", "m_main");
        $input_POST = $this->input->post();

        $get_user = $this->m_main->getUserByEmail($input_POST["email"]);
        if($get_user){
            $send_email = $this->send_email(
				$input_POST["email"], 
				base_url("forgotpass/reset?e=".base64_encode($input_POST["email"]))
			);
			if($send_email){
				redirect(base_url("forgotpass/email_sent"));
			}else{
				$this->session->set_flashdata('error', 'Unable to send email.');
				redirect(base_url("forgotpass"));
			}
        }else{
            $this->session->set_flashdata('error', 'User Does Not Exist.');
			redirect(base_url("forgotpass"));
        }
    }

	public function email_sent()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_auth_template';
        $data['primary_view'] = $this->_primary_view.'email_sent';
		$this->load->view($data['final_view'], $data);   
	}

	public function reset()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_auth_template';
        $data['primary_view'] = $this->_primary_view.'reset';
		$this->load->view($data['final_view'], $data);   
	}

	public function save_password()
	{
        $this->load->model("auth/Model_auth_main", "m_main");
		$input_POST = $this->input->post();

        if($input_POST["password"] == $input_POST["confirm"]){
            $save_data = [
                "email" => $input_POST["email"],
                "password" => password_hash($input_POST["password"], PASSWORD_DEFAULT)
            ];
            $update = $this->m_main->update_user($input_POST["email"], $save_data);
            $this->session->set_flashdata('success', 'Password Successfully Saved.');
			$redirect = base_url();  
        }else{
            $this->session->set_flashdata('error', 'Password Does Not Match.');
			$redirect = base_url("forgotpass/reset?e=".base64_encode($input_POST["email"]));
        }  

        redirect($redirect);
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
            $mail->Subject = 'Reset Password Request';
            $mail->Body = "Click here to reset your password: <a href='".$link."'>Reset Password</a>";

            $mail->send();
            
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            die();
        }
    }
}

