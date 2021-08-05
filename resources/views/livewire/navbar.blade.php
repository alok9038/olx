<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-barnd text-white" style="text-decoration: none">{{ $logo }}</a>

            <form action="{{route('search')}}" class="d-flex mx-auto">
                <div class="input-group">
                     <input type="search" name="search" class="form-control" size="70" >
                     <input type="submit" value="search"  class="btn btn-success">
                </div>
            </form>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('insert')}}" class="nav-link">Insert</a></li>
            </ul>
        </div>
    </nav>
</div>
