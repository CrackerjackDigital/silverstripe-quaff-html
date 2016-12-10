<?php
namespace Quaff\HTML\Relationships;

use Modular\Relationships\HasMany;

class HasChildren extends HasMany {
	const RelationshipName = 'Children';
	const RelatedClassName = 'Modular\Models\HTML\Node';
}
