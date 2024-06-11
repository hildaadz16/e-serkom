<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return view('hotel.booking', compact(['booking']));
    }

    public function create()
    {
        return view('hotel.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Booking::create($request->except(['_token', 'breakfast']));

        return redirect('/booking');
    }

    public function daftarHarga(Request $request){

        return view('hotel.daftar_harga');

    }

    public function about(Request $request){

        return view('hotel.about');

    }

    public function produk(Request $request){

        return view('hotel.produk');

    }

    public function showChart()
    {
        // Ambil data booking dari database
        $bookings = Booking::all();
    
        // Format data untuk grafik (misalnya, jumlah booking per tipe kamar)
        $bookingData = $bookings->groupBy('tipe_kamar')->map->count();
    
        return view('hotel.chart', compact('bookingData'));
    }
    
   
}
