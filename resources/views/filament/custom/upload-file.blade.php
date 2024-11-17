<div>
    <x-filament::breadcrumbs :breadcrumbs="[
        '/admin/students' => 'Student',
        '' => 'List',
    ]" />
    <div class="flex justify-between mt-1">
        <div class="font-bold text-3xl">Students</div>
        <div>
            {{ $data }}
        </div>
    </div>
    <div>
        <form wire:submit='save' class="w-full max-w-sm flex mt-2">
            <div class="mb-4">
                <label for="fileInput" class="block text-gray-700 text-sm font-bold mb-2">
                    Pilih Berkas
                </label>
                <input type="file" class="shadow appearance-none border rounde w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fileInput" wire:model='file'>
            </div>
            <div class="flex items-center justify-between mt-3 px-3">
                <button class=" bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded border focus:outline-none focus:shadow-outline" type="submit">
                    Unggah
                </button>
            </div>
        </form>
    </div>
</div>
