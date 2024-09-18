<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\URL;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap for the website';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Pobieranie dynamicznego adresu URL
        $baseUrl = URL::to('/');

        // Generowanie sitemap
        SitemapGenerator::create($baseUrl)->writeToFile(public_path('sitemap.xml'));

        // Informacja zwrotna
        $this->info('Sitemap generated successfully!');
    }
}
