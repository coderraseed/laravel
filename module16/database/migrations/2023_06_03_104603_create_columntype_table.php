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
        Schema::create('columntype', function (Blueprint $table) {
            $table->id();
            $table->increments('id2');
            $table->bigIncrements('id3');
            $table->smallIncrements('smid');
            $table->bigInteger('votes');
            $table->smallInteger('smvotes');
            $table->binary('photo');
            $table->boolean('confirmed');
            $table->char('name', 100);
            $table->dateTimeTz('created_at', $precision = 0);
            $table->dateTime('created_at', $precision = 0);
            $table->date('created_at');
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->double('amount', 8, 2);
            $table->enum('difficulty', ['easy', 'hard']);
            $table->float('amount', 8, 2);
            $table->foreignId('user_id');
            $table->foreignIdFor(User::class);
            $table->foreignUlid('user_id');
            $table->foreignUuid('user_id');
            $table->geometryCollection('positions');
            $table->geometry('positions2');
            $table->integer('votes');
            $table->ipAddress('visitor');
            $table->json('options');
            $table->jsonb('options2');
            $table->lineString('positions');
            $table->longText('description');
            $table->macAddress('device');
            $table->mediumIncrements('id');
            $table->mediumInteger('votes');
            $table->mediumText('description');
            $table->morphs('taggable');
            $table->multiLineString('multiline');
            $table->multiPoint('multipoints');
            $table->multiPolygon('multiPolygon');
            $table->timestamps();
            $table->nullableTimestamps(0);
            $table->nullableMorphs('taggable');
            $table->nullableUlidMorphs('Utaggable');
            $table->nullableUuidMorphs('nulltaggable');
            $table->point('point');
            $table->polygon('polygon');
            $table->rememberToken('rememberToken');
            $table->set('flavors', ['strawberry', 'vanilla']);
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->string('name', 100);
            $table->text('description');
            $table->timeTz('sunrise', $precision = 0);
            $table->time('sunrise', $precision = 0);
            $table->tinyIncrements('id');
            $table->year('birth_year');
            $table->uuid('id');
            $table->ulid('id');
            $table->uuidMorphs('taggable');
            $table->unsignedTinyInteger('votes');
            $table->unsignedSmallInteger('votes');
            $table->unsignedMediumInteger('votes');
            $table->unsignedInteger('votes');
            $table->unsignedDecimal('amount', $precision = 8, $scale = 2);
            $table->unsignedBigInteger('votes');
            $table->tinyText('notes');
            $table->tinyInteger('votes');
            $table->tinyIncrements('id');
            $table->timestamps($precision = 0);
            $table->timestampsTz($precision = 0);
            $table->timestamp('added_at', $precision = 0);
            $table->timestampTz('added_at', $precision = 0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('columntype');
    }
};
