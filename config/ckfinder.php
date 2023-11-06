<?php

return [
    'authentication' => function () {
        // Thêm mã xác thực tại đây nếu cần thiết
    },
    'defaultResourceTypes' => 'Images', 'Flash', 'Files',

    'licenseKey' => '',

    'privateDir' => storage_path('app/ckfinder'),

    'resources' => [
        [
            'name' => 'Files',
            'driver' => 'LocalFileSystem',
            'config' => [
                'directory' => public_path('ckfinder/files'),
                'URL' => '/ckfinder/files',
                'accessControl' => 'Files',
            ],
        ],
        [
            'name' => 'Images',
            'driver' => 'LocalFileSystem',
            'config' => [
                'directory' => public_path('ckfinder/images'),
                'URL' => '/ckfinder/images',
                'accessControl' => 'Images',
            ],
        ],
        //Thêm lời gọi tài nguyên khác tại đây nếu cần thiết
    ],

    'accessControl' => [
        'Files' => [
            [
                'role' => '*',
                'resourceType' => '*',
                'folder' => '/',
                'FOLDER_VIEW' => true,
                'FOLDER_CREATE' => true,
                'FOLDER_RENAME' => true,
                'FOLDER_DELETE' => true,
                'FILE_VIEW' => true,
                'FILE_CREATE' => true,
                'FILE_RENAME' => true,
                'FILE_DELETE' => true,
            ],
        ],

        'Images' => [
            [
                'role' => '*',
                'resourceType' => '*',
                'folder' => '/',
                'FOLDER_VIEW' => true,
                'FOLDER_CREATE' => true,
                'FOLDER_RENAME' => true,
                'FOLDER_DELETE' => true,
                'FILE_VIEW' => true,
                'FILE_CREATE' => true,
                'FILE_RENAME' => true,
                'FILE_DELETE' => true,
            ],
        ],
    ],

    'checkDoubleExtension' => false,
    'disallowUnsafeCharacters' => false,
    'secureImageUploads' => true,
    'htmlExtensions' => ['html'],
    'hideFolders' => [],
    'hideFiles' => [],
];
