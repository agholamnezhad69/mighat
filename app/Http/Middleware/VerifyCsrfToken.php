<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'ckeditor/image_upload',
        'lessonFilms',
        'ckeditor/ckeditor_upload_news_add',
        'ckeditor/ckeditor_upload_news_edit/*',
        'ckeditor/ckeditor_upload_khadamat_add',
        'ckeditor/ckeditor_upload_khadamat_edit/*',
        'ckeditor/ckeditor_upload_product_add',
        'ckeditor/ckeditor_upload_product_edit/*',
        'ckeditor/ckeditor_upload_employment_add',
        'ckeditor/ckeditor_upload_employment_edit/*',
    ];
}
