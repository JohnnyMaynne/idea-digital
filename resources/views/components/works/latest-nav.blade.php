@props(['info'])

<div {{ $attributes->class([
    'pt-4 border-t border-gray-900 cursor-pointer',
    'opacity-50' => !$info['active']
    ]) }}>
    <x-app.author/>
    <div class="text-xl mt-2 font-bold">{{  $info['subtitle'] }}</div>
    <div class="mt-2 text-gray-500">The main source of competitor links is affiliate links or links from directory sites to buy modules and add-ons.</div>
</div>
