## Konfigurasi Awal (Instalasi) Sprint1

- install dependencies composer dengan perintah berikut :
`composer install`

- install dependencies npm dan run dev dengan perintah berikut : 
`npm install && npm run dev`

- publish konfigurasi rajaongkir : 
`php artisan vendor:publish --provider="Kavist\RajaOngkir\Providers\LaravelServiceProvider"`

- jalankan Mysql(XAMP/LAMP/etc) lalu buat db baru dengan nama db_dot_tes

- jalankan file migrasi :
`php artisan migrate`

- jalankan servernya :
`php artisan serve`

- masukan data provinsi dan kota dari rajaongkir ke DB
`[GET] http://localhost:8000/api/todb`

## Penggunaan API Cek Kota atau Provinsi

1. Cek Kota
   `[GET] http://localhost:8000/api/search/city/{id}`
2. Cek Provinsi
   `[GET] http://localhost:8000/api/search/provinces/{id}`
   
   
## Preview Hasil Sprint1   
   
![image](https://user-images.githubusercontent.com/59794929/198875089-a4d0db2a-5ac5-4298-ba03-ea90498847d9.png)
