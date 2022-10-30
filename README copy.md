## Konfigurasi Awal (Instalasi) Sprint1

-   install dependencies composer dengan perintah berikut :
    `composer install`

-   install dependencies npm dan run dev dengan perintah berikut :
    `npm install && npm run dev`

-   publish konfigurasi rajaongkir :
    `php artisan vendor:publish --provider="Kavist\RajaOngkir\Providers\LaravelServiceProvider"`

-   jalankan file migrasi :
    `php artisan migrate`

## Penggunaan API Cek Kota atau Provinsi

1. Cek Kota
   `[GET] http://localhost:8000/api/search/city/{id}`
2. Cek Provinsi
   `[GET] http://localhost:8000/api/search/provinces/{id}`

## Preview Hasil Script1
