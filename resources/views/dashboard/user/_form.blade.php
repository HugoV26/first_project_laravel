    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="{{old('name', $user->name)}}">
    </div>
    
    <div class="form-group">
        <label for="surname">Surname</label>
        <input class="form-control" type="text" name="surname" id="surname" value="{{old('surname', $user->surname)}}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="{{old('email', $user->email)}}">
    </div>

    @if ($pasw)
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
    @endif


   

    <input type="submit" value="Send"  class="btn btn-primary">


