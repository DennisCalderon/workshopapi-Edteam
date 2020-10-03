<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; //para poder extender(heredar) los métodos de la clase controller
use Illuminate\Support\Facades\Mail; // para Integrar el soporte para el correo Electrónico

#use App\Mail\TestEmail; // no agregaremos la referencia porque usaremos el archivo de forma directa aunque en cirscuntancias normales si se debería de agregar para hacer uso del mismo

class Mailcontroller extends Controller
{
    //Enviar correos con una estructura básica
    public function enviarBasico() {
        $data = ['mensaje' => 'Bienvenidos al workshop'];
        #$data = array('mensaje' => 'Bienvenidos al workshop');

        // Mail::send() -> enviar correo
        //         [] -> se debería mandar una vista
        Mail::send([], $data, function($body){ 
            //cuerpo del envio del correo electrónico
            // to - Para quien
            // From - Desde donde
            $body->to('sepalaball@gmail.com', 'Yersi Days')->subject('Laravel');
            $body->from('sepalaball@gmail.com', 'Edteam');
        });

        return response()->json([
            'response' => 'Se envio correctamente el correo',
            'code' => 200
        ]);
    }

    //Enviar correos con datos y html
    public function enviarHtml() {
        $data = ['titulo' => 'Bienvenidos al workshop',
                'mensaje' => 'mensaje de prueba'
            ];

        // Mail::send() -> enviar correo
        Mail::send('mails.testing', $data, function($body) use ($data){
            $body->to('sepalaball@gmail.com', 'Yersi Days');
            $body->subject('Nuevos cursos'.$data['titulo']);
            $body->from('sepalaball@gmail.com', 'Edteam');
        });

        return response()->json([
            'response' => 'Se envio correctamente el correo en Html',
            'code' => 200
        ]);
    }

    //Enviar correos con datos y una plantilla
    public function enviarTemplate() {
        $data = ['titulo' => 'Bienvenidos al workshop',
                'mensaje' => 'mensaje de prueba'
            ];

        // Mail::send() -> enviar correo
        Mail::send('mails.template', $data, function($body) use ($data){
            $body->to('sepalaball@gmail.com', 'Yersi Days');
            $body->subject('Nuevos cursos'.$data['titulo']);
            $body->from('sepalaball@gmail.com', 'Edteam');
        });

        return response()->json([
            'response' => 'Se envio correctamente el correo con un template',
            'code' => 200
        ]);
    }
}
