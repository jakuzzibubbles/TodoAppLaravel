Projektüberblick
- Erstellung einer funktionalen To-Do-Anwendung mit Laravel.
- Implementierung von CRUD-Operationen für Aufgaben.
- Verwendung von MySQL zur Speicherung und Abfrage von Daten.
- Nutzung von Mockdaten zur Simulation realer Anwendungsfälle.

Implementierungsdetails

1. Datenbankstruktur: Die Datenbank besteht aus einer zentralen Tabelle `todos` mit den folgenden Feldern:

- `id`: Primärschlüssel
- `title`: Titel der Aufgabe
- `description`: Beschreibung der Aufgabe
- `status`: Status der Aufgabe (z. B. offen, erledigt)
- `created_at` und `updated_at`: Zeitstempel

2. Mockdaten: Zur Simulation realer Daten wurden Mockdaten in die Datenbank eingefügt. Dies ermöglichte das Testen verschiedener Abfragen und die Validierung der Anwendung.

3. CRUD-Funktionalitäten: Die Anwendung unterstützt die grundlegenden CRUD-Operationen:
- Create: Erstellung neuer Aufgaben
- Read: Anzeige der Aufgabenliste
- Update: Bearbeitung bestehender Aufgaben
- Delete: Löschen von Aufgaben

4. Datenbankabfragen: Ein besonderer Fokus lag auf der Erstellung effizienter Datenbankabfragen unter Verwendung von Laravel's Query Builder. Dies umfasste:
- Filterung nach Status
- Sortierung nach Erstellungsdatum
- Suche nach Schlüsselwörtern im Titel oder in der Beschreibung

Herausforderung: Effiziente Abfrage großer Datenmengen und Implementierung komplexer Filterlogiken.

Lösung: Durch den Einsatz von Laravel's Query Builder konnten komplexe Abfragen effizient umgesetzt werden. Die Verwendung von Mockdaten half dabei, die Performance und Genauigkeit der Abfragen zu testen und zu optimieren.


# To-Do App

Softwarekomponenten installieren:

- PHP >= 7.4
- Composer
- MySQL oder eine andere Datenbank (z.B. SQLite)
- Node.js und npm (für das Frontend-Asset-Management)

## Installation

 **Repository klonen**

    ```bash
    git clone https://github.com/jakuzzibubbles/TodoAppLaravel.git
    cd TodoAppLaravel
    ```

 **Abhängigkeiten installieren**

    ```bash
    composer install
    npm install
    npm run dev
    ```

 **Umgebungsdatei einrichten**

    Kopiere die `.env.example` Datei zu `.env`:

    ```bash
    cp .env.example .env
    ```

    Generiere den Anwendungsschlüssel:

    ```bash
    php artisan key:generate
    ```

 **Datenbank konfigurieren**

    `.env` Datei:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=todo_app
    DB_USERNAME=root
    DB_PASSWORD=
    ```

 **Datenbank migrieren**

    Migrationen ausführen, um die Datenbanktabellen zu erstellen:

    ```bash
    php artisan migrate
    ```

 **Anwendung starten**

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

[Laravel Dokumentation](https://laravel.com/docs)

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert. Weitere Informationen finden Sie in der [LICENSE](LICENSE) Datei.
