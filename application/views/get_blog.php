<form style="margin: 100px;" action="/Home/test" method="post" enctype="multipart/form-data">
    <input style="width:100%" type="url" name="url_blog" id="url_blog">
    <button type="submit" class="btn_sub">Submit</button>
</form>
<style>
    .footer,
    .header {
        display: none;
    }
</style>
<script>
    $('#url_blog').focus();
    $('.btn_sub').click(function() {
        $(this).text('loading....');
    })
</script>