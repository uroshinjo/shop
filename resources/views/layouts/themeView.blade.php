@if(count($themeSettings))
<style>
body{
    background-color: {{$themeSettings[0]['backgroundColor']}} !important;
    color: {{$themeSettings[0]['textColor']}};
}
a{
    color: {{$themeSettings[0]['textColor']}};
}
a:hover{
    text-decoration: underline;
}
.navbar-inverse{
    background-color: {{$themeSettings[0]['menuColor']}} !important;
    color: {{$themeSettings[0]['menuTextColor']}};
    border-bottom: 1px solid {{$themeSettings[0]['menuColor']}} !important;
}
.navbar-inverse .navbar-nav > li > a, 
.navbar-inverse .navbar-brand{
     color: {{$themeSettings[0]['menuTextColor']}};
}
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-brand:hover{
    color: {{$themeSettings[0]['menuTextColor']}};
    text-decoration: underline;
}
</style>
@endif