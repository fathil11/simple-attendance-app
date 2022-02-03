# McEasy HRS

Sistem manajemen karyawan dan cuti karyawan untuk tes McEasy.

## Instalasi

1. Install package menggunakan composer pada terminal.

```bash
composer install
```

2. Copy .env.example menjadi .env

```bash
mv .env.example .env
```

3. Isi credential database pada file .env
4. Buat Laravel App Key.

```bash
php artisan key:generate
```

5. Install package npm dan build package pada terminal.

```bash
npm install
npm run dev
```

6. Lakukan migrasi database dan jalankan database seeder.

```bash
php artisan migrate:fresh --seed
```

7. Jalankan artisan server.

```bash
php artisan serve
```

8. Akses sistem di url [http://localhost:8000](http://localhost:8000)

## User Untuk Login

Email : `admin@admin.com`

Password : `123123123`

## Tech Stacks

-   [Laravel 8](https://laravel.com/docs/8.x)
-   [Livewire 2](https://laravel-livewire.com)
-   [Jetstream](https://jetstream.laravel.com/2.x/introduction.html)
-   [Alpine JS](https://alpinejs.dev)
-   [Tailwind 3](https://tailwindcss.com)
-   [Flowbite Components](https://flowbite.com/docs/getting-started/introduction)

## License

[MIT](https://choosealicense.com/licenses/mit/)
