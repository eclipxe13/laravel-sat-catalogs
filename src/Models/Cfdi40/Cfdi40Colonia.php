<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class Cfdi40Colonia extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_colonias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'colonia',
        'codigo_postal',
        'texto',
    ];
}
