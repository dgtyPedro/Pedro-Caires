@extends('index')

@section('title')
Why use Vue.js with Laravel instead of other Javascript Framework?
@endsection

@section('content')
<p>Laravel was always a popular PHP framework, but in the last few years it became <a style="font-weight: bolder; margin: 0;">THE</a> 
    definitive PHP framework for many developers (including me), it has it all and it can build from fast SPA's to huge 
    scalable applications. But the front-end aspect of it was always a big <a style="font-weight: bolder; margin: 0;">?</a> 
    to the dev's, the framework provides the Blade, a powerful template engine that integrates just well enough the PHP and it aspects 
    into the plain html without leaving those ugly php tags, but at some cases it is just not enough, sometimes the web artisan needs 
    a cooler way to leave it's page dinamic.<br/><br/>meet the Vue.js</p>
<div class="img">
    <img src="https://miro.medium.com/max/400/1*ekaFqk38CV2GNTquivy7Dw.png"/>
</div>

<p>Besides the title this isn't going to be a Vue.js propaganda, to be honest I have way more experience with React than Vue but when 
    looking to a new job I realize that Vue almost always comes together with Laravel on the requirements, because of that I went to see why 
    it is so used with Laravel, I did a couple projects, some researchs and here it is what I discovered.
</p>

<h3>Vue it's easy </h3>

<p>Okay, I know it is a huge blasphemy to say something in programming is easy, but I think that a PHP developer would adapt to Vue.js 
    faster than to, for example, React. Vue looks way more with an HTML extension than React, I think because of Inertia the process of creating an 
    Laravel application that uses Vue "feels" more official and because of that when we are 
    talking about integrating on Laravel Vue it is just easier than other options.
</p>


<h3>Vue Vs. React</h3>
<div class="img">
    <img src="https://miro.medium.com/max/1000/1*WRzDZndJCduHwqgOpWmbhQ.png"/>
</div>
<p>
    I compared above Vue with React saying that Vue it is easier to adapt than React, that is because of the fact that React "obliges"
    the user to use JSX while in Vue you can use both JSX and plain HTML templates, I am not going to write a whole paragraph trashing 
    on React because of that, when we are talking about extensions and libraries the React.js enviroment it's way mature and the JSX 
    by itself is great too, it allows to create sofisticated UIs but I think that 
    if you work mainly with PHP there will be no need to fully use the advantages React and its powerful packages.
</p>

<h3>How to get started?</h3>
<p>I think the best way to learn how Vue works in a Laravel enviroment is a Jetstream + Inertia 
    ToDo list. Jetstream is an starter kit for Laravel that you can learn more 
    <a style="margin:0;" href="https://jetstream.laravel.com/2.x/introduction.html">HERE</a>, you can create a Laravel project with 
    Jetstream using the Inertia stack, Inertia is the Jetstream template which uses Vue.js as its templating language, you can learn 
    more about <a style="margin:0;" href="https://jetstream.laravel.com/2.x/stacks/inertia.html">HERE</a>. It is a perfect way to 
    understand the flow of development of it, and if you like it you can always create that cool CRUD using plain Vue.js with a 
    Restful API.
</p>

<br/>
@endsection

@section('image')
https://memegenerator.net/img/instances/85568915.jpg
@endsection
