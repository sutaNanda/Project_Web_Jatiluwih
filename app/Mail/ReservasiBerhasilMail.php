<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Reservasi;

class ReservasiBerhasilMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reservasi;
    public $qrCodeBase64;

    public function __construct(Reservasi $reservasi, $qrCodeBinary)
    {
        $this->reservasi = $reservasi;
        $this->qrCodeBase64 = base64_encode($qrCodeBinary); // untuk ditampilkan langsung di email

        // attach image file ke email sebagai PNG
        $this->attachData($qrCodeBinary, 'reservation-qrcode.png', [
            'mime' => 'image/png',
        ]);
    }

    public function build()
    {
        return $this->subject('Reservasi Berhasil - QR Code Anda')
                    ->view('emails.reservasi-berhasil');
    }
}
