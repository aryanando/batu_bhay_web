<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css, resources/js/editor.js')
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <div x-data="setupEditor(
        $wire.entangle('{{ $attributes->wire('model')->value() }}').defer
    )" x-init="() => init($refs.editor)" wire:ignore
        {{ $attributes->whereDoesntStartWith('wire:model') }}>
        <div x-ref="editor"></div>
    </div>
</body>

</html>
