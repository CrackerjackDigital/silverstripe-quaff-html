<?php

namespace Quaff\HTML\Relationships;

use Modular\Relationships\HasMany;

class HasAttributes extends HasMany {
	const RelationshipName = 'Attributes';
	const RelatedClassName = 'Modular\Models\HTML\Attribute';
}