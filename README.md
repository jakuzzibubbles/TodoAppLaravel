# To-Do App

Eine einfache To-Do-App entwickelt mit dem Laravel-Framework.

## Voraussetzungen

Stellen Sie sicher, dass Sie die folgenden Softwarekomponenten installiert haben:

- PHP >= 7.4
- Composer
- MySQL oder eine andere Datenbank (z.B. SQLite)
- Node.js und npm (für das Frontend-Asset-Management)

## Installation

1. **Repository klonen**

    ```bash
    git clone https://github.com/dein-benutzername/dein-repo.git
    cd dein-repo
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
    DB_PASSWORD=geheim
    ```

5. **Datenbank migrieren**

    Führen Sie die Migrationen aus, um die Datenbanktabellen zu erstellen:

    ```bash
    php artisan migrate
    ```

6. **Anwendung starten**

    Starten Sie den lokalen Entwicklungsserver:

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
