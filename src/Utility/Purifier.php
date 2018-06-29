<?php
/**
 * Passbolt ~ Open source password manager for teams
 * Copyright (c) Passbolt SARL (https://www.passbolt.com)
 *
 * Licensed under GNU Affero General Public License version 3 of the or any later version.
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Passbolt SARL (https://www.passbolt.com)
 * @license       https://opensource.org/licenses/AGPL-3.0 AGPL License
 * @link          https://www.passbolt.com Passbolt(tm)
 * @since         2.0.0
 */
namespace App\Utility;

class Purifier
{
    /**
     * Purify a html string using HTMLPurifier
     * @param mixed $html html to clean
     * @return mixed
     */
    public static function clean($html)
    {
        $config = \HTMLPurifier_Config::createDefault();
        $purifier = new \HTMLPurifier($config);
        if (is_string($html)) {
            return $purifier->purify($html);
        }
        if (is_array($html)) {
            return $purifier->purifyArray($html);
        }

        return null;
    }
}
