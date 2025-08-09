<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Digital - Acesso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="header py-6 shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <h1 class="title text-2xl font-bold text-white">Biblioteca Digital</h1>
                </div>
                <nav>
                    <ul class="flex space-x-6 text-white">
                        <li><a href="#" class="hover:underline">Início</a></li>
                        <li><a href="#" class="hover:underline">Catálogo</a></li>
                        <li><a href="#" class="hover:underline">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="title text-3xl font-bold text-gray-800 mb-2">Bem-vindo à Biblioteca Digital</h2>
                    <p class="text-gray-600">Acesse sua conta ou cadastre-se para explorar nosso acervo completo</p>
                </div>

                <!-- Tabs -->
                <div class="flex mb-8 border-b border-gray-200">
                    <div id="login-tab" class="tab py-3 px-6 text-center text-gray-600 active" onclick="showForm('login')">Login</div>
                    <div id="register-tab" class="tab py-3 px-6 text-center text-gray-600" onclick="showForm('register')">Cadastro</div>
                </div>

                <!-- Login Form -->
                <div id="login-form" class="form-container p-8 rounded-lg">
                    <form action="/login" method="POST" class="space-y-6">
                        <div>
                            <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="login-email" name="email" required 
                                   class="input-field w-full px-4 py-2 rounded-md focus:ring-2 focus:ring-green-700">
                        </div>
                        <div>
                            <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                            <input type="password" id="login-password" name="password" required 
                                   class="input-field w-full px-4 py-2 rounded-md focus:ring-2 focus:ring-green-700">
                        </div>
                        <div class="flex items-center justify-between">
                            
                            <div class="text-sm">
                            </div>
                        </div>
                        <div>
                            <button type="submit" 
                                    class="btn-primary w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700">
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Register Form (hidden by default) -->
                <div id="register-form" class="form-container p-8 rounded-lg hidden">
                    <form action="/register" method="POST" class="space-y-6">
                        <div>
                            <label for="register-name" class="block text-sm font-medium text-gray-700 mb-1">Nome Completo</label>
                            <input type="text" id="register-name" name="name" required 
                                   class="input-field w-full px-4 py-2 rounded-md focus:ring-2 focus:ring-green-700">
                        </div>
                        <div>
                            <label for="register-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="register-email" name="email" required 
                                   class="input-field w-full px-4 py-2 rounded-md focus:ring-2 focus:ring-green-700">
                        </div>
                        <div>
                            <label for="register-phone" class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
                            <input type="tel" id="register-phone" name="phone" required 
                                   class="input-field w-full px-4 py-2 rounded-md focus:ring-2 focus:ring-green-700">
                        </div>
                        <div>
                            <label for="register-password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                            <input type="password" id="register-password" name="password" required 
                                   class="input-field w-full px-4 py-2 rounded-md focus:ring-2 focus:ring-green-700">
                        </div>
                        <div>
                            <label for="register-confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirmar Senha</label>
                            <input type="password" id="register-confirm-password" name="confirm_password" required 
                                   class="input-field w-full px-4 py-2 rounded-md focus:ring-2 focus:ring-green-700">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required 
                                       class="h-4 w-4 text-green-700 focus:ring-green-700 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                            </div>
                        </div>
                        <div>
                            <button type="submit" 
                                    class="btn-primary w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700">
                                Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer py-8 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span class="title font-bold text-lg">Biblioteca Digital</span>
                    </div>
                    <p class="mt-2 text-sm">Explore o conhecimento em um só lugar</p>
                </div>
        </div>
    </footer>
    <script src="assets/js/index.js"></script>
</body>
</html>