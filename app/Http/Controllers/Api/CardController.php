<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Http\Requests\StoreCardRequest;
use Illuminate\Http\JsonResponse;

class CardController extends Controller
{
    public function index(): JsonResponse
    {
        $card = Card::All();
        if($card->isEmpty()) {
            $data = [
                'message' => 'No se encontraron cards',
                'status' => 200
            ];
            return response()->json($data, 200);
        }

        return response()->json($card, 200);
    }

    public function store(StoreCardRequest $request): JsonResponse
    {
        $datos = $request->validated();

        $ultimosCuatro = substr($datos['tarjeta_numero'], -4);
        $datos['tarjeta_enmascarada'] = '**** **** **** ' . $ultimosCuatro;

        $card = Card::create($datos);

        return response()->json(['message' => 'Tarjeta registrada con éxito', 'data' => $card], 201);
    }

    public function show(Card $card): JsonResponse
    {
        return response()->json($card, 200);
    }

    public function update(StoreCardRequest $request, Card $card): JsonResponse
    {
        $datos = $request->validated();

        if (isset($datos['tarjeta_numero'])) {
            $ultimosCuatro = substr($datos['tarjeta_numero'], -4);
            $datos['tarjeta_enmascarada'] = '**** **** **** ' . $ultimosCuatro;
        }

        $card->update($datos);

        return response()->json([
            'message' => 'Tarjeta actualizada con éxito',
            'data' => $card,
            'status' => 201,
        ]);
    }


    public function destroy(Card $card): JsonResponse
    {
        $card->delete();
        return response()->json(['message' => 'Tarjeta eliminada', 'status' => 204]);
    }
}
