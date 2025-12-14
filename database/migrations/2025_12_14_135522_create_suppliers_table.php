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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name', 150);
            $table->string('company_name', 200)->nullable();
            $table->string('tax_id', 50)->nullable()->unique()->comment('NIF in Angola');

            // Contact
            $table->string('email', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('whatsapp', 20)->nullable();

            // Address
            $table->text('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('province', 100)->nullable()->comment('Province in Angola');
            $table->string('country', 100)->default('Angola');

            // Financial
            $table->enum('payment_terms', ['cash', '7_days', '15_days', '30_days', '60_days', 'custom'])->default('cash');
            $table->text('payment_terms_notes')->nullable();
            $table->decimal('credit_limit', 12, 2)->nullable();

            // Bank Details
            $table->string('bank_name', 150)->nullable();
            $table->string('bank_account', 100)->nullable();
            $table->string('iban', 50)->nullable();

            // Organization
            $table->boolean('is_active')->default(true);
            $table->boolean('is_consignment')->default(false)->comment('TRUE = resale/consignment supplier');
            $table->decimal('commission_percentage', 5, 2)->nullable()->comment('Commission % for consignment');
            $table->unsignedTinyInteger('rating')->nullable()->comment('1-5 rating');
            $table->text('notes')->nullable();

            $table->timestamps();

            // Indexes
            $table->index('is_active');
            $table->index('is_consignment');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
