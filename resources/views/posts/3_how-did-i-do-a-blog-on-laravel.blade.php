@extends('index')
@section('title')
How did I do a blog on Laravel (without any database) [EN-US]
@endsection
@section('content')
<p >The blog that you are looking into right now is entirely made on Laravel, 
    and he does not use any type of database (SQL or NoSQL). 
    Today I am going to show how I achieved this and how I create posts here.
</p>
<h2>Is it the home feed auto-generated?</h2>
<p style="margin-bottom: 0">Yes, it is. I achieved this by creating a posts folder in the views folder of Laravel, inside that I create the posts on a .blade.php file 
    that extends the main layout of the website. After creating the homepage controller search for files in this folder and reads them, 
    extracts the title, and does a preview of the content. <br/> Here it is the code that extracts the posts.
</p>
<blockquote style="margin: 0">
    <pre style="margin: 0">
      <code style="margin: 0">
    $directory = "../resources/views/posts/";
        $filecount = 0;
        $files = glob($directory . "*");
        $posts = [];
        $contents = [];

        if ($files){
            $filecount = count($files);
        }

        foreach($files as $f){
            $content = file_get_contents(resource_path($f));
            $content = str_replace("@ extends('index')", '', $content);    
            $content = str_replace("@ section('content')", '', $content);  
            $content = str_replace("@ endsection", '', $content);  
            $content = str_replace("@ section('title')", '', $content); 
            $content = explode(PHP_EOL, $content); 
            array_push($contents, array_values(array_filter($content)));
            
            $f = str_replace('.blade.php', '', $f);
            $f = str_replace('../resources/views/posts/', '', $f);
            array_push($posts, $f);
        }

        $data=[
            'quantity' => count($posts),
            'posts' => array_reverse($posts),
            'contents' => array_reverse($contents),
        ];
    </code>
</pre>
</blockquote>

<h2>Writing and storing the post</h2>
<p style="margin-bottom: 0">This method is not ideal, but creating a fast blog without any sort of database is the best one. To create a new post 
    we make a file inside de views/posts directory named X_the-title-of-the-post where X would be the number of the post, after that, 
    we use this really simple template: 
</p>

<blockquote style="margin: 0">
    <pre style="margin: 0">
      <code style="margin: 0">
        @ extends('index')

        @ section('title')
            INSERT TITLE HERE
        @ endsection
        
        @ section('content')
            INSERT CONTENT HERE
        @ endsection
    </code>
</pre>
</blockquote>

<p>And it is done, the main controller of 
    the blog and the homepage take care of the rest. We really don't need to use any extra libraries or fancy stuff, if you want to know 
more this blog is open source and you can see the files <a style="margin:0; text-decoration:underline;" href="https://github.com/dgtyPedro/dgtyBlog">here</a>.</p>



<br/>
<br/>
<br/>
@endsection
