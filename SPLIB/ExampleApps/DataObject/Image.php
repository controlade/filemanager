<?php
/**
 * Table Definition for image
 */
require_once 'DB/DataObject.php';

class DataObject_Image extends DB_DataObject 
{

    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'image';                           // table name
    var $image_id;                        // int(11)  not_null primary_key auto_increment
    var $name;                            // string(100)  not_null
    var $size;                            // int(11)  not_null
    var $type;                            // string(50)  not_null
    var $contents;                        // blob(65535)  not_null blob binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObject_Image',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>