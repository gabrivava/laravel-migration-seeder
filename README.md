#  I seeders

## posso creare insieme al modello anche il suo seed e la migrazione
```bash
php artisan make:model -sm          (s = seed,m = migration)
```

## compilo la migrazione
- es. compilato
```php
public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 70);
            $table->string('city', 50);
            $table->tinyInteger('days');
            $table->text('description');
            $table->decimal('price', 6, 2);
            $table->timestamps();
        });
    }
```

## compilo il seed
- deve essere importato il modello
```php
use Faker\Generator as Faker;
use App\Travel;
```
```php
public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newTravel = new Travel;
            $newTravel->destination = $faker->address();
            $newTravel->city = $faker->city();
            $newTravel->days = $faker->numberBetween(1, 5);
            $newTravel->description = $faker->paragraph( 3, true);
            $newTravel->price = $faker->randomFloat(2, 100, 500);
            $newTravel->save();
        }
    }
```

## compilare il database
- nel ciclo sopra si può decidere quanti dati aggiungere
```bash
php artisan db --class=NomeSeeder
```