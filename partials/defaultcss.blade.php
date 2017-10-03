{{generate_theme_css('farmashop/assets/css/bootstrap.css')}}
{{generate_theme_css('farmashop/assets/css/bootstrap-responsive.css')}}
{{generate_theme_css('farmashop/assets/css/font-awesome.css')}}

@if($tema->isiCss=='')	
{{generate_theme_css('farmashop/assets/css/style.css?v=003')}}
@else 	
{{generate_theme_css('farmashop/assets/css/editstyle.css?v=003')}}
@endif	
{{generate_theme_css('farmashop/assets/css/flexslider.css')}}
{{generate_theme_css('farmashop/assets/css/sharrre.css')}}

{{ favicon() }}
