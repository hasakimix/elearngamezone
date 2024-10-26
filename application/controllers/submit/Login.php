<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Login extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("auth/Model_auth_main", "m_main");
    }

	public function index()
	{

        $data = $this->input->post();

        $result = $this->m_main->validateUsernamePassword(make_string_safe($data['email']), $data['password']);
        if($result){
            $verification_code = rand(100000, 999999);
            $save_otp = $this->m_main->save_otp($result["id"], ["otp" => $verification_code]);
            if($save_otp){
                $send_email = $this->send_email($result["email"],$verification_code);
                if($send_email){
                    redirect(base_url('auth'));
                }else{
                    $this->session->set_flashdata('error', 'Email sending Failed');
                    redirect(base_url('/'));
                }
            }else{
                $this->session->set_flashdata('error', 'Saving OTP Failed');
                redirect(base_url('/'));
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Credentials');
            redirect(base_url('/'));
        }
	}

	 private function build_session($data)
    {
        $this->session->set_userdata([
            'id' => $data['id'],
            'email' => $data['email'],
            'logged_in' => true
        ]);
        return true;
    }

    private function buildCookies($data)
    {
        $cookie = [
            'expires' => (time() + AUTH_TOKEN_TIMEOUT),
            'secure' => (ENVIRONMENT == 'development') ? false : true,
            'domain' => getenv('APP_DOMAIN_NAME'),
            'path' => '/',
        ];
        setcookie('userUID', sha1($data['id']), $cookie);
        return true;
    }

    public function end_sessions()
    {
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
        $this->session->sess_destroy();

        if (isset($_COOKIE['userUID'])) {
            unset($_COOKIE['userUID']);
            setcookie('userUID', '', 1, '/'); // empty value and old timestamp
        }

        redirect(base_url('/'));
    }

    public function send_email($email, $code)
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
            $mail->Subject = 'Email Verification Code';
            $mail->Body = "Your verification code is: <b>$code</b>";

            $mail->send();
            
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            die();
        }
    }

    public function verification()
    {
        $data = $this->input->post();
        $code = $data['verification'];
        $get_otp = $this->m_main->validate_otp($code);
        if($get_otp){
            $this->m_main->save_otp($get_otp["id"], ["otp" => null]);
            if($this->build_session($get_otp)){
                if($this->buildCookies($get_otp)){
                    redirect(base_url('/home'));
                }else{
                    $this->session->set_flashdata('error', 'Unable to build cookies');
                    $this->end_sessions();
                }
            }else{
                $this->session->set_flashdata('error', 'Unable to build session');
                $this->end_sessions();
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Code');
            redirect(base_url('/'));
        }
    }

}

