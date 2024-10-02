<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class Persegi1Controller extends Controller {
    public function hitungPersegi(Request $request)
    {
        $sisi = $request -> sisi;
        $hitung = $sisi * $sisi;

        return new PostResource(true, 'Berhasil Hitung Luas Persegi', [
            'hasil' => $hitung
        ]);
    }
}

?>