@extends('layouts.base')

@section('title', 'Design System')

@section('content')
    <h3 class="p-12 text-center">Colors</h3>
    <div class="container overflow-x-hidden mx-auto p-16 flex items-start justify-start flex-col gap-3">
        <div class="flex items-center justify-evenly flex-wrap gap-3">
            <div class="flex lg:w-80">Neutral</div>
            <div class="flex md:items-center items-start md:justify-center justify-start flex-wrap gap-3">
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-neutral-black rounded"></div>
                    <span>Black</span>
                    <span>#263238</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-neutral-d-grey rounded"></div>
                    <span>D-grey</span>
                    <span>#4D4D4D</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-neutral-grey rounded"></div>
                    <span>Grey</span>
                    <span>#717171</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-neutral-l-grey rounded"></div>
                    <span>L_grey</span>
                    <span>#89939E</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-neutral-grey-blue rounded"></div>
                    <span>Grey-blue</span>
                    <span>#ABBED1</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-neutral-silver rounded"></div>
                    <span>Silver</span>
                    <span>#F5F7FA</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-neutral-white rounded"></div>
                    <span>White</span>
                    <span>#FFFFFF</span>
                </div>
            </div>
        </div>
        <div class="flex w-full border-b border-neutral-grey-blue my-4"></div>
        <div class="flex items-center justify-evenly flex-wrap gap-3">
            <div class="flex lg:w-80">Primary, Secondary, Info</div>
            <div class="flex md:items-center items-start md:justify-center justify-start flex-wrap gap-3">
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-primary rounded"></div>
                    <span>Primary</span>
                    <span>#4CAF4F</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-secondary rounded"></div>
                    <span>Secondary</span>
                    <span>#263238</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-info rounded"></div>
                    <span>Info</span>
                    <span>#2194F3</span>
                </div>
            </div>
        </div>
        <div class="flex w-full border-b border-neutral-grey-blue my-4"></div>
        <div class="flex items-center justify-evenly flex-wrap gap-3">
            <div class="flex lg:w-80">Shade</div>
            <div class="flex md:items-center items-start md:justify-center justify-start flex-wrap gap-3">
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-shade-100 rounded"></div>
                    <span>Shade 1</span>
                    <span>#43A046</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-shade-200 rounded"></div>
                    <span>Shade 2</span>
                    <span>#388E3B</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-shade-300 rounded"></div>
                    <span>Shade 3</span>
                    <span>#237D31</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-shade-400 rounded"></div>
                    <span>Shade 4</span>
                    <span>#1B5E1F</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-shade-500 rounded"></div>
                    <span>Shade 5</span>
                    <span>#103E13</span>
                </div>
            </div>
        </div>
        <div class="flex w-full border-b border-neutral-grey-blue my-4"></div>
        <div class="flex items-center justify-evenly flex-wrap gap-3">
            <div class="flex lg:w-80">Tint</div>
            <div class="flex md:items-center items-start md:justify-center justify-start flex-wrap gap-3">
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-tint-100 rounded"></div>
                    <span>Tint 1</span>
                    <span>#66BB69</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-tint-200 rounded"></div>
                    <span>Tint 2</span>
                    <span>#81C784</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-tint-300 rounded"></div>
                    <span>Tint 3</span>
                    <span>#A5D6A7</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-tint-400 rounded"></div>
                    <span>Tint 4</span>
                    <span>#C8E6C9</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-tint-500 rounded"></div>
                    <span>Tint 5</span>
                    <span>#E8F5E9</span>
                </div>
            </div>
        </div>
        <div class="flex w-full border-b border-neutral-grey-blue my-4"></div>
        <div class="flex items-center justify-evenly flex-wrap gap-3">
            <div class="flex lg:w-80">Action</div>
            <div class="flex md:items-center items-start md:justify-center justify-start flex-wrap gap-3">
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-warning rounded"></div>
                    <span>Warning</span>
                    <span>#FBC02D</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-error rounded"></div>
                    <span>Error</span>
                    <span>#E53835</span>
                </div>
                <div class="flex flex-col">
                    <div class="w-32 h-32 bg-success rounded"></div>
                    <span>Success</span>
                    <span>#2E7D31</span>
                </div>
            </div>
        </div>
    </div>

    <h3 class="p-12 text-center">Typography</h3>
@endsection
