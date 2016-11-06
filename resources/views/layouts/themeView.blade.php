@if(count($themeSettings))
<style>
body{
    background-color: {{$themeSettings[0]['backgroundColor']}} !important;
    color: {{$themeSettings[0]['textColor']}};
}
</style>
@endif