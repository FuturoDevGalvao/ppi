<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuários</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen w-screen flex flex-col items-center justify-center  gap-4 py-4 bg-slate-900 text-gray-100">
    <h1 class="underline decoration-wavy font-black text-2xl">Lista de Usuários</h1>
    <ol class="w-[30%] flex flex-col items-center gap-4 list-decimal">
        @foreach ($usuarios as $id => $usuario)
            <li
                class="w-[100%] border border-gray-600 bg-card p-4 rounded-lg transition-all  hover:rotate-6 hover:scale-110 hover:shadow-2xl">
                <h2 class="font-bold">{{ 'Informações sobre o usuário(a): ' . $usuario['nome'] }}</h2>

                <p class="font-bold">{{ "ID: $id" }}</p>

                <p class="font-bold">Notas:</p>
                <ul class="list-disc pl-6">
                    @php
                        $notas = $usuario['notas'];
                        $media = array_sum($notas) / count($notas);
                    @endphp

                    @foreach ($notas as $nota)
                        <li>{{ $nota }}</li>
                    @endforeach
                </ul>

                <p class="font-bold">
                    Média:
                    <span style="color: {{ $media < 60 ? 'red' : 'green' }};">{{ $media }}</span>
                </p>
            </li>
        @endforeach
    </ol>
</body>

</html>
