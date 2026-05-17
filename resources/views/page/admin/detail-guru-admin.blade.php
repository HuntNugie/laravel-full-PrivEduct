<x-app-layout>

    <div class="min-h-screen bg-slate-100 p-6">
        <div class="mx-auto w-full max-w-5xl space-y-6">
            <div class="flex justify-start">
                <a href="{{ route("guru") }}"
                    class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-slate-100 px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm hover:bg-slate-200">
                    Kembali
                </a>
            </div>

            <section class="rounded-3xl bg-white p-6 shadow-lg">
                <div>
                    <h1 class="text-3xl font-semibold text-slate-900">Detail Profil Guru</h1>
                    <p class="mt-2 text-sm text-slate-500">Informasi lengkap guru beserta dokumen pendukung.</p>
                </div>
            </section>

            <section class="grid gap-6 rounded-3xl bg-white p-6 shadow-lg">
                <div class="border-b border-slate-200 pb-4">
                    <h2 class="text-xl font-semibold text-slate-900">Informasi Guru</h2>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="sm:col-span-2 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Foto Guru</h3>
                        <div class="mt-4 flex justify-center">
                            <img src="{{ $guru->User->profile_photo_url }}" alt="Foto Guru"
                                class="h-64 w-64 rounded-3xl object-cover shadow-sm" />
                        </div>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Nama</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->User->name }}</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Email</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->User->email }}</p>
                    </div>
                 
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Jenis Kelamin</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->jenis_kelamin }}</p>
                    </div>
             
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">No. HP</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->no_hp }}</p>
                    </div>
                    <div class="sm:col-span-2 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Alamat</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->alamat }}</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Mata Pelajaran</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->MataPelajarans->pluck('nama_mapel')->join(', ') }}</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Pendidikan Terakhir</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->lulusan }}</p>
                    </div>
                    
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Tanggal Masuk</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->created_at->format('d M Y') }}</p>
                    </div>
                    <div class="sm:col-span-2 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <h3 class="text-sm uppercase tracking-[0.2em] text-slate-500">Status</h3>
                        <p class="mt-2 text-lg font-medium text-slate-900">{{ $guru->status }}</p>
                    </div>
                </div>
            </section>

            <section class="rounded-3xl bg-white p-6 shadow-lg">
                <div class="border-b border-slate-200 pb-4">
                    <h2 class="text-xl font-semibold text-slate-900">Preview PDF Dokumen Guru</h2>
                </div>
                <div
                    class="mt-5 rounded-3xl border border-dashed border-slate-300 bg-slate-50 p-6 text-center text-slate-500">
                    @if($guru->cv && Storage::disk("public")->exists($guru->cv))
                        <iframe src="{{ asset('storage/' . $guru->cv) }}" 
                            class="h-96 w-full rounded-2xl border border-slate-200"></iframe>
                    @else
                        <p class="text-slate-400">Tidak ada dokumen PDF</p>
                    @endif
                </div>
            </section>

            <section class="rounded-3xl bg-white p-6 shadow-lg">
                <h2 class="text-xl font-semibold text-slate-900">Aksi</h2>
                <div class="mt-5 flex flex-col gap-3 sm:flex-row sm:items-center">
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-2xl bg-emerald-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-500">Terima</button>
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-2xl bg-rose-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-rose-500">Tolak</button>
                </div>
            </section>
        </div>
    </div>

</x-app-layout>
