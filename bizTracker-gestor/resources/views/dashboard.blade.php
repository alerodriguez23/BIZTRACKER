<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-3xl text-gray-800 dark:text-black-200 leading-tight">
            ¡Bienvenido, {{ Auth::user()->name }}!
        </h1>
        <p class="text-lg text-gray-600 dark:text-gray-400">
            Gracias por iniciar sesión en el panel de control de tu negocio. Aquí encontrarás una visión general de tus operaciones, métricas clave y herramientas para tomar decisiones informadas. Mantén un ojo en tus ventas, gastos, inventario y más para optimizar el rendimiento de tu empresa. ¡Empieza a explorar y lleva tu negocio al siguiente nivel!
        </p>
    </x-slot>

    <div class="flex justify-center items-center">
        <div class="max-w-4xl p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
            
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Resumen de ventas</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-4">
                Aquí puedes ver un resumen de tus ventas recientes, los ingresos totales, y otras métricas clave relacionadas con las ventas.
            </p>
        </div>
    </div>

    
    <div class="flex justify-center items-center mt-8">
        <img class="max-w-2xl" src="ruta_de_la_imagen.jpg" alt="Imagen complementaria">
    </div>
</x-app-layout>


