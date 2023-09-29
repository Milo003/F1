<div>
    <h1>
        &#128161;{{ $brightness }}%
    </h1>

    <div class="progress">
        <div class="progress-bar bg-warning" role="progressbar" style="width:{{ $brightness }}%" aria-valuenow="{{$brightness}}" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <div class= "mt-3">
        <button class="btn btn-danger" wire:click="Off">Off</button>
        <button class="btn btn-secondary"wire:click="decrement" @if ($brightness < 10 ) disabled @endif>-</button>
        <button class="btn btn-secondary"wire:click="increment" @if ($brightness > 90 ) disabled @endif>+</button>
        <button class="btn btn-primary"  wire:click="On">On</button>
      </div>


</div> 
