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
     * Create a new Author instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->baseUri = 'http://authors.blog.lan';
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * get the list of authors from the Author Service
     *
     * @return string
     */
    public function getAuthors() {
        return $this->httpRequest('GET', '/authors');
    }

    /**
     * create author from authors micro service
     * @param array $data
     * @return string
     */
    public function createAuthor($data) {
        return $this->httpRequest('POST', '/authors', $data);
    }
}
