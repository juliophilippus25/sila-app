@php
    $fieldKey = str_replace(['[', ']'], ['.', ''], $name);
    $selectedValue = old($fieldKey, $selected ?? '');
@endphp

<div>
    <x-input-label :for="$name" :value="$label" />
    <select name="{{ $name }}"
        {{ $attributes->merge(['class' => 'mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500']) }}>

        <option value="" disabled {{ $selectedValue == '' ? 'selected' : '' }}>
            {{ $placeholder ?? 'Select an option' }}
        </option>

        @foreach ($options as $value => $label)
            <option value="{{ $value }}" {{ $selectedValue == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
</div>
