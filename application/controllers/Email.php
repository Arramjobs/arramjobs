<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('email');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('email_form');
    }

    public function send() {
        $to = $this->input->post('to');
        $message = $this->input->post('message');

        $config = array(
            'protocol' => 'smtp', 
            'smtp_host' => 'mail.arramjobs.in', 
            'smtp_port' => 465,
            'smtp_user' => 'arramjobs@arramjobs.in',
            'smtp_pass' => 'password',
            'mailtype'  => 'text',
            'charset'   => 'utf-8',
            'wordwrap'  => TRUE
        );

        $this->email->initialize($config);

        $this->email->set_newline("\r\n");
        $this->email->from('arramjobs@arramjobs.in', 'Arram Arrakattalai');
        $this->email->to($to); 
        $this->email->subject('Email from Arram Jobs');
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_flashdata('email_sent', array(
                'status'  => 'Email sent successfully.',
                'from'    => 'arramjobs@arramjobs.in',
                'to'      => $to,
                'message' => $message
            ));
        } else {
            $this->session->set_flashdata('email_sent', array(
                'status'  => 'Failed to send email.',
                'from'    => 'arramjobs@arramjobs.in',
                'to'      => $to,
                'message' => $message
            ));
        }
        redirect('email');
    }
}
