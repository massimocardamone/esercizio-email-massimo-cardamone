<x-layoute>
    <x-navbar></x-navbar>

    <h1>Inviaci un email</h1>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

  
    
      <form method="POST" action="{{route('send')}}">

       

        @csrf

        <div class="mb-3">
            <label for="userName" class="form-label">Nome Utente</label>
            <input type="text" class="form-control" id="userName" name="user">
        
        </div>

        <div class="mb-3">
          <label for="userEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" name="email">
        </div>

        <div class="mb-3">
            <label for="userBody" class="form-label">Scrivici un messaggio</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</x-layoute>