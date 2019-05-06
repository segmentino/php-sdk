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
 * Exception representing a required parameter is missing for Basic Authentication
 */
class RequiredParameterMissingException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Required Parameter is missing.';
}
