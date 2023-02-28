<div>
    <div class="row d-flex">

        <div class=" col-3  btn btn-primary" wire:loading.remove  wire:click ="increment"  >+</div>
        <span wire:loading wire:target='increment' class="col-3 btn btn-primary icon-spin5  text-white"></span>

        <div  class=" col-6  btn"><strong>{{$quantity}}</strong></div>

        <div  class=" col-3  btn btn-danger" wire:loading.remove  wire:click ="extraction">-</div>
        <span wire:loading wire:target='extraction' class="col-3 btn btn-danger icon-spin5  text-white"></span>
        
    </div>
</div>
