<?php
namespace Cake\Codeception\Lib\Generator;

use Codeception\Codecept;
use Codeception\Util\Template;

class Actor extends \Codeception\Lib\Generator\Actor
{
    protected $template = <<<EOF
<?php //[STAMP] {{hash}}

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

{{namespace}}

{{use}}
use Codeception\Actor;

/**
 * Inherited Methods
{{inheritedMethods}}
 *
 * @SuppressWarnings(PHPMD)
*/
class {{guy}} extends Actor
{
   {{methods}}
}

EOF;
}
