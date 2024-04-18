<?php

namespace Psalm\Tests\ReturnTypeProvider;

use Psalm\Tests\TestCase;
use Psalm\Tests\Traits\InvalidCodeAnalysisTestTrait;
use Psalm\Tests\Traits\ValidCodeAnalysisTestTrait;

class ImplodeTest extends TestCase
{
    use ValidCodeAnalysisTestTrait;

    public function providerValidCodeParse(): iterable
    {
//        yield 'non-empty-literal-string+non-empty-array<non-empty-literal-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var non-empty-array<non-empty-literal-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-empty-literal-string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+non-empty-array<literal-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var non-empty-array<literal-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-empty-literal-string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+non-empty-array<non-falsy-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var non-empty-array<non-falsy-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-falsy-string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+non-empty-array<non-empty-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var non-empty-array<non-empty-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-empty-string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+non-empty-array<string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var non-empty-array<string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-empty-string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+array<non-empty-literal-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var array<non-empty-literal-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'literal-string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+array<literal-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var array<literal-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'literal-string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+array<non-falsy-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var array<non-falsy-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+array<non-empty-string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var array<non-empty-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'string',
//            ],
//        ];
//
//        yield 'non-empty-literal-string+array<string>' => [
//            'code' => '<?php
//                /**
//                 * @var non-empty-literal-string $separator
//                 * @var array<string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'string',
//            ],
//        ];
//
//        yield 'literal-string+non-empty-array<non-empty-literal-string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var non-empty-array<non-empty-literal-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-empty-literal-string',
//            ],
//        ];

        yield 'literal-string+non-empty-array<literal-string>' => [
            'code' => '<?php
                /**
                 * @var literal-string $separator
                 * @var non-empty-array<literal-string> $array
                 */
                 $val = implode($separator, $array);
            ',
            'assertions' => [
                '$val===' => 'literal-string',
            ],
        ];

//        yield 'literal-string+non-empty-array<non-falsy-string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var non-empty-array<non-falsy-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-falsy-string',
//            ],
//        ];
//
//        yield 'literal-string+non-empty-array<non-empty-string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var non-empty-array<non-empty-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'non-empty-string',
//            ],
//        ];
//
//        yield 'literal-string+non-empty-array<string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var non-empty-array<string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'string',
//            ],
//        ];
//
//        yield 'literal-string+array<non-empty-literal-string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var array<non-empty-literal-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'literal-string',
//            ],
//        ];
//
//        yield 'literal-string+array<literal-string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var array<literal-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'literal-string',
//            ],
//        ];
//
//        yield 'literal-string+array<non-falsy-string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var array<non-falsy-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'string',
//            ],
//        ];
//
//        yield 'literal-string+array<non-empty-string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var array<non-empty-string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'string',
//            ],
//        ];
//
//        yield 'literal-string+array<string>' => [
//            'code' => '<?php
//                /**
//                 * @var literal-string $separator
//                 * @var array<string> $array
//                 */
//                 $val = implode($separator, $array);
//            ',
//            'assertions' => [
//                '$val===' => 'string',
//            ],
//        ];
    }
}
