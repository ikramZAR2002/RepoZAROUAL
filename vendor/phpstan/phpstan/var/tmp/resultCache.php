<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1739806108,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.5',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 70414,
  'projectConfig' => '{parameters: {level: 5, paths: [C:\\Users\\DELL\\Documents\\sprint3\\src], tmpDir: %rootDir%/var/tmp}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\DELL\\Documents\\sprint3\\src',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/DELL/Documents/sprint3/composer.lock' => 'c379f87a3664f34d6c4ea6e7fb24cd19dab32031',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/DELL/Documents/sprint3/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.5',
          'version' => '2.1.5.0',
          'reference' => '451b17f9665481ee502adc39be987cb71067ece2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\DELL\\Documents\\sprint3\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'squizlabs/php_codesniffer' => 
        array (
          'pretty_version' => '3.11.3',
          'version' => '3.11.3.0',
          'reference' => 'ba05f990e79cbe69b9f35c8c1ac8dca7eecc3a10',
          'type' => 'library',
          'install_path' => 'C:\\Users\\DELL\\Documents\\sprint3\\vendor\\composer/../squizlabs/php_codesniffer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar://C:\\Users\\DELL\\Documents\\sprint3\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar://C:\\Users\\DELL\\Documents\\sprint3\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://C:\\Users\\DELL\\Documents\\sprint3\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://C:\\Users\\DELL\\Documents\\sprint3\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'calendar',
    8 => 'ctype',
    9 => 'curl',
    10 => 'date',
    11 => 'dom',
    12 => 'filter',
    13 => 'hash',
    14 => 'iconv',
    15 => 'json',
    16 => 'libxml',
    17 => 'mbstring',
    18 => 'mysqlnd',
    19 => 'openssl',
    20 => 'pcre',
    21 => 'pdo_mysql',
    22 => 'readline',
    23 => 'session',
    24 => 'standard',
    25 => 'tokenizer',
    26 => 'xml',
    27 => 'xmlreader',
    28 => 'xmlwriter',
    29 => 'zip',
    30 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\DELL\\Documents\\sprint3\\src\\Step.php' => 
  array (
    0 => 
    PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'sumArray',
       'filePath' => 'C:\\Users\\DELL\\Documents\\sprint3\\src\\Step.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\FunctionWithoutImpurePointsCollector',
    )),
    1 => 
    PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'main',
        1 => 64,
      ),
       'filePath' => 'C:\\Users\\DELL\\Documents\\sprint3\\src\\Step.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector',
    )),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\DELL\\Documents\\sprint3\\src\\Step.php' => 
  array (
    'fileHash' => 'c79082f9c6af13f09f7794793f6efc49e09cdc7f',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\DELL\\Documents\\sprint3\\src\\Step.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'welcomeMessage',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Cette fonction affiche un message de bienvenue personnalisé.
 *
 * @param string $name Le nom de l\'utilisateur
 * @return void
 */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'name',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'displayArrayWithIndex',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Affiche les éléments d\'un tableau avec leur indice.
 *
 * @param array $array Le tableau d\'éléments
 * @return void
 */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'array',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'sumArray',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Calcule la somme des valeurs dans un tableau numérique.
 *
 * @param array $numbers Le tableau de nombres
 * @return int La somme des valeurs
 */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'numbers',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'main',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Fonction principale qui appelle toutes les autres fonctions.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
