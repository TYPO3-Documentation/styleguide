<?php
declare(strict_types=1);
namespace TYPO3\CMS\Styleguide\TcaDataGenerator\TableHandler;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * Abstract table handler implements general methods
 */
class AbstractTableHandler
{
    /**
     * @var string Table name to match
     */
    protected $tableName;

    /**
     * Match if given table name is registered table name
     *
     * @param string $tableName
     * @return bool
     */
    public function match(string $tableName): bool
    {
        return $tableName === $this->tableName;
    }

    /**
     * @return DatabaseConnection
     */
    protected function getDatabase(): DatabaseConnection
    {
        return $GLOBALS['TYPO3_DB'];
    }
}