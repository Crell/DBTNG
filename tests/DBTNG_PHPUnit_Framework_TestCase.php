<?php

class DBTNG_PHPUnit_Framework_TestCase extends PHPUnit_Framework_TestCase {

  protected $databasePrefix;

  public function __construct() {
    parent::__construct();
    $settings = realpath(dirname(__FILE__) . '/../settings.php');
    require_once $settings;
  }

  public function setUp() {
    $this->databasePrefix = 'dbtngtest' . mt_rand(1000, 1000000);
    // Clone the current connection and replace the current prefix.
    $connection_info = Database::getConnectionInfo('default');
    Database::renameConnection('default', 'dbtng_original_default');
    foreach ($connection_info as $target => $value) {
      $connection_info[$target]['prefix'] = array(
        'default' => $value['prefix']['default'] . $this->databasePrefix,
      );
    }
    Database::addConnectionInfo('default', 'default', $connection_info['default']);
  }

  public function tearDown() {
    // This would be better if it were database specific, but for now we'll
    // live with information_schema.
    $connection_info = Database::getConnectionInfo('default');
    $result = db_query("SELECT table_name FROM information_schema.tables WHERE table_catalog = '" . $connection_info['database'] . "' AND table_schema = 'public'")->fetchAll();
    foreach ($result as $row) {
      db_drop_table($row->table_name);
    }

    // Get back to the original connection.
    Database::removeConnection('default');
    Database::renameConnection('dbtng_original_default', 'default');
  }

}
