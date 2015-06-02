<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'timestamp' => 1431131455,
    'checksum' => 'e5b87bb981072466259d96c1df6d62be',
    'data' => [
        'streams' => [
            'schemes' => [
                'system' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'system'
                        ]
                    ]
                ],
                'user' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user'
                        ]
                    ]
                ],
                'blueprints' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://blueprints',
                            1 => 'system/blueprints'
                        ]
                    ]
                ],
                'config' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://config',
                            1 => 'system/config'
                        ]
                    ]
                ],
                'plugins' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'plugin' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'themes' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes'
                        ]
                    ]
                ],
                'cache' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'cache'
                        ],
                        'images' => [
                            0 => 'images'
                        ]
                    ]
                ],
                'log' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'logs'
                        ]
                    ]
                ],
                'asset' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'assets'
                    ]
                ],
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'plugins' => [
            'pagination' => [
                'enabled' => true,
                'path' => '/blog',
                'built_in_css' => true,
                'delta' => 0
            ],
            'reading_time' => [
                'enabled' => true,
                'word_per_minute' => 200,
                'minute_label' => 'minute',
                'minutes_label' => 'minutes',
                'second_label' => 'second',
                'seconds_label' => 'seconds',
                'format' => '{minutes_short_count} {minutes_text}, {seconds_short_count} {seconds_text}',
                'round' => 'seconds'
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and'
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'jscomments' => [
                'enabled' => false,
                'provider' => '',
                'providers' => [
                    'disqus' => [
                        'shortname' => ''
                    ],
                    'intensedebate' => [
                        'acct' => ''
                    ],
                    'facebook' => [
                        'appId' => '',
                        'lang' => 'en_US',
                        'numposts' => 5,
                        'colorscheme' => 'light',
                        'width' => '100%'
                    ],
                    'muut' => [
                        'forum' => '',
                        'channel' => 'General',
                        'show_online' => false,
                        'show_title' => false,
                        'upload' => false,
                        'share' => true,
                        'widget' => false,
                        'lang' => 'en'
                    ]
                ]
            ]
        ],
        'site' => [
            'title' => 'Max Malm',
            'author' => [
                'name' => 'Karol Orzel',
                'email' => 'karol@rockettheme.com'
            ],
            'taxonomies' => [
                0 => 'tag'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'metadata' => [
                'description' => 'Personal blog about nothing'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/another/one/here' => '/blog/sample-3',
                '/new/*' => '/blog/*'
            ],
            'description' => 'Blogging is okay',
            'url' => 'http://maxmalm.se',
            'owner' => [
                'name' => 'Max Malm',
                'email' => 'benjick@dumfan.net',
                'description' => 'Awesome Dude, Awesome Life',
                'twitter' => 'benjick',
                'github' => 'benjick'
            ],
            'logo' => '/user/themes/notepad/images/logo.png',
            'google_analytics' => NULL,
            'google_verify' => NULL,
            'bing_verify' => NULL,
            'links' => [
                0 => [
                    'title' => 'Featured Posts',
                    'url' => '/featured'
                ],
                1 => [
                    'title' => 'Categories',
                    'url' => '/categories'
                ],
                2 => [
                    'title' => 'About',
                    'url' => '/about'
                ]
            ],
            'include' => [
                0 => '.htaccess'
            ],
            'exclude' => [
                0 => 'lib',
                1 => 'config.rb',
                2 => 'Gemfile',
                3 => 'Capfile',
                4 => 'Gemfile.lock',
                5 => 'config',
                6 => 'log',
                7 => 'Rakefile',
                8 => 'Rakefile.rb',
                9 => 'tmp',
                10 => 'less',
                11 => '*.sublime-project',
                12 => '*.sublime-workspace',
                13 => 'test',
                14 => 'spec',
                15 => 'Gruntfile.js',
                16 => 'package.json',
                17 => 'node_modules'
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'param_sep' => ':',
            'home' => [
                'alias' => '/blog'
            ],
            'pages' => [
                'theme' => 'notepad',
                'order' => [
                    'by' => 'defaults',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => 'txt|xml|html|json|rss|atom',
                'expires' => 0,
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.1.3.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'twig' => true,
                'shutdown' => [
                    'close_connection' => true
                ]
            ],
            'images' => [
                'default_image_quality' => 85,
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false
            ],
            'security' => [
                'default_hash' => '$2y$10$kwsyMVwM8/7j0K/6LHT.g.Fs49xOCTp2b8hh/S5.dPJuJcJB6T.UK'
            ]
        ]
    ]
];
