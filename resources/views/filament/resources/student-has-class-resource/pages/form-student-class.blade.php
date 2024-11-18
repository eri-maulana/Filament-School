<x-filament-panels::page>
    <form method="post" wire:submit='save'>
        {{ $this->form }}
        <button type="submit" class="my-4 mx-4 border bg-green-500 w-40 hover:bg-blue-600  font-bold py-2 px-2">Simpan</button>
    </form>
</x-filament-panels::page>
