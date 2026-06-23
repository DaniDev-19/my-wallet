<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use Illuminate\Http\JsonResponse;

class AccountController extends Controller
{
    public function index(): JsonResponse
    {
        $cuentas = Account::All();

        if ($cuentas->isEmpty()) {
            $data = [
                'message' => 'No se encontraron estudiantes',
                'status' => 200
            ];
            return response()->json($data, 200);
        }

        return response()->json($cuentas, 200);
    }

    public function store(StoreAccountRequest $request): JsonResponse
    {
        $account = Account::create($request->validated());
        
        return response()->json(['message' => 'Cuenta guardada con éxito', 'data' => $account], 201);
    }

    public function show(Account $account): JsonResponse
    {
        return response()->json($account);
    }

    public function update(StoreAccountRequest $request, Account $account): JsonResponse
    {
        $account->update($request->validated());

        return response()->json([
            'message' => 'Cuenta actualizada con éxito',
            'data' => $account,
            'status' => 201,
        ]);
    }

    public function destroy(Account $account): JsonResponse
    {
        $account->delete();
        return response()->json(['message' => 'Cuenta eliminada', 'status' => 204]);
    }
}
