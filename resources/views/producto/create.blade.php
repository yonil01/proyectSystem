@extends('layouts.plantillabase')

@section('contenido')
<h2>
    crear registro
</h2>

    <form action="/producto" method="POST">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre del producto</label>
            <input id="name" name="name"class="form-control" type="text" tabindex="1">
        </div>

        <div class="mb-3">
        <label for="" class="form-label">Tipo del producto</label>
        <select class="form-select " aria-label="Default select example" name="category" tabindex="2">
            <option selected>Selecciona</option>
            <option name="category" value="Tecnologia" >Tecnologia</option>
            <option name="category" value="Accesorio" >Accesorios</option>
            <option name="category" value="Ropa dama" >vestiodo dama</option>
            <option name="category" value="Ropa caballero" >Vestido caballero</option>
            <option name="category" value="Informatica" >Informatica</option>
            <option name="category" value="Electrodomestico" >Electrodomesticos</option>
            <option name="category" value="Otros" >otros</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="" class="form-label">Tipo de delivery</label>
        <select class="form-select " aria-label="Default select example" tabindex="3"  name="type_delivery">
            <option selected >Selecciona</option>
            <option name="type_delivery" value="Envio a domicilio">Envio a domicilio</option>
            <option name="type_delivery" value="Disponible en la tienda">Disponoible en la tienda</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">precio del delivery</label>
            <select class="form-select " aria-label="Default select example" name="cost_delivery" tabindex="4">
            <option selected>Selecciona</option>
            <option name="cost_delivery" value="Envio gratis" >Envio gratis</option>
            <option name="cost_delivery" value="" >Ingresar precio</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="cost" name="cost"class="form-control" type="text" tabindex="5">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Descripcion del producto</label>
            <input id="description" name="description"class="form-control" type="text" tabindex="6">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad del producto</label>
            <input id="quantity" name="quantity"class="form-control" type="text" tabindex="7">
        </div>
        <a href="/producto" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>

@endsection