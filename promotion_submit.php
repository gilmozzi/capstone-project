<?php
class Promotion {
  // (A) PROPERTIES
  private $pdo; // PDO object
  private $stmt; // SQL statement
  public $error; // Error message



  // (B) CONSTRUCTOR - CONNECT TO DATABASE
  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  // (C) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct() {
    $this->pdo = null;
    $this->stmt = null;
  }

  // (D) SAVE RESERVATION
  function save ($name, $email) {
    // (D1) CHECKS & RESTRICTIONS
    // @TODO - ADD YOUR OWN RULES & REGULATIONS HERE
    // MAX # OF RESERVATIONS ALLOWED?
    // USER CAN ONLY BOOK X DAYS IN ADVANCE?
    // USER CAN ONLY BOOK A MAX OF X SLOTS WITHIN Y DAYS?

    // (D2) DATABASE ENTRY
    try {
      $this->stmt = $this->pdo->prepare(
        "INSERT INTO `promotions` (`prm_name`, `prm_email`) VALUES (?,?)"
      );
      $this->stmt->execute([$name, $email]);
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }

    // (D3) EMAIL
    // @TODO - REMOVE IF YOU WANT TO MANUALLY CALL TO CONFIRM OR SOMETHING
    // OR EMAIL THIS TO A MANAGER OR SOMETHING
    $subject = "Promotion Request";
    $message = "Thank You. The promotion code is WIRED15 for 15% off of your concession purchase.";
    @mail($email, $subject, $message);
    return true;
  }

}

// (F) DATABASE SETTINGS
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', "db.luddy.indiana.edu");
define('DB_NAME', "i494f20_team70");
define('DB_CHARSET', 'utf8');
define('DB_USER', "i494f20_team70");
define('DB_PASSWORD', "my+sql=i494f20_team70");

// (G) NEW RESERVATION OBJECT
$_RSV = new Promotion();
