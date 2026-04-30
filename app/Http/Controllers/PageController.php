<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the produk page.
     */
    public function produk()
    {
        return view('produk');
    }

    /**
     * Display the keunggulan page.
     */
    public function keunggulan()
    {
        return view('keunggulan');
    }

    /**
     * Display the klien page.
     */
    public function klien()
    {
        return view('klien');
    }

    /**
     * Display the kontak page.
     */
    public function kontak()
    {
        return view('kontak');
    }

    /**
     * Display admin pesan masuk.
     */
    public function pesanan()
    {
        $pesans = Pesan::latest()->paginate(10);
        return view('admin.pesanan', compact('pesans'));
    }

    /**
     * Handle contact form submission.
     */
    public function kirimPesan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'pesan' => 'required|string',
        ]);

        // Simpan pesan ke database
        Pesan::create($validated);

        return redirect()->route('kontak')->with('success', 'Terima kasih! Pesan Anda telah kami terima. Tim kami akan menghubungi Anda segera.');
    }
}