<?php
namespace Quaff\HTML\Relationships;

use Modular\Relationships\HasOne;

class HasElement extends HasOne {
	const RelationshipName = 'Element';
	const RelatedClassName = 'Modular\Models\HTML\Element';
	
}