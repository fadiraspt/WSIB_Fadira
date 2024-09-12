<?php
class person
{
    var $name;

    function __construct()
    {
        echo "<p>inisialisasi kelas</p>";
    }

    function set_name($new_name)
    {
        $this->name = $new_name;
    }
    function get_name()
    {
        return $this->name;
    }

    function __destruct()
    {
        echo "<p>end class</p>";
    }
}
