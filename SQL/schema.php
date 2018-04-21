<?php
class NewsletterAppSchema extends CakeSchema {

    public $file = 'schema.php';

    public function before($event = []) {
        return true;
    }

    public function after($event = []) {}

      public $users = [
          'newsletter-state' => array('type' => 'string', 'null' => false, 'default' => 'true', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1')
      ];
}
