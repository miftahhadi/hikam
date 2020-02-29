<?php

class QuotesController{
  private $quotesTable;
  private $usersTable;

  public function __construct(DatabaseTable $quotesTable, DatabaseTable $usersTable) {
    $this->quotesTable = $quotesTable;
    $this->usersTable = $usersTable;
  }

  // Home entry
  public function home() {
    $title = 'Beranda';

    return [ 'template' => 'home.html.php', 'title' => $title ];

  }

  // Daftar semua quotes
  public function list() {
    $result = $this->quotesTable->findAll();

    // Buat dulu array $quotes
    $quotes = [];
    foreach ($result as $quote) {
      $kontributor = $this->usersTable->findById($quote['user_id']);

      $quotes[] = [
        'quote_id' => $quote['quote_id'],
        'judul' => $quote['judul'],
        'redaksi_ar' => $quote['redaksi_ar'],
        'redaksi_id' => $quote['redaksi_id'],
        'penutur' => $quote['penutur'],
        'sumber' => $quote['sumber'],
        'kontributor' => $kontributor['nama'],
        'email' => $kontributor['email']
      ];
    }

    $title = 'Daftar Quotes';

    $totalQuotes = $this->quotesTable->total();

    return [ 'template' => 'list-quotes.html.php',
          'title' => $title,
          'variables' => [
              'totalQuotes' => $totalQuotes,
              'quotes' => $quotes
            ]
          ];
  }

  // Edit quotes
  public function edit() {
    if (isset($_GET['id'])) {
      $joke = $this->quotesTable->findById($_GET['id']);

      $title = 'Edit Quote';
    } else {
      $title = 'Tambah Quote Baru';
    }

    return [ 'template' => 'edit.html.php', 'title' => $title ];

  }
}
