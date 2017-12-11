<?php
namespace Vanderbilt\SharedDependencyExample2;
require_once 'vendor/autoload.php';

use Vanderbilt\SharedLibraryExample\SharedLibraryExample;

class SharedDependencyExample2 extends \ExternalModules\AbstractExternalModule{
	public function redcap_control_center(){
		SharedLibraryExample::echoCachedRandomNumber();
	}
}