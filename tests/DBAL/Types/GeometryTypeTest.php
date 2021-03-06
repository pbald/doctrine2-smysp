<?php

/*
 * Copyright (C) 2016 Pietro Baldassarri <pietro.baldassarri@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace PBald\SMySp\Tests\DBAL\Types;

use GeoPHP\GeoPhp;
use PBald\SMySp\DBAL\Types\GeometryType;
use PBald\SMySp\Tests\DBAL\Types\AbstractGeometryTypeTest;
use PBald\SMySp\Tests\Fixtures\GeometryEntity;

/**
 * Description of MultiPointTest
 *
 * @author Pietro Baldassarri <pietro.baldassarri@gmail.com>
 */
class GeometryTypeTest extends AbstractGeometryTypeTest {

    /**
     *  {@inheritDoc}
     */
    protected function setUpSpecificGeometry() {
        $this->doctrineType = $this->dbtype = 'geometry';
        $this->geometryTypeClassName = GeometryType::class;
        $this->fixtureEntityClassName = GeometryEntity::class;
        $this->wkts = array(
            'POINT (1 3)',
            'MULTIPOINT (3.5 5.6, 4.8 10.5)',
            'LINESTRING (3 4, 10 50, 20 25)',
            'MULTILINESTRING ((3 4, 10 50, 20 25), (-5 -8, -10 -8, -15 -4))',
            'POLYGON ((1 1, 5 1, 5 5, 1 5, 1 1), (2 2, 3 2, 3 3, 2 3, 2 2))',
            'MULTIPOLYGON (((1 1, 5 1, 5 5, 1 5, 1 1), (2 2, 3 2, 3 3, 2 3, 2 2)), ((3 3, 6 2, 6 4, 3 3)))',
            'GEOMETRYCOLLECTION (MULTIPOINT (3.5 5.6, 4.8 10.5), POLYGON ((1 1, 5 1, 5 5, 1 5, 1 1), (2 2, 3 2, 3 3, 2 3, 2 2)))'
        );
    }

    public function testGeomsPersistence() {
        foreach ($this->getTestEntities() as $entity) {
            $this->_testGeomPersistence($entity);
        }
    }

}
