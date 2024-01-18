<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $files = File::all();
        return view('files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);

        $uploadedFile = $request->file('file');
        $userId = session('user_id');

        $this->storeFile($uploadedFile, $userId);

        return redirect()->route('file.index');
    }

    private function validateRequest(Request $request)
    {
        $request->validate([
                'file' => 'required|file|max:4096']
        );
    }

    private function storeFile($uploadedFile, $userId)
    {
        $fileName = $uploadedFile->getClientOriginalName();
        $filePath = 'uploads' . '/' . $fileName;
        $fileExtension = $uploadedFile->extension();
        $fileType = $uploadedFile->getMimeType();

        $uploadedFile->storeAs('public/uploads', $fileName);

        $file = File::create([
            'name' => $fileName,
            'path' => $filePath,
            'type' => $fileType,
            'extension' => $fileExtension,
            'user_id' => $userId,
        ]);

        $file->save();
    }


    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->deleteFile($id);
        return redirect()->route('file.index');
    }

    private function deleteFile($id)
    {
        $file = $this->findFile($id);
        $file->delete();
    }

    private function findFile($id)
    {
        $file = File::find($id);
        return $file;
    }
}
