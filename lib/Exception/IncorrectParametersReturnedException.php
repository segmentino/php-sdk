<?php
/**
 * @package     Segmentino
 * @copyright   2019 Segmentino. All rights reserved.
 * @author      Segmentino
 * @link        http://segmentino.com
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Segmentino\Exception;

/**
 * Exception representing an incorrect parameter set for an OAuth token request
 */
class IncorrectParametersReturnedException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Incorrect parameters returned.';
}
