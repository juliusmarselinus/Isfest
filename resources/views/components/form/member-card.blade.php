@props(['index'])

<div class="member-card bg-[#0b1120]/50 p-5 rounded-xl border border-slate-700/50 space-y-4 hidden" id="member-{{ $index }}">
    <p class="text-xs font-semibold text-slate-300 uppercase tracking-widest mb-3">Anggota {{ $index }}</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="md:col-span-2">
            <x-form.input 
                label="Nama Lengkap" 
                name="nama_anggota[]" 
                placeholder="Nama Anggota {{ $index }}" 
                class="member-input"
            />
        </div>
        <div class="md:col-span-2">
            <x-form.file 
                label="Unggah Identitas" 
                name="ktm_anggota[]" 
                class="member-input"
            />
        </div>
    </div>
</div>