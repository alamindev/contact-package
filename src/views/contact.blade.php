<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact from</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <style>
        .form-control {
            border: 1px solid #ffc107 !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mt-5">
                <div class="card border-warning">
                    <div class="card-header bg-warning">
                        <h1 class="text-light text-center text-uppercase">Contact Any Time</h1>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelpId" placeholder="Write Your Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Write Your Email Address">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" class="form-control" id="" cols="30" rows="5" placeholder="write your message here"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="submit" class="btn btn-warning">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- for javascript --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>