<?php

namespace Piece;

use Illuminate\Support\ServiceProvider;

/**
* PieceServiceProvider
*/
class PieceServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [];

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        // 設定ファイルをコピー
        // $this->publishes([
        //     __DIR__.'/../config/piece-config.php' => config_path('piece-config.php'),
        // ]);
        $configPath = __DIR__ . '/../config/piece-config.php';
        $this->publishes([$configPath => config_path('piece-config.php')], 'piece-config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // ミドルウェアを登録
        $this->registerRouteMiddleware();

        // コマンドを登録
        $this->commands($this->commands);
    }

    /**
     * Register the route middleware.
     *
     * @return void
     */
    protected function registerRouteMiddleware()
    {

    }
}
