<div>
    <nav class="hidden lg:flex items-center justify-between text-xs mb-4 text-gray-400">
        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li>
                <a wire:click.prevent="setStatus('All')" href="" class="transition duration-150 ease-in hover:border-blue-400  border-b-4 pb-3 @if($status == 'All') border-blue-400 text-gray-900 @endif">All Ideas ({{$statusCount['all_statuses']}})</a>
            </li>    
            <li>
                <a wire:click.prevent="setStatus('Considering')" href="" class=" transition duration-150  ease-in border-b-4 pb-3 hover:border-blue-400 @if($status == 'Considering') border-blue-400 text-gray-900 @endif">Considering ({{$statusCount['considering']}})</a>
            </li>
            <li>
                <a wire:click.prevent="setStatus('In progress')" href="" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-400 @if($status == 'In progress') border-blue-400 text-gray-900 @endif">In progress ({{$statusCount['in_progress']}})</a>
            </li>    
        </ul>   
        
        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li>
                <a wire:click.prevent="setStatus('Implemented')" href="" class="transition duration-150 ease-in hover:border-blue-400 border-b-4 pb-3 @if($status == 'Implemented') border-blue-400 text-gray-900 @endif">implemented ({{$statusCount['implemented']}})</a>
            </li>    
            <li>
                <a wire:click.prevent="setStatus('Closed')" href="" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-400 @if($status == 'Closed') border-blue-400 text-gray-900 @endif">closed ({{$statusCount['closed']}})</a>
            </li>
        </ul> 
    </nav>   
</div>
