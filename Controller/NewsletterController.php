<?php
class NewsletterController extends NewsletterAppController{

    function admin_index(){
        $this->layout = "admin";
        $usersNLetter = $this->User->find('all', array('conditions' => array('User.newsletter-state' => array("true"))));
        $this->set(compact('usersNLetter'));
        $this->set('title_for_layout', 'Newsletter | Envoie de mails');
    }

    function admin_ajax_sendmail(){
      if(!$this->isConnected || !$this->User->isAdmin())
        throw new ForbiddenException();
      if(!$this->request->is('post'))
        throw new BadRequestException();
      $this->layout = null;
      $this->autoRender = false;
      $data = $this->request->data;
      if(empty($data['subjet_msg']) && empty($data['mail_msg']))
        return $this->sendJSON(['statut' => false, 'msg' => "Vous devez remplir tout les champs"]);
      $this->sendMailNewsletter($data['subjet_msg'], $data['mail_msg']);
      $this->sendJSON(['statut' => true, 'msg' => "Le mail a bien été envoyé ! Veuillez patienter quelque instants le temps que le serveur envoi touts les mails"]);
    }

    function ajax_updateluser(){
      if(!$this->isConnected)
        throw new ForbiddenException();
      if(!$this->request->is('post'))
        throw new BadRequestException();
      $this->layout = null;
      $this->autoRender = false;
      $data = $this->request->data;
      if(empty($data))
        return $this->sendJSON(['statut' => false, 'msg' => "Vous devez remplir tout les champs"]);
      if($data['newsletter-value'] != "true" && $data['newsletter-value'] != "false")
        return $this->sendJSON(['statut' => false, 'msg' => "Une erreur lors du paramètrage est survenue"]);
      $this->User->setKey('newsletter-state', $data['newsletter-value']);
      $this->sendJSON(['statut' => true, 'msg' => "Vos paramètres ont été enregistrés avec succès !"]);
    }
}
