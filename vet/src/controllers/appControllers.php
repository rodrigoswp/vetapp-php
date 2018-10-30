<?php

# === api
# ==================================================

 use App\Models\Login;
 use App\Models\Veterinario;

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
        $login->nome = $data['nome'];
        $login->celphone = $data['celphone'];
        
        $login->save();
        
        if ($login->tipo == 'V'){
            $vet = new Veterinario();
            $vet->crmv = $data['crmv'];
            $vet->id_login =  $login->id;
            $vet->save();
        }
        
        
        return $response->withStatus(201)->getBody()->write($login->toJson());
    });
    
    $app->post('/login/verificalogin/', function($request, $response, $args) {
        $data = $request->getParsedBody();
        $login = Login::where('email', '=', $data['email'])->where('senha', '=', $data['senha'])->get();;
        
        
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
    
    //Veterinario
    
    
                    
    $app->run();