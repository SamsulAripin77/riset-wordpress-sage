<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Contact extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.contact',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => 'Mari Terhubung',
            'subtitle' => 'Jika Anda membutuhkan konsultasi, silakan hubungi kami. Tim kami akan segera menanggapi pertanyaan Anda.',
            'form' => [
                'action' => '#',
                'method' => 'post',
                'fields' => [
                    [
                        'type' => 'text',
                        'name' => 'name',
                        'placeholder' => 'Nama Lengkap',
                    ],
                    [
                        'type' => 'email',
                        'name' => 'email',
                        'placeholder' => 'Email',
                    ],
                    [
                        'type' => 'textarea',
                        'name' => 'message',
                        'placeholder' => 'Pesan Anda',
                        'rows' => 4,
                    ],
                ],
                'submit_text' => 'Kirim Pesan',
            ],
        ];
    }
}
