<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, array|string|null $input)
 * @property mixed account_domain
 * @property array|string|null name
 * @property string user_admin
 */
class AccountDomain extends Model {
    protected $table = "account_domains";
}
