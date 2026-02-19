<?php

namespace Nunes\RumobrTema\Commands;

use Illuminate\Console\Command; 

class PublishVueCommand extends Command
{
    protected $signature = 'rumobr-tema:publish {--force : Sobrescrever arquivos existentes}';
    protected $description = 'Publica os componentes Vue e CSS do tema Rumobr';

    public function handle()
    {
        $force = $this->option('force') ? '--force' : '';

        $this->call('vendor:publish', [
            '--provider' => 'Nunes\\RumobrTema\\RumobrTemaServiceProvider',
            '--tag' => 'rumobr-tema-components',
        ]);

        $this->call('vendor:publish', [
            '--provider' => 'Nunes\\RumobrTema\\RumobrTemaServiceProvider',
            '--tag' => 'rumobr-tema-pages',
        ]);

        $this->call('vendor:publish', [
            '--provider' => 'Nunes\\RumobrTema\\RumobrTemaServiceProvider',
            '--tag' => 'rumobr-tema-css',
        ]);

        $this->info('✓ Componentes Vue e CSS publicados com sucesso!');
        $this->line('');
        $this->info('Arquivos publicados em:');
        $this->line('  - resources/js/components/rumobr-tema/');
        $this->line('  - resources/css/vendor/rumobr-tema/');
        $this->line('');
        $this->info('Próximos passos:');
        $this->line('1. Importe os componentes em seu app.js');
        $this->line('2. Importe o CSS em seu app.css ou app.js');
        $this->line('3. Execute: npm run build');
    }
}
