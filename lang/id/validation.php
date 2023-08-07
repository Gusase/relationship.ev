<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Ya udah, terima deh :attribute-nya!',
    'accepted_if' => 'Kamu harus terima :attribute ini kalau :other-nya :value loh.',
    'active_url' => 'Nggak usah sok-sokan, :attribute harus alamat URL yang bener!',
    'after' => 'Tsk, :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Kalau nggak setelah :date, ya minimal sama dengan :attribute dong!',
    'alpha' => 'Ck, hanya huruf aja boleh ada di :attribute!',
    'alpha_dash' => 'Nggak usah nambah-nambah, :attribute cuma boleh ada huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Kamu ini... :attribute cuma boleh ada huruf dan angka aja, ngerti nggak?',
    'array' => 'Nggak usah gonta-ganti tipe, :attribute harus jadi array!',
    'ascii' => 'Kamu itu, :attribute harus isinya cuma karakter alfanumerik satu byte doang.',
    'before' => 'Dengar baik-baik, :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Ngotot banget sih, :attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Aduh, :attribute harus punya item antara :min dan :max nih.',
        'file' => 'Jangan bikin ribet, :attribute ukurannya harus antara :min dan :max kilobyte.',
        'numeric' => 'Sekarang jangan melebih-lebihkan, :attribute harus antara :min dan :max.',
        'string' => 'Kamu ini... :attribute panjangnya harus antara :min dan :max karakter.',
    ],
    'boolean' => 'Mana bisa begitu, :attribute cuma boleh true atau false!',
    'can' => 'Jangan sok-sokan, :attribute isinya nggak sah.',
    'confirmed' => 'Nggak konsisten nih, konfirmasi :attribute nggak cocok.',
    'current_password' => 'Waduh, passwordnya salah tuh.',
    'date' => 'Kok malah ngasal, :attribute harus tanggal yang valid.',
    'date_equals' => ':attribute harus tanggal yang sama dengan :date, nggak usah ngotot.',
    'date_format' => 'Kamu ini beneran nggak ngerti format ya? :attribute harus sesuai format :format.',
    'decimal' => 'Di sini kan nggak ada matematika rumit, :attribute cuma boleh punya :decimal tempat desimal.',
    'declined' => 'Nggak bisa diterima deh, :attribute ini.',
    'declined_if' => 'Kalau :other-nya :value, berarti :attribute-nya juga harus ditolak.',
    'different' => 'Kamu tuh beneran beda, :attribute harus beda juga sama :other.',
    'digits' => ':attribute harus punya :digits digit, ngerti?',
    'digits_between' => 'Kamu tuh mesti punya :min sampai :max digit di :attribute.',
    'dimensions' => 'Hayo, :attribute-nya punya dimensi gambar yang nggak valid.',
    'distinct' => 'Nggak bisa gitu, :attribute-nya punya nilai yang sama.',
    'doesnt_end_with' => ':attribute nggak boleh berakhir dengan: :values.',
    'doesnt_start_with' => ':attribute nggak boleh diawali dengan: :values.',
    'email' => 'Santai aja, :attribute ini harus alamat email yang bener.',
    'ends_with' => 'Kamu tuh beneran berakhir dengan :values, :attribute?',
    'enum' => 'Pilihan :attribute yang kamu ambil itu nggak sah.',
    'exists' => 'Yang kamu pilih bukan :attribute yang valid.',
    'file' => 'Waduh, :attribute harus jadi berkas nih.',
    'filled' => 'Aduh, :attribute nggak boleh kosong loh.',
    'gt' => [
        'array' => 'Ngotot banget, :attribute harus punya lebih dari :value item.',
        'file' => 'Bukan main, :attribute harus lebih besar dari :value kilobyte.',
        'numeric' => 'Jangan overestimate, :attribute harus lebih besar dari :value.',
        'string' => 'Panjang :attribute harus lebih dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Wah, :attribute harus punya :value item atau lebih.',
        'file' => 'Nggak usah bikin ribet, :attribute harus lebih besar atau sama dengan :value kilobyte.',
        'numeric' => 'Nggak boleh kalah, :attribute harus lebih besar atau sama dengan :value.',
        'string' => 'Jangan ngelewatin batas, :attribute harus lebih besar atau sama dengan :value karakter.',
    ],
    'image' => 'Mau gambar aja belum bener, :attribute harus jadi gambar.',
    'in' => 'Kamu ini beneran nggak tahu apa-apa ya, :attribute yang kamu pilih nggak sah.',
    'in_array' => 'Nggak usah masukin yang nggak seharusnya, :attribute harus ada di :other.',
    'integer' => 'Cuma angka yang boleh masuk ke :attribute, jangan coba-coba yang lain.',
    'ip' => 'Alamat IP :attribute nggak valid nih.',
    'ipv4' => 'Alamat IPv4 :attribute nggak valid nih.',
    'ipv6' => 'Alamat IPv6 :attribute nggak valid nih.',
    'json' => 'Nggak usah sok-sokan, :attribute harus jadi JSON yang bener.',
    'lowercase' => 'Nggak bisa pake huruf besar, :attribute harus lowercase.',
    'lt' => [
        'array' => 'Nggak usah banyak bacot, :attribute harus punya kurang dari :value item.',
        'file' => 'Kamu ini overestimate banget, :attribute harus kurang dari :value kilobyte.',
        'numeric' => 'Lebih rendah dikit dong, :attribute harus kurang dari :value.',
        'string' => 'Jangan terlalu panjang, :attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Nggak usah berlebihan, :attribute nggak boleh punya lebih dari :value item.',
        'file' => 'Nggak perlu segede itu, :attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => 'Cukup segini aja, :attribute harus kurang dari atau sama dengan :

value.',
        'string' => 'Nggak usah panjang-panjang, :attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Nggak usah pake alamat MAC yang nggak valid, :attribute.',
    'max' => [
        'array' => 'Nggak usah terlalu banyak, :attribute nggak boleh lebih dari :max item.',
        'file' => 'Jangan bikin gendut, :attribute nggak boleh lebih dari :max kilobyte.',
        'numeric' => 'Santai aja, :attribute nggak boleh lebih dari :max.',
        'string' => 'Kamu ini, :attribute nggak boleh lebih dari :max karakter.',
    ],
    'max_digits' => 'Nggak usah pake terlalu banyak digit, :attribute nggak boleh lebih dari :max digit.',
    'mimes' => 'Nggak usah sok-sokan, :attribute harus jadi berkas dengan tipe: :values.',
    'mimetypes' => 'Nggak usah sok-sokan, :attribute harus jadi berkas dengan tipe: :values.',
    'min' => [
        'array' => 'Pede banget sih, :attribute harus punya setidaknya :min item.',
        'file' => 'Kecil-kecilan banget, :attribute harus punya setidaknya :min kilobyte.',
        'numeric' => 'Kamu ini... :attribute harus punya setidaknya :min.',
        'string' => 'Nggak boleh terlalu pendek, :attribute harus punya setidaknya :min karakter.',
    ],
    'min_digits' => 'Nggak usah pelit-pelit, :attribute harus punya setidaknya :min digit.',
    'missing' => 'Kamu itu, :attribute harusnya nggak ada.',
    'missing_if' => ':attribute harusnya nggak ada kalau :other-nya :value.',
    'missing_unless' => ':attribute harusnya nggak ada kecuali :other-nya :value.',
    'missing_with' => ':attribute harusnya nggak ada kalau :values ada.',
    'missing_with_all' => ':attribute harusnya nggak ada kalau :values ada semua.',
    'multiple_of' => 'Nggak usah neko-neko, :attribute harus kelipatan dari :value.',
    'not_in' => 'Kamu ini, :attribute yang kamu pilih nggak sah.',
    'not_regex' => 'Format :attribute nggak valid.',
    'numeric' => 'Nggak usah nambah-nambah, :attribute harus jadi angka.',
    'password' => [
        'letters' => 'Kamu tuh harus ada setidaknya satu huruf di :attribute.',
        'mixed' => 'Jangan sok kuat, :attribute harus punya setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Masuk akal dong, :attribute harus punya setidaknya satu angka.',
        'symbols' => 'Ngapain ribet-ribet, :attribute harus punya setidaknya satu simbol.',
        'uncompromised' => ':attribute yang kamu pake udah bocor di suatu tempat. Pilih yang lain aja deh.',
    ],
    'present' => 'Kamu ini sok-sokan ya, :attribute harus hadir.',
    'prohibited' => ':attribute dilarang di sini.',
    'prohibited_if' => ':attribute dilarang kalau :other-nya :value.',
    'prohibited_unless' => ':attribute dilarang kecuali :other-nya ada di :values.',
    'prohibits' => ':attribute melarang :other untuk hadir.',
    'regex' => 'Kamu ini, format :attribute nggak valid.',
    'required' => 'Aduh, :attribute nggak boleh kosong loh.',
    'required_array_keys' => ':attribute harus punya entri untuk: :values.',
    'required_if' => ':attribute dibutuhkan kalau :other-nya :value.',
    'required_if_accepted' => ':attribute dibutuhkan kalau :other-nya diterima.',
    'required_unless' => ':attribute dibutuhkan kecuali :other-nya ada di :values.',
    'required_with' => ':attribute dibutuhkan kalau :values ada.',
    'required_with_all' => ':attribute dibutuhkan kalau :values ada semua.',
    'required_without' => ':attribute dibutuhkan kalau :values nggak ada.',
    'required_without_all' => ':attribute dibutuhkan kalau nggak ada satupun dari :values.',
    'same' => ':attribute harus sama dengan :other.',
    'size' => [
        'array' => 'Kamu ini jangan kebanyakan, :attribute harus punya :size item.',
        'file' => 'Besar-besaran aja, :attribute harus :size kilobyte.',
        'numeric' => 'Jangan usil, :attribute harus :size.',
        'string' => 'Kamu ini, panjang :attribute harus :size karakter.',
    ],
    'starts_with' => 'Nggak usah sok-sokan, :attribute harus diawali dengan: :values.',
    'string' => 'Isi :attribute harus jadi teks.',
    'timezone' => 'Kamu ini nggak tahu bedanya zona waktu apa, :attribute harus zona waktu yang valid.',
    'unique' => ':attribute udah ada yang pake.',
    'uploaded' => 'Gagal upload :attribute.',
    'uppercase' => 'Kamu ini jangan sombong ya, :attribute harus uppercase.',
    'url' => 'Nggak usah main-main, :attribute harus alamat URL yang bener.',
    'ulid' => 'Ini :attribute nggak bener, ULID yang bener aja.',
    'uuid' => 'Ini :attribute nggak bener, UUID yang bener aja.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],

        'email' => [
            'required' => 'Come on, spill the beans! The :attribute field is required, you know.',
            'email' => 'Hah, nice try! The :attribute must be a valid email address, got it?',
        ],

        'file' => [
            'required' => 'Hey, you! The :attribute field can\'t be left empty!',
            'file' => 'Listen up, :attribute! You better upload a proper file.',
        ],

        'max' => [
            'array' => 'Whoa, slow down! The :attribute field can\'t have more than :max items!',
            'file' => 'Hold it, :attribute! The file size can\'t exceed :max kilobytes.',
            'numeric' => 'Hey, you! :attribute can\'t be greater than :max.',
            'string' => 'You there, :attribute. Keep it under :max characters!',
        ],

        'min' => [
            'array' => 'Come on, :attribute, you need at least :min items!',
            'file' => 'Hah, not so fast! The :attribute file must be at least :min kilobytes.',
            'numeric' => 'You\'re slacking, :attribute! It must be at least :min.',
            'string' => 'No need to pout, :attribute. You must have at least :min characters!',
        ],

        'password' => [
            'letters' => 'Hey, listen up, :attribute. You better have at least one letter!',
            'mixed' => 'You... :attribute should have at least one uppercase and one lowercase letter! Quit acting tough!',
            'numbers' => 'Got it, :attribute? You need at least one number in there.',
            'symbols' => 'Don\'t give me that sulky look, :attribute. You need at least one symbol!',
            'uncompromised' => 'The :attribute you used has been compromised. Choose a different one!',
        ],

        'required' => 'Quit fooling around, :attribute! The field is required, got it?',

        'size' => [
            'array' => 'Hey, :attribute, you need exactly :size items!',
            'file' => 'No more or less, :attribute. It must be :size kilobytes!',
            'numeric' => 'Don\'t play small, :attribute. It must be exactly :size.',
            'string' => 'You, :attribute. It must be exactly :size characters!',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
