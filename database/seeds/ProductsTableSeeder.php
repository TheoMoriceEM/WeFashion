<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('local')->delete(Storage::allFiles());

        factory(Product::class, 80)->create()->each(function ($product) {
            $folder = $product->category_id == 1 ? 'homme' : 'femme';

            $link = Str::random(12) . '.jpg';
            $file = file_get_contents(asset('img_products/' . $folder . '/' . rand(1, 10) . '.jpg'));
            Storage::disk('local')->put($link, $file);

            $product->picture()->create([
                'title' => 'Lorem ipsum',
                'link' => $link
            ])->save();
        });
    }
}
