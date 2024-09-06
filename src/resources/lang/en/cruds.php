<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'kuliah' => [
        'title'          => 'Data Perkuliahan',
        'title_singular' => 'Data Perkuliahan',
    ],
    'data_mahasiswa' => [
        'title'          => 'Data Mahasiswa',
        'title_singular' => 'Data Mahasiswa',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'image'                     => 'Image',
            'image_helper'              => ' ',
            'nama_mahasiswa'            => 'Nama Mahasiswa',
            'nama_mahasiswa_helper'     => ' ',
            'nim_mahasiswa'             => 'Nim Mahasiswa',
            'nim_mahasiswa_helper'      => ' ',
            'umur_mahasiswa'            => 'Umur Mahasiswa',
            'umur_mahasiswa_helper'     => ' ',
            'fakultas'                  => 'Fakultas',
            'fakultas_helper'           => ' ',
            'jurusan_mahasiswa'         => 'jurusan Mahasiswa',
            'jurusan_mahasiswa_helper'  => ' ',
            'status_perkuliahan'        => 'status perkuliahan Mahasiswa',
            'status_perkuliahan_helper' => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'fakultas' => [
        'title'          => 'Data Fakultas',
        'title_singular' => 'Data Fakultas',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'nama_fakultas'            => 'Nama Fakultas',
            'nama_fakultas_helper'     => ' ',
            'kode_fakultas'            => 'kode Fakultas',
            'kode_fakultas_helper'     => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'jurusan' => [
        'title'          => 'Data Jurusan',
        'title_singular' => 'Data Jurusan',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'nama_jurusan'             => 'Nama Jurusan',
            'nama_jurusan_helper'      => ' ',
            'kode_jurusan'             => 'Kode Jurusan',
            'kode_jurusan_helper'      => ' ',
            'fakultas'                 => 'Fakultas',
            'fakultas_helper'          => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],

];
