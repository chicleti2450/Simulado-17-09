 <div style="background-color: #ffe798; min-height: 100vh; width: 100%;">
     <div class="py-5 m-0">

         <div class="container">
             <div class= "text-center mb-4">
                 <h2 class=" mb-0">Produto</h2>
             </div>
         </div>

         <div class="container col-md-8 mx-auto bg-warning-subtle rounded p-4 shadow-sm">
             <form class="row g-3" wire:submit.prevent='update'>
                 <div class="row">
                     <div class="col-md-6">
                         <label for="nome" class="form-label">Nome</label>
                         <input type="text" class="form-control" id="nome" wire:model='nome'>
                     </div>
                     <div class="col-md-6">
                         <label for="valor" class="form-label">Cor</label>
                         <input type="text" class="form-control" id="cor" wire:model='cor'>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-6">
                         <label for="valor" class="form-label">Textura</label>
                         <input type="text" class="form-control" id="textura" wire:model='textura'>
                     </div>
                     <div class="col-md-6">
                         <label for="valor" class="form-label">Peso</label>
                         <input type="text" class="form-control" id="peso" wire:model='peso'>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-6">
                         <label for="valor" class="form-label">Unidade de medida</label>
                         <input type="text" class="form-control" id="unidade_medida" wire:model='unidade_medida'>
                     </div>
                     <div class="col-md-6">
                         <label for="valor" class="form-label">Aplicação</label>
                         <input type="text" class="form-control" id="aplicacao" wire:model='aplicacao'>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-6">
                         <label for="qtd_estoque" class="form-label">Quantidade no estoque</label>
                         <input type="text" class="form-control" id="qtd_estoque" wire:model='qtd_estoque'>
                     </div>

                     <div class="col-md-6">
                         <label for="qtd_minima" class="form-label">Quantidade mínima</label>
                         <input type="text" class="form-control" id="qtd_minima" wire:model='qtd_minima'>
                     </div>
                 </div>

                 <div class="text-center">
                     <button type="submit" class="btn btn-warning w-25 shadow-sm">Salvar</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
