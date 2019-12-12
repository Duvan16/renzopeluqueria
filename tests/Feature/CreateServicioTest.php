<?php

namespace Tests\Feature;


use App\User;
use App\Servicio;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateServicioTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    // function guests_may_not_create_threads()
    // {
        
    //     $this->resource('/servicios/create')
    //         ->assertRedirect('/login');
       
    // }}

    /** @test */
    function an_authenticated_user_can_create_new_servicio()
    {
        $this->signIn();
        $servicio = make('App\Servicio');
        $response = $this->servicio('/servicio', $servicio->toArray());
        $this->get($response->headers->get('Location'))
            ->assertSee($servicio->nombre)
            ->assertSee($servicio->descripcion);
    }

    /** @test */
    function a_servicio_requires_a_nombre()
    {
        $this->publishservicio(['nombre' => null])
            ->assertSessionHasErrors('nombre');
    }
    /** @test */
    function a_servicio_requires_a_descripcio()
    {
        $this->publishservicio(['descripcion' => null])
            ->assertSessionHasErrors('descripcion');
    }

    /**
     * Publish servicio
     * @param array $overrides
     * @return \Illuminate\Foundation\Testing\TestResponse
     */
    protected function publishservicio($overrides = [])
    {
        $this->signIn();
        $servicio = make('App\servicio', $overrides);
        return $this->servicio('/servicios', $servicio->toArray());
    }
}
