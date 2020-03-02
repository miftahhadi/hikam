<?php
try {
  //We need these stuffs
  include __DIR__ . '/includes/DatabaseConnection.php';
  include __DIR__ . '/classes/DatabaseTable.php';
  include __DIR__ . '/classes/controller/QuotesController.php';

  /// Instantiate database table object
  $quotesTable = new DatabaseTable($pdo, 'quotes', 'quote_id');
  $usersTable = new DatabaseTable($pdo, 'users', 'user_id');

  // Instantiate new controller
  $quotesController = new QuotesController($quotesTable, $usersTable);

  // Get the current action from the url
  $action = $_GET['action'] ?? 'home';

  if ($action == strtolower($action)) {
    // Call the action method
    $page = $quotesController->$action();
  } else {
    http_response_code(301);
    header('Location: index.php?action=' . strtolower($action));
  }

  // Set the title, we got this from the method
  $title = $page['title'];

  // If variables key were exist, extract
  if (isset($page['variables'])) {
    extract($page['variables']);
  }

  // Start the output buffering
  ob_start();

  // Call the template for this action
  include __DIR__ . '/templates/' . $page['template'];

  // Set the output variables
  $output = ob_get_clean();

} catch (PDOException $e) {
  $title = 'An error has occurred';

  $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}

// Call the master template
include __DIR__ . '/templates/layout.html.php';
