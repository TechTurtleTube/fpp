<script>
function GetTimeZone() {
    $.get('https://ipapi.co/json/'
    ).done(function(data) {
        $('#TimeZone').val(data.timezone).change();
    }).fail(function() {
        DialogError("Time Zone Lookup", "Time Zone lookup failed.");
    });
}

</script>

<b>Current Time:</b> <span id='currentTime'></span><br>
<br>
<?
$extraData = "<input type='button' value='Lookup Time Zone' onClick='GetTimeZone();'>";
PrintSettingGroup('time', $extraData);
?>

