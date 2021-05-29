@extends('template.layout')

    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline" action="/search" method="GET">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    @isset($name)
        <h1 class="display-4" style="text-align: center">Trainer</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $item)
                    <tr>
                        <th scope="row">{!! $item->trainer_id !!}</th>
                        <th scope="row">{!! $item->trainer_name !!}</th>
                        <th scope="row">{!! $item->company_id !!}</th>
                        <th scope="row">{!! $item->trainer_email !!}</th>
                        <th scope="row">{!! $item->trainer_phone !!}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $trainers->links() }} --}}
        {{ $trainers->withQueryString()->links() }}
        @include('template.footer')
    @endisset

    

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });

    </script>
