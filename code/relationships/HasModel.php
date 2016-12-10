<?php
namespace Quaff\HTML\Relationships;

use Modular\Relationships\HasOne;

class HasModel extends HasOne {
	const RelationshipName = 'Model';
	const RelatedClassName = 'Modular\Model';
}
