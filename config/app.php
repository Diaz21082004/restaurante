<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDF Storage Path
    |--------------------------------------------------------------------------
    |
    | This is the location where any temporary files will be stored when
    | generating PDF files. You can set this to any directory that your
    | application has write access to.
    |
    */

    'storage_path' => storage_path('app/public/pdf'),

    /*
    |--------------------------------------------------------------------------
    | PDF Paper Settings
    |--------------------------------------------------------------------------
    |
    | Set the default paper size and orientation for the PDF documents.
    | Common sizes include 'A4', 'A3', 'Letter', etc.
    | The orientation can be 'portrait' or 'landscape'.
    |
    */

    'default_paper_size' => 'A4',
    'default_orientation' => 'portrait',

    /*
    |--------------------------------------------------------------------------
    | PDF Options
    |--------------------------------------------------------------------------
    |
    | These options allow you to configure various aspects of the PDF
    | generation, such as fonts, margins, and more.
    |
    */

    'options' => [
        'font_cache' => storage_path('fonts/'),
        'temp_dir' => storage_path('temp/'),
        'chroot' => base_path(),
        'log_output_file' => storage_path('logs/dompdf.log'),
        'default_font' => 'sans-serif',
    ],

    /*
    |--------------------------------------------------------------------------
    | Encryption
    |--------------------------------------------------------------------------
    |
    | This configuration allows setting up encryption for the generated
    | PDFs. It is useful when you need to protect PDF content.
    |
    */

    'encryption' => [
        'enabled' => false, // set to true to enable encryption
        'password' => env('PDF_ENCRYPTION_PASSWORD', null),
    ],

    /*
    |--------------------------------------------------------------------------
    | Fonts Path
    |--------------------------------------------------------------------------
    |
    | If you are using custom fonts for your PDFs, define the path here.
    | Otherwise, you can leave this configuration as it is.
    |
    */

    'fonts_path' => resource_path('fonts/'),

];
