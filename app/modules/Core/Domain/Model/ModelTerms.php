<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:29 PM
 */

namespace App\modules\Core\Domain\Model;


class ModelTerms
{
// Operators
    const EQ = '=';
    const NE = '!=';

    const LT = '<';
    const GT = '>';
    const LTE = '<=';
    const GTE = '>=';

    const IN = 'IN';
    const NOT_IN = 'NOT_IN';

    const CONTAIN = 'CONTAIN';
    const NOT_CONTAIN = 'NOT_CONTAIN';
    const START_WITH = 'START_WITH';
    const END_WITH = 'END_WITH';


    // Order BY
    const ASC = 'ASC';
    const DESC = 'DESC';
}