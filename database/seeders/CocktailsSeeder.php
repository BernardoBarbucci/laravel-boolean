<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocktailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = [
            [
                'name' => 'Mojito',
                'description' => 'Bevanda fresca e rinfrescante a base di rum, lime, menta, zucchero e acqua gassata.',
                'alcohol_content' => 10,
                'price' => '8.50',
                'category' => 'Cocktail alcolici',
                'image' => 'https://images.services.kitchenstories.io/TM20ioXlywd_edR6yCkWOpQtrsE=/3840x0/filters:quality(85)/images.kitchenstories.io/wagtailOriginalImages/R367-final-photo.jpg',
            ],
            [
                'name' => 'Martini',
                'description' => 'Cocktail classico a base di gin e vermut, solitamente servito con una fetta di limone o un\'oliva.',
                'alcohol_content' => 20,
                'price' => '10.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.sainsburysmagazine.co.uk/uploads/media/3200x1800/07/7427-Martini.jpg?v=1-0',
            ],
            [
                'name' => 'Cosmopolitan',
                'description' => 'Cocktail a base di vodka, triple sec, succo di lime e succo di mirtillo rosso.',
                'alcohol_content' => 15,
                'price' => '9.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.allrecipes.com/thmb/7BKpDoYosrYawgSyMBgwOSJh768=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/221891-cosmopolitan-cocktail-DDMFS-4x3-5013a6ed85834779af063d059c49e7ba.jpg',
            ],
            [
                'name' => 'Bloody Mary',
                'description' => 'Cocktail a base di vodka, succo di pomodoro, spezie e aromi.',
                'alcohol_content' => 10,
                'price' => '8.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.seriouseats.com/thmb/sLMvhR4uyBmj5cL8xLH8BQjG14I=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20230908-SEA-BloodyMary-TwoBites-hero-ace8a18066504a94ae50222dcedfc140.jpg',
            ],
            [
                'name' => 'Negroni',
                'description' => 'Cocktail a base di gin, vermut rosso e Campari, servito tipicamente con una scorza d’arancia.',
                'alcohol_content' => 25,
                'price' => '9.50',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.giallozafferano.com/images/228-22809/negroni-cocktail_1200x800.jpg',
            ],
            [
                'name' => 'Daiquiri',
                'description' => 'Cocktail a base di rum bianco, succo di lime e sciroppo di zucchero.',
                'alcohol_content' => 15,
                'price' => '7.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/06/daiquiri/_jcr_content/header-par/image-single.img.jpg/1561363400677.jpg',
            ],
            [
                'name' => 'Old Fashioned',
                'description' => 'Cocktail a base di bourbon, zucchero, angostura e una scorza di arancia.',
                'alcohol_content' => 30,
                'price' => '11.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://static01.nyt.com/images/2023/10/17/multimedia/RS-Old-Fashioned-fhwv/RS-Old-Fashioned-fhwv-superJumbo.jpg',
            ],
            [
                'name' => 'Pina Colada',
                'description' => 'Cocktail tropicale a base di rum bianco, latte di cocco e succo d’ananas.',
                'alcohol_content' => 12,
                'price' => '9.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.daskochrezept.de/sites/daskochrezept.de/files/styles/full_width_tablet_4_3/public/2021-10/pina_colada_1.jpg?h=885839ed&itok=nCp2PxoE',
            ],
            [
                'name' => 'Screwdriver',
                'description' => 'Cocktail semplice a base di vodka e succo d\'arancia, servito in un bicchiere alto con ghiaccio.',
                'alcohol_content' => 10,
                'price' => '7.50',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.allrecipes.com/thmb/aJAOPyrBYnsX14js0vKaN_HXWeY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/RM_222410-ScrewdriverCocktail-ddmfs-3x4-6165-c45bc857ee3f44b281914488972816f9.jpg',
            ],
            [
                'name' => 'White Russian',
                'description' => 'Cocktail cremoso a base di vodka, liquore al caffè e crema, servito con ghiaccio in un bicchiere basso.',
                'alcohol_content' => 20,
                'price' => '9.50',
                'category' => 'Cocktail alcolici',
                'image' => 'https://cdn.diffords.com/contrib/stock-images/2023/03/64070f2d706e4.jpg',
            ],
            [
                'name' => 'Manhattan',
                'description' => 'Cocktail elegante a base di whiskey bourbon, vermut dolce e angostura, servito con una ciliegia maraschino.',
                'alcohol_content' => 25,
                'price' => '11.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.realsimple.com/thmb/bCKv0D-AMEuY9pM0MTPtIgsytJo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/manhattan-recipe-2000-fdf13190b5514bd9912ae4ef51370969.jpg',
            ],
            [
                'name' => 'Mint Julep',
                'description' => 'Cocktail rinfrescante a base di bourbon, zucchero e menta, servito in un bicchiere metallico con ghiaccio frantumato.',
                'alcohol_content' => 25,
                'price' => '10.50',
                'category' => 'Cocktail alcolici',
                'image' => 'https://static01.nyt.com/images/2023/02/25/multimedia/CM-Mint-Julep-lpzm/CM-Mint-Julep-lpzm-superJumbo.jpg',
            ],
            [
                'name' => 'Tequila Sunrise',
                'description' => 'Cocktail colorato a base di tequila, succo d\'arancia e grenadine, servito con una fetta d\'arancia e ciliegina maraschino.',
                'alcohol_content' => 20,
                'price' => '9.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://static01.nyt.com/images/2023/08/17/multimedia/ND-Tequila-Sunrise/LH-Sangria-tjvl-superJumbo.jpg',
            ],
            [
                'name' => 'Whiskey Sour',
                'description' => 'Cocktail acido a base di whiskey, succo di limone e sciroppo di zucchero, servito in un bicchiere basso con una ciliegia maraschino.',
                'alcohol_content' => 25,
                'price' => '9.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://assets.bonappetit.com/photos/63a4b2aba1a7b40ea0bebd03/16:9/w_3488,h_1962,c_limit/WhiskeySour.jpeg',
            ],
            [
                'name' => 'Blue Lagoon',
                'description' => 'Cocktail a base di vodka, blue curaçao e limonata, solitamente servito in un bicchiere highball.',
                'alcohol_content' => 15,
                'price' => '9.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.wineenthusiast.com/wp-content/uploads/2023/05/03_23_Blue_Lagoon_Cocktail_HERO_AntonisAchilleos_1920x1280.jpg',
            ],
            [
                'name' => 'Singapore Sling',
                'description' => 'Cocktail a base di gin, liquore di ciliegie, triple sec, succo di limone, angostura e soda.',
                'alcohol_content' => 20,
                'price' => '10.50',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.thespruceeats.com/thmb/gtU-6Rrk1P83rr2uuI4_jIz8B7E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-singapore-sling-recipe-760602-hero-01-6b28bfe6b32946acb9ae1d3bb289c19d.jpg',
            ],
            [
                'name' => 'Tom Collins',
                'description' => 'Cocktail a base di gin, succo di limone, sciroppo di zucchero e soda, solitamente servito in un bicchiere alto con ghiaccio.',
                'alcohol_content' => 15,
                'price' => '8.50',
                'category' => 'Cocktail alcolici',
                'image' => 'https://food-images.files.bbci.co.uk/food/recipes/tom_collins_58221_16x9.jpg',
            ],
            [
                'name' => 'Long Island Iced Tea',
                'description' => 'Cocktail ad alta gradazione a base di vodka, gin, rum, tequila, triple sec, succo di limone e cola, solitamente servito in un bicchiere highball.',
                'alcohol_content' => 25,
                'price' => '12.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.foodandwine.com/thmb/fZqumznyG_Vj-LpYYIy16MZE1QA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Long-Island-Iced-Tea-Cocktail-FT-RECIPE1222-6454b2a875f7461190cbae8d93f9dca1.jpg',
            ],
            [
                'name' => 'Mai Tai',
                'description' => 'Cocktail esotico a base di rum scuro, rum bianco, triple sec, liquore d\'almond e succo di lime e di pompelmo, solitamente servito con ghiaccio.',
                'alcohol_content' => 25,
                'price' => '11.00',
                'category' => 'Cocktail alcolici',
                'image' => 'https://www.foodandwine.com/thmb/12UDMRbfmdAzBt9XJcCa-R2qqQ4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Mai-Tai-Cocktail-FT-BLOG1122-43e6748207e04826b57b8654cedb6bd8.jpg',
            ],
        ];

        DB::table('cocktails')->insert($cocktails);
    }
}


//ho messo l'array meglio, adesso dovrebbe essere più elegante.