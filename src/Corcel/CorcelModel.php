<?php

namespace Corcel;

use \Illuminate\Database\Eloquent\Model as Eloquent;
use Config;

abstract class CorcelModel extends Eloquent
{

    function __construct(){
    	if(!empty(Config::get('corcel.connection'))){
    		$this->connection = Config::get('corcel.connection');
    	}

    	parent::__construct();
    }
}