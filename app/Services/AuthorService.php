<?php
namespace App\Services;

use App\Traits\ExternalService;

class  AuthorService
{
    use ExternalService;
    /**
     * The baseUri to consume the authors service
     * @var string
     */
    public $baseUri;

    /**
     * Creating a new Author instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->baseUri = 'http://authors.blog.lan';
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * Fetching the list of authors from the Author Service
     * @param void
     * @return string
     */
    public function getAuthors() {
        return $this->httpRequest('GET', '/authors');
    }

    /**
     * creating an author from authors micro service
     * @param array $data
     * @return string
     */
    public function createAuthor($data) {
        return $this->httpRequest('POST', '/authors', $data);
    }

    /**
     * Fetching an author instance from authors micro service
     * @param int $authorId
     * @return string
     */
    public function getAuthor($authorId) {
        return $this->httpRequest('GET', "/authors/{$authorId}");
    }

    /**
     * updating an author instance using authors micro service
     * @param array $data
     * @param int $authorId
     * @return string
     */
    public function editAuthor($data, $authorId) {
        return $this->httpRequest('PUT', "/authors/{$authorId}", $data);
    }
}
