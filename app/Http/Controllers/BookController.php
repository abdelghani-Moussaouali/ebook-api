<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\book;
use App\Http\Requests\PosrStorRequest;
use App\Models\book_model;


use Illuminate\Support\Facades\Response;


class BookController extends Controller
{
    public function store(PosrStorRequest $request)
    {
        try {
            $baseUrl = url('/');
            // $path=storage_path('app/public/'.$request->image_link);  
            $imageName = str::random(32) . "." . $request->image_link->getClientOriginalExtension();
            // $path = public_path('storage/' . $imageName);
            $path = '/api/book/image/' . $imageName;
            book_model::create([
                'title' => $request->title,
                'image_link' => $baseUrl . $path
            ]);
            Storage::disk('public')->put($imageName, file_get_contents($request->image_link));
            return response()->json([
                'message' => 'post successfully created'
            ], 200);
        } catch (\Exception $e) {
            return Response()->json(
                ['message' => $e->__tostring() . 'somethong went wrong'],
                400
            );
        }
    }


    public function index($id)
    {
        try {
            $book = book_model::findOrFail($id);
            return response()->json([
                'data' => $book
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'the id doesn\'t existe'
            ], 400);
        }
    }
    public function delete($id)
    {
        try {
            $book = book_model::findOrFail($id);
            $book->delete();
            return response()->json([
                'message' => 'the book was deleted'
            ], 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'the book doesn\'t existe'
            ], 400);
        }
    }
    public function update($request)
    {
      
            $book = book_model::find(21);
            $book->update([
                'title' => $request->title,
                'image_link' => $request->image_link,
            ]);
            return response()->json([
                'data'=>$book,
                'message' => 'the book was updated'
            ], 200);
      
    }

    public function show()
    {
        try {
            $book = book_model::all();
            return response()->json(

                $book,
                200
            );
        } catch (\Exception $th) {
            return response()->json([
                'message' => 'something went wrong'
            ]);
        }
    }


    public function showImage($filename)
    {
        $path = public_path('storage/' . $filename);

        if (!file_exists($path)) {
            return response()->json([
                'data' => $path,
                'error' => 'Image not found'
            ], 404);
        }

        $file = file_get_contents($path);
        $type = mime_content_type($path);

        return Response::make(
            $file,
            200,
            [
                'Content-Type' => $type,
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]

        );
        
    }
}
