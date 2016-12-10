<?php
namespace Quaff\Models\HTML;

use Modular\Model;

class Attribute extends Model {
	private static $quaff_map = [
		'name' => 'Name',
		'value' => 'Value',
		'ownerElement' => 'OwnerElement'
	];
	private static $db = [
		'Name'  => 'Varchar(32)',
		'Value' => 'Text',
	];
	private static $has_one = [
		'OwnerElement' => 'Quaff\Extensions\Model\HTML\Element'
	];
}