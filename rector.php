<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodingStyle\Rector\FuncCall\FunctionFirstClassCallableRector;
use Rector\Config\RectorConfig;
use Rector\Php81\Rector\Array_\ArrayToFirstClassCallableRector;

return RectorConfig::configure()
	->withAutoloadPaths([
		__DIR__ . 'vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
	])
	->withRootFiles()
	->withPaths([
		__DIR__ . '/src',
		__DIR__ . '/tests',
		__DIR__ . '/views',
	])
	->withSkip([
		// This should stop Rector changing callable arrays to $this->function in WP's add_*.
        ArrayToFirstClassCallableRector::class,
        FunctionFirstClassCallableRector::class,
	])
	->withRules([
		InlineConstructorDefaultToPropertyRector::class,
	])
	->withPhpSets(php85: true);
