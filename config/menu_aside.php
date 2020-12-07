<?php
// Aside menu
return [

    'items' => [
        // Custom
        [
            'section' => 'GENERAL',
        ],
        // Home
        [
            'title' => 'Home',
            'root' => true,
            'icon' => 'media/svg/icons/Map/Compass.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/home',
            'new-tab' => false,
        ],

//        // Dashboard
//        [
//            'title' => 'Dashboard',
//            'root' => true,
//            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
//            'page' => '/',
//            'new-tab' => false,
//        ],

        // CHR
        [
            'section' => 'CHR',
        ],
        [
            'title' => 'Payslip',
            'icon' => 'media/svg/icons/Files/Selected-file.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Generate',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox'
                ],
                [
                    'title' => 'View',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox'
                ]
            ]
        ],

        // Custom
        [
            'section' => 'FINANCE',
        ],
        [
            'title' => 'Income',
            'icon' => 'media/svg/icons/Files/Import.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Todo',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Tasks',
                            'page' => 'custom/apps/todo/tasks',
                            'role'=>'staff'
                        ],
                        [
                            'title' => 'Docs',
                            'page' => 'custom/apps/todo/docs'
                        ],
                        [
                            'title' => 'Files',
                            'page' => 'custom/apps/todo/files'
                        ]
                    ]
                ],
                [
                    'title' => 'Inbox',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'label' => [
                        'type' => 'label-danger label-inline',
                        'value' => 'new'
                    ]
                ]
            ]
        ],
        [
            'title' => 'Expenses',
            'icon' => 'media/svg/icons/Files/Export.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Purchase Order',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Request',
                            'page' => 'po/request'
                        ],
                        [
                            'title' => 'Approval',
                            'page' => 'custom/pages/wizard/wizard-2'
                        ],
                    ]
                ],
                [
                    'title' => 'Payment Requisition',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Generate',
                            'page' => 'custom/pages/wizard/wizard-1'
                        ],
                        [
                            'title' => 'View',
                            'page' => 'custom/pages/wizard/wizard-2'
                        ],
                    ]
                ],
                [
                    'title' => 'Payment Voucher',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Generate',
                            'page' => 'custom/pages/wizard/wizard-1'
                        ],
                        [
                            'title' => 'View',
                            'page' => 'custom/pages/wizard/wizard-2'
                        ],
                    ]
                ],
            ]
        ],

    ]

];
