# Simple Attendance App
A simple employee attendance & paid leave management system.

## Installation
1. Intall the required PHP packages.

```bash
composer install
```

2. Copy .env.example to .env

```bash
cp .env.example .env
```

3. Fill the config like db, etc inside the .env file

4. Create the Laravel App Key.
```bash
php artisan key:generate
```

5. Install the node modules and build.
```bash
npm install
npm run dev
```

6. Migrate & seed the database.
```bash
php artisan migrate:fresh --seed
```

7. Run the artisan serve command.

```bash
php artisan serve
```

## Default Login Credential

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
