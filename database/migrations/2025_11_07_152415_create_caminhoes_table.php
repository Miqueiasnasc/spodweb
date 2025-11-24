<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up()
{
Schema::create('caminhoes', function (Blueprint $table) {
$table->uuid('id')->primary();
$table->string('plate')->unique(); // placa
$table->string('brand');
$table->string('model');
$table->integer('year');
$table->decimal('capacity_kg', 10, 2); // capacidade em kg (decimal)
$table->boolean('is_active')->default(true);
$table->date('last_inspection')->nullable();
$table->decimal('location_lat', 10, 7)->nullable();
$table->decimal('location_lng', 10, 7)->nullable();
$table->timestamps();
});
}


public function down()
{
Schema::dropIfExists('caminhoes');
}
};
