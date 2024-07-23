<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // animals data
        $animals = [
            [
                'nome' => 'Fido',
                'specie' => 'Cane',
                'razza' => 'Labrador',
                'eta' => 5,
                'sesso' => 'Maschio',
                'peso' => 30.00,
                'altezza' => 60.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Black_labrador_retriever.jpg/260px-Black_labrador_retriever.jpg',
                'info' => 'Fido è un Labrador molto giocherellone e affettuoso.',
            ],
            [
                'nome' => 'Whiskers',
                'specie' => 'Gatto',
                'razza' => 'Persiano',
                'eta' => 3,
                'sesso' => 'Femminile',
                'peso' => 4.50,
                'altezza' => 25.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Prisca_2012.jpg/260px-Prisca_2012.jpg',
                'info' => 'Whiskers ama dormire e giocare con i suoi giochi.',
            ],
            [
                'nome' => 'Charlie',
                'specie' => 'Cane',
                'razza' => 'Beagle',
                'eta' => 7,
                'sesso' => 'Maschio',
                'peso' => 12.00,
                'altezza' => 40.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Shemsu_Sotis_Perun.jpg/260px-Shemsu_Sotis_Perun.jpg',
                'info' => 'Charlie è un Beagle curioso e sempre pronto per un\'avventura.',
            ],
            [
                'nome' => 'Mittens',
                'specie' => 'Gatto',
                'razza' => 'Siamese',
                'eta' => 2,
                'sesso' => 'Femminile',
                'peso' => 3.00,
                'altezza' => 22.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Siam_lilacpoint.jpg/260px-Siam_lilacpoint.jpg',
                'info' => 'Mittens è un gatto molto vivace e ama fare le fusa.',
            ],
            [
                'nome' => 'Rex',
                'specie' => 'Cane',
                'razza' => 'Pastor Tedesco',
                'eta' => 6,
                'sesso' => 'Maschio',
                'peso' => 35.00,
                'altezza' => 65.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Cane_da_pastore_tedesco_adulto.jpg/260px-Cane_da_pastore_tedesco_adulto.jpg',
                'info' => 'Rex è un cane da guardia leale e protettivo.',
            ],
            [
                'nome' => 'Fluffy',
                'specie' => 'Gatto',
                'razza' => 'Maine Coon',
                'eta' => 4,
                'sesso' => 'Femminile',
                'peso' => 6.00,
                'altezza' => 30.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Adult-male-maine-coon-cream-with-white.jpg/260px-Adult-male-maine-coon-cream-with-white.jpg',
                'info' => 'Fluffy è un Maine Coon gentile e affettuosa con un manto molto folto.',
            ],
            [
                'nome' => 'Bella',
                'specie' => 'Cane',
                'razza' => 'Bulldog',
                'eta' => 3,
                'sesso' => 'Femminile',
                'peso' => 25.00,
                'altezza' => 50.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Ozbulldog.jpg/220px-Ozbulldog.jpg',
                'info' => 'Bella è un Bulldog dolce e molto amichevole.',
            ],
            [
                'nome' => 'Simba',
                'specie' => 'Gatto',
                'razza' => 'British Shorthair',
                'eta' => 5,
                'sesso' => 'Maschio',
                'peso' => 5.00,
                'altezza' => 28.00,
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Britishblue.jpg/186px-Britishblue.jpg',
                'info' => 'Simba è un British Shorthair tranquillo e pacato.',
            ],
        ];


        // insert

        foreach ($animals as $animalData) {
            $newAnimal = new Animal($animalData);
            $newAnimal->save();
        }
    }
}
