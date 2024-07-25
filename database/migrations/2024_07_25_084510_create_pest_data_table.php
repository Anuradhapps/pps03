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
        Schema::create('pest_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('common_data_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->string('no_of_rainy_days_in_last_week');
            $table->string('temperature');
            $table->string('crop_growth_code');
            $table->string('tillers_in_location_01');
            $table->string('tillers_in_location_02');
            $table->string('tillers_in_location_03');
            $table->string('tillers_in_location_04');
            $table->string('tillers_in_location_05');
            $table->string('tillers_in_location_06');
            $table->string('tillers_in_location_07');
            $table->string('tillers_in_location_08');
            $table->string('tillers_in_location_09');
            $table->string('tillers_in_location_10');
            $table->string('thrips_in_location_01');
            $table->string('thrips_in_location_02');
            $table->string('thrips_in_location_03');
            $table->string('thrips_in_location_04');
            $table->string('thrips_in_location_05');
            $table->string('thrips_in_location_06');
            $table->string('thrips_in_location_07');
            $table->string('thrips_in_location_08');
            $table->string('thrips_in_location_09');
            $table->string('thrips_in_location_10');
            $table->string('gall_midge_in_location_01');
            $table->string('gall_midge_in_location_02');
            $table->string('gall_midge_in_location_03');
            $table->string('gall_midge_in_location_04');
            $table->string('gall_midge_in_location_05');
            $table->string('gall_midge_in_location_06');
            $table->string('gall_midge_in_location_07');
            $table->string('gall_midge_in_location_08');
            $table->string('gall_midge_in_location_09');
            $table->string('gall_midge_in_location_10');
            $table->string('leaffolder_in_location_01');
            $table->string('leaffolder_in_location_02');
            $table->string('leaffolder_in_location_03');
            $table->string('leaffolder_in_location_04');
            $table->string('leaffolder_in_location_05');
            $table->string('leaffolder_in_location_06');
            $table->string('leaffolder_in_location_07');
            $table->string('leaffolder_in_location_08');
            $table->string('leaffolder_in_location_09');
            $table->string('leaffolder_in_location_10');
            $table->string('yellow_stem_borer_in_location_01');
            $table->string('yellow_stem_borer_in_location_02');
            $table->string('yellow_stem_borer_in_location_03');
            $table->string('yellow_stem_borer_in_location_04');
            $table->string('yellow_stem_borer_in_location_05');
            $table->string('yellow_stem_borer_in_location_06');
            $table->string('yellow_stem_borer_in_location_07');
            $table->string('yellow_stem_borer_in_location_08');
            $table->string('yellow_stem_borer_in_location_09');
            $table->string('yellow_stem_borer_in_location_10');
            $table->string('bph+wbph_borer_in_location_01');
            $table->string('bph+wbph_borer_in_location_02');
            $table->string('bph+wbph_borer_in_location_03');
            $table->string('bph+wbph_borer_in_location_04');
            $table->string('bph+wbph_borer_in_location_05');
            $table->string('bph+wbph_borer_in_location_06');
            $table->string('bph+wbph_borer_in_location_07');
            $table->string('bph+wbph_borer_in_location_08');
            $table->string('bph+wbph_borer_in_location_09');
            $table->string('bph+wbph_borer_in_location_10');
            $table->string('paddy_bug_borer_in_location_01');
            $table->string('paddy_bug_borer_in_location_02');
            $table->string('paddy_bug_borer_in_location_03');
            $table->string('paddy_bug_borer_in_location_04');
            $table->string('paddy_bug_borer_in_location_05');
            $table->string('paddy_bug_borer_in_location_06');
            $table->string('paddy_bug_borer_in_location_07');
            $table->string('paddy_bug_borer_in_location_08');
            $table->string('paddy_bug_borer_in_location_09');
            $table->string('paddy_bug_borer_in_location_10');
            $table->string('other_pest_incident');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pest_data');
    }
};
