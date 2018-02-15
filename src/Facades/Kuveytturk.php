<?php

/**
 * Description of Kuveytturk.php
 *
 * @author Faruk Çam <mail@farukix.com>
 * Copyright (c) 2018 | farukix.com
 */

namespace Farukcam\Kuveytturk\Facades;

use Illuminate\Support\Facades\Facade;

class Kuveytturk extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'kuveytturk';
    }
}
