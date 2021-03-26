<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'dev-requirement' => true,
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'almasaeed2010/adminlte' => 
    array (
      'pretty_version' => 'v3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b8b69261f1aacbb4be037c934f3c3652e6dff27',
      'dev-requirement' => false,
    ),
    'cordoval/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => 'v0.1.1',
      'version' => '0.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
      'dev-requirement' => false,
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
      'dev-requirement' => false,
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
      'dev-requirement' => true,
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
      'dev-requirement' => false,
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '65b2d8ee1f10915efb3b55597da3404f096acba2',
      'dev-requirement' => false,
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
      'dev-requirement' => false,
    ),
    'facade/flare-client-php' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef0f5bce23b30b32d98fd9bb49c6fa37b40eb546',
      'dev-requirement' => true,
    ),
    'facade/ignition' => 
    array (
      'pretty_version' => '1.16.15',
      'version' => '1.16.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6aea4a99303d9d32afd486a285162a89af8a8a3',
      'dev-requirement' => true,
    ),
    'facade/ignition-contracts' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
      'dev-requirement' => true,
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.4.1',
      'version' => '4.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c073b2bd04d1c90e04dc1b787662b558dd65ade0',
      'dev-requirement' => false,
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.11.0',
      'version' => '2.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6e14679f948d8a5cfb866fa7065a30c66bd64d3',
      'dev-requirement' => true,
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.9.2',
      'version' => '1.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
      'dev-requirement' => true,
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
      'dev-requirement' => true,
    ),
    'illuminate/auth' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/bus' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/cache' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/config' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/console' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/container' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/database' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/events' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/http' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/log' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/mail' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/queue' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/redis' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/routing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/session' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/support' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/translation' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/validation' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'illuminate/view' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v6.20.20',
      ),
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'jeroennoten/laravel-adminlte' => 
    array (
      'pretty_version' => 'v3.5.4',
      'version' => '3.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c155cf3b90b5679bc2edfbe873b2be5fa0f9815',
      'dev-requirement' => false,
    ),
    'kodova/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v6.20.20',
      'version' => '6.20.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '664a9432bcceb67871c5c9252f920d28f21dfc23',
      'dev-requirement' => false,
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
      'dev-requirement' => false,
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v1.0.10',
      'version' => '1.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad571aacbac1539c30d480908f9d0c9614eaf1a7',
      'dev-requirement' => false,
    ),
    'laravel/ui' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '21dc7e58896db977aad246e710b4810aaab9a968',
      'dev-requirement' => true,
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '1.5.7',
      'version' => '1.5.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '11df9b36fd4f1d2b727a73bf14931d81373b9a54',
      'dev-requirement' => false,
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9be3b16c877d477357c015cec057548cf9b2a14a',
      'dev-requirement' => false,
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
      'dev-requirement' => false,
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd1339f64479af1bee0e82a0413813fe5345a54ea',
      'dev-requirement' => true,
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
      'dev-requirement' => false,
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '1.10.2',
      ),
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.46.0',
      'version' => '2.46.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2fd2c4a77d58a4e95234c8a61c5df1f157a91bf4',
      'dev-requirement' => false,
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.10.4',
      'version' => '4.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6d052fc58cb876152f89f532b95a8d7907e7f0e',
      'dev-requirement' => false,
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f7c45764dfe4ba5f2618d265a6f1f9c72732e01d',
      'dev-requirement' => true,
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.6.1',
      'version' => '3.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '943b5d70cc5ae7483f6aff6ff43d7e34592ca0f5',
      'dev-requirement' => false,
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.99',
      'version' => '9.99.99.0',
      'aliases' => 
      array (
      ),
      'reference' => '84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
      'dev-requirement' => false,
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
      'dev-requirement' => true,
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bae7c545bef187884426f042434e561ab1ddb182',
      'dev-requirement' => true,
    ),
    'php-parallel-lint/php-console-color' => 
    array (
      'pretty_version' => 'v0.3',
      'version' => '0.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6af326b2088f1ad3b264696c9fd590ec395b49e',
      'dev-requirement' => false,
    ),
    'php-parallel-lint/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.5',
      'version' => '0.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '21bf002f077b177f056d8cb455c5ed573adfdbb8',
      'dev-requirement' => false,
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
      'dev-requirement' => true,
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
      'dev-requirement' => true,
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
      'dev-requirement' => true,
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
      'dev-requirement' => false,
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be1996ed8adc35c3fd795488a653f4b518be70ea',
      'dev-requirement' => true,
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '7.0.14',
      'version' => '7.0.14.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb7c9a210c72e4709cdde67f8b7362f672f2225c',
      'dev-requirement' => true,
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b49fb70f067272b659ef0174ff9ca40fdaa6357',
      'dev-requirement' => true,
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
      'dev-requirement' => true,
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.1.3',
      'version' => '2.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '2454ae1765516d20c4ffe103d85a58a9a3bd5662',
      'dev-requirement' => true,
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a853a0e183b9db7eed023d7933a858fa1c8d25a3',
      'dev-requirement' => true,
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '8.5.15',
      'version' => '8.5.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '038d4196d8e8cb405cd5e82cedfe413ad6eef9ef',
      'dev-requirement' => true,
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
      'dev-requirement' => false,
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
      'dev-requirement' => false,
    ),
    'psr/log-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
      'dev-requirement' => false,
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.9.12',
      'version' => '0.9.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '90da7f37568aee36b116a030c5f99c915267edd4',
      'dev-requirement' => false,
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.9.3',
      'version' => '3.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e1633a6964b48589b142d60542f9ed31bd37a92',
      'dev-requirement' => false,
    ),
    'rhumsaa/uuid' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '3.9.3',
      ),
    ),
    'scrivo/highlight.php' => 
    array (
      'pretty_version' => 'v9.18.1.6',
      'version' => '9.18.1.6',
      'aliases' => 
      array (
      ),
      'reference' => '44a3d4136edb5ad8551590bf90f437db80b2d466',
      'dev-requirement' => true,
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1de8cd5c010cb153fcd68b8d0f64606f523f7619',
      'dev-requirement' => true,
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '1071dfcef776a57013124ff35e1fc41ccd294758',
      'dev-requirement' => true,
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
      'dev-requirement' => true,
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '4.2.4',
      'version' => '4.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
      'dev-requirement' => true,
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.3',
      'version' => '3.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b853149eab67d4da22291d36f5b0631c0fd856e',
      'dev-requirement' => true,
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '474fb9edb7ab891665d3bfc6317f42a0a150454b',
      'dev-requirement' => true,
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.4',
      'version' => '3.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
      'dev-requirement' => true,
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
      'dev-requirement' => true,
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '367dcba38d6e1977be014dc4b22f47a484dac7fb',
      'dev-requirement' => true,
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '31d35ca87926450c44eae7e2611d45a7a65ea8b3',
      'dev-requirement' => true,
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0150cfbc4495ed2df3872fb31b26781e4e077eb4',
      'dev-requirement' => true,
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
      'dev-requirement' => true,
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '15f7faf8508e04471f666633addacf54c0ab5933',
      'dev-requirement' => false,
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c98349bda966c70d6c08b4cd8658377c94166492',
      'dev-requirement' => false,
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.2.4',
      'version' => '5.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f65f217b3314504a1ec99c2d6ef69016bb13490f',
      'dev-requirement' => false,
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '157bbec4fd773bae53c5483c50951a5530a2cc16',
      'dev-requirement' => false,
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5fa56b4074d1ae755beb55617ddafe6f5d78f665',
      'dev-requirement' => false,
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a191550d46b73a527b9d244f185fef439d41cf15',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c352647244bd376bf7d31efbd5401f13f50dad0c',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '84e23fdcd2517bf37aecbd16967e83f0caee25a7',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '2543795ab1570df588b9bbd31e1a2bd7037b94f6',
      'dev-requirement' => false,
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41db680a15018f9c1d4b23516059633ce280ca33',
      'dev-requirement' => false,
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '02d968647fe61b2f419a8dc70c468a9d30a48d3a',
      'dev-requirement' => false,
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f36548465489f293b05406f1770492f6efb8adb',
      'dev-requirement' => false,
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.2.5',
      'version' => '5.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '554ba128f1955038b45db5e1fa7e93bfc683b139',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '06fb361659649bcfd6a208a0f1fcaf4e827ad342',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d63434d922daf7da8dd863e7907e67ee3031483',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '43a0283138253ed1d48d352ab6d0bdb3f809f248',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
      'dev-requirement' => false,
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e950b6366d4da90292c2e7fa820b3c1842b965a',
      'dev-requirement' => false,
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '69919991c845b34626664ddc9b3aef9d09d2a5df',
      'dev-requirement' => false,
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd15da7ba4957ffb8f1747218be9e1a121fd298a1',
      'dev-requirement' => false,
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '2271b6d577018a7dea75a9162a08ac84f8234deb',
      'dev-requirement' => false,
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2eaa60b558f26a4b0354e1bbb25636efaaad105',
      'dev-requirement' => false,
    ),
    'symfony/translation-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a1eab2f69906dc83c5ddba4632180260d0ab4f7f',
      'dev-requirement' => false,
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
      'dev-requirement' => true,
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.3',
      'version' => '2.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b43b05cf43c1b6d849478965062b6ef73e223bb5',
      'dev-requirement' => false,
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v3.6.8',
      'version' => '3.6.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e679f7616db829358341e2d5cccbd18773bdab8',
      'dev-requirement' => false,
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
      'dev-requirement' => true,
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}










public static function isInstalled($packageName, $includeDevRequirements = true)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return $includeDevRequirements || empty($installed['versions'][$packageName]['dev-requirement']);
}
}

return false;
}













public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
