<?php

return [

    "v1.0.0" => [
        "ACTIVE_USER_TYPES" => [
            "SUPER_ADMIN", "ADMINS", "PLAYERS", "COURT_HOSTS"
        ],

        "FRONT" => [
            "PLAYER_ACTIONS" => [
                "CREATE_TEAM", "CREATE_TEAM", "CREATE_MATCH", "EDIT_MATCH", "DELETE_TEAM", "MAKE_PAYMENT",
                "EDIT_PROFILE", "ADD_FAVOURITE_TEAM", "ADD_FAVOURITE_PLAYER", "ADD_FAVOURITE_COURT",
                "PLAYER_CHAT", "TEAM_CHAT", "COURT_HOST_CHAT"
                    ],
            "COURT_HOST_ACTIONS" => [
                "CREATE_COURT", "DELETE_COURT", "EDIT_MATCH",
                    ],
                ],
        "ADMIN" => [
            "SUPER_ADMIN_ACTIONS" => [
                "CREATE_PLAYER", "EDIT_PLAYER", "SHOW_PLAYER", "DELETE_PLAYER",
                "CREATE_TEAM", "EDIT_TEAM", "SHOW_TEAM", "DELETE_TEAM",
                "CREATE_MATCH", "EDIT_MATCH", "SHOW_MATCH", "DELETE_MATCH",
                "EDIT_PROFILE"
                    ],
            "ADMIN_ACTIONS" => [
                "CREATE_COURT", "DELETE_COURT", "EDIT_MATCH",
                    ],
            ]
    ],

    "v1.0.1" => [
        "ACTIVE_USER_TYPES" => [
            "SUPER_ADMIN", "ADMINS", "PLAYERS", "COURT_HOSTS"
        ],

        "FRONT" => [
            "PLAYER_ACTIONS" => [
                "CREATE_TEAM", "CREATE_TEAM", "CREATE_MATCH", "EDIT_MATCH", "DELETE_TEAM", "MAKE_PAYMENT",
                "EDIT_PROFILE", "ADD_FAVOURITE_TEAM", "ADD_FAVOURITE_PLAYER", "ADD_FAVOURITE_COURT",
                "PLAYER_CHAT", "TEAM_CHAT", "COURT_HOST_CHAT"
                    ],
            "COURT_HOST_ACTIONS" => [
                "CREATE_COURT", "DELETE_COURT", "EDIT_MATCH",
                    ],
                ],
        "ADMIN" => [
            "SUPER_ADMIN_ACTIONS" => [
                "CREATE_PLAYER", "EDIT_PLAYER", "SHOW_PLAYER", "DELETE_PLAYER",
                "CREATE_TEAM", "EDIT_TEAM", "SHOW_TEAM", "DELETE_TEAM",
                "CREATE_MATCH", "EDIT_MATCH", "SHOW_MATCH", "DELETE_MATCH",
                "EDIT_PROFILE"
                    ],
            "ADMIN_ACTIONS" => [
                "CREATE_COURT", "DELETE_COURT", "EDIT_MATCH",
                    ],
            ]
    ]
];
