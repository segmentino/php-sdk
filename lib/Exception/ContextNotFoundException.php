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
 * Exception representing a requested API context which was not found
 */
class ContextNotFoundException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Context not found.';
}
