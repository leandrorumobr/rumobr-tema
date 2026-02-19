<?php

namespace Nunes\RumobrTema;

use Illuminate\Support\ServiceProvider;

class RumobrTemaServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Configurações podem ser adicionadas aqui se necessário
    }

    public function boot()
    {
        // Publicar componentes Vue
        $this->publishes([
            __DIR__.'/Components' => resource_path('js/components'),
        ], 'rumobr-tema-components');
        
        $this->publishes([
            __DIR__.'/Pages' => resource_path('js/pages'),
        ], 'rumobr-tema-pages');

        // Publicar CSS
        $this->publishes([
            __DIR__.'/Assets/css' => resource_path('css'),
        ], 'rumobr-tema-css');

        // Registrar comando
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\PublishVueCommand::class,
            ]);
        }
    }
}
