<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileCannotBeAdded;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class LocationSeeder extends Seeder
{
    /** @throws FileCannotBeAdded|FileIsTooBig|FileDoesNotExist */
    public function run(): void
    {
        $jsonContent = file_get_contents(public_path('countries.json'));
        $countries = json_decode($jsonContent, true);
        $Allstates = file_get_contents(public_path('states.json'));
        foreach ($countries['countries'] as $countryDetails) {
                 $createdCountry = Country::create([
                     'name' => $countryDetails['name'],
                     'capital' => $countryDetails['capital'],
                     'iso2' => $countryDetails['iso2'],
                     'iso3' => $countryDetails['iso3'],
                     'phone_code' => $countryDetails['phone_code'],
                     'currency' => $countryDetails['currency'],
                     'region' => $countryDetails['region'],
                     'subregion' => $countryDetails['subregion'],
                 ]);
        };
    }
}
