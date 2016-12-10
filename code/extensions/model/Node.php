<?php
namespace Quaff\Extensions\Model\HTML;

use Modular\ModelExtension;

class Node extends ModelExtension
{
	private static $quaff_map = [
		'id'        => 'NodeID',
		'nodeName'  => 'NodeName',
		'nodeType'  => 'NodeType',
		'nodeValue' => 'Content',
	];
	private static $db = [
		'NodeID'   => 'Varchar(255)',
		'NodeName' => 'Varchar(8)',
		'NodeType' => 'Varchar(8)',
		'Value'    => 'Text',
	];
	
}