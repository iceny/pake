<?php
class BaseController{
	protected $view;
	protected $mail;

	public function _construct(){
		
	}

	public function __destruct()

  {

    $view = $this->view;                 //处理视图

    if ( $view instanceof View ) {

      extract($view->data);

      require $view->view;

    }

     $mail = $this->mail;                //处理邮件

  if ( $mail instanceof Mail ) {

    $mailer = new Nette\Mail\SmtpMailer($mail->config);

    $mailer->send($mail);

  }


  }

}