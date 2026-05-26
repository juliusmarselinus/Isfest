@props(['label', 'name', 'accept' => 'image/*,.pdf', 'required' => false])

<div class="{{ $attributes->get('class') }}">
    <label class="block text-[11px] text-slate-300 font-bold mb-2 tracking-widest uppercase">
        {{ $label }}
    </label>
    <input 
        type="file" 
        name="{{ $name }}" 
        accept="{{ $accept }}" 
        {{ $required ? 'required' : '' }} 
        class="w-full px-3 py-3 input-dark text-sm"
    >
</div>