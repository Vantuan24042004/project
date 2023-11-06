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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
//            name, cagtegory, date, qty, address, description, status
            $table->string("thumbnail")->nullable();
            $table->string("name");
            $table->string("slug",255)->unique();
//            $table->dateTime("datenow");
            $table->bigInteger("view_count")->unsigned()->default(0)->index();
            $table->unsignedBigInteger("category_id");
            $table->string("date_from");
            $table->string("date_to");
            $table->unsignedSmallInteger("qty")->default(0);
            $table->string("address");
            $table->string("description");
            $table->foreign("category_id")->references("id")->on("categories")->cascadeOnUpdate();;
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
