
Exec { path => [ "/bin/", "/sbin/" , "/usr/bin/", "/usr/sbin/" ] }

service {
	'iptables':
		enable => false,
		ensure => "stopped"
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
