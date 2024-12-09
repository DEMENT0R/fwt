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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('AuctionItemId'); //     "AuctionItemId" => "145243"
            $table->string('AuctionId'); //     "AuctionId" => "143576"
            $table->integer('CurrentHighPreBid'); //     "CurrentHighPreBid" => 700
            $table->string('CustomStatus'); //     "CustomStatus" => "Sold"
            $table->integer('MyPreBid'); //     "MyPreBid" => 0
            $table->boolean('IsWatched'); //     "IsWatched" => false
            $table->integer('SequenceNumber'); //     "SequenceNumber" => 29
            $table->string('LastCustomStatusSetAt'); //     "LastCustomStatusSetAt" => "2017-02-21T14:38:23.393446Z"
            $table->integer('Year'); //     "Year" => 2002
            $table->string('Make'); //     "Make" => "BMW"
            $table->string('Model'); //     "Model" => "X5 3.0I"
            $table->integer('Odometer'); //     "Odometer" => 204404
            $table->string('Units'); //     "Units" => "Km"
            $table->string('VehicleLocation'); //     "VehicleLocation" => ""
            $table->string('Engine'); //     "Engine" => "GAS"
            $table->string('Transmission'); //     "Transmission" => "Auto"
            $table->string('Color'); //     "Color" => "SILVER"
            $table->string('Brand'); //     "Brand" => "ON-SALVAGE"
            $table->string('ExternalAuctionItemId'); //     "ExternalAuctionItemId" => "10453370"
            $table->integer('WinningBidAmount'); //     "WinningBidAmount" => 800
            $table->string('WinningBidLocation')->nullable(); //     "WinningBidLocation" => "Montreal"
            $table->boolean('IsBiddable'); //     "IsBiddable" => true
            $table->integer('Status'); //     "Status" => 4
            $table->string('Image'); //     "Image" => "0d1621c6e262d40f1141fca190e933e9.jpg"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
