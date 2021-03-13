<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5">
            Broatcast APP
        </div>
        <div class="row">
            <div class="col">
                <form action="/send-broadcast" method="POST">
                @csrf
                    <div class="form-group">
                      <label for="subcription">Message</label>
                      <select multiple class="form-control" id="subscribers" name="subscribers[]">
                          @foreach ($subscribers as $subscriber)
                            <option value="{{ $subscriber->email }}">{{ $subscriber->email }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea class="form-control" id="message" rows="3" name="message">{{ $message }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
            </div>
        </div>
    </div>



</body>
</html>