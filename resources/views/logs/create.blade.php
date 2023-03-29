<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/log" method="POST">
            @csrf
            <div class="date">
                <h2>日付</h2>
                <input type="date" name="log[date]" placeholder="日付"/>
            </div>
            <div class="training">
                <h2>運動記録</h2>
                <textarea name="log[training]" placeholder="頑張るあなたは美しい！"></textarea></div>
            <div class="meal">
                <h2>食事記録</h2>      
                <textarea name="log[meal]" placeholder="食事も大事"></textarea>
                </div>
            <div class="memo">
                <h2>memo</h2>    
                 <textarea name="log[memo]" placeholder="感じた事などを自由に"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/log">戻る</a>
        </div>
    </body>
</html>