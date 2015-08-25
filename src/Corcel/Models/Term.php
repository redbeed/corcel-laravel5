<?php

namespace Corcel\Models;

class Term extends CorcelModel
{

    protected $table = 'terms';
    protected $primaryKey = 'term_id';


	public function taxonomy(){
		return $this->hasOne('Corcel\Models\TermTaxonomy', 'term_id', 'term_id');
	}
}