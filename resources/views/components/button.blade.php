<button
    {{ $attributes->class([
            'rounded',
            'flex',
            'flex-row',
            'py-2.5',
            'text-body-regular-1',
            'bg-primary hover:bg-primary active:bg-shade-200 active:border-none focus:border-2 focus:border-solid focus:border-neutral-d-grey text-neutral-white' =>
                $styleType === 'primary',
            'border border-solid border-primary bg-transparent active:border-none hover:bg-neutral-silver text-primary focus:border-neutral-l-grey focus:border-2' =>
                $styleType === 'secondary',
            'bg-transparent text-primary hover:bg-neutral-silver active:border-none focus:border-neutral-l-grey focus:border-2 active:bg-tint-500' =>
                $styleType === 'tertiary',
            'px-8 text-body-regular-1' => $size === 'normal',
            'px-3.5 text-body-regular-2' => $size === 'medium',
            'px-2 text-body-regular-3' => $size === 'small',
        ])->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
