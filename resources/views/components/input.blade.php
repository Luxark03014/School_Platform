@props(['disabled' => false])

<input 
    {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge([
        'class' => 'w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed transition duration-300 ease-in-out'
    ]) !!}>
