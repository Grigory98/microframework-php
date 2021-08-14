<?php
// Нельзя вызывать методы get вместе с del из одного объекта.

namespace Core\Helpers;

class CookieShell {
	
	public function set($name, $value, $time) {
            // set Cookie
            setcookie($name, $value, $time);
            $_COOKIE[$name] = $value;
	}
	
	public function get($name) {
            // get Cookie
            var_dump($_COOKIE[$name]);
	}
	
	public function del($name) {
            // delete Cookie
            unset($_COOKIE[$name]);
            setcookie($name, null, -1, '/');
	}
	
	public function exists($name) {
            // Check cookie
            return isset($_COOKIE[$name]);
	}
	
	public function debug() {
            var_dump($_COOKIE);
	}
}