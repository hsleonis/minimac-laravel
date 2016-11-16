<div id="disqus_thread"></div>
<script>
     var disqus_config = function () {
     this.page.url = "{{ URL::to('post/'.$post->slug) }}";
     this.page.identifier = "{{ 'post_'.$post->slug }}";
     };
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '//minimac-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the comments.</noscript>
