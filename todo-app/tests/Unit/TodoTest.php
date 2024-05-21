<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]
    public function a_todo_can_be_created()
    {
        // Erstelle ein Todo
        $todo = Todo::create([
            'title' => 'Test Todo',
            'description' => 'Test Description',
            'status' => 'pending',
        ]);

        // Überprüfe, ob das Todo in der Datenbank existiert
        $this->assertDatabaseHas('todos', [
            'title' => 'Test Todo',
            'description' => 'Test Description',
            'status' => 'pending',
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function a_todo_can_be_updated()
    {
        // Erstelle ein Todo
        $todo = Todo::create([
            'title' => 'Test Todo',
            'description' => 'Test Description',
            'status' => 'pending',
        ]);

        // Aktualisiere das Todo
        $todo->update([
            'title' => 'Updated Todo',
            'description' => 'Updated Description',
            'status' => 'completed',
        ]);

        // Überprüfe, ob die Änderungen in der Datenbank gespeichert wurden
        $this->assertDatabaseHas('todos', [
            'title' => 'Updated Todo',
            'description' => 'Updated Description',
            'status' => 'completed',
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function a_todo_can_be_deleted()
    {
        // Erstelle ein Todo
        $todo = Todo::create([
            'title' => 'Test Todo',
            'description' => 'Test Description',
            'status' => 'pending',
        ]);

        // Lösche das Todo
        $todo->delete();

        // Überprüfe, ob das Todo nicht mehr in der Datenbank existiert
        $this->assertDatabaseMissing('todos', [
            'title' => 'Test Todo',
            'description' => 'Test Description',
            'status' => 'pending',
        ]);
    }
}
