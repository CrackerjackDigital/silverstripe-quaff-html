<?php
namespace Quaff\HTML\Relationships;

use Modular\Relationships\HasOne;

class HasParent extends HasOne {
	const RelationshipName = 'Parent';
	const RelatedClassName = 'Modular\Models\HTML\Node';
}
