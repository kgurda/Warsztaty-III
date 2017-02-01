<?php

include_once '../classes/BookSummary.php';
include_once '../classes/BooksRepository.php';

$bookRepository = new BooksRepository();

switch($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        echo 'Zapisano!';
        break;
    
    case 'GET':
        echo json_encode([new BookSummary(1, 'ignas', 'ignasG'), new BookSummary(2, 'aaaa', 'bbbb')]);
        break;
    
    case 'DELETE':
        
        break;
}