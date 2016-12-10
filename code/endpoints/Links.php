<?php
namespace Quaff\HTML\Endpoints;

use Modular\Fields\ExternalLink as Model;
use Quaff\HTML\Endpoints;
use Quaff\Responses\HTML as Response;

class Links extends HTML
{
	const ModelClass = Model::class;
	const ResponseClass = Response::class;
}
