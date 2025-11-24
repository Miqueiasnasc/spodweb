<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Caminhão') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Mensagem de sucesso --}}
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Erros de validação --}}
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc ml-6">
                                @foreach ($errors->all() as $erro)
                                    <li>{{ $erro }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Formulário de cadastro --}}
                    <form action="{{ route('cadastrar') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Placa</label>
                                <input type="text" name="plate" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="ABC-1234" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Marca</label>
                                <input type="text" name="brand" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="Volvo" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Modelo</label>
                                <input type="text" name="model" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="FH 540" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Ano</label>
                                <input type="number" name="year" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="2020" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Capacidade (Kg)</label>
                                <input type="number" step="0.01" name="capacity_kg"
                                       class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="20000" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Ativo?</label>
                                <select name="is_active" class="mt-1 block w-full border-gray-300 rounded-md">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Última inspeção</label>
                                <input type="date" name="last_inspection" class="mt-1 block w-full border-gray-300 rounded-md">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Latitude</label>
                                <input type="text" name="location_lat" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="-23.5505">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Longitude</label>
                                <input type="text" name="location_lng" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="-46.6333">
                            </div>
                        </div>

                        {{-- 🟢 Botão de cadastrar --}}
                        <div class="flex justify-end mt-6">
                            <label class="px-6 py-2 bg-black-600 text-white font-semibold rounded-md hover:bg-black-700 transition" >cadastrar</label>
                            <button type="submit"
                                class="px-6 py-2 bg-black-600 text-white font-semibold rounded-md hover:bg-black-700 transition">
                                🚛 Cadastrar Caminhão
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
