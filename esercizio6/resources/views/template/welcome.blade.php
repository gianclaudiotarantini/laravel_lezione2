<x-main>

    @if (session('success'))
    Email correttamente inviata
    @endif

<div class="container py-4">

    <div class="col-lg-8 col-xl-6">
        <div>
            <strong><h1 class="text-danger d-flex justify-content-center display-1">Form</h1></strong>
        </div>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form action="{{route('send')}}" method="POST">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome" value="{{old('nome')}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Cognome</label>
            <input class="form-control" id="cognome" name="cognome"type="text" placeholder="Cognome" value="{{old('cognome')}}">
        </div>

        <!--  -->
        <div class="mb-3">
            <label class="form-label">Telefono</label>
            <input class="form-control" id="telefono" name="telefono" type="number" placeholder="Telefono" value="{{old('telefono')}}">
        </div>
        <!--  -->
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="{{old('email')}}">
        </div>
        <!-- -->
        <div class="mb-3">
            <label class="form-label">Messaggio</label>
            <textarea class="form-control" id="messaggio" name="messaggio" type="text" placeholder="Messaggio" style="height: 10rem;" value="{{old('messaggio')}}"></textarea>
        </div>

        <!--  -->
        <div class="d-grid">
            <button class="btn btn-primary btn-lg mb-1" type="submit">Invia</button>
        </div>

        <div class="d-grid">
            <button class="btn btn-danger btn-lg" type="reset">Reset</button>
        </div>

    </form>

</div>

</x-main>
