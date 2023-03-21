<?php

namespace App\Services;

use App\Models\Peso;

class PesoService
{
    private $peso;

    public function __construct(Peso $peso)
    {
        $this->peso = $peso;
    }
    public function index()
    {
        return $this->peso->orderBy('item')->whereNull('deleted_at')->get();
    }
    public function store(array $input)
    {
        try {
            return $this->peso->create($input);
        } catch (\Exception $e) {
            dd($e->getMessage(), $e->getLine());
        }
    }
    public function update(Peso $peso, array $input) {
        try {
            $peso->fill($input);
            $peso->save();
            return $peso;
        } catch(\Exception $e) {
            dd($e->getMessage(), $e->getLine());
        }
    }

    public function destroy(Peso $peso) {
        try {
            $peso->delete();
        } catch (\Exception $e) {
            dd($e->getMessage(), $e->getLine());
        }
    }
}
