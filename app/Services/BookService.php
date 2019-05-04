<?php
namespace App\Services;

use App\Traits\ExternalService;

class  BookService
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
        $this->baseUri = config('services.books.base_uri');
    }
}
