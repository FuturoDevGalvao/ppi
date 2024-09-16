<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        // Definindo o array associativo com 10 usuários
        $usuarios = [
            1 => [
                "nome" => "João",
                "notas" => [35, 50, 60, 85]
            ],
            2 => [
                "nome" => "Rafael",
                "notas" => [85, 0, 40, 60]
            ],
            3 => [
                "nome" => "Maria",
                "notas" => [70, 80, 90, 100]
            ],
            4 => [
                "nome" => "Ana",
                "notas" => [60, 70, 80, 90]
            ],
            5 => [
                "nome" => "Pedro",
                "notas" => [50, 60, 70, 80]
            ],
            6 => [
                "nome" => "Lucas",
                "notas" => [40, 50, 60, 70]
            ],
            7 => [
                "nome" => "Carla",
                "notas" => [30, 40, 50, 60]
            ],
            8 => [
                "nome" => "Júlia",
                "notas" => [20, 30, 40, 50]
            ],
            9 => [
                "nome" => "Bruno",
                "notas" => [10, 20, 30, 40]
            ],
            10 => [
                "nome" => "Fernanda",
                "notas" => [0, 10, 20, 30]
            ],
        ];

        return view("usuarios.index", ["usuarios" => $usuarios]);
    }
}
