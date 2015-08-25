<?php namespace Corcel\Models;

/**
 * Author model
 *
 * @author Ashwin Sureshkumar<ashwin.sureshkumar@gmail.com>
 */

class Author extends CorcelModel {

    protected $table = 'users';
    protected $primaryKey = 'ID';
    protected $hidden = ['user_pass'];


    /**
     * Posts relationship
     *
     * @return Corcel\PostMetaCollection
     */
    public function posts() {

        return $this->hasMany('Corcel\Models\Post', 'post_author');
    }
}

?>