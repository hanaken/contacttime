<?php
namespace Model;
use \DB;

class Contact extends \Model {

    public static function get_results()
    {
        $results = DB::select('id','name')->from('name')->execute()->as_array();
        return $results;
    }

}