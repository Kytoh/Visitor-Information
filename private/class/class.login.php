<?php
class login {
	public static function isLogged() {
		session_start ();
		if (! empty ( $_SESSION ['cookie'] )) {
			$query = $db->prepare ( 'SELECT u.last_log FROM username u WHERE u.username = :username and u.pattern = :pattern');
			$query->bind_param('username',$_SESSION['session']);
			$query->bind_param('pattern',$_SESSION['cookie']);
			$result = $query->get_result();
			
			while ( $row = $result->fetch_assoc() ){
				if ( date('Y-m-d', $row['last.log']) < date('Y-m-d', strtotime('+1 week')) ){
					return true;
				}else{
					return false;
				}
			}
		}else{
			return false;
		}
	}
	public static function log() {
		session_start ();
		if (! empty ( $_POST ['user'] )) {
			$query = $db->prepare ( 'SELECT count(id) FROM username u where u.user = :user AND password = md5(:password)' );
			$query->bind_param ( 'user', $_POST ['user'] )->bind_param ( 'password', $_POST ['password'] )->execute ();
			
			$result = $query->get_result ();
			while ( $row = $result->fetch_assoc () ) {
				if (! empty ( $row ['username'] ) and ! empty ( $row ['password'] )) {
					$patern = md5 ( time () . rand ( 1, 1000 ) );
					$_SESSION ['cookie'] = $pattern;
					$_SESSION ['session'] = $_POST['user'];
					$query = $db->prepare ( 'UPDATE username u set u.pattern = :patern and u.last_log = now() WHERE username = :username' )->bind_param('username',$_POST['user'])->bind_param ( 'patern', $patern )->execute ();
				}
			}
		}
	}
}
?>