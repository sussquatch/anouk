# Open port 20000
Exec { path => [ "/bin/", "/sbin/" , "/usr/bin/", "/usr/sbin/" ] }

exec { 
	'open Anouk port':
	    command => "iptables -A INPUT -p tcp --dport 20000 -j ACCEPT"
}

#Install Apache
class {
	'apache':

}

apache::vhost {
		'www.anouklocal.com':
			vhost_name => '*',
			port => 20000,
			docroot => '/anouk',
			serveraliases => ['anouklocal.com',]	
}

#Install PHP

php::ini { '/etc/httpd/conf/php.ini':
	mail_add_x_header => 'Off',
  	# For the parent directory
  	require => Package['httpd'],
}

class { 
	'php::mod_php5': inifile => '/etc/httpd/conf/php.ini' 
}
