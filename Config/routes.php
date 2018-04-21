<?php
Router::connect('/admin/newsletter', ['controller' => 'Newsletter', 'action' => 'index', 'plugin' => 'Newsletter', 'admin' => true]);
Router::connect('/admin/newsletter/ajax_sendmail', ['controller' => 'Newsletter', 'action' => 'ajax_sendmail', 'plugin' => 'Newsletter', 'admin' => true]);
Router::connect('/newsletter/ajax_updateluser', array('controller' => 'Newsletter', 'action' => 'ajax_updateluser', 'plugin' => 'Newsletter'));
