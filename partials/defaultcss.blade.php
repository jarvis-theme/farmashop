{{generate_theme_css('farmashop/assets/css/bootstrap.css')}}
{{generate_theme_css('farmashop/assets/css/bootstrap-responsive.css')}}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

@if($tema->isiCss=='')	
{{generate_theme_css('farmashop/assets/css/style.css?v=001')}}
@else 	
{{generate_theme_css('farmashop/assets/css/editstyle.css?v=001')}}
@endif	
{{generate_theme_css('farmashop/assets/css/flexslider.css')}}
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials-theme-flat.css" />

{{ favicon() }}
