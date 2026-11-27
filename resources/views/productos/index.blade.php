<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-8">
    <h1 class="text-2xl font-bold mb-4">Productos</h1>

    <table class="w-full border-collapse">
        <thead>
            <tr class="text-left border-b">
                <th class="p-2">ID</th>
                <th class="p-2">Nombre</th>
                <th class="p-2">Precio</th>
                <th class="p-2">Stock</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $producto)
                <tr class="border-b">
                    <td class="p-2">{{ $producto->id }}</td>
                    <td class="p-2">{{ $producto->nombre }}</td>
                    <td class="p-2">S/ {{ number_format($producto->precio, 2) }}</td>
                    <td class="p-2">{{ $producto->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-2">No hay productos todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $productos->links() }}
    </div>
</body>
</html>