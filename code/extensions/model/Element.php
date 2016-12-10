<?php
namespace Quaff\Extensions\Model\HTML;

class Element extends Node {
	private static $quaff_map = [
		'tagName'   => 'TagName',
	];
	private static $db = [
		'TagName'  => 'Varchar(8)',
	];
}

