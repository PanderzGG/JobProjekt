<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            //Erstellung des Job Modells.
            $table->id();
            $table->string('Titel');
            $table->longText('Beschreibung');
            $table->string('Gehalt');
            $table->string('Standort');

            //Foreign Key der auf die Kategorie zeigt, zuder der Job gehört. Wenn Kategorie gelöscht wird, wird auch der Job gelöscht (cascade)
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            //Foreign Key der auf die Firma zeigt, welche den Job anbietet. Wenn Firma gelöscht wird, wird auch der Job gelöscht (cascade)
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            //Foreign Key der auf den Benutzer zeigt, welcher den Job erstellt hat. Wenn Benutzer gelöäscht wird, wird auch der Job gelöscht (cascade)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->timestamps(); // Erstellt Zeitnachhalt.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
