@extends('Layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
<h1>Главная страница</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia eros non erat aliquam placerat. Pellentesque lobortis vehicula mattis. Ut sollicitudin tempor aliquet. Aliquam eu leo rutrum, facilisis odio vitae, vehicula nulla. Praesent eleifend leo in erat pretium pharetra. Nunc accumsan nunc eget rhoncus vehicula. Morbi hendrerit finibus ipsum, eu mattis ex tristique ac. Nam id ultrices quam. Cras vestibulum vehicula turpis a accumsan. Cras at quam interdum, volutpat tortor eu, pulvinar nunc. Fusce cursus urna aliquet quam luctus placerat.</p>
@endsection

@section('aside')
@parent
<p>Дополнительный текст</p>
@endsection