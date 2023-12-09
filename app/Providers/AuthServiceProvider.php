<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
// use App\Models\Product;// them vao
// use App\Models\User;
 use App\Models\Category;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Gate::define(ability)
        Gate::define('update-category', function (Category $category) {
                    return  $category->id;
        //
        });
    // test tu dong 32
//     public function boot(): void
// {
//     Gate::define('update-product', function (User $user, Product $product) {
//         return $user->id === $product->id;
//     });
// }
}
}
