   <!-- Status -->
<div class="mt-8 grid gap-6 md:grid-cols-1">

    <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

        <p class="text-sm text-stone-500">Status Posting</p>

        @php
            $status = $posting[0]->status_publish ?? null;
            $isPublished = $status === 'published';
        @endphp

        <span class="mt-3 inline-flex rounded-full px-4 py-2 text-sm font-medium {{ $isPublished ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
            {{ $isPublished ? 'Terposting' : 'Tidak Terposting' }}
        </span>

        <div class="mt-6">
            <button type="button" wire:click="activePostingan" class="inline-flex rounded-full px-4 py-2 text-sm font-medium text-white transition focus:outline-none focus:ring-2 focus:ring-blue-500 {{ $isPublished ? 'bg-blue-600 hover:bg-blue-700' : 'bg-emerald-600 hover:bg-emerald-700' }}">
                {{ $isPublished ? 'Nonaktifkan Posting' : 'Aktifkan Posting' }}
            </button>
        </div>

        <p class="mt-4 text-sm text-stone-500">
            Klik tombol untuk mengatur status posting. Aktif = terposting, nonaktif = tidak terposting.
        </p>

    </div>

</div>
