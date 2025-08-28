<x-layout title="Sobre">
    <form method="post" action="/sobre">
        @csrf
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome do contato">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="email do contato">
        </div>      
        
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="email" aria-describedby="telefone do contato">
        </div>         

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>    
</x-layout>        