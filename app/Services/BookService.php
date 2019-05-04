<?php
namespace App\Services;

use App\Traits\ExternalService;

class  BookService
{
    use ExternalService;
    /**
     * The baseUri to consume the books service
     * @var string
     */
    public $baseUri;
    /**
     * Create a new Book instance.
     *
     * @return void
     */
    public function __construct() {
        $this->baseUri = config('services.books.base_uri');
    }

     /**
     * Fetching the list of books from the Book Service
     * @param void
     * @return string
     */
    public function getBooks() {
        return $this->httpRequest('GET', '/books');
    }

    /**
     * creating an author from books micro service
     * @param array $data
     * @return string
     */
    public function createBook($data) {
        return $this->httpRequest('POST', '/books', $data);
    }

    /**
     * Fetching an author instance from books micro service
     * @param int $bookId
     * @return string
     */
    public function getBook($bookId) {
        return $this->httpRequest('GET', "/books/{$bookId}");
    }

    /**
     * updating an author instance using books micro service
     * @param array $data
     * @param int $bookId
     * @return string
     */
    public function editBook($data, $bookId) {
        return $this->httpRequest('PUT', "/books/{$bookId}", $data);
    }

    /**
     * Deleting an author instance from books micro service
     * @param int $bookId
     * @return string
     */
    public function deleteBook($bookId) {
        return $this->httpRequest('DELETE', "/books/{$bookId}");
    }
}
