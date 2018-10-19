<?php

# === api
# ==================================================

 use App\Models\Login;

    $app->get('/login/', function($request, $response) {
        return $response->getBody()->write(Login::all()->toJson());
    });
    
    $app->get('/login/{id}/', function($request, $response, $args) {
        $id = $args['id'];
        $login = Login::find($id);
        $response->getBody()->write($login);
        return $response;
    });
        
    $app->post('/login/', function($request, $response, $args) {
        $data = $request->getParsedBody();
        $login = new Login();
        $login->tipo = $data['tipo'];
        $login->email = $data['email'];
        $login->senha = $data['senha'];
        
        $login->save();
        
        return $response->withStatus(201)->getBody()->write($login->toJson());
    });
            
    $app->delete('/login/{id}/', function($request, $response, $args) {
        $id = $args['id'];
        $login = Login::find($id);
        $login->delete();
        
        return $response->withStatus(200);
    });
    
    $app->put('/login/{id}/', function($request, $response, $args) {
        $id = $args['id'];
        $data = $request->getParsedBody();
        $login = Login::find($id);
        $login->tipo = $data['tipo'] ?: $login->tipo;
        $login->email = $data['email'] ?: $login->email;
        $login->senha = $data['senha'] ?: $login->senha;
        
        $login->save();
        
        return $response->getBody()->write($login->toJson());
    });
                    
    $app->run();