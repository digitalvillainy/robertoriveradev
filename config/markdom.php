<?php

return [
    /**
     * Mapping elements to class names
     * For instance
     * 'p' => 'lead',
     * will give all <p> elements the class "lead"
     * <p class="lead">
     */
    'classes' => [
        'h1'     => 'text-3xl font-bold mt-1 mb-2 text-neon-green',
        'h2'     => 'text-2xl font-bold my-1 text-neon-green',
        'h3'     => 'text-xl font-bold my-1 text-neon-green',
        'h4'     => 'text-lg font-bold my-1 text-neon-green',
        'h5'     => 'text-base font-bold my-1 text-neon-green',
        'h6'     => 'text-sm font-bold my-1 text-neon-green',
        'p'      => 'py-2 text-white text-base font-roboto',
        'ul'     => 'list-disc list-inside text-white font-roboto',
        'ul ul'  => 'pl-8 list-disc list-inside text-white font-roboto',
        'ol'     => 'list-decimal list-inside text-white font-roboto',
        'pre'    => 'my-1 text-dark-neon-green font-roboto w-[200px] overflow-x-auto',
        'code'    => 'bg-neon-green/30 my-1 text-dark-neon-green font-roboto min-w-[200px] overflow-x-auto',
    ],

    /**
     * Options for CommonMark parser
     * https://commonmark.thephpleague.com/2.3/configuration/
     */
    'commonmark' => [
        'renderer' => [
            'block_separator' => "\n",
            'inner_separator' => "\n",
            'soft_break'      => "\n",
        ],

        'commonmark' => [
            'enable_em'              => true,
            'enable_strong'          => true,
            'use_asterisk'           => true,
            'use_underscore'         => true,
            'unordered_list_markers' => ['-', '+', '*'],
        ],

        'html_input' => 'strip',
        'allow_unsafe_links' => true,
        'max_nesting_level' => PHP_INT_MAX,
    ],

    /**
     * Extensions for commonmark
     * https://commonmark.thephpleague.com/2.3/extensions/overview/
     */
    'commonmark_extensions' => [
        League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension::class, //Required!
        //League\CommonMark\Extension\Autolink\AutolinkExtension::class,
        //League\CommonMark\Extension\Strikethrough\StrikethroughExtension::class,
    ],

    /**
     * It is possible to have code tags automatically
     * parsed and highlighted
     *
     * Remember to add the stylesheet to your page, if using this!
     * @markdomStyles()
     */
    'code_highlight' => [
        'enabled' => false,
        'theme' => 'default',
        'languages' => [
            'javascript',
            'php',
            'css',
        ],
    ],

    /**
     * This being enabled adds an id and an (invisible) anchor tag to configured elements
     */
    'links' => [
        'enabled' => false,

        /**
         * Here you can define which elements will receive id tags
         */
        'elements' => [
            'h2',
            'h3',
            'h4',
        ],

        /**
         * Set the delimiter to use when creating id and href slugs
         */
        'slug_delimiter' => '-',

        /**
         * Whether to add an achor tag
         */
        'add_anchor' => true,

        /**
         * Here you can define where the anchor shall be placed, possible values:
         * - before: the anchor tag will be placed right before the element
         *     - Example: <a name="foo"></a><h1>Foo</h1>
         * - after: the anchor tag will be placed right after the element
         *     - Example: <h1>Foo</h1><a name="foo"></a>
         * - wrap: the anchor tag will wrap the element
         *     - Example: <a name="foo"><h1>Foo</h1></a>
         * - wrapInner: the anchor tag will wrap the content inside the element
         *     - Example: <h1><a name="foo">Foo</a></h1>
         * - prepend: the anchor tag will be placed before the content of the element
         *     - Example: <h1><a name="foo"></a>Foo</h1>
         * - append: the anchor tag will be placed after the content of the element
         *     - Example: <h1>Foo<a name="foo"></a></h1>
         */
        'position' => 'before',
    ],
];
