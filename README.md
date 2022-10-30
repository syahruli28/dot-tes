## Konfigurasi Awal (Instalasi) Sprint2

- install dependencies composer dengan perintah berikut :
`composer install`

- install dependencies npm dan run dev dengan perintah berikut : 
`npm install && npm run dev`

- publish konfigurasi sanctum :
`php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"`

- publish konfigurasi rajaongkir : 
`php artisan vendor:publish --provider="Kavist\RajaOngkir\Providers\LaravelServiceProvider"`

- jalankan Mysql(XAMP/LAMP/etc) lalu buat db baru dengan nama db_dot_tes

- jalankan file migrasi :
`php artisan migrate`

- jalankan servernya :
`php artisan serve`

- masukan data provinsi dan kota dari rajaongkir ke DB (jalankan hanya jika tb provinsi dan kota masih kosong)
`[GET] http://localhost:8000/api/todb`

- buat akun baru (register) dengan cara pergi ke browser lalu jalankan localhost:8000, lalu ke menu register ada pada sebelah kanan atas untuk dapat menggunakan endpoint API Login


## Penggunaan API Cek Kota atau Provinsi

1. Login terlebih dahulu untuk mendapatkan token agar dapat menggunakan endpoint untuk cek provinsi dan kota, dengan cara :
   `[POST] http://localhost:8000/api/login` dengan email dan passwordnya, lalu jika berhasil anda akan mendapatkan token pada hasil responsenya, copy tokennya
3. Cek Kota
   `[GET] http://localhost:8000/api/search/city/{id}` dengan mengirimkan bearer token dengan token dari login
3. Cek Provinsi
   `[GET] http://localhost:8000/api/search/provinces/{id}` dengan mengirimkan bearer token dengan token dari login
   
   
## Preview Hasil Sprint2

![image](https://user-images.githubusercontent.com/59794929/198876164-dc98af6e-e579-44ab-88df-2f3be1c005bb.png)

![image](https://user-images.githubusercontent.com/59794929/198876179-fb33c8a3-b257-4ff0-91c1-384aefb254e3.png)

