<?php 

return [
    'model' => [
        'validation' => [
            'group_id' => [
                'request' => 'Group ID is required. Please enter a valid group ID.',
                'numeric' => 'Group ID must be a valid number.',
            ],
            'first_name' => [
                'request' => 'First name is required. Please enter a valid first name.',
                'string' => 'First name must be a valid string.',
            ],
            'surname' => [
                'request' => 'Surname is required. Please enter a valid surname.',
                'string' => 'Surname must be a valid string.',
            ],
            'email' => [
                'request' => 'Email is required. Please enter a valid email address.',
                'valid_email' => 'Email must be a valid email address.',
                'is_unique' => 'This email is already in use. Please enter a different email.',
            ],
            'password' => [
                'request' => 'Password is required. Please enter a valid password.',
            ],
            'verify_key' => [
                'request' => 'Verification Key is required. Please enter a valid verification key.',
                'alpha' => 'Verification Key must contain only alphabetic characters.',
            ],
            'verify_code' => [
                'request' => 'Verification Code is required. Please enter a valid verification code.',
                'numeric' => 'Verification Code must contain only numeric characters.',
                'min_length' => 'Verification Code must be at least 6 characters long.',
            ],
            'bio' => [
                'request' => 'Bio is required. Please enter a valid bio.',
                'string' => 'Bio must be a valid string.',
                'max_length' => 'Bio must be at most 255 characters long.',
            ],
            'status' => [
                'request' => "Status is required. Please enter a valid status.",
                "in_list" => "Status must be a valid value. (active, inactive, pending)",
            ],
        ],
    ]
];