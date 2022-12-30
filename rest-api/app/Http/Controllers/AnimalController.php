<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        echo "Menampilkan Data Animal";
    }

    public function store(Request $request)
    {
        echo "Menambahkan Nama Hewan - $request->nama";
    }
    public function update(Request $request, $id)
    {
        echo "Mengedit Nama Hewan - id $id - $request->nama"; 
    }
    public function destroy($id)
    {
        echo "Menghapus Nama Hewan - id $id";
    }
}
