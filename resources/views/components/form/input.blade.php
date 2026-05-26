@props(['label', 'type' => 'text', 'name', 'placeholder' => '', 'required' => false, 'note' => null])

<div class="{{ $attributes->get('class') }}">
    <label class="block text-[11px] text-slate-300 font-bold mb-2 tracking-widest uppercase">
        {{ $label }}
    </label>
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        placeholder="{{ $placeholder }}" 
        {{ $required ? 'required' : '' }} 
        class="w-full px-4 py-3.5 input-dark text-sm"
    >
    @if($note)
        <p class="text-[10px] text-slate-500 mt-1.5">{{ $note }}</p>
    @endif
</div>