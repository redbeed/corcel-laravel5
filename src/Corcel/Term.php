<?php

namespace Corcel;

class Term extends CorcelModel
{

    protected $table = 'terms';
    protected $primaryKey = 'term_id';


	public function taxonomy(){
		return $this->hasOne('App\Models\Database\Blog\TermTaxonomy', 'term_id', 'term_id');
	}
}