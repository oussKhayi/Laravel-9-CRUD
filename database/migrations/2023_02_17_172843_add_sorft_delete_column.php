<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Produits;

return new class extends Migration
{
   
    public function up()
    {
        Schema::table('Produits', function(Blueprint $table){
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('Produits', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
