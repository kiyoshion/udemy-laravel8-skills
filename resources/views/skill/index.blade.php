<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-sm sm:rounded-lg">

                <table class="border-collapse border border-green-800">
                    <thead>
                        <tr>
                            <th class="border border-green-600 p-2">id</th>
                            <th class="border border-green-600 p-2">name</th>
                            <th class="border border-green-600 p-2">status</th>
                            <th class="border border-green-600 p-2">詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skills as $skill)
                        <tr>
                            <td class="border border-green-600 p-2">{{ $skill->id }}</td>
                            <td class="border border-green-600 p-2">{{ $skill->skill_name }}</td>
                            <td class="border border-green-600 p-2">{{  \App\Models\Skill::SKILL_STATUS_OBJECT[$skill->skill_status] }}</td>
                            <td class="border border-green-600 p-2"><button onclick="location.href='/skill/{{ $skill->id }}'" class="button ">詳細</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
            <div class="flex justify-center mt-3">
                {{ $skills->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
