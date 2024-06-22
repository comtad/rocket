<?php

namespace App\Http\Filters\LikeFilters;

use Illuminate\Database\Eloquent\Builder;

class ChandelierFilter extends AbstractFilter
{
    private array $params = [];
    const COLOR = 'color';
    const COUNTRY = 'country';
    const PRICE_FROM = 'from';

    const PRICE_TO = 'to';


    public function getCallbacks(): array
    {
        return [
            self::COLOR => 'color',
            self::COUNTRY => 'country',
            self::PRICE_FROM => 'priceFrom',
            self::PRICE_TO => 'priceTo',
        ];
    }


    public function color(Builder $builder, $value)
    {

        $builder->whereIn('color', $value);

    }

    public function country(Builder $builder, $value)
    {
        $builder->whereIn('country', $value);
    }

    public function priceFrom(Builder $builder, $value)
    {
        $builder->where('price', '>', $value);
    }

    public function priceTo(Builder $builder, $value)
    {
        $builder->where('price', '<', $value);
    }
}
