<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Services\Book\BookService;

class BookController extends Controller
{
    private BookService $service;

    public function __construct(BookService $service)
    {
        $this->service = $service;
    }

    public function getAll()
    {
        try {
            $books = $this->service->getAll();

            return BookResource::collection($books);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], (int) $e->getCode());
        }
    }

    public function show($id)
    {
        try {
            $book = $this->service->show($id);

            return new BookResource($book);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], (int) $e->getCode());
        }
    }

    public function store(StoreBookRequest $request)
    {
        try {
            $book = $this->service->store($request->all());
            $bookResource = new BookResource($book);

            return response()->json($bookResource, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], (int) $e->getCode());
        }
    }

    public function update($id, UpdateBookRequest $request)
    {
        try {
            $data = $request->all();
            $book = $this->service->update($id, $data);

            return new BookResource($book);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], (int) $e->getCode());
        }
    }

    public function delete($id)
    {
        try {
            $this->service->delete($id);

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], (int) $e->getCode());
        }
    }
}
