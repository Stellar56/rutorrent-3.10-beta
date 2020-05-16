<?php

if(empty($pathToExternals['python'])) {	// May be path already defined?
	$pathToExternals['python'] = '/usr/bin/python2.7';// Something like /usr/bin/python. If empty, will be found in PATH.
}

?>