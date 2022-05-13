<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="/" method="POST" enctype="multipart/form-data">
          @csrf
          <input type='text' name='post[body]' />
          <input type="file" name="image">
          <input type='submit' value='保存'/>
        </form> 
        <a href='/'>[back]</a>
    </body>
    
</html>