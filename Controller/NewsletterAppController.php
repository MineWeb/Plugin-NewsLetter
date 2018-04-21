<?php
class NewsletterAppController extends AppController {

	public function sendMailNewsletter($subject, $message){
		$usersNLetter = $this->User->find('all', array('conditions' => array('User.newsletter-state' => array("true"))));
		foreach($usersNLetter as $user):
			sleep(0.5);
			try {
				$this->Util->prepareMail($user['User']['email'], $subject, $message)->sendMail();
			}catch(SocketException $e){
				continue;
			}
		endforeach;
	}

}
