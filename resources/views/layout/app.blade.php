<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link para o CSS compilado -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Você pode adicionar aqui links para outras bibliotecas ou fontes -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Adicione sua fonte preferida -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 font-roboto">
    <div class="dashboard-wrapper flex">
        <!-- Menu Lateral -->
        <aside class="sidebar bg-gray-800 text-white w-64 min-h-screen p-4">
            <div class="logo">
                <h2 class="text-2xl font-semibold mb-8 text-center">Dashboard</h2>
            </div>

            <ul class="menu space-y-4">
                <!-- Loop para exibir itens do menu de acordo com o nível do usuário -->
                @foreach($itens as $item)
                    <li class="menu-item">
                        <a href="{{ route($item->item) }}"
                           class="flex items-center text-lg {{ request()->routeIs($item->item) ? 'text-blue-500' : 'text-white' }}">
                            <i class="{{ $item->icon }} mr-3"></i>
                            {{ $item->identifier }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <!-- Área de conteúdo principal -->
        <div class="content-wrapper flex-1 bg-white p-6">
            <!-- Cabeçalho -->
            <header class="mb-6 flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Bem-vindo, {{ $user->name }}</h1>
                <div>
                    <!-- Aqui você pode colocar outras informações de usuário ou sair -->
                    <a href="{{ route('logout') }}" class="text-blue-500 hover:underline">Sair</a>
                </div>
            </header>

            <!-- Conteúdo Dinâmico (variável dependendo da página) -->
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
