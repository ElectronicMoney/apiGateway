<?php

namespace App\Http\Controllers\BookMicroService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\AuthorService;
use App\Services\BookService;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the book micro service
     * @var string
     */
    public $authorService;
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService, BookService $bookService) {
        $this->authorService = $authorService;
        $this->bookService = $bookService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return $this->successResponse($this->bookService->getBooks());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        return $this->successResponse($this->bookService->createBook($request->all()), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($book) {
        return $this->successResponse($this->bookService->getBook($book));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $book) {
        //get an id using the specified author_id
        $this->authorService->getAuthor($request->input('author_id'));

        return $this->successResponse($this->bookService->editBook($request->all(), $book), Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($book) {
        return $this->successResponse($this->bookService->deleteBook($book));
    }

}
