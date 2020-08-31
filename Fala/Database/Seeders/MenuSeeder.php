<?php

namespace Themes\Fala\Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\MenuBuilder\Http\Services\MenuBuilderServices;

/**
 * Class MenuSeeder
 *
 * @package Themes\Fala\Database\Seeders
 */
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Modules\Core\MenuBuilder\Http\Services\MenuBuilderServices $services
     *
     * @return void
     * @throws \Exception
     */
    public function run(MenuBuilderServices $services)
    {
        Model::unguard();

        $menus = [
            'main menu', /* Main */
            'footer menu', /* Footer */
        ];
        try {
            DB::beginTransaction();
            foreach ($menus as $menu) {
                $services->create([
                    'type' => $menu,
                    'structure' => [],
                    'theme' => 'fala'
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

    }
}
