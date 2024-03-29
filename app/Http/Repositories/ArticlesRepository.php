<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ArticlesRepository
{
    public function search(string $query = ''): Collection;
}
