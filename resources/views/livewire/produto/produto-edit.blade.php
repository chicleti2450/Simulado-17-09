<div class="mt-5">
    <form class="row g-3"wire:submit.prevent='update'>
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome"
            wire:model='nome'>
        </div>
        <div class="col-12">
            <label for="valor" class="form-label">Cor</label>
            <input type="text" class="form-control" id="cor"
            wire:model='cor'>
        </div>
         <div class="col-12">
            <label for="valor" class="form-label">Textura</label>
            <input type="text" class="form-control" id="textura"
            wire:model='textura'>
        </div>
         <div class="col-12">
            <label for="valor" class="form-label">Peso</label>
            <input type="text" class="form-control" id="peso"
            wire:model='peso'>
        </div>
         <div class="col-12">
            <label for="valor" class="form-label">Unidade de medida</label>
            <input type="text" class="form-control" id="unidade_medida"
            wire:model='unidade_medida'>
        </div>
         <div class="col-12">
            <label for="valor" class="form-label">Aplicação</label>
            <input type="text" class="form-control" id="aplicacao"
            wire:model='aplicacao'>
        </div>
        <div class="col-md-12">
            <label for="qtd_estoque" class="form-label">Quantidade no estoque</label>
            <input type="text" class="form-control" id="qtd_estoque"
            wire:model='qtd_estoque'>
        </div>
        
        <div class="col-md-12">
            <label for="qtd_minima" class="form-label">Quantidade mínima</label>
            <input type="text" class="form-control" id="qtd_minima"
            wire:model='qtd_minima'>
        </div>
       
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

