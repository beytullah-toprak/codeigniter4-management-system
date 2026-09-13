<?php 

return [
    'view' => [
        'title' => 'Kayıt Ol',
        'first_name' => 'Ad',
        'last_name' => 'Soyad',
        'email' => 'E-posta',
        'password' => 'Şifre',
        'password_confirmation' => 'Şifreyi Onayla',
        'contract' => 'Şartlar ve koşulları kabul ediyorum',
        'register_btn' => 'Kayıt Ol',
    ],
    'validation' => [
        'first_name_required' => 'Ad alanı zorunludur.',
        'first_name_min_length' => 'Ad alanı en az 2 karakter olmalıdır.',
        'first_name_max_length' => 'Ad alanı en fazla 255 karakter olmalıdır.',

        'surname_required' => 'Soyad alanı zorunludur.',
        'surname_min_length' => 'Soyad alanı en az 2 karakter olmalıdır.',
        'surname_max_length' => 'Soyad alanı en fazla 255 karakter olmalıdır.',

        'email_required' => 'E-posta alanı zorunludur.',
        'email_valid_email' => 'Geçerli bir e-posta adresi giriniz.',
        'email_is_unique' => 'Bu e-posta adresi zaten kullanılıyor.',

        'password_required' => 'Şifre alanı zorunludur.',
        'password_min_length' => 'Şifre alanı en az 8 karakter olmalıdır.',

        'password_confirm_required' => 'Şifre onayı alanı zorunludur.',
        'password_confirm_matches' => 'Şifreler eşleşmiyor.',

        'group_id_required' => 'Grup ID alanı zorunludur.',
        'group_id_numeric' => 'Grup ID alanı sayısal bir değer olmalıdır.',

        'status_required' => 'Durum alanı zorunludur.',
        'status_in_list' => 'Durum alanı sadece aktif, beklemede veya pasif olmalıdır.',

        'bio_max_length' => 'Biyografi alanı en fazla 255 karakter olmalıdır.',
        'verify_key_required' => 'Doğrulama anahtarı alanı zorunludur.',
        'verify_key_alpha' => 'Doğrulama anahtarı sadece alfabetik karakterler içermelidir.',
        'verify_code_required' => 'Doğrulama kodu alanı zorunludur.',
        'verify_code_numeric' => 'Doğrulama kodu alanı sayısal bir değer olmalıdır.',
        'verify_code_min_length' => 'Doğrulama kodu alanı en az 6 hane olmalıdır.',

        'group_id_required' => 'Grup ID alanı zorunludur.',
        'group_id_numeric' => 'Grup ID alanı sayısal bir değer olmalıdır.',
    ],
    'controller' => [
        'register_success' => 'Kayıt işlemi başarılı.Lütfen e-posta adresinizi kontrol edin.',
    ],
];