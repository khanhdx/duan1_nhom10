<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class hoadon extends Model {
    protected $table = 'hoadon';
    protected $columns = [
        'id',
        'id_kh',
        'tinhtrang',
        'ngaylap',
        'tonggia',
        'noinhan',
        'nvgh',
        'ghichu',
    ];
}