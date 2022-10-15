<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('User Interface Explorer') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="{{ asset('zencorespa/ui/ui.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div>
    <div class="container-sidebar">
        <div class="container-flex">
            <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                <h1 class="text-2xl text-white text-center font-bold">Navigation</h1>
                <nav class="mt-5 flex-1 space-y-2 px-2">
                    <a href="#buttons" class="bg-slate-700 text-white group flex items-center px-4 py-3 text-md font-medium rounded-md">
                        Buttons
                    </a>
                </nav>
            </div>
            <div class="flex flex-shrink-0 border-t border-slate-800 p-4">
                <a href="#" class="group block w-full flex-shrink-0">
                    <div class="flex items-center">
                        <div>
                            <svg class="h-9 w-9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 565 480" style="enable-background:new 0 0 2160 480;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#53B2C7;}
                                    .st1{fill:#237384;}
                                    .st2{fill:none;stroke:#237484;stroke-width:15.2698;stroke-miterlimit:10;}
                                </style>
                                <path class="st0" d="M556.01,387.1L388.01,67.8c-3.49-6.64-8.46-12.4-14.57-16.74C333.5,22.7,238.27,2.34,238.27,2.34  c-1.47-0.14-2.92-0.23-4.34-0.29c-27-1.05-51.96,14.45-64.66,38.3L14.26,331.69c-3.71,6.97-6.6,14.38-8.4,22.06  c-8.54,36.55,0.36,54,0.36,54c9.9,30.55,75.21,50.62,115.63,60.27c18.79,4.49,38.03,6.73,57.36,6.76l304.94,1.18  c3.91,0.01,8.14,0.09,12.04-0.01c7.48-0.19,24.44-0.57,46.76-21.09c9.46-8.7,14.65-17.94,17.34-26.46  C564.59,414.71,562.7,399.81,556.01,387.1z M458.15,388.76c-1.33,8.33-4.7,16.16-9.66,22.54c-6.46,8.3-17.72,18-30.14,24.17  c-7.83,3.89-16.55,5.66-25.29,5.66l-284.74-0.18l0,0c-3.34-7.74-4-18.09-3.45-28.23c1.03-19.05,6.65-37.56,15.54-54.44L271.8,70.74  c5.22-9.91,12.79-18.54,22.44-24.24l155.78,296.25C457.44,356.87,460.66,373,458.15,388.76z"/>
                                <path class="st1" d="M295.55,46.29l155.78,296.25c7.43,14.12,10.64,30.26,8.14,46.01c-1.33,8.33-4.7,16.16-9.66,22.54  c-6.46,8.3-17.72,18-30.14,24.17c-7.83,3.89-16.55,5.66-25.29,5.66H116.36l-4.55-0.12l-2.18-0.06c0,11.25,28.97,30.36,36.78,31.45  c11.29,1.57,22.69,2.36,34.12,2.38l304.94,1.18c3.91,0.01,8.14,0.09,12.04-0.01c7.48-0.19,24.44-0.57,46.76-21.09  c9.46-8.7,14.65-17.94,17.34-26.46c4.31-13.69,2.42-28.59-4.27-41.3L389.32,67.6c-3.49-6.64-8.46-12.4-14.57-16.74  c-4.52-3.21-9.75-6.32-15.48-9.31c0,0-17.22-5.86-26.7-5.24c-9.48,0.61-32.83,3.58-37.4,8.44"/>
                                <circle class="st2" cx="285.6" cy="284.57" r="67.05"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">ZenCore</p>
                            <p class="text-xs font-medium text-slate-200 group-hover:text-white">Documentation</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <main class="flex-1">
            <div class="py-6">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <h1 class="h1 text-center">Components</h1>
                    <h1 id="buttons" class="h2 py-8">Buttons</h1>
                    <h1 id="buttons-overview" class="h3  py-4">Overview</h1>
                    <div class="container-ui text-center">
                        <x-ui::button class="button-light">Cancel</x-ui::button>
                        <x-ui::button class="button-secondary">Create</x-ui::button>
                    </div>
                    <h1 id="buttons-actions" class="h3 py-6">Actions</h1>
                    <div class="container-ui text-center">
                        <x-ui::button class="button-primary">Primary</x-ui::button>
                        <x-ui::button class="button-secondary">Secondary</x-ui::button>
                        <x-ui::button class="button-success">Success</x-ui::button>
                        <x-ui::button class="button-danger">Danger</x-ui::button>
                        <x-ui::button class="button-info">Info</x-ui::button>
                        <x-ui::button class="button-light">Light</x-ui::button>
                        <x-ui::button class="button-dark">Dark</x-ui::button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
