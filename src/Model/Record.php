<?php

namespace FFormula\RobotSharpApi\Model;

use FFormula\RobotSharpApi\System\DB;

class Record
{
    /** @var DB */
    var $db;

    /** @var array */
    var $row;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

}