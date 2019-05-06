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
 * Exception representing an unsupported action
 */
class ActionNotSupportedException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Action is not supported at this time.';
}
