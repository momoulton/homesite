<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Mo Moulton' --}}
        @yield('title', 'Mo Moulton')
    </title>

    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">


    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
      <div id="header">
        <h1>Mo Moulton</h1>
        <h3>Writer, Historian, Developer</h3>
      </div>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
      <div>
        <nav>
          <ul>
            <li><a href="https://twitter.com/hammock_tussock" target='_blank'>Twitter</a></li>
            <li><a href="https://github.com/momoulton" target='_blank'>GitHub</a></li>
            <li><a href="https://www.linkedin.com/pub/mo-moulton/a1/98b/2b9" target='_blank'>LinkedIn</a></li>
            <li>    <a href = "mailto:moulton2ATfasDOTharvardDOTedu"
       onclick = "this.href=this.href
                  .replace(/AT/,'&#64;')
                  .replace(/DOT/,'&#46;')
                  .replace(/DOT/,'&#46;')"
            >Contact Me</a></li>
            <li><a href="/">Home</a></li>
          </ul>
        </nav>
      </div>

    </footer>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
