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
            'permission' => '1',
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
            'permission' => '1',
            'submenu' => [
                [
                    'title' => 'Generate',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'permission' => '1',
                ],
                [
                    'title' => 'View',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'permission' => '1',
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
            'permission' => '1',
            'submenu' => [
                [
                    'title' => 'Todo',
                    'bullet' => 'dot',
                    'permission' => '1',
                    'submenu' => [
                        [
                            'title' => 'Tasks',
                            'page' => 'custom/apps/todo/tasks',
                            'role'=>'staff',
                            'permission' => '1',
                        ],
                        [
                            'title' => 'Docs',
                            'page' => 'custom/apps/todo/docs',
                            'permission' => '1',
                        ],
                        [
                            'title' => 'Files',
                            'page' => 'custom/apps/todo/files',
                            'permission' => '1',
                        ]
                    ]
                ],
//                [
//                    'title' => 'Inbox',
//                    'bullet' => 'dot',
//                    'page' => 'custom/apps/inbox',
//                    'label' => [
//                        'type' => 'label-danger label-inline',
//                        'value' => 'new'
//                    ]
//                ]
            ]
        ],
        [
            'title' => 'Expenses',
            'icon' => 'media/svg/icons/Files/Export.svg',
            'bullet' => 'dot',
            'root' => true,
            'permission' => '1',
            'submenu' => [
                [
                    'title' => 'Purchase Order',
                    'bullet' => 'dot',
                    'permission' => '1',
                    'submenu' => [
                        [
                            'title' => 'Request',
                            'page' => 'po/request',
                            'permission' => '1',
                        ],
                        [
                            'title' => 'Approval',
                            'page' => 'po/approval',
                            'permission' => '1',
                        ],
                    ]
                ],
                [
                    'title' => 'Payment Requisition',
                    'bullet' => 'dot',
                    'permission' => '1',
                    'submenu' => [
                        [
                            'title' => 'Generate',
                            'page' => 'custom/pages/wizard/wizard-1',
                            'permission' => '1',
                        ],
                        [
                            'title' => 'View',
                            'page' => 'custom/pages/wizard/wizard-2',
                            'permission' => '1',
                        ],
                    ]
                ],
                [
                    'title' => 'Payment Voucher',
                    'bullet' => 'dot',
                    'permission' => '1',
                    'submenu' => [
                        [
                            'title' => 'Generate',
                            'page' => 'custom/pages/wizard/wizard-1',
                            'permission' => '1',
                        ],
                        [
                            'title' => 'View',
                            'page' => 'custom/pages/wizard/wizard-2',
                            'permission' => '1',
                        ],
                    ]
                ],
            ]
        ],

    ]

];
