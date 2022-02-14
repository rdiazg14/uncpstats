<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $titulo_virtual_stats = 'Consultoría Virtual';
        $nombre_usuario = auth()->user()->name;
        $opciones_menu = [
            "Actor A" => [
                [
                    'titulo' => 'Consultas',
                    'ruta' => 'categoria.index'
                ],
                [
                    'titulo' => 'Actualizaciones',
                    'ruta' => 'categoria.index'
                ],
                [
                    'titulo' => 'Estadísticas',
                    'ruta' => 'categoria.index'
                ],
            ],
                "Actor B" => [
                    [
                        'titulo' => 'Consultas',
                        'ruta' => 'categoria.index'
                    ],
                    [
                        'titulo' => 'Actualizaciones',
                        'ruta' => 'categoria.index'
                    ],
                    [
                        'titulo' => 'Estadísticas',
                        'ruta' => 'categoria.index'
                    ],
                ],
                "Actor C" => [
                    [
                        'titulo' => 'Consultas',
                        'ruta' => 'categoria.index'
                    ],
                    [
                        'titulo' => 'Actualizaciones',
                        'ruta' => 'categoria.index'
                    ],
                    [
                        'titulo' => 'Estadísticas',
                        'ruta' => 'categoria.index'
                    ],
                ],
                "Administración" =>[
                [
                    'titulo' => 'Usuarios',
                    'ruta' => 'usuarios.index'
                ],
                [
                    'titulo' => 'Permisos',
                    'ruta' => 'permisos.index'
                ],
            ],

        ];

        $opciones_dash = [
            [
                'titulo' => 'Dashboard',
                'activo' => 'active',
                'extra' => 'Dash',
                'ruta' => 'dashboard.index'
            ],
            [
                'titulo' => 'Estadísticas Gral.',
                'activo' => '',
                'extra' => 'Stats',
                'ruta' => 'estadisticas.index'
            ],
        ];


        return view('components.sidebar',[
            'titulo' => $titulo_virtual_stats,
            'nombre_usuario' => $nombre_usuario,
            'menu' => $opciones_menu,
            'op_dash' => $opciones_dash, 
        ]);
    }
}
