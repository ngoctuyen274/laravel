@extends('template.layout')

@include('template.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Companies</h1>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Web</th>
                    <th scope="col">Address</th>
                    <th scope="col">Code</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $item)
                    <tr>
                        <th scope="row">{!! $item->company_id !!}</th>
                        <th scope="row">{!! $item->company_name !!}</th>
                        <th scope="row">{!! $item->company_web !!}</th>
                        <th scope="row">{!! $item->company_address !!}</th>
                        <th scope="row">{!! $item->company_code !!}</th>
                        <th scope="row">{!! $item->company_phone !!}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $companies->links() }}
        
        @include('template.footer') 
    </div>


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

