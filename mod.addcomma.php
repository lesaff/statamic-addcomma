<?php
/**
 * Modifier_addcomma
 * Add comma after each value
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2015
 * @link       https://github.com/lesaff
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.0       Initial release
 */

class Modifier_addcomma extends Modifier
{
    public function index($value, $parameters=array()) {
      if ($value)
        return ($value . ', ');
      else 
        return $value;
    }
}