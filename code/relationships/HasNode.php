<?php
namespace Quaff\HTML\Relationships;

use Modular\Relationships\HasOne;

class HasNode extends HasOne {
	const RelationshipName = 'Node';
	const RelatedClassName = 'Modular\Models\HTML\Node';
	
}