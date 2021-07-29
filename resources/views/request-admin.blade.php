@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => 'Terdapat Kesalahan',
        'content'     => 'Mohon segera hubungi ADMIN untuk segera hubungkan akun Anda pada gudang Anda bekerja',
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];
@endphp
