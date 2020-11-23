<?php
	ini_set('session.cookie_lifetime', 86400 * 7);
	ini_set('session.gc_maxlifetime', 86400 * 7);
	ini_set('session.save_path', 'c:/wamp/www/coming/sessions');
	session_start();
  ?>