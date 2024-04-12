@extends('layouts.base')

@section('title', 'Design System')

@section('content')
    <h3 class="pt-12 text-center text-headlines-3">Colors</h3>
    <div class="container overflow-x-hidden mx-auto p-16 flex items-start justify-start flex-col gap-3">
        <div class="flex items-center justify-evenly flex-wrap gap-3">
            <div class="flex lg:w-80 text-body-medium-1">Neutral</div>
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
            <div class="flex lg:w-80 text-body-medium-1">Primary, Secondary, Info</div>
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
            <div class="flex lg:w-80 text-body-medium-1">Shade</div>
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
            <div class="flex lg:w-80 text-body-medium-1">Tint</div>
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
            <div class="flex lg:w-80 text-body-medium-1">Action</div>
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

    <h3 class="text-center text-headlines-3">Typography</h3>
    <div class="container overflow-x-hidden mx-auto p-16 flex items-start justify-start flex-col gap-3">
        <div class="flex items-center justify-evenly flex-wrap gap-3">
            <div class="flex lg:w-80 text-body-medium-1">Headlines</div>
            <div class="flex flex-col flex-wrap gap-3">
                <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                    <span class="text-headlines-1">Headline 1</span>
                    <span class="text-body-regular-4 text-neutral-l-grey">Semi bold, 64/76</span>
                </div>
                <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                    <span class="text-headlines-2">Headline 2</span>
                    <span class="text-body-regular-4 text-neutral-l-grey">Semi bold, 36/44</span>
                </div>
                <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                    <span class="text-headlines-3">Headline 3</span>
                    <span class="text-body-regular-4 text-neutral-l-grey">Semi bold, 28/36</span>
                </div>
                <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                    <span class="text-headlines-4">Headline 4</span>
                    <span class="text-body-regular-4 text-neutral-l-grey">Semi bold, 20/28</span>
                </div>
            </div>
        </div>
        <div class="flex w-full border-b border-neutral-grey-blue my-4"></div>
        <div class="flex flex-row flex-wrap gap-3">
            <div class="flex w-full items-center justify-center lg:justify-start lg:items-start lg:w-80 text-body-medium-1">
                Body</div>
            <div class="w-full lg:w-80 flex flex-row justify-between">
                <div class="flex flex-col flex-wrap">
                    <h4 class="text-headlines-4 mb-5 text-neutral-grey">Regular</h4>
                    <div class="flex items-center justify-evenly flex-wrap gap-3">
                        <div class="flex flex-col flex-wrap gap-3">
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-regular-1">Body 1</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Regular, 18/28</span>
                            </div>
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-regular-2">Body 2</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Regular, 16/24</span>
                            </div>
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-regular-3">Body 3</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Regular, 14/20</span>
                            </div>
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-regular-4">Body 4</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Regular, 12/16</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap">
                    <h4 class="text-headlines-4 mb-5 text-neutral-grey">Medium</h4>
                    <div class="flex items-center justify-evenly flex-wrap gap-3">
                        <div class="flex flex-col flex-wrap gap-3">
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-medium-1">Body 1</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Medium, 18/28</span>
                            </div>
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-medium-2">Body 2</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Medium, 16/24</span>
                            </div>
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-medium-3">Body 3</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Medium, 14/20</span>
                            </div>
                            <div class="flex items-start justify-start flex-wrap gap-3 flex-col">
                                <span class="text-body-medium-4">Body 4</span>
                                <span class="text-body-regular-4 text-neutral-l-grey">Medium, 12/16</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
