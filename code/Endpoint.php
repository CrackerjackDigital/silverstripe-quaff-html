<?php
namespace Quaff\HTML;

use Quaff\Models\HTML\NodeList as Model;
use Quaff\Responses\HTML\Response as Response;

class Endpoint extends \Quaff\Endpoints\Endpoint
{
	const ModelClass = Model::class;
	const ResponseClass = Response::class;
	
	private static $info = [
		'name' => 'html',
		'path' => '//',
	];
	
	public function version()
	{
		return "1.1";
	}
	
	public function auth()
	{
		return null;
	}
	
}
