<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use App\Models\Mahasiswa;

class QrCodeController extends Controller
{
    public function generateQrCode($id)
    {
        // Ambil data mahasiswa dari database berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Generate QR Code dengan data mahasiswa
        $qrCode = new QrCode('Nama: '.$mahasiswa->nama_mahasiswa.', NIM: '.$mahasiswa->nim);

        // Optional: Set ukuran dan margin QR Code
        $qrCode->setSize(300);
        $qrCode->setMargin(10);

        // Output QR Code ke dalam bentuk base64
        // $qrCodeData = 'data:image/png;base64,' . base64_encode($qrCode->writeString());

        // Tampilkan view dengan QR Code yang dihasilkan
        return view('qr-code');
    }
}
