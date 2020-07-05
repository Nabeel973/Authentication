@foreach ($conversation->replies as $reply)
    

    <div style="border-bottom: 2px solid black ;width: 30% ">
    
        <header style="display: flex;">
            <h6>{{$reply->user->name}} said</h6> 

            @if ($conversation->best_reply_id == $reply->id)
                <span style="color: green">Best Reply!!</span>    
            @endif

        </header>
       
        
    <p>{{$reply->body}}</p>   
        
    @can('update',$conversation)
        
    
    <form  method="POST" action="/best-replies/{{$reply->id}}">
        @csrf
            <button type="submit" style="padding: 0px; background-color:white">Best Reply</button>
        </form>
    </div>
    @endcan

@endforeach