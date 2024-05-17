<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# To-Do App

Eine einfache To-Do-App entwickelt mit dem Laravel-Framework.

## Voraussetzungen

Softwarekomponenten installieren:

- PHP >= 7.4
- Composer
- MySQL oder eine andere Datenbank (z.B. SQLite)
- Node.js und npm (für das Frontend-Asset-Management)

## Installation

1. **Repository klonen**

    ```bash
    git clone https://github.com/jakuzzibubbles/TodoAppLaravel.git
    cd TodoAppLaravel
    ```

2. **Abhängigkeiten installieren**

    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Umgebungsdatei einrichten**

    Kopiere die `.env.example` Datei zu `.env`:

    ```bash
    cp .env.example .env
    ```

    Generiere den Anwendungsschlüssel:

    ```bash
    php artisan key:generate
    ```

4. **Datenbank konfigurieren**

    Bearbeiten Sie die `.env` Datei und geben Sie Ihre Datenbankeinstellungen ein:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=todo_app
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. **Datenbank migrieren**

    Migrationen ausführen, um die Datenbanktabellen zu erstellen:

    ```bash
    php artisan migrate
    ```

6. **Anwendung starten**

    Lokalen Entwicklungsserver starten:

    ```bash
    php artisan serve
    ```

    Die Anwendung ist nun unter `http://localhost:8000` erreichbar.

## Verzeichniserklärung

- `app/` - Enthält die Kernanwendungsklassen, wie z.B. Modelle und Controller.
- `config/` - Enthält alle Konfigurationsdateien.
- `database/` - Enthält Migrationen, Fabriken und Seeders.
- `public/` - Enthält das öffentlich zugängliche Verzeichnis, einschließlich der `index.php`.
- `resources/` - Enthält Ansichten, unkompilierte Assets wie SASS oder JavaScript.
- `routes/` - Enthält alle Routen-Definitionen.
- `tests/` - Enthält automatische Tests.
- `vendor/` - Enthält die Composer-Abhängigkeiten.

## Nützliche Befehle

- `php artisan migrate` - Führen Sie Datenbankmigrationen aus.
- `php artisan make:model ModelName -m` - Erstellen Sie ein neues Modell und eine zugehörige Migration.
- `php artisan make:controller ControllerName` - Erstellen Sie einen neuen Controller.
- `npm run dev` - Kompilieren Sie die Assets für die Entwicklung.
- `npm run production` - Kompilieren Sie die Assets für die Produktion.

## Weitere Informationen

Für weitere Informationen besuchen Sie die [Laravel Dokumentation](https://laravel.com/docs).

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert. Weitere Informationen finden Sie in der [LICENSE](LICENSE) Datei.