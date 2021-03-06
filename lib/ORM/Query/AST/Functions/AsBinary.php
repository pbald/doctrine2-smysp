<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PBald\SMySp\ORM\Query\AST\Functions;

use PBald\SMySp\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * ST_GeomFromWKB DQL function
 *
 * @author  Derek J. Lambert <dlambert@dereklambert.com>
 * @license http://dlambert.mit-license.org MIT
 */
class AsBinary extends AbstractSpatialDQLFunction
{
    protected $functionName = 'AsBinary';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}