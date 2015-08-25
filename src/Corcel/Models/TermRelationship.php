<?php

namespace Corcel\Models;

class TermRelationship extends CorcelModel
{
    protected $table = 'term_relationships';
    protected $primaryKey = array('object_id', 'term_taxonomy_id');

    public function post()
    {
        return $this->belongsTo('Corcel\Models\Post', 'object_id');
    }

    public function taxonomy()
    {
        return $this->belongsTo('Corcel\Models\TermTaxonomy', 'term_taxonomy_id');
    }
}