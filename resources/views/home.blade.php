<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first view</title>
</head>
<body>
    <!-- <h1>Hi, Im Hugo <?php  echo "and I'm adding php inside of html. I really love $name $primer_apellido"?></h1> -->
    <h1>Hi, Im Hugo {{"and I'm adding php inside of html. I really love $name $primer_apellido <script>alert('html special chars')</script>"}}</h1>
    <h1>Hi, Im Hugo {!!"and I'm adding php inside of html. I really love $name $primer_apellido <script>alert('html special chars')</script>"!!}</h1>

    <ul>
        <h3>Uso de foreach con estructura "< ?php ?>" </h3>
        <?php foreach ($posts as $key => $value) :?>
        <li>{{$value}}</li>
        <?php endforeach;  ?>
    </ul>

    <h3>Uso de @ foreach</h3>
    @foreach ($posts as $item)
        <li>{{$item}}</li>
    @endforeach

    <ul>
        <h3>Uso de @ forelse</h3>
        @forelse ($posts2 as $post)
          <li>{{$post}}</li>  
        @empty
            <li>Empty</li>
        @endforelse
    </ul>
    
    <ul>
        <h3>Uso de @ if </h3>
        @forelse ($posts as $post)
            <li>
                @if ($loop->first)
                Primero:
                
                @elseif ($loop->last)
                Último:

                @else
                Medio: 
                @endif
            {{$post}}
            </li>
        @empty
            <li>Empty</li>     
        @endforelse
    </ul>

    <ul>
        <h3>Uso de @ isset</h3>
        @isset($posts2)
            isset
        @endisset
        @empty($posts2)
            empty
        @endempty
    </ul>
    
</body>
</html>