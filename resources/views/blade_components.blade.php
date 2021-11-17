@extends('app_main', [
    'title' => 'Blade Components'
])

@section('content')
<h1 class="h3 mb-2 text-gray-800">Blade Components</h1>
<p class="mb-4">
    Components and slots provide similar benefits to sections, layouts, and includes; however, some may find the mental model of components and slots easier to understand.
    <a target="_blank" href="https://laravel.com/docs/8.x/blade#components">see documentation</a>.
    
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Circle Buttons</h6>
    </div>
    <div class="card-body">
        <x-buttons.circle-button size="btn-lg" ico="fab fa-facebook-f" />
        <x-buttons.circle-button size="btn-sm" ico="fab fa-facebook-f" />
        <x-buttons.circle-button ico="fas fa-exclamation-triangle" />
        <x-buttons.circle-button size="btn-sm" color="btn-info" ico="fab fa-facebook-f" />
        <x-buttons.circle-button size="btn-sm" color="btn-warning" ico="fas fa-exclamation-triangle" />
        <x-buttons.circle-button size="btn-sm" color="btn-success" ico="fab fa-facebook-f" />
        <x-buttons.circle-button size="btn-sm" color="btn-danger" ico="fas fa-check" id="myId" class="myClass" link="https://www.google.com" />
        <hr>
        <h4>Usage</h4>
        <code>
            &lt;x-buttons.circle-button size="btn-lg" ico="fab fa-facebook-f" /&gt; <br>
            &lt;x-buttons.circle-button size="btn-sm" ico="fab fa-facebook-f" /&gt; <br>
            &lt;x-buttons.circle-button ico="fas fa-exclamation-triangle" /&gt; <br>
            &lt;x-buttons.circle-button size="btn-sm" color="btn-info" ico="fab fa-facebook-f" /&gt; <br>
            &lt;x-buttons.circle-button size="btn-sm" color="btn-warning" ico="fas fa-exclamation-triangle" /&gt; <br>
            &lt;x-buttons.circle-button size="btn-sm" color="btn-success" ico="fab fa-facebook-f" /&gt; <br>
            &lt;x-buttons.circle-button size="btn-sm" color="btn-danger" ico="fas fa-check" id="myId" class="myClass" link="https://www.google.com" /&gt; <br>
        </code>
    </div>
</div>
@endsection
