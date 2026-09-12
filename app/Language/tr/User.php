<?php 

return [
    'model' => [
        'validation' => [
            'group_id' => [
                'request' => 'Grup ID Zorunlu alandır. Lütfen geçerli bir grup ID girin.',
                'numeric' => 'Grup ID geçerli bir sayı olmalıdır.',
            ],
            'first_name' => [
                'request' => 'İsim Zorunlu alandır. Lütfen geçerli bir isim girin.',
                'string' => 'İsim geçerli bir dize olmalıdır.',
                'min_length' => 'İsim en az 3 karakter uzunluğunda olmalıdır.',
                'max_length' => 'İsim en fazla 100 karakter uzunluğunda olmalıdır.',
            ],
            'surname' => [
                'request' => 'Soyisim Zorunlu alandır. Lütfen geçerli bir soyisim girin.',
                'string' => 'Soyisim geçerli bir dize olmalıdır.',
                'min_length' => 'Soyisim en az 2 karakter uzunluğunda olmalıdır.',
                'max_length' => 'Soyisim en fazla 100 karakter uzunluğunda olmalıdır.',
            ],
            'email' => [
                'request' => 'E-posta Zorunlu alandır. Lütfen geçerli bir e-posta girin.',
                'valid_email' => 'Geçerli bir e-posta adresi girin.',
                'is_unique' => 'Bu e-posta adresi zaten kullanılıyor.',
            ],
            'password' => [
                'request' => 'Şifre Zorunlu alandır. Lütfen geçerli bir şifre girin.',
            ],
            'verify_key' => [
                'request' => 'Doğrulama Anahtarı Zorunlu alandır. Lütfen geçerli bir anahtar girin.',
                'alpha' => 'Doğrulama anahtarı sadece harflerden oluşmalıdır.',
            ],
            'verify_code' => [
                'request' => 'Doğrulama Kodu Zorunlu alandır. Lütfen geçerli bir kod girin.',
                'numeric' => 'Doğrulama kodu sadece rakamlardan oluşmalıdır.',
                'min_length' => 'Doğrulama kodu en az 6 karakter uzunluğunda olmalıdır.',
            ],
            'bio' => [
                'request' => 'Biyografi Zorunlu alandır. Lütfen geçerli bir biyografi girin.',
                'string' => 'Biyografi geçerli bir dize olmalıdır.',
                'max_length' => 'Biyografi en fazla 255 karakter uzunluğunda olmalıdır.',
            ],
            'status' => [
                'request' => 'Durum Zorunlu alandır. Lütfen geçerli bir durum girin.',
                'in_list' => 'Durum geçerli bir değer olmalıdır. (active, inactive, pending)',
            ],
        ],
    ]
];