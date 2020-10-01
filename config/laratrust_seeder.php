<?php

return [
    'role_structure' => [       // roles
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u'
        ],
        'guest' => [ // agregamos un nuevo rol -> invitado(guest)
            'profile' => 'r'
        ],
    ],
    'permission_structure' => [
        /*'cru_user' => [
            'profile' => 'c,r,u'
        ],*/
    ],
    'permissions_map' => [ // mapeo de los permisos
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'i' => 'print',  // agregamos otro permiso que permita imprimir
        're' => 'report' // y otro permiso para crear reportes
    ]
];
