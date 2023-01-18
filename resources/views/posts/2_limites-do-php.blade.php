@extends('index')

@section('title')
    What I don't like about PHP
@endsection

@section('content')
    <p>PHP as well as Java is a target language for many predictions,
        every month new texts are marking the death of PHP for X reason
        but the truth is that these posts are already getting beaten and
        are not even taken seriously anymore. However, we must not ignore
        some symptoms that PHP has, here I will mention some points that I understand and that bothers me in the language.</p>

    <h2>Server-Side</h2>
    <p>In PHP any processing and function must be performed on page load, database queries and requests
        cannot be made "On-demand" just like in Javascript, and for any action, the page must be reloaded.
        Fortunately, Javascript and PHP go hand in hand, so JS manages to provide good coverage in this area
        and make systems more fluid and dependence on JS to PHP, in the past these techs were completed,
        Javascript took care of the front-end and PHP on the back-end, however with the advent of Node today,
        Javascript can also handle the ends on the Back-End and no longer depends on PHP while PHP still needs
        Javascript to make systems fluid without the need for reloads. This is not necessarily a bad thing about
        the language since, as the name says, the language is a "Hypertext Preprocessor",  however, in 2022 we see
        how this feature can disrupt the UX of systems.
    </p>

    <h2>A very kind language</h2>
    <p>PHP is a language that is very forgiving to the developer, many lines of code that have structural problems pass and PHP
        hardly complains about it, it is clear that this is much more a problem of the developer than the language itself but this feature
        can make small mistakes become torture when debugging, Typescript is a tech that in my opinion finds the perfect balance of this,
        always beeps type and structure problems but lets the development happen.</p>

    <h2>The Dev's</h2>
    <p>This is probably the biggest problem with PHP, as a PHP
        developer I know this very well. The language spoils PHP
        dev too much, everything it's very easy to do and the problem
        is there, everything is relatively easy to do, the problem is
        that the easy way is not always the best and this makes PHP a
        language with security issues, the truth is that it is not defenseless
        against SQL injection and other things, but your devs who choose not to add.
    </p>

    <img title="como o PHP dev se vê" alt="como o PHP dev se vê" src="https://media.discordapp.net/attachments/845037319613972497/961040226975887400/unknown.png?width=1150&height=468" width="100%"/>

    <br/>
    <br/>
    <br/>
@endsection

@section('image')
    https://media-exp1.licdn.com/dms/image/sync/C4D27AQF1SVAMqBfC7Q/articleshare-shrink_800/0/1652301258413?e=1652389200&v=beta&t=wdNlK2uRW0jcz6d0ZcKIYjaBC8byhJ_MJFpcZQR-kDw
@endsection
