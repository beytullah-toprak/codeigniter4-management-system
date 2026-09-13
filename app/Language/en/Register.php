<?php 

return [
    'view' => [
        'title' => 'Register',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Password Confirmation',
        'contract' => 'I agree with the terms and conditions',
        'register_btn' => 'Register',
    ],
    'validation' => [
        'first_name_required' => 'First name is required.',
        'first_name_min_length' => 'First name must be at least 2 characters long.',
        'first_name_max_length' => 'First name cannot exceed 255 characters.',

        'surname_required' => 'Surname is required.',
        'surname_min_length' => 'Surname must be at least 2 characters long.',
        'surname_max_length' => 'Surname cannot exceed 255 characters.',

        'email_required' => 'Email is required.',
        'email_valid_email' => 'Please provide a valid email address.',
        'email_is_unique' => 'This email address is already in use.',

        'password_required' => 'Password is required.',
        'password_min_length' => 'Password must be at least 8 characters long.',

        'password_confirm_required' => 'Password confirmation is required.',
        'password_confirm_matches' => 'Passwords do not match.',

        'group_id_required' => 'Group ID is required.',
        'group_id_numeric' => 'Group ID must be a numeric value.',

        'status_required' => 'Status is required.',
        'status_in_list' => 'Status must be one of the following: active, pending, passive.',

        'bio_max_length' => 'Bio cannot exceed 255 characters.',
        'verify_key_required' => 'Verify key is required.',
        'verify_key_alpha' => 'Verify key must contain only alphabetic characters.',
        'verify_code_required' => 'Verify code is required.',
        'verify_code_numeric' => 'Verify code must be a numeric value.',
        'verify_code_min_length' => 'Verify code must be at least 6 digits long.',
        
        'group_id_required' => 'Group ID is required.',
        'group_id_numeric' => 'Group ID must be a numeric value.',
    ],
    'controller' => [
        'register_success' => 'Registration successful. Please check your email for verification instructions.',
    ],
];