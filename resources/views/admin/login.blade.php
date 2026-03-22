<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Bijulicar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-950 flex items-center justify-center px-4">
    <div class="w-full max-w-sm">

        <div class="text-center mb-6">
            <div
                class="inline-flex items-center gap-2 bg-red-950 border border-red-800 text-red-400 text-xs px-3 py-1.5 rounded-full font-mono mb-4">
                <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                STAFF ACCESS ONLY
            </div>
            <h1 class="text-2xl font-bold text-white">Bijulicar Admin</h1>
            <p class="text-gray-400 text-sm mt-1">Backend staff login</p>
        </div>

        <div class="bg-gray-900 rounded-2xl border border-gray-800 overflow-hidden">

            <div class="px-6 py-3 border-b border-gray-800">
                <div class="font-mono text-xs text-gray-500">
                    <span class="text-green-500">guard</span>: admin →
                    <span class="text-blue-400">admins</span> table
                </div>
            </div>

            <form method="POST" action="{{ route('admin.login') }}" class="px-6 py-6 space-y-4">
                @csrf

                @if ($errors->any())
                    <div class="bg-red-900/30 border border-red-700 text-red-300 rounded-lg px-4 py-3 text-sm">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div>
                    <label class="block text-xs font-medium text-gray-400 mb-1.5 uppercase tracking-wider">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-4 py-2.5 text-sm
                              focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                        placeholder="admin@test.com">
                </div>

                <div>
                    <label
                        class="block text-xs font-medium text-gray-400 mb-1.5 uppercase tracking-wider">Password</label>
                    <input type="password" name="password" required
                        class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-4 py-2.5 text-sm
                              focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <button type="submit"
                    class="w-full bg-red-700 hover:bg-red-600 text-white py-2.5 rounded-lg text-sm font-semibold transition-colors">
                    Enter Admin Panel
                </button>
            </form>

            <div class="px-6 pb-6">
                <div class="bg-gray-800 rounded-xl p-4 text-xs space-y-2">
                    <p class="text-gray-400 font-medium mb-2">Demo credentials (password: <span
                            class="font-mono text-gray-300">password</span>)</p>
                    <div class="flex items-center justify-between">
                        <span class="bg-yellow-900/50 text-yellow-300 px-2 py-0.5 rounded">Admin</span>
                        <span class="font-mono text-gray-400">admin@test.com</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="bg-red-900/50 text-red-300 px-2 py-0.5 rounded">Superadmin</span>
                        <span class="font-mono text-gray-400">super@test.com</span>
                    </div>
                </div>
            </div>

        </div>

        <p class="text-center text-xs text-gray-600 mt-4">
            Not staff? <a href="{{ route('login') }}" class="text-gray-400 hover:text-white transition-colors">Go to
                regular login</a>
        </p>

    </div>
</body>

</html>
